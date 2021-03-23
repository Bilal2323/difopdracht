<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class FactuurController extends AbstractController
{
    /**
     * @Route("/factuur", name="factuur")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_BOEKHOUDING') or is_granted('ROLE_BALIE')")

     */
    public function index(): Response
    {
        return $this->render('factuur/index.html.twig', [
            'controller_name' => 'FactuurController',
        ]);
    }
}
