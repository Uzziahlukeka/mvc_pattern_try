<?php
class Database{
    private $host='localhost';
    private $db_name='mvc';
    private $username='yth';
    private $password='yhw0mGIqJXYy5y(D';
    private $conn;


//DB connect 
public function connect(){
    $this->conn=null;

        try{
            $this->conn=new PDO('mysql:host='.$this->host.';dbname='.$this->db_name.'',$this->username,$this->password);
            //set attributes for showing errors  
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e){
            echo'connection error : '.$e->getMessage();
        }
        
        return $this->conn;
    }
}