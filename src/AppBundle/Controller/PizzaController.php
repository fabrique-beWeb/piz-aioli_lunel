<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pizza;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pizza controller.
 *
 * @Route("admin")
 */
class PizzaController extends Controller
{
    /**
     * Lists all pizza entities.
     *
     * @Route("/", name="pizza_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pizzas = $em->getRepository('AppBundle:Pizza')->findAll();

        return $this->render('pizza/index.html.twig', array(
            'pizzas' => $pizzas,
        ));
    }

    /**
     * Creates a new pizza entity.
     *
     * @Route("/new", name="pizza_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pizza = new Pizza();
        $form = $this->createForm('AppBundle\Form\PizzaType', $pizza);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $nomDuFichier = md5(uniqid()) . '.' . $pizza->getImage()->getClientOriginalExtension();
            $pizza->getImage()->move('../web/images', $nomDuFichier);
            $pizza->setImage($nomDuFichier);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($pizza);
            $em->flush($pizza);

            return $this->redirectToRoute('pizza_show', array('id' => $pizza->getId()));
        }

        return $this->render('pizza/new.html.twig', array(
            'pizza' => $pizza,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pizza entity.
     *
     * @Route("/{id}", name="pizza_show")
     * @Method("GET")
     */
    public function showAction(Pizza $pizza)
    {
        $deleteForm = $this->createDeleteForm($pizza);

        return $this->render('pizza/show.html.twig', array(
            'pizza' => $pizza,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pizza entity.
     *
     * @Route("/{id}/edit", name="pizza_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pizza $pizza)
    {
        $deleteForm = $this->createDeleteForm($pizza);
        $editForm = $this->createForm('AppBundle\Form\PizzaType', $pizza);
        $editForm->handleRequest($request);
        

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $nomDuFichier = md5(uniqid()) . '.' . $pizza->getImage()->getClientOriginalExtension();
            $pizza->getImage()->move('../web/images', $nomDuFichier);
            $pizza->setImage($nomDuFichier);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pizza_edit', array('id' => $pizza->getId()));
        }

        return $this->render('pizza/edit.html.twig', array(
            'pizza' => $pizza,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pizza entity.
     *
     * @Route("/{id}", name="pizza_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pizza $pizza)
    {
        $form = $this->createDeleteForm($pizza);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pizza);
            $em->flush($pizza);
        }

        return $this->redirectToRoute('pizza_index');
    }

    /**
     * Creates a form to delete a pizza entity.
     *
     * @param Pizza $pizza The pizza entity
     *
     * @return Form The form
     */
    private function createDeleteForm(Pizza $pizza)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pizza_delete', array('id' => $pizza->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
