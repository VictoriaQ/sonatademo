<?php

namespace AppBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class ConfiguracionAdminController extends Controller
{
    /**
     * Sonata llama list action al action principal del admin,
     * pero en este caso queremos un edit
     */    
    public function listAction(Request $request = null)
    {
        $this->admin->checkAccess('edit');        

        $id = 1;
        $object = $this->admin->getObject($id);

        $this->admin->setSubject($object);

        $form = $this->admin->getForm();
        $form->setData($object);
        $form->handleRequest($request);        

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($config);            
            $em->flush();
        }

        return $this->render($this->admin->getTemplate('list'), array(
            'action'     => 'list',
            'form'       => $form->createView(),
        ), null, $request);
    }    
}
