<?php
    class Koneksi
    {
        public $connection;
        public function __construct(){
            $host = "localhost";
            $user = "root";
            $pass = "";
            $database = "pratikum";
            $this->connection = new mysqli($host,$user,$pass,$database) or die(mysqli_error());
            if(!$this->connection){
                 return false;
            }else{
                return true;
            }
        }
    }

?>