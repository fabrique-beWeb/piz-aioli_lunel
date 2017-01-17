<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function homeAction()
    {
        return $this->render('default/home.html.twig');
    }
       /**
     * @Route("/pizza", name="pizza")
     */
    public function pizzaAction()
    {
        return $this->render('default/pizza.html.twig');
    }
       /**
     * @Route("/location", name="location")
     */
    public function locationAction()
    {
        return $this->render('default/location.html.twig');
    }
       /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        return $this->render('default/login.html.twig');
    }
       /**
     * @Route("/signUp", name="signUp")
     */
    public function signUpAction()
    {
        return $this->render('default/signUp.html.twig');
    }
}
