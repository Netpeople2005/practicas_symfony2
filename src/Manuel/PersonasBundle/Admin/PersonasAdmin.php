<?php

namespace Manuel\PersonasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class PersonasAdmin extends Admin
{
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('nombre')
		->add('apellido')
		->add('direccion', null, array('required' => false))
		;
	}

	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
//		$datagridMapper
//		->add('nombre')
//		->add('apellido')
//		->add('direccion')
//		;
	}

	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->addIdentifier('nombre')
		->add('apellido')
		->add('direccion')
		;
	}

	public function validate(ErrorElement $errorElement, $object)
	{
		$errorElement
		->with('nombre')
		->assertMaxLength(array('limit' => 32))
		->end()
		;
	}
}
