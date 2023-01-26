<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class vinyl_controller extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        //die('Vinyl: Definitely NOT a fancy-looking frisbee!');
        //return new Response('Title: PB and Jams');

        $tracks = [
        ['song' => 'Creep', 'artist' => 'Radiohead'],
        ['song' => 'Live forever', 'artist' => 'Oasis'], 
        ['song' => 'Live\'s an ocean', 'artist' => 'The Verve'], 
        ['song' => 'Beetlebum', 'artist' => 'Blur'], 
        ['song' => 'The Ressurection','artist' => 'The Stone Roses']];

        return $this->render('vinyl/homepage.html.twig', ['title' => 'PB & Jams', 'tracks' => $tracks]);
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug != null) {
            $title = 'Genre: '.u(str_replace('-', ' ', $slug))->title(true);
        }
        else{
            $title = 'All Genres';
        }
        return new Response($title);
    } 
}