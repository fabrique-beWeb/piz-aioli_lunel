<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class AdminController extends Controller
{
    /**
     * @Route("/admin/command", name="adminCommand")
     */
    public function adminCommandAction() 
    {
        return $this->render('default/adminCommand.html.twig');
    }
    /**
     * @Route("/admin/pizza", name="adminPizza")
     */
    public function adminPizzaAction() 
    {
        return $this->render('default/adminPizza.html.twig');
    }
}

