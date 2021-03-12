<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

interface batWarmup
{
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
        $typical = ["cow"];
        $typical[] = $this->nihl("bar");
        return new Response(
            "<h1>Blue $typical[0] Way (b/w)Lasagna for $typical[1]</h1>"
        );
    }

    public function nihl($a)
    {
        $b = $a;
        return $b;
    }

    public function lessYak(string $rawString): string
    {
        $improvedString = '';
        $pieces = [];
        $pattern = '/yak/i';
        $pieces = preg_split($pattern, $rawString, -1);
        $improvedString = implode('', $pieces);
        return $improvedString;
    }

    public function stringBits(string $rawString): string
    {
        $outstring = '';
        $chars = str_split($rawString);
        foreach ($chars as $index => $char) {
            if (1 !== $index % 2) {
                $outstring .= $char;
            }
        }
        return $outstring;
    }

    public function fixTeen(int $n): int
    {
        if (in_array($n, [13, 14, 17, 18, 19])) {
            return 0;
        }

        return $n;
    }

    public function noTeenSum(array $ints): int
    {
        if (count($ints) === 0) {
            return 0;
        }
        $poppedInt = array_pop($ints);
        // echo (count($ints) . "\n");
        return $this->fixTeen($poppedInt) + $this->noTeenSum($ints);
    }

    public function rotateLeft3(array $numbers)
    {
        $tempNumber = array_shift($numbers);
        array_push($numbers, $tempNumber);
        return implode("-", $numbers);
    }
}

$solver = new  NutsAndBolts([]);
echo ($solver->rotateLeft3([1, 2, 3]) . "\n");
echo ($solver->rotateLeft3([5, 9, 11]) . "\n");
echo ($solver->rotateLeft3([0, 10, 40, 41]) . "\n");

/*
LESSYAK
Suppose the string "yak" is unlucky. Given a string, return a version where all the "yak" are removed, The "yak" strings will not overlap.

STRINGBITS
Given a string, return a new string made of just the odd chars, so "Hello" yields "Hlo".

NOTEENSUM
Given 3 int values, a b c, return their sum. However, if any of the values is a teen -- in the range 13..19 inclusive -- then that value counts as 0, except 15 and 16 do not count as a teens. Write a separate helper "public int fixTeen(int n) {"that takes in an int value and returns that value fixed for the teen rule. In this way, you avoid repeating the teen code 3 times (i.e. "decomposition"). Define the helper below and at the same indent level as the main noTeenSum().

    ROTATELEFT3
    Given an array of ints length 3, return an
    array with the elements "rotated left"
    so {1, 2, 3} yields {2, 3, 1}.

*/

/*
             ____        ______    _
            / __ \      |  ____|  | |
  _ __ ___ | |  | |_   _| |__   __| |
 | '_ ` _ \| |  | \ \ / /  __| / _` |
 | | | | | | |__| |\ V /| |___| (_| |
 |_| |_| |_|\____/  \_/ |______\__,_|
*/

// The output was moved to the NutsAndBoltsTest!