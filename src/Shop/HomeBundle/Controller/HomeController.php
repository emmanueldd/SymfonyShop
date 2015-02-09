<?php

namespace Shop\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
    // 	return Response("ceci est une reponse");
        return $this->render('HomeBundle:Home:index.html.twig');
        // return $this->render('HomeBundle:Home:index.html.twig', array('name' => $name));
    }
}
