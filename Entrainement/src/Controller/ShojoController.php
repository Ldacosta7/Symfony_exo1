<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShojoController extends AbstractController
{
    #[Route('/shojo', name: 'app_shojo')]
    public function index(): Response
    {
        $shojos = ['Love Hina', 'My Sweet Romance', 'My happy Mariage'];

        return $this->render('shojo/index.html.twig', [
            'shojos' => $shojos,
        ]);
    }
}
