<?php

namespace AppBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RegaloAdminController extends Controller
{
    public function sendEmailAction()
    {
        $regalo = $this->admin->getSubject(); 

        $email = $regalo->getDestinatario()->getEmail();

        // ...
        // Code to send email
        // ...

        $this->addFlash('sonata_flash_success', 'Email enviado a '.$email);

        return new RedirectResponse($this->admin->generateUrl('list'));

    }

    public function batchActionSendEmail($selectedModelQuery)
    {
        if ($this->admin->isGranted('EDIT') === false) {
            throw new AccessDeniedException();
        }

        // Here code to send emails
        
        $this->addFlash('sonata_flash_success', 'Emails enviados');

        return new RedirectResponse($this->admin->generateUrl('list'));
    }

}
