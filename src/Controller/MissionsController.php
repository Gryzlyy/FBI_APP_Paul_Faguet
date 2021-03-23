<?php

namespace App\Controller;

use App\Entity\Missions;
use App\Form\AddMissionType;
use App\Repository\MissionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MissionsController extends AbstractController
{
    #[Route('/', name: 'app.home')]
    public function index(MissionsRepository $missionsRepository): Response
    {
        return $this->render('missions/index.html.twig', [
            'missions' => $missionsRepository->findAll(),
        ]);
    }

    /**
     * @Route ("/missions/{id}", name="mission_details")
     */
    public function showMission(int $id, MissionsRepository $missionsRepository): Response
    {
        return $this->render('missions/showMission.html.twig', [
            'mission' => $missionsRepository->find($id),
        ]);
    }

    /**
     * @Route ("/missions-add", name="mission_add")
     */
    public function addMission(Request $request): Response
    {
        $mission = new Missions();
        $form = $this->createForm(AddMissionType::class, $mission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mission);
            $entityManager->flush();

            return $this->redirectToRoute('app.home');
        }

        return $this->render('missions/addMission.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route ("missions/{id}/delete", name="mission_delete")
     */
    public function deleteMission(Request $request, Missions $missions): Response
    {
        $form = $this->createForm(AddMissionType::class, $missions);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$missions->isMissionValid()) {
                $this->addFlash('error', 'Your mission does not contain valids items. Please check the following: Agent(s) skill(s) / Nationality of agents or contacts / Hideaway country');
                return $this->redirectToRoute('app.home');
            };

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app.home');
        }

        return $this->render('missions/edit.html.twig', [
            'mission' => $missions,
            'form' => $form->createView(),
        ]);
    }
}
