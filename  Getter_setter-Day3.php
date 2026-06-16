 <?php  
 
 error_reporting(E_ALL);
 ini_set('display_errors' , 1);

//  Day 3 — Task 🎯
//  BankAccount class banao:
 
//  Properties: owner, balance — private karo
//  Constructor mein dono values lo
//  Getter methods banao: 
//  getOwner() — owner return kare
//  getBalance() — balance return kare 
//  Method getInfo() — ye print kare:  //  Account Owner: John | Balance: 5000
 
// Ye kaam nahi karna chahiye:
//   echo $account->owner;   // ❌ Private hai
// echo $account->balance; // ❌ Private hai
 
 
//  class BankAccount{

//     private $owner , $balance ;

//     function __construct($owner, $balance){
//         $this->owner =$owner ;
//         $this->balance = $balance ;     
//     }

//     // use of getter means return or read value
//     function getOwner(){
//         return $this->owner;
//     }

//     // use of setter -->means change  / set value 
//     function setOwner($owner) {
//         $this->owner = $owner;
//         return "Owner updated to: " . $this->owner;  
//     }

//     function getBalance(){
//         return $this->balance;
//     }

//     function setBalance($balance){
//        if ($balance < 0){
//         return  'Balance cant be Negative' ;
//        }else{
//           $this->balance=$balance ;
//        }

//     }

//     function getInfo(){
        
//         return 'Account Owner: ' . $this->owner . ' | Balance: ' . $this->balance;
//     }
//  }

//  $new_account= new BankAccount('John' , 5000);

//  echo $new_account->getOwner();
//  echo $new_account->getBalance();
//  echo $new_account->getInfo();
 
//  //echo $new_account->owner; for check encapsulation working or not .
//  //echo $new_account->balance;
// echo '<br> <br>' ;

// $new_account->setOwner('Sara') ;
//  echo $new_account->getOwner();

//  $new_account->setBalance(-100);
//  echo $new_account->getBalance();

//  $new_account->setBalance(90) ;
//  echo $new_account->getBalance();

 
echo "<br>" ;

 
// Level 3 — Real World 🔴
// Ek Student class banao:
// Properties: name, age, grade — private
// Constructor mein teeno lo
// Getters: getName(), getAge(), getGrade()
// Setter: setGrade($grade) — validation ke saath:
// Grade A, B, C, D hi allowed hai — baaki sab reject
// Invalid ho toh: "Invalid grade!"
// Method: getProfile() — print kare:
// "Name: John | Age: 20 | Grade: A"
class student{
    private  $name,$age ,$grade ;
 
    function __construct($name,$age,$grade) {
 
     $this->name =$name;
     $this ->age =$age;
     $this->grade =$grade ;  
    } 
 
    function getName(){
     return $this->name ;
    }
 
    function getAge(){
     return $this->age;
 
    }
    function getGrade(){
     return $this->grade;
    }
 
 function setGrade($grade){
 
     if( $grade <=100 && $grade >= 80){
    
        return 'Student get Grade '.($this->grade='A') ;

     }elseif($grade  < 80 && $grade >= 60){
        return 'Student get Grade '.($this->grade='B') ;

     }elseif( $grade < 60 && $grade >= 40){
        return 'Student gets Grade  '.($this->grade='C' );

     }elseif( $grade < 40  && $grade >= 0 ){
        return ($this->grade='D  , Fail') ;
     }else{
        return $this->grade='Invalid Grade' ;
     }

    
 }
 
 function getProfile( ){
    return 'Name : : '.$this->name  . ' |  Age : : ' .$this->age .  ' |  Grade : :  '  .$this->grade ;
 }

 
 }


 $profile= new student('John', 20 , 90 ) ;

 echo $profile->setGrade(-10) .'<br><br>';
 echo $profile->getProfile();

?>

  