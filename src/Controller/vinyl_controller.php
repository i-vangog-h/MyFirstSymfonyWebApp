<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class vinyl_controller
{
    #[Route('/')]
    public function homepage(): Response
    {
        //die('Vinyl: Definitely NOT a fancy-looking frisbee!');
        return new Response('Title: PB and Jams');
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