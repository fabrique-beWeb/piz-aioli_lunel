<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Commande;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller
{
    /**
     * @Route("/client/fast", name="clientFast")
     */
    public function clientFastAction() {
        
        return $this->render('default/fast.html.twig');
    }
    /**
     * @Route("/client/command", name="clientCommand")
     * @Method({"GET", "POST"})
     */
    public function clientCommandAction(Request $request) {
        $commande = new Commande();
        $form = $this->createForm('AppBundle\Form\CommandeType', $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if ($this->getUser()!= NULL){
                $commande ->setIdClient($this->getUser());
            }
            $em->persist($commande);
            $em->flush($commande);

            return $this->redirectToRoute('home', array('id' => $commande->getId()));
        }

        return $this->render('commande/new.html.twig', array(
            'commande' => $commande,
            'form' => $form->createView(),
        ));
    }
    
    /**
     * @Route("/client/profile", name="clientProfile")
     */
    public function clientProfileAction() {
        
        return $this->render('default/clientProfile.html.twig');
    }
}
