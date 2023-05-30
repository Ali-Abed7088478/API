<?php




class User{
        // Connection
        private $conn;
        // Table
        private $db_table = "userapi";
        // Columns
        
        
        
        public $id;
        public $name;
        public $text;
        public $date;
        public $fav;

        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getUser(){
            $sqlQuery = "SELECT idus, nameus, textus, dateus, favus FROM " 
              . $this->db_table . "";
            $stmt = $this->conn->query($sqlQuery);
            
            // $result = array();
            // while($row = $stmt->fetch_assoc()){
            //     array_push($result,$row);
            // }
            return $stmt;
        }


        public function createUser(){
          $sqlQuery = 
            "INSERT INTO $this->db_table (nameus, textus, dateus) VALUES ('$this->name', '$this->text','$this->date')";

          $stmt = $this->conn->query($sqlQuery);
      
          if($stmt){
             return true;
          }
          return false;
      }


      public function updateUser(){
        $sqlQuery = "UPDATE  $this->db_table  SET
                    nameus = '$this->name' , textus = '$this->text' ,dateus = '$this->date'
                  WHERE idus = '$this->id' ";
    
        $stmt = $this->conn->query($sqlQuery);

        if($stmt){
           return true;
        }
        return false;
    }


    
    function deleteUser(){
        $sqlQuery = "DELETE FROM $this->db_table WHERE idus = '$this->id'";
        $stmt = $this->conn->query($sqlQuery);
    
        // $this->id=htmlspecialchars(strip_tags($this->id));
    
   
        if($stmt){
            return true;
        }
        return false;
    }
        
}
        
        
        
        ?>