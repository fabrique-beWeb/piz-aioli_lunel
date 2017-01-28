<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewController extends Controller
{
    /**
     * @Route("/home", name="home")
     * @Template(":default:home.html.twig")
     */
    public function homeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pizza = $em->getRepository("AppBundle:Pizza")->findById(1);
        $emp = $this->getDoctrine()->getManager();
        $enseigne = $emp->getRepository("AppBundle:Enseigne")->findAll();
        return array("varPizza" => $pizza,"varEnseigne" => $enseigne);
    }
    /**
     * @Route("/pizza", name="pizza")
     * @Template(":default:pizza.html.twig")
     */
    public function pizzaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pizza = $em->getRepository("AppBundle:Pizza")->findAll();
        return array("varPizza" => $pizza);
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
