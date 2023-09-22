<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MangaController extends AbstractController
{
    #[Route('/', name: 'app_manga')]


    public function index(): Response
    {
        $mangas = ['One Piece', 'Naruto', 'Gon', 'Berserk', 'Love Hina', 'Saint Seiya' , 'Ranma 1/2', 'Dragon Ball'];
        $auteurs = ['Eichiro Oda', 'Masashi Kishimoto', 'Masashi Tanaka', 'Kentaro Miura', 'Ken Akamatsu', 'Masami Kuradama', 'Rumiko Takahashi', 'Akira Toriyama'];
        $nbTomes = ['104 (en cours)', '70', '7', '42 (en cours)', '14', '20', '38', '42'];
        $genres = ['shonen', 'shonen', 'seinen', 'seinen', 'shojo', 'shonen', 'shojo', 'shonen'];

        return $this->render('manga/index.html.twig', [
            'mangas' => $mangas,
            'auteurs' => $auteurs,
            'nbTomes'=> $nbTomes,
            'genres' => $genres,
        ]);
    }
}
