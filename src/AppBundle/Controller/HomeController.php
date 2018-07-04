<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Home:index.html.twig');
    }

    /**
     * @Route("/sleep")
     */
    public function sleepAction()
    {
        sleep(120);
        // $test = phpinfo();
        // error_log('debug = ' . print_r($test, true) . "\n", 3, 'C:\Users\Administrator\Desktop\debug.txt');
        return $this->render('AppBundle:Home:index.html.twig');
    }

}

