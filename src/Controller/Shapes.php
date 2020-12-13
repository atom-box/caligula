<?php
// src/Controller/Shapes.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Shapes extends AbstractController {
    /**
     * 
     * @Route("/shapes")
     */
    public function shapes(): Response{
        $types = [ 'dodecahedron', 'octahedron', 'cube', 'tetrahedron'];
        $response ='';
        foreach($types as $type){
            $response .= '<p>'.$type.'</p>';
        }
        return new Response($response);
    }
}




