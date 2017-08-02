<?php

namespace ReactDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/MyReactForm")
     */
    public function indexAction()
    {
        return $this->render('ReactDemoBundle:Default:index.html.twig');
    }

    /**
     * @Route("/create")
     */
    public function createAction()
    {
        //echo 'hola';
        echo $_POST['email'];
        exit;
    }
}
