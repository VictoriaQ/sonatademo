<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Knp\Menu\ItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;

class CompradorAdmin extends Admin
{
    protected $baseRouteName = 'comprador';

    protected $baseRoutePattern = 'comprador';

    //protected function configureSideMenu(ItemInterface $menu, $action, AdminInterface $childAdmin = null)
    //{
    //    if (!$childAdmin && !in_array($action, array('edit'))) {
    //        return;
    //    }
    //    $admin = $this->isChild() ? $this->getParent() : $this;
    //    $id = $admin->getRequest()->get('id');
    //    $menu->addChild(
    //        'Comprador',
    //        $admin->generateMenuUrl('edit', array('id' => $id))
    //    );
    //    $menu->addChild(
    //        'Pagos',
    //        $admin->generateMenuUrl('admin.comprador|admin.pago.list', array('id' => $id))
    //    );
    //}

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Datos personales', array('class' => 'col-md-6'))
                ->add('nombre')
                ->add('apellidos')
            ->end()
            ->with('Pagos', array('class' => 'col-md-6'))
            ->add('pagos', 'sonata_type_collection', array(            
                'type_options' => array(
                    'delete' => false,
                    'delete_options' => array(
                        'type'         => 'hidden',
                        'type_options' => array(
                            'mapped'   => false,
                            'required' => false,
                        )
                    )
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
                'sortable' => 'position',
            ))            
            ->end()
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombre')
            ->add('apellidos')
            ;
    }
}
