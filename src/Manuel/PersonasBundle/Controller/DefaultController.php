<?php

namespace Manuel\PersonasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Manuel\PersonasBundle\Entity\Personas;

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
        return $this->render('ManuelPersonasBundle:Default:index.html.twig', $data);
    }

    public function crearAction()
    {
        $form = $this->createFormBuilder(new Personas())
                ->add('nombre')
                ->add('apellido')
                ->add('direccion')
                ->getForm();

        $data['form'] = $form->createView();
        return $this->render('ManuelPersonasBundle:Default:crear.html.twig', $data);
    }

    public function editarAction($id)
    {
        $persona = $this->getDoctrine()
                ->getRepository('ManuelPersonasBundle:Personas')
                ->find((int) $id);

        $form = $this->createFormBuilder($persona)
                ->add('nombre')
                ->add('apellido')
                ->add('direccion')
                ->getForm();

        $data['form'] = $form->createView();
        return $this->render('ManuelPersonasBundle:Default:editar.html.twig', $data);
    }

    public function eliminarAction($id)
    {
        return $this->render('ManuelPersonasBundle:Default:crear.html.twig');
    }

}
