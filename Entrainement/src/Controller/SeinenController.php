<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeinenController extends AbstractController
{
    #[Route('/seinen', name: 'app_seinen')]
    public function index(): Response
    {
        $seinens = ['Gon', 'Berserk', 'Vinland Saga', 'Tokyo Ghoul' , 'Kingdom', 'Monster'];

        return $this->render('seinen/index.html.twig', [
            'seinens' => $seinens,
        ]);
    }
}
