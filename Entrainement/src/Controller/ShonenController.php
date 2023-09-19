<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShonenController extends AbstractController
{
    #[Route('/shonen', name: 'app_shonen')]
    public function index(): Response
    {
        $shonens =  ['One Piece', 'Naruto', 'Saint Seiya' , 'Dragon Ball'];
        $auteurs = ['Eichiro Oda', 'Masashi Kishimoto', 'Masami Kuradama', 'Akira Toriyama'];
        $nbTomes = ['104 (en cours)', '70', '20', '42'];
        $img = ['images/onepiece.jpeg', 'images/naruto.jpeg', 'images/saint_seiya.jpeg', 'images/dragonball.jpeg'];
        $lien = ['https://www.nautiljon.com/mangas/one+piece.html', 'https://www.nautiljon.com/mangas/naruto.html', 'https://www.nautiljon.com/mangas/saint+seiya+-+les+chevaliers+du+zodiaque.html', 'https://www.nautiljon.com/mangas/dragon+ball.html'];
        return $this->render('shonen/index.html.twig', [
            'shonens' => $shonens,
            'auteurs' => $auteurs,
            'nbTomes' => $nbTomes,
            'img' => $img,
            'lien'=>$lien,
        ]);
    }
}
