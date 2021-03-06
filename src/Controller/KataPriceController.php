<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class KataPriceController
{
    /**
     * @Route("/kata/price", name="kata_price")
     */
    public function __construct(float $cost, float $price, array $mods): void
    {
        return $this->render('kata_price/index.html.twig', [
            'controller_name' => 'KataPriceController',
        ]);
    }
}


/*
    http://codekata.com/kata/kata01-supermarket-pricing/


    - three for a dollar (so what’s the price if I buy 4, or 5?)
    - $1.99/pound (so what does 4 ounces cost?)
    - buy two, get one free (so does the third item have a price?)


*/
