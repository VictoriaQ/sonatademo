<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class TiendaAdmin extends Admin
{
    protected $baseRouteName = 'puntuacion';

    protected $baseRoutePattern = 'puntuacion';

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Detalles', array('class' => 'col-md-6'))
                ->add('nombre')
                ->add('puntuacion')
            ->end()
            ->with('Regalos', array('class' => 'col-md-6'))
                ->add('regalos', 'sonata_type_model', 
                     array('by_reference' => false, 'expanded' => true, 'multiple' => true, 'label' => 'Regalos'), array('admin_code' => 'admin.regalo'))            
            ->end()
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombre')
            ->add('puntuacion')
            ;
    }
}
