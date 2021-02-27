<?php
namespace App\Controller\ProductController;

use App\Service\MessageGenerator;

class ProductController{
    public function __construct(MessageGenerator $tribune){
        $this->tribune = $tribune;
    }

}

    $x = new ProductController(new MessageGenerator);
    echo $x->getHappyMessage();


// FROM https://symfony.com/doc/current/service_container.html#services-constructor-injection