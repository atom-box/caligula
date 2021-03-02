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

    public function stringBits(string $rawString): string{
        $outstring = '';
        $chars = str_split($rawString);
        foreach($chars as $index => $char){
            if (1 !== $index % 2){
                $outstring .= $char;
            }
        }
        return $outstring;
    }
}

/*
LESSYAK
Suppose the string "yak" is unlucky. Given a string, return a version where all the "yak" are removed, The "yak" strings will not overlap.

STRINGBITS
Given a string, return a new string made of just the odd chars, so "Hello" yields "Hlo".
*/

$solver = new NutsAndBolts;
echo $solver->lessYak("yakpak")."\n"; // "pak"
echo $solver->lessYak("pakyak")."\n"; // "pak"
echo $solver->lessYak("yak123ya")."\n"; // "123ya"


echo $solver->stringBits("Hello")."\n"; //"Hlo"
echo $solver->stringBits("Hi")."\n"; //"H"
echo $solver->stringBits("Heeololeo")."\n"; //"Hello"