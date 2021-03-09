<?php

namespace App\Controller;


class KataProduct
{
    public function __construct(float $cost, float $price, int $productNumber, array $mods = [])
    {

        $this->productNumber = $productNumber;
        $this->cost = $cost;
        $this->price = $price;
        $this->mods = ['numberPay' => 1, 'numberReceive' => 1];
    }

    /*
    Allows Price to have Paid For & Received number
    */
    public function setBogo(int $productNumber, int $numberPay, int $numberReceive)
    {
        $this->mods['numberPay'] = $numberPay;
        $this->mods['numberReceive'] = $numberReceive;
    }
}


/*
    http://codekata.com/kata/kata01-supermarket-pricing/


    - three for a dollar (so what’s the price if I buy 4, or 5?)
    - $1.99/pound (so what does 4 ounces cost?)
    - buy two, get one free (so does the third item have a price?)


*/
