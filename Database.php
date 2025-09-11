<?php

class Database{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $conn;

    public function __construct($conf){
        $this->host=$conf['db_host'];
        $this->user=$conf['db_user'];
        $this->pass=$conf['db_pass'];
        $this->dbname=$conf['db_name'];
        $this->connect();
    }

    private function connect(){
        try{
            $this->conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
            //set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        }catch(PDOException $e){
            echo "Connection failed: ".$e->getMessage();
        }
    }

    public function getConnection(){
        return $this->conn;
    }
}








?>