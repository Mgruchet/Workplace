<?php

namespace MG\GestionBundle\Controller;

use MG\GestionBundle\Entity\clients;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Client controller.
 *
 * @Route("app/clients")
 */
class clientsController extends Controller
{
    /**
     * Lists all client entities.
     *
     * @Route("/", name="clients_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clients = $em->getRepository('MGGestionBundle:clients')->findByUser($this->getUser());


        return $this->render('clients/index.html.twig', array(
            'clients' => $clients,
        ));
    }

    /**
     * Creates a new client entity.
     *
     * @Route("/new", name="clients_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $client = new clients();
        $form = $this->createForm('MG\GestionBundle\Form\clientsType', $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $client->setUser($this->getUser());
            $em->persist($client);
            $em->flush($client);

            return $this->redirectToRoute('clients_index', array('id' => $client->getId()));
        }

        return $this->render('clients/new.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a client entity.
     *
     * @Route("/{id}", name="clients_show")
     * @Method("GET")
     */
    public function showAction(clients $client)
    {
        $deleteForm = $this->createDeleteForm($client);

        return $this->render('clients/show.html.twig', array(
            'client' => $client,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing client entity.
     *
     * @Route("/{id}/edit", name="clients_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, clients $client)
    {
        $deleteForm = $this->createDeleteForm($client);
        $editForm = $this->createForm('MG\GestionBundle\Form\clientsType', $client);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('clients_edit', array('id' => $client->getId()));
        }

        return $this->render('clients/edit.html.twig', array(
            'client' => $client,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a client entity.
     *
     * @Route("/{id}", name="clients_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, clients $client)
    {
        $form = $this->createDeleteForm($client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($client);
            $em->flush($client);
        }

        return $this->redirectToRoute('clients_index');
    }

    /**
     * Creates a form to delete a client entity.
     *
     * @param clients $client The client entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(clients $client)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clients_delete', array('id' => $client->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
