<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Form\AddContactType;
use App\Repository\ContactsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactsController extends AbstractController
{
    #[Route('/contacts', name: 'contacts_index')]
    public function index(ContactsRepository $contactsRepository): Response
    {
        return $this->render('contacts/index.html.twig', [
            'contacts' => $contactsRepository->findAll(),
        ]);
    }

    /**
     * @Route ("/contacts/{id}", name="contact_details")
     */
    public function showContact(int $id, ContactsRepository $contactsRepository): Response
    {
        return $this->render('contacts/showContact.html.twig', [
            'contact' => $contactsRepository->find($id),
    ]);
    }

    /**
     * @Route ("/contacts-add", name="contact_add")
     */
    public function addContact(Request $request): Response
    {
        $contact = new Contacts();
        $form = $this->createForm(AddContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('contacts_index');
        }

        return $this->render('contacts/addContact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route ("/contacts/{id}", name="contact_delete", methods={"DELETE"})
     */
    public function deleteContact(Request $request, Contacts $contact): Response
    {
        if ($this->isCsrfTokenValid('delete' . $contact->getId(), $request->request->get('_token')))
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contact);
            $entityManager->flush();
        }
        return $this->redirectToRoute('contacts_index');
    }
}
