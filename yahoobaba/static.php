<?php  

//static memebers--> bina object bnaye koi bhi class k member variable & member method  property ko acess krna.
//static class---> jab  sare member variable & member method static hain tab wah static class bn jata h.
//class ke ander use k liye likhte self. aur inherited class k ander use k liye likhte parent.
class base{

    public static $name="nehaal";

    // public static function show(){
    //     echo self::$name; // :: 2 bar colon h mtlb static h
    // }

    // public function __construct(){
    //     self::show();
    // }
}

class derived extends base{
    public static function show(){
        echo parent::$name; // :: 2 bar colon h mtlb static h
    }

}

// echo base::$name;  //variable ko acess krne k trika classname::property/variable  ;
// echo "<br>";
// base::show(); 

// $test=new base();
// $test->show();

$test=new derived();
$test->show();

?>