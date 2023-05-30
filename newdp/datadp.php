<?php


class DatabaseUser{
        private $host = "localhost";
        private $database_name = "projectapi";
        private $username = "root";
        private $password = "";

        public $conn;
        public function getConnection(){
            $this->conn = null;
            $conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database_name);
            
            if($conn->connect_error){
                die("Error failed to connect to MySql: ".$conn->connect_error);
            }else{
                return $conn;
            }


        }

    }
    
    
    ?>