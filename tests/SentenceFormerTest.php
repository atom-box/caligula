<?php

use App\Service\SentenceFormer;
use PHPUnit\Framework\TestCase;

class SentenceFormerTest extends TestCase
{
    /*
    Works if no name passed at all
     */
    public function testIfGivenNoArgumentStillReturnsString()
    {
        $evansMouth = new SentenceFormer();
        $message = $evansMouth->giveHello();
        $this->assertGreaterThan(0, strlen($message));
    }

    /*Yes
    Here is a test
    */
    public function testHasNameAppended()
    {
        $evansMouth = new SentenceFormer();
        $this->assertStringContainsStringIgnoringCase(
            'Oliver',
            $evansMouth->giveHello('Oliver')
        );
    }
}
