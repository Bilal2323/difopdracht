<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class RapportenController extends AbstractController
{
    /**
     * @Route("/rapporten", name="rapporten")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_BOEKHOUDING')")
     */
    public function index(): Response
    {
        return $this->render('rapporten/index.html.twig', [
            'controller_name' => 'RapportenController',
        ]);
    }
}
