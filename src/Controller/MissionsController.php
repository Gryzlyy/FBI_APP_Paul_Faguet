<?php

namespace App\Controller;

use App\Entity\Missions;
use App\Repository\MissionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

   /* public function incrementation(): Response
    {
        $mission1 = new Missions();
        $em = $this->getDoctrine()->getManager();

        $mission1->setTitle('Desert Storm');
        $mission1->setDescription('lorem ispum dorlor sit amet consegur y seguimos a la patin');
        $mission1->setType('Spying');
        $mission1->setCountry('Afghanistan');
        $mission1->setStartDate('27/01/2020');
        $mission1->setEndDate('30/05/2021');
        $mission1->setSkills('');
        $mission1->setHideouts('');

        $em->persist($mission1);
        $em->flush();
    } */
}
