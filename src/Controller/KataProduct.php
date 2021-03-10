<?php

namespace App\Controller;


class KataProduct
{
    private int $productNumber;
    private float $cost;
    private float $price;
    private bool $losingMoneyIsOkay;
    private bool $bogoIsOn;

    public function __construct(float $cost, float $price, int $productNumber, array $mods = [])
    {

        $this->productNumber = $productNumber;
        $this->cost = $cost;
        $this->price = $price;
        $this->mods = ['bogoQuantA' => 1, 'bogoQuantB' => 1];
    }

    /*
    Allows Price to have
    1) by one (or more)
    2) get one (or more)
    */
    public function setBogo(int $productNumber, int $bogoQuantA, int $bogoQuantB)
    {
        if ($this->stockValueIsNegative() && $this->losingMoneyOkay === false) {
            $this->logger("Did not set: BOGO.");
            $this->logger("Stock value cannot be negative unless loseMoney flag is True.");
            return;
        }
        $this->mods['bogoQuantA'] = $bogoQuantA;
        $this->mods['bogoQuantB'] = $bogoQuantB;
    }

    private function stockValueIsNegative(): bool
    {
        // todo some checks go here
        return false;
    }

    public function logger(string $sayThis): void
    {
        echo $sayThis;
    }
}


/*
    http://codekata.com/kata/kata01-supermarket-pricing/

    The Kata Question was originally stated:
    - three for a dollar (so what’s the price if I buy 4, or 5?)
    - $1.99/pound (so what does 4 ounces cost?)
    - buy two, get one free (so does the third item have a price?)

    My thoughts:
    - BOGO enabled or not is a bool.
    - BOGOdenabled needs a checker ("Worth of item cannot become less than zero unless SellAtLoss is True. ")
    - Sell at loss bool is checked during cost set BOBO set price set, bogoenabled set.


*/
