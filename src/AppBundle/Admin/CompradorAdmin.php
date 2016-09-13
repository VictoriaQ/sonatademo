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

    protected function configureSideMenu(ItemInterface $menu, $action, AdminInterface $childAdmin = null)
    {
        if (!$childAdmin && !in_array($action, array('edit'))) {
            return;
        }
        $admin = $this->isChild() ? $this->getParent() : $this;
        $id = $admin->getRequest()->get('id');
        $menu->addChild(
            'Comprador',
            $admin->generateMenuUrl('edit', array('id' => $id))
        );
        $menu->addChild(
            'Pagos',
            $admin->generateMenuUrl('admin.comprador|admin.pago.list', array('id' => $id))
        );
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Datos personales', array('class' => 'col-md-6'))
                ->add('nombre')
                ->add('apellidos')
            ->end()
            ->with('Dirección de facturación', array('class' => 'col-md-6'))
                ->add('direccion', null, array('label' => 'Dirección'))
                ->add('localidad', null, array('label' => 'Localidad'))
                ->add('provincia', null, array('label' => 'Provincia'))
                ->add('codigoPostal', null, array('label' => 'CP'))
                ->add('pais', null, array('label' => 'País'))
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
