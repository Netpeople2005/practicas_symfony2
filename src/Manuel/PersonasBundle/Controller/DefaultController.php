<?php

namespace Manuel\PersonasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        //obtenemos las personas de la bd
        //$this->getDoctrine() no devuelve una instancia del objeto doctrine
        //->getRepository('ManuelPersonasBundle:Personas') obtenemos el repositorio para la entidad Personas de este Bundle
        //->findAll(); obtenemos todos los registros en la bd
        $data['personas'] = $this->getDoctrine()
                ->getRepository('ManuelPersonasBundle:Personas')
                ->findAll();
        return $this->render('ManuelPersonasBundle:Default:index.html.twig',$data);
    }

    public function crearAction()
    {
        return $this->render('ManuelPersonasBundle:Default:crear.html.twig');
    }

    public function editarAction($id)
    {
        return $this->render('ManuelPersonasBundle:Default:crear.html.twig');
    }

    public function eliminarAction($id)
    {
        return $this->render('ManuelPersonasBundle:Default:crear.html.twig');
    }

}
