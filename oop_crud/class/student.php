<?php

class student{
    private $conn;

    function __construct($conn){

        $this->conn=$conn;
    }

    function get_all(){
        $stmt=$this->conn->query('SELECT * FROM students ') ;
        $students=$stmt->fetchAll(PDO::FETCH_ASSOC);

        return $students;
    }
}



?>