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
    
    public function fixTeen(int $n): int{
        if(in_array($n, [13, 14, 17, 18, 19])){
            return 0;
        }

        return $n;
    }

    public function noTeenSum(array $ints): int{
        if(count($ints) === 0){
            return 0;
        }
        $poppedInt = array_pop($ints);
        echo(count($ints)."\n");
        return fixTeen($poppedInt) + noTeenSum($ints);
    }

}

/*
LESSYAK
Suppose the string "yak" is unlucky. Given a string, return a version where all the "yak" are removed, The "yak" strings will not overlap.

STRINGBITS
Given a string, return a new string made of just the odd chars, so "Hello" yields "Hlo".

NOTEENSUM
Given 3 int values, a b c, return their sum. However, if any of the values is a teen -- in the range 13..19 inclusive -- then that value counts as 0, except 15 and 16 do not count as a teens. Write a separate helper "public int fixTeen(int n) {"that takes in an int value and returns that value fixed for the teen rule. In this way, you avoid repeating the teen code 3 times (i.e. "decomposition"). Define the helper below and at the same indent level as the main noTeenSum().
*/

$solver = new NutsAndBolts;
echo $solver->lessYak("yakpak")."\n"; // "pak"
echo $solver->lessYak("pakyak")."\n"; // "pak"
echo $solver->lessYak("yak123ya")."\n"; // "123ya"


echo $solver->stringBits("Hello")."\n"; //"Hlo"
echo $solver->stringBits("Hi")."\n"; //"H"
echo $solver->stringBits("Heeololeo")."\n"; //"Hello"


echo $solver->noTeenSum([1, 2, 3]);// 6
echo $solver->noTeenSum([2, 13, 1]);// 3
echo $solver->noTeenSum([2, 1, 14]);// 3