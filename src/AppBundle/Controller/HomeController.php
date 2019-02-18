<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $host_name = gethostname();
        return $this->render('AppBundle:Home:index.html.twig', [
            'hostname' => $host_name,
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
     * @Route("/http_status/{status_code}")
     */
    public function httpStatusAction($status_code = 200)
    {
        return new Response("HTTP Status Code: " . $status_code, $status_code);
    }

}

