<?php

namespace App\Tests;

use App\Controller\NutsAndBolts;
use PHPUnit\Framework\TestCase;

// to do
//    1) you only brought over one test each; make datacollections
//    2) bring over descriptions

class NutsAndBoltsTest extends TestCase
{

    public function testLessYak()
    {
        $solver = new NutsAndBolts([]);
        $this->assertEquals('pak', $solver->lessYak("yakpak"));
        $this->assertEquals('pak', $solver->lessYak("pakyak"));
        $this->assertEquals('123ya', $solver->lessYak("yak123ya"));
    }

    public function testNoTeenSum()
    {
        $solver = new NutsAndBolts([]);
        $this->assertEquals(6, $solver->noTeenSum([1, 2, 3, 13]));
        $this->assertEquals(3, $solver->noTeenSum([2, 13, 1]));
        $this->assertEquals(3, $solver->noTeenSum([2, 1, 14]));
    }

    public function testStringBits()
    {
        $solver = new NutsAndBolts();
        $this->assertEquals('Hlo', $solver->stringBits("Hello"));
        $this->assertEquals('H', $solver->stringBits("Hi"));
        $this->assertEquals('Hello', $solver->stringBits("Heeololeo"));
    }
}
