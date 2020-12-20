<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NutsAndBolts
{
    /**
     * @Route("/simple")
     */


    
    public function hydrogen()
    {
        $typical = [];
        $typical = ["cow" ];
        $typical[] = $this->nihl("bar");
        return new Response(
            "<h1>Blue $typical[0] Way (b/w)Lasagna for $typical[1]</h1>"
        );
    }

    public function nihl($a){
        $b = $a;
        return $b;
        
    }
}
