<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use JMS\Serializer\SerializationContext;
use AppBundle\Entity\Inquiry;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $host_name = gethostname();
        // error_log('debug = ' . print_r(apache_response_headers(), true) . "\n", 3, 'C:\Users\Administrator\Desktop\debug.txt');
        return $this->render('AppBundle:Home:index.html.twig', [
            'hostname' => $host_name,
            'all_header' => getallheaders(),
        ]);
    }

    /**
     * @Route("/keep-alive")
     */
    public function keepAliveAction()
    {
        $host_name = gethostname();

        $response = new response();
        $response->headers->set('Connection', 'Keep-alive');
        $response->send();

        return $this->render('AppBundle:Home:index.html.twig', [
            'hostname' => $host_name,
        ]);

        // $response = new response($this->render('AppBundle:Home:index.html.twig', [
        //     'hostname' => $host_name,
        // ])
        // );
        // $response->headers->set('Connection', 'Keep-alive');
        // return $response;
    }

    /**
     * @Route("/sleep/{sleep_time}")
     */
    public function sleepAction($sleep_time = 1)
    {
        $host_name = gethostname();
        sleep($sleep_time);

        // $test = phpinfo();
        // error_log('debug = ' . print_r($test, true) . "\n", 3, 'C:\Users\Administrator\Desktop\debug.txt');

        return $this->render('AppBundle:Home:sleep.html.twig', [
            'hostname' => $host_name,
            'sleep_time' => $sleep_time,
        ]);
    }

    /**
     * @Route("/cookie/{cookie_name}/{cookie_value}")
     */
    public function cookieAction($cookie_name = 'test-cookie', $cookie_value = 'hogehoge')
    {
        $host_name = gethostname();

        return $this->render('AppBundle:Home:cookie.html.twig', [
            'hostname' => $host_name,
            'cookie_name' => $cookie_name,
            'cookie_value' => $cookie_value,
        ]);
    }

    /**
     * @Route("/get")
     */
    public function getAction()
    {
        $host_name = gethostname();

        if(isset($_GET['get_value'])){
            $get_value = $_GET['get_value'];
        } else {
            $get_value = '';
        }

        return $this->render('AppBundle:Home:get.html.twig', [
            'hostname' => $host_name,
            'get_value' => $get_value,
        ]);
    }

    /**
     * @Route("/post")
     */
    public function postAction()
    {
        $host_name = gethostname();

        if(isset($_POST['post_value'])){
            $post_value = $_POST['post_value'];
        } else {
            $post_value = '';
        }

        return $this->render('AppBundle:Home:post.html.twig', [
            'hostname' => $host_name,
            'post_value' => $post_value,
        ]);
    }

    /**
     * @Route("/api")
     */
    public function apiAction()
    {
        $host_name = gethostname();

        if(isset($_POST['post_value'])){
            $post_value = $_POST['post_value'];
        } else {
            $post_value = '';
        }

        return $this->render('AppBundle:Home:api.html.twig', [
            'hostname' => $host_name,
            'post_value' => $post_value,
        ]);
    }

    /**
     * @Route("/api/get")
     * @Method({"GET"})
     */
    public function apiAssigneeAction()
    {
        $result = array(
            "api" => "yes",
            "method" => "get"
        );

        return new JsonResponse($result);
    }

    /**
     * @Route("/db")
     */
    public function dbAction()
    {
        $host_name = gethostname();

        $em = $this->getDoctrine()->getManager();
        $inquiryRepository = $em->getRepository('AppBundle:Inquiry');
        $inquiryList = $inquiryRepository->findBy([], ['id' => 'ASC']);
        $inquiry = $this->toArray($inquiryList);

        return $this->render('AppBundle:Home:db.html.twig', [
            'hostname' => $host_name,
            'inquiry' => $inquiry,
        ]);
    }

    /**
     * Covert entity object into array.
     *
     * @param $entity
     * @return array
     */
    private function toArray($entity)
    {
        return json_decode($this->serialize($entity), true);
    }

    /**
     * Serialize entity object into json.
     *
     * @param object $entity
     * @return mixed|string
     */
    private function serialize($entity)
    {
        return $this->container->get('jms_serializer')->serialize(
            $entity,
            'json',
            SerializationContext::create()->enableMaxDepthChecks()->setSerializeNull(true)
        );
    }

    /**
     * @Route("/file_upload")
     */
    public function fileUploadAction()
    {
        $host_name = gethostname();

        $fileDir = "../web/image/TMP";
        $filesArray = array();

        foreach (glob($fileDir . '/{*.*}', GLOB_BRACE) as $file){
            if (is_file($file)) {
                array_push($filesArray, htmlspecialchars(basename($file)));
            }
        }

        return $this->render('AppBundle:Home:file_upload.html.twig', [
            'hostname' => $host_name,
            'file_num' => count($filesArray),
            'files_array' => $filesArray,
        ]);

    }

    /**
     * @Route("/file_upload/upload")
     * @Method({"POST"})
     */
    public function fileUploadPostAction()
    {
        // $data = date("Ymd_His");
        // $targetDir = "../web/image/TMP";
        // $createPcapName = $data . '.pcap';

        if($_FILES["file"]["tmp_name"]){
            $postFile = "../web/image/TMP/" . $_FILES["file"]["name"];
            // if($postFile) {
            //     unlink($postFile);
            // }
            move_uploaded_file($_FILES['file']['tmp_name'], $postFile);
        }

        // Pcap 変換処理
        // $cmd = 'fgt2eth.exe -in ' . $postFile . ' -out ' . $targetDir . $createPcapName;
        // exec($cmd, $output);

        $rotate = $this->fileRotate();

        return new JsonResponse([
            'status' => 'OK',
            // 'file_name' => $createPcapName,
            'rotate' => $rotate,
        ]);

    }

    /**
     * File rotate.
     *
     * @param string $logFilePath
     * @return array
     */
    private function fileRotate()
    {

        $rotateFlag = false;

        $fileDir = "../web/image/TMP";
        $filesArray = array();

        foreach (glob($fileDir . '/{*.*}', GLOB_BRACE) as $file){
            if (is_file($file)) {
                array_push($filesArray, htmlspecialchars(basename($file)));
            }
        }

        while (count($filesArray) > 10) {
            $removeFile = array_shift($filesArray);
            unlink($fileDir . '/' . $removeFile);
            $rotateFlag = true;
        }

        return $rotateFlag;
    }

    /**
     * @Route("/http_status/{status_code}")
     */
    public function httpStatusAction($status_code = 200)
    {
        return new Response("HTTP Status Code: " . $status_code, $status_code);
    }

}

