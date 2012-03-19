<?php

namespace Manuel\InicioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ManuelInicioBundle:Default:index.html.twig');
    }
}
