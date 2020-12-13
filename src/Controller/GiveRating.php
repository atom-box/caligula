<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




/*
We are having a party with amounts of tea and cake. 
Return a rating: bad, good, or great as a string. 
A party is good (1) if both tea and cake are at least 5. 
However, if either tea or cake is at least double the amount of the other one, the party is great (2). However, in all cases, 
if either tea or cake is less than 5, the party is always bad (0).
*/



class GiveRating extends AbstractController
{
    /**
     *
     * @Route("/teaparty")
     */

    public function teaParty(): Response
    {
        $res = '';
        $res = '<div style="color:yellow;background-color:blue;text-align:center;" ><h2>Yipee...</h2></div>';
        return new Response($res);
    }
}


// teaParty(6, 8) → 1
// teaParty(3, 8) → 0
// teaParty(20, 6) → 2