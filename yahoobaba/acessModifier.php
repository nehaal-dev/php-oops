<?php  

//public--> isko khi se bhi acess keskte 
//private --> isko class ke ander aur inheritance clas ke ander tk hi access krskte .class k baha avess nhi krskte.
//protected--> isko bs class ke ander hi acess krskte.

//public
// class Base{
//     public $name;

//     public function __constructor($n){
//         $this->name=$n;

//     }
// public function show(){
//     echo  $this->name;
// }

// }
// $test= new Base('yahoo');
// $test->name="nehaal";
// $test->show();

//private

class Base{
    protected $name;
  public function __constructor($n){
        $this->name=$n;
    }
protected function show(){
    echo  $this->name;
}
}

class derived extends Base{
    public function get(){
        echo  $this->name;
    }
}


$test= new derived('jerry');
// $test->name="nehaal";
$test->get();
?>