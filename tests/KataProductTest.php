<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Controller\KataProduct;

class KataProductTest extends TestCase
{
    public function testMakingAProduct()
    {
        $myProduct = new  KataProduct(0.33, 0.60, 3098);
        $this->assertTrue(true);
    }
}
