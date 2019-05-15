<?php
$servername = "localhost";
$username =  "root";
$password = "";
$dbname = "test";
$dsn="mysql:host=".$servername.";dbname=".$dbname;
$conn = new PDO($dsn,$username,$password);

/*
class Dbconn{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    

    protected function getConnection(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "test";
        
        try {
            $dsn="mysql:host=".$this->servername.";dbname=".$this->dbname;
            $conn = new PDO($dsn,$this->username,$this->password);
           
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e){
                die("cannot connect: ".$e->getMessage());
              
        }


    }
}
*/