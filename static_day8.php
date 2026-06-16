<?php  
// Day 8 — Static Methods Project Task 🎯
// Utility Helper System banao — jaise real Laravel projects mein Helper classes hoti hain.

// MathHelper class:
// Static method add($a, $b) — addition
// Static method subtract($a, $b) — subtraction
// Static method percentage($amount, $percent) — percentage calculate karo
// Static method isEven($num) — even hai toh "Yes, 10 is Even" warna "No, 7 is Odd"

// StringHelper class:
// Static method makeUpperCase($str) — uppercase karo
// Static method makeLowerCase($str) — lowercase karo
// Static method countWords($str) — words count karo — "Total words: 5"
// Static method reverse($str) — string reverse karo

class MathHelper{

    static function add($a , $b){
        return $a + $b ;

    }

    static function subtract($a,$b){
        return $a - $b;
    }

    static function percentage($amount , $percent){
        return  ($amount * $percent)/100 ;

    }

    static  function isEven($num){
         if($num % 2 == 0){
            return 'Given No is even no '.$num ;
         }else{
            return 'Given No is not even' .$num;
         }
    }

}

class  StringHelper{

    static function makeUpperCase($str){
        return strtoupper($str);

    }

    static function  makeLowerCase($str){
        return strtolower($str);
    }

    static function countWords($str){
        return str_word_count($str);
    }


    static function reverse($str){
        return strrev($str);
    }
}



echo  MathHelper::add(5,4);
echo  MathHelper::subtract(9,5);
echo MathHelper::percentage(8990,10);
echo MathHelper::isEven(8);

echo '<br>';

echo StringHelper::makeUpperCase('nehaal');
echo StringHelper::makeLowerCase('NEHAAL');
echo StringHelper::countWords('nehaal');
echo StringHelper::reverse('nehaal');


?>