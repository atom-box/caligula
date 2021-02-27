<?php

require_once 'ev-test-data.php';  // full path unneccessary: file in same folder

interface checks {
    public function gapSame(): string;
    public function notAlone(): string; 
    // public function timelapse(): int;
    public function roundThenSum(): int;
}

class NumberLine implements checks {
    
    function __construct(array $numbers, ?int $needle = null)
    {
        $this->numbers = $numbers;
        $this->needle = $needle;
    }
    
    // Checks if numbers are evenly spaced
    public function gapSame(): string{
        if (count($this->numbers) !== 3){
            die('ERROR: gapSame function requires the array must have three numbers.');
        }
        
        $sorted = $this->numbers;
        sort($sorted);
        $small = $sorted[0];
        $medium = $sorted[1];
        $large = $sorted[2];
        if ($small - $medium === $medium - $large){
            return 'toot your lanyard';
        }
        
        return 'it\'s nahhht Scottish';
    }
    
    // Checks (1) no matching neighbor (2) replace w/ large neighbor
    protected function dominatedByWhichNeighbor($i): int{
        $a = $this->numbers[$i - 1];
        $b = $this->numbers[$i];
        $c = $this->numbers[$i + 1];
        if ($a === $b || $b === $c){
            return null;
        }
        if ($a >=  $c){
            return $a;
        }
        if ($a <  $c){
            return $c;
        }
        // something actually went wrong; fail gracefully
        return null; 
    } 
    
    public function notAlone(): string{
        $fixed = [];
        $indexLast = count($this->numbers) - 1;
        foreach($this->numbers as $i => $member){
            if($i === 0 || $i === $indexLast){
                $fixed[] = $member;
                continue;
            }
            if($this->needle){
                $theDominatingNeighbor = $this->dominatedByWhichNeighbor($i);
                if($theDominatingNeighbor){
                    $fixed[] = $theDominatingNeighbor;
                }    
                continue;
            }
            $fixed[] = $member;
        }
        $joined = implode(' ', $fixed);
        return $joined;
    }

    public function roundThenSum(): int{
        $sum = 0;

        echo "\nFor this number line: ".implode('-', $this->numbers)."\n";
        foreach($this->numbers as $number){
            if ($this->intWantsUp($number)){
                $sum += $this->roundUp($number);
                continue;
            }
            $sum += $this->roundDown($number);
        }
        return $sum;
    }

    // given an array of INTS that are unixtime
    // returns gap between each member and its neighbor, in years
    public function unixtimelapse(array $numbers): string {
        if (count($numbers) < 2){
            return '';
        }
        $oneTime = array_shift($numbers);
        $diff = abs($oneTime - $numbers[0]); 
        $yearlong = $diff / 31536000000;
        $diff = (string)$diff;

        return $yearlong.' years, '.$this->unixtimelapse($numbers);
    }

    public function dayslapse(array $yearsasintegers): string {
        // uncomment to see as dates
        echo "The behavior of these functions is affected by settings in php.ini:\n";
        // https://www.w3schools.com/php/php_ref_date.asp
        foreach($yearsasintegers as $year){
            $date=date_create($year."-00-00");
            echo date_format($date,"Y/m/d")."\n";
        }
        return "slug";
    }


    private function roundUp(int $n): int{
        $tens = $n / 10;
        $tens = ceil($tens);
        return 10 * $tens;
    }

    private function roundDown(int $n): int{
        $tens = $n / 10;
        $tens = floor($tens);
        return 10 * $tens;
    }
    
    private function intWantsUp(int $n): bool{
        if($n % 10 > 4){
            return true;
        }
        return false; 
    }

    
    
}



/*
GAPSAME FUNCTION
Given three ints, a b c, one of them is small, one is medium and one is large. 
Return true if the three values are evenly spaced, so the difference between 
small and medium is the same as the difference between medium and large.
*/

/**
 NOTALONE FUNCTION
 *We'll say that an element in an array is "alone" if there are values
  before and after it, and those values are different from it. Return 
  a version of the given array where every instance of the given value 
  which is alone is replaced by whichever value to its left or right \
  is larger.
 */

 /**
 ROUNDTHENSUM FUNCTION
* round an int value up to the next multiple of 10 if its rightmost digit is 5 or more, 
so 15 rounds up to 20. Alternately, round down to the previous multiple of 10 if 
its rightmost digit is less than 5, so 12 rounds down to 10. Given an array of ints 
return the sum of their rounded values.
  */

/*
UNIXTIMELAPSE FUNCTION
given an array of INTS that are unixtime
returns gap between each member and its neighbor, in years
*/

  /*
  PAIRSTAR FUNCTION
Given a longish int, compute recursively and return a string where identical digits that are adjacent in the original integer are separated from each other by a "*"
  */