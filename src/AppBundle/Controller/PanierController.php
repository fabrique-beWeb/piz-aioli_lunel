<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Pizza;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Description of PanierController
 *
 * @author gerardmanvussa
 */
class PanierController extends Controller {
    //put your code here
    /**
     * @Route("/addtocart/{id}")
     * @Method({"GET"})
     */
    public function getIdFromPizza(Pizza $pizza) {
//        $copies = $this->getDoctrine()->getRepository(Copy::class)->findByBook($id);
        return new JsonResponse($pizza);
    }
    /**
     * @Route("/showpanier")
     * @return JsonResponse
     */
    public function showListPizza(){
        

        return new JsonResponse($panier);
    }
    public function sendCommand(){
        return new JsonResponse();
        $em->persist($data);
        $em->flush();
        $em->clear();
    }
}

// le Create et Update sur le panier