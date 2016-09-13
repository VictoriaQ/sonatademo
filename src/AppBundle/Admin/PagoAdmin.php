<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class PagoAdmin extends Admin
{

    protected $baseRouteName = 'pago';

    protected $baseRoutePattern = 'pago';

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('cantidad')
            ->add('pagado')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('cantidad')
            ->add('pagado')
            ;
    }
    
}
