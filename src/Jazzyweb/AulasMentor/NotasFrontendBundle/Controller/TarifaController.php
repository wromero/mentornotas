<?php

namespace Jazzyweb\AulasMentor\NotasFrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Tarifa;
use Jazzyweb\AulasMentor\NotasFrontendBundle\Form\TarifaType;

/**
 * Tarifa controller.
 *
 */
class TarifaController extends Controller
{

    /**
     * Lists all Tarifa entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('JAMNotasFrontendBundle:Tarifa')->findAll();

        return $this->render('JAMNotasFrontendBundle:Tarifa:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tarifa entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Tarifa();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tarifa_show', array('id' => $entity->getId())));
        }

        return $this->render('JAMNotasFrontendBundle:Tarifa:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tarifa entity.
    *
    * @param Tarifa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Tarifa $entity)
    {
        $form = $this->createForm(new TarifaType(), $entity, array(
            'action' => $this->generateUrl('tarifa_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tarifa entity.
     *
     */
    public function newAction()
    {
        $entity = new Tarifa();
        $form   = $this->createCreateForm($entity);

        return $this->render('JAMNotasFrontendBundle:Tarifa:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tarifa entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JAMNotasFrontendBundle:Tarifa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tarifa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('JAMNotasFrontendBundle:Tarifa:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tarifa entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JAMNotasFrontendBundle:Tarifa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tarifa entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('JAMNotasFrontendBundle:Tarifa:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tarifa entity.
    *
    * @param Tarifa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tarifa $entity)
    {
        $form = $this->createForm(new TarifaType(), $entity, array(
            'action' => $this->generateUrl('tarifa_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tarifa entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JAMNotasFrontendBundle:Tarifa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tarifa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tarifa_edit', array('id' => $id)));
        }

        return $this->render('JAMNotasFrontendBundle:Tarifa:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tarifa entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('JAMNotasFrontendBundle:Tarifa')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tarifa entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tarifa'));
    }

    /**
     * Creates a form to delete a Tarifa entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tarifa_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
