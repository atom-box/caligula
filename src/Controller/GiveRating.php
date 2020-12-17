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
            $cake = 6; $tea = 8;
            
            $res = makeHeading($cake, $tea);        
            $res .= '<div style="color:#00a;border:5px solid #888;border-radius:6px;text-align:center;width:50%;height:17%;" ><h2>That party rates as </h2></div>';
            return new Response($res);
        }        

        private function makeHeading($a, $b): string {
            $res = '';
            $res .= '<div style="border-left: 6px solid red;background-color: lightgrey;width:50%;">
            <h2>
            At the tea party we rated the cake and tea ';
            $res .= $a;
            $res .= " and ";
            $res .= $b;
            $res .= '.
            </h2>
            </div>';
            return $res;
        }
    
}
    
// teaParty(3, 8) → 0
// teaParty(20, 6) → 2