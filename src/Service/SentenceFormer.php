<?php

namespace App\Service;

class SentenceFormer
{
    // return a greeting, name optional
    public function giveHello(string $toName = ''): string
    {
        $messages = [
            "Hey there, $toName",
            "Wowzie, $toName",
            "Que Pas, $toName!",
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }
}

// $talker = new SentenceFormer();
// echo $talker->giveHello()."\n:::::::\n";
