<?php  
//late static binding k case me hm use krenge static

class base{
    protected static $name="yahoo";

    public function show(){
        echo static::$name;//ye late static binding ko print krega.
        echo self::$name;//ye static wala ko print krega.
    }
}

class derived extends base{
    protected static $name="Baba";
}
$test=new derived();
$test->show();








?>