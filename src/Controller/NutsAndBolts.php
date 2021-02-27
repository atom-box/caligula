<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

interface batWarmup{
    public function lessYak(string $s): string;
}

class NutsAndBolts implements batWarmup
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
    
    public function lessYak(string $rawString): string{
        $improvedString = '';
        $pieces = [];
        $pattern = '/yak/i';
        $pieces = preg_split($pattern, $rawString, -1); 
        $improvedString = implode('', $pieces);
        return $improvedString;
    }

}

/*
LESSYAK
Suppose the string "yak" is unlucky. Given a string, return a version where all the "yak" are removed, The "yak" strings will not overlap.
*/

$solver = new NutsAndBolts;
echo $solver->lessYak("yakpak")."\n"; // "pak"
echo $solver->lessYak("pakyak")."\n"; // "pak"
echo $solver->lessYak("yak123ya")."\n"; // "123ya"


