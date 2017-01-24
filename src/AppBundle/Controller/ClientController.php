<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    /**
     * @Route("/client/fast" name="clientFast")
     */
    public function clientFastAction() {
        
        return $this->render('default/fast.html.twig');
    }
    /**
     * @Route("/client/command" name="clientCommand")
     */
    public function clientCommandAction() {
        
        return $this->render('default/clientCommand.html.twig');
    }
    /**
     * @Route("/client/profile" name="clientProfile")
     */
    public function clientProfileAction() {
        
        return $this->render('default/clientProfile.html.twig');
    }
}

