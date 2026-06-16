<?php  

class Database{
    private $host ='localhost';
    private $dbname ='student_management';
    private $username='root';
    private $password='root123';

    function connect(){

        try{
            $conn=new PDO("mysql:host=$this->host;dbname=$this->dbname" ,
            $this->username,
            $this->password );
            return $conn;

        }catch(PDOException $e){
            die('Error ' . $e->getMessage());
        }
        
    }
}

?>