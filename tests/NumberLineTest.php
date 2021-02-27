<?php

use src\Controller\NumberLine;
use PHPUnit\Framework\TestCase;


class NumberLineTest extends TestCase {

    /* 
    Our first test method: Just a whatever test
     */
    public function testSomethingBanal()
    {
        $this->assertEquals(123, 123);
    }

// $tool = new Numberline([2, 4, 6]);
// echo "\nGap same: ".$tool->gapSame(); // true
// $tool = new Numberline([4, 6, 2]);
// echo "\nGap same: ".$tool->gapSame(); // true
// $tool = new Numberline([4, 6, 3]);
// echo "\nGap same: ".$tool->gapSame(); // false
// echo "\n\n";

// $tool = new Numberline([1, 2, 3], 2);
// echo "Alone: ".$tool->notAlone()."\n"; // [1, 3, 3]
// $tool = new Numberline([1, 2, 3, 2, 5, 2], 2);
// echo "Alone: ".$tool->notAlone()."\n"; // [1, 3, 3, 5, 5, 2]
// $tool = new Numberline([3, 4], 3);
// echo "Alone: ".$tool->notAlone()."\n"; // [3, 4]
// echo "\n";

// $hopper = new Numberline([16]);
// echo "Roundthensum: ".$hopper->roundThenSum()."\n"; // 60
// $hopper = new Numberline([12, 13, 14]);
// echo "Roundthensum: ".$hopper->roundThenSum()."\n"; // 30
// $hopper = new Numberline([6, 4, 4]);
// echo "Roundthensum: ".$hopper->roundThenSum()."\n"; // 10

// $date1 = date_create('2021-02-09');
// $date2 = date_create('2021-01-06');
// $date3 = time();
// $date4 = mktime(3, 4, 5, 6, 7, 2020);
// $calendar = new Numberline([$date1, $date2]);
// // // echo "Timelapse: ".$calendar->timelapse()."\n"; 
// $trythis = [$date1, $date2, $date3, $date4 ];
// // UNCOMMENT THIS TO SEE THE DATE OBJECTS
// // var_dump($trythis);
// echo "\n";

// $times = new NumberLine([]); // safe to call php with less than args
// echo "Unixtimelapse: ".$times->unixtimelapse([1813321467, 1613321467, 1003321467, 613321467, 613321000])."\n";

// echo "Dayslapse: ".$times->dayslapse(EVERAS)."\n";

}

