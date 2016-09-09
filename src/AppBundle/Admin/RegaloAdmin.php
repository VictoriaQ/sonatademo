<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RegaloAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('Tab 1')
                ->with('Regalo', array('class' => 'col-md-6'))
                    ->add('nombre')
                    ->add('precio')
                    ->add('descripcion')
                ->end()    
                ->with('Participantes', array('class' => 'col-md-6'))
                    ->add('destinatario', 'entity', array(
                        'class' => 'AppBundle\Entity\Destinatario', 'required' => false, 'placeholder' => 'Elige un destinatario'))
                    ->add('comprador', null, array(
                        'class' => 'AppBundle\Entity\Comprador', 'required' => false, 'placeholder' => 'Elige un comprador'))
                ->end()    
            ->end()    
            ->tab('Tab 2')
            ->end()    
            ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('nombre');
        $datagridMapper->add('precio');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombre')
            ->add('precio', 'currency', array('currency' => 'EUR'))
            ->add('descripcion', null, array('label' => 'Descripción'))
            ->add('destinatario', null, array('editable' => true))
            ->add('comprador')
            ;
    }
}
