<?php 
// src/Controller/About.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class About
{
    /**
     *
     * @Route("/about")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>
            <h1>About: </h1>
            <p>Visitor: '.$number.'</p>
            </body></html>'
        );
    }
}