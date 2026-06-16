<?php  
//inheritance--> ek class dusre class ki property and method ko use krte usey inheritance bolte.
//base class--> jis class se inherit kiye property and method.
//derived class--> jo class inherit krrhi h mtlb jo class dusre class ki property use krrhi h.

class employee{

    public $name,$age,$salary;

    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;

    }
function info(){
    echo  $this->name ."<br>";
    echo  $this->age  ."<br>";
    echo  $this->salary ."<br>";
}

}
$e1=new employee("john",12,200);
$e1->info();

echo "<br>";

// class manager extends employee{

// }

// $manager1=new manager("alex",15,500);// yha hm manager class k liye koi bhi constructor ya phir koi method nhi bna rhe . ye directly employee class se inherit krle rha h
// $manager1->info();




class manager extends employee{
    public $ta=10000;
    public $phone=10000;
    public $totalSalary;

function info(){
        $this->totalSalary=$this->salary+$this->ta+$this->phone;

        echo "MANAGER PROFILE:";
        echo  $this->name ."<br>";
        echo  $this->age  ."<br>";
        echo  $this->totalSalary ."<br>";
    }
}

$m1=new manager("alex",12,5000);

$m1->info();
?>