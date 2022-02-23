<?php 
class Module {
    public $mysqli;
    function __construct($conToDB = false)
    {
       if($conToDB){
           $this->connectToDatabase();
       }
    }
    public function connectToDatabase()
    {
        $this->mysqli = new mysqli(DB_HOST,DB_USER,DB_PW,DB_NAME);
        if($this->mysqli->connect_error){
            echo "Fehler mit der datenbank verbindung";
            return false;
        }
    }

    public function insertInDatabase($whichRow,$values,$table)
    {        
         $values = implode("','",$values);
        echo "INSERT INTO members(name) VALUES ('$values')";
        $sql = "INSERT INTO $table($whichRow) VALUES ('$values')";
        if($stmt = $this->mysqli->prepare($sql)){     
            // $stmt->bind_param("ssss",$values[0],$values[1],$values[2],$values[3]);      
            if( $stmt->execute()){
                echo "success";
            }else{
                echo "Error";
            }
        }else{
            echo "Ckeck Input";
        }
    }

    public function getFromDatabase($whichRow,$values,$table,$whereclause,$evalCode){
        $userid = "";
        $pw = "";
        $time = "";
        $stmtc = $evalCode["stmt"];
        $returnc = $evalCode["return"];
        
        $sql = "SELECT $whichRow FROM $table $whereclause";
        if($stmt = $this->mysqli->prepare($sql)){
            $stmt->execute();
            eval($stmtc);
            //$stmt->bind_result($userid,$pw);
            while($stmt->fetch()){
                //return [$userid,$pw];                
                eval($returnc);
                return $ret;
            }
        }else{
            echo "Check Database";
        }
    }

}