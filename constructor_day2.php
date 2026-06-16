<?php   
/* 
Constructor Exercise 🎯
Ek BankAccount class banao:

Properties: owner, balance
Constructor mein dono values lo
Method: accountInfo() jo print kare:

"Account Owner: John | Balance: 5000" */

class BankAccount{
    public $owner ,$balance ;

    function __construct($owner , $balance){
        $this->owner =$owner;
        $this->balance =$balance;
    }
    function  accountInfo( ){
        return 'Account Owner : '  .$this->owner.    '       | Balance  :' . $this->balance;

    }
}
$saving_account=new BankAccount('John' , 5000) ;

     echo $saving_account->accountInfo() ;

 
//QUS PRACTICE Level 1 — Basic 🟢
// Rectangle class banao:
// Constructor mein length aur width lo
// Method getArea() — area return kare (length × width)  

 //LEVEL 2 MID.

//  Same Rectangle class mein 2 aur methods add karo:
//  Method 1: getPerimeter() — perimeter return kare
//  (2 × (length + width))
//  Method 2: isSquare() — length aur width equal hain toh ek message, warna doosra



class Rectangle{
    public $length, $width ;

    function __construct($length,$width){
        $this->length= $length;
        $this->width = $width ;    
    }

    function getArea(){
        return  '  Area of Rectangle : '  .($this->length * $this->width) ;
    }

    function getPerimeter(){
        return '  Perimeter of Rectangle is :' .( 2 * ($this->length + $this->width) ) .'&nbsp &nbsp';
    }

    function isSquare(){

        if( $this->length == $this->width){
            return "    Yes it square" ;
        }else{
            return "No, it is not a square" ;
        }
 
    }

 }

 $rectangle1=new Rectangle(5,4);

 echo $rectangle1->getArea() .'<br> <br>';
 echo $rectangle1->getPerimeter();
 echo $rectangle1->isSquare();



?>

<?php
//  Level 3 — Real World 🔴
//  Ek Employee class banao:
 
//  Constructor mein name, salary, role lo
//  Method getProfile() — ye print kare:
 
//  "Name: John | Role: Manager | Salary: 50000"
 
//  Method appraisal() — salary 20% badha do aur return kare:
 
//  "Congrats John! New Salary: 60000"
 
//  Method isManager() — role "Manager" hai toh:
 
//  "Yes, John is a Manager"
//  warna:
//  "No, John is not a Manager"



class employee{
    public $name , $salary , $role;
 
    function __construct($name,$salary,$role){
        $this->name=$name;
        $this->salary=$salary;
        $this->role=$role;     
    }

    function getProfile(){
        return 'Name : &nbsp'  .$this->name . ' | Role : &nbsp' .$this->role .' | &nbsp Salary : &nbsp' .$this->salary ;
    }

    function apprisal(){
      $increase=round($this->salary *  20/100) ;
      $new_salary=$this->salary + $increase ;

      return ' | &nbsp &nbspCongrats &nbsp' .$this->name  .' New Salary: ' .$new_salary  .'&nbsp';

        
    }


    function isManager(){
        if($this->role == 'Manager'){
            return ' | Yes , '  . $this->role .  ' is Manager &nbsp &nbsp'  ;

        }else{
            return ' | No ,&nbsp &nbsp' . $this->role  .  '&nbsp &nbsp  is not Manager  ' ;
        }
   }
}

$emp= new employee('Max' ,7000 , 'Peon');

echo $emp->getProfile();
echo $emp->apprisal();
echo $emp->isManager();


?>