<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky/number')]
    /**
     * Summary of number
     * @return Symfony\Component\HttpFoundation\Response
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        $cities = Cities::all();



        return $this->json(['cities'=>$cities],200);
    }
}