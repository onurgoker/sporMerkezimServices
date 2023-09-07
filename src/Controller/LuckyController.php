<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;

class LuckyController extends AbstractController
{
    #[Route('/lucky/number')]
    /**
     * Summary of number
     * @return Symfony\Component\HttpFoundation\Response
     */
    public function number(PersistenceManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $cities = [];

        return $this->json(['cities'=>$cities],200);
    }
}