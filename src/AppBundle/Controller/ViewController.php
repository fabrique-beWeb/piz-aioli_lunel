<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Commande;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ViewController extends Controller {

    /**
     * @Route("/home", name="home")
     * @Template(":default:home.html.twig")
     */
    public function homeAction() {
        $em = $this->getDoctrine()->getManager();
        $pizza = $em->getRepository("AppBundle:Pizza")->findById(1);
        $emp = $this->getDoctrine()->getManager();
        $enseigne = $emp->getRepository("AppBundle:Enseigne")->findAll();
        return array("varPizza" => $pizza, "varEnseigne" => $enseigne);
    }

    /**
     * @Route("/pizza", name="pizza")
     * @Template(":default:pizza.html.twig")
     */
    public function pizzaAction() {
        $em = $this->getDoctrine()->getManager();
        $pizza = $em->getRepository("AppBundle:Pizza")->findBy(array(), array('base' => 'ASC'));
        return array("varPizza" => $pizza);
    }

    /**
     * @Route("/location", name="location")
     */
    public function locationAction() {
        return $this->render('default/location.html.twig');
    }

    /**
     * @Route("/command", name="command")
     */
    public function commandAction(Request $request) {
        $commande = new Commande();
        $form = $this->createForm('AppBundle\Form\CommandeType', $commande);
        $form->handleRequest($request);
        $nom = "test";
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $commande->setNomClient($nom);
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
     * Lists all commande entities.
     *
     * @Route("/command/notDone")
     * @Method("GET")
     */
    public function getCommand() {
        $em = $this->getDoctrine()->getManager();
//        $commandes = $em->getRepository('AppBundle:Commande')->findby(array('statut' => 2 and 1), array('heure' => 'ASC'));
//        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                        'SELECT c
                        FROM AppBundle:Commande c
                        WHERE c.statut < :statut
                        ORDER BY c.heure ASC'
                )->setParameter('statut', 3);
        return new JsonResponse($query->getResult());
    }

}
