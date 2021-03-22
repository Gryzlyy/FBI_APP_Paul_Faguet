<?php

namespace App\Controller;

use App\Repository\AgentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentsController extends AbstractController
{
    #[Route('/agents', name: 'agents_index')]
    public function index(AgentsRepository $agentsRepository): Response
    {
        return $this->render('agents/index.html.twig', [
            'agents' => $agentsRepository->findAll(),
        ]);
    }

    /**
     * @Route ("/agents/{id}", name="agent_details")
     */
    public function showMission(int $id, AgentsRepository $agentsRepository): Response
    {
        return $this->render('agents/showAgent.html.twig', [
            'agent' => $agentsRepository->find($id),
        ]);
    }
}
