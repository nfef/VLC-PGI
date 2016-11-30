<?php

namespace GestionPersonelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GestionPersonelBundle:Default:index.html.twig', array('name' => $name));
    }
}
