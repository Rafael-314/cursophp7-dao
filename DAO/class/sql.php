<?php

class Sql extends PDO {

    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "Mcds_2016");

    }

    private function setParams($statement, $paramenters = array()){

        foreach ($paramenters as $key => $value) {

            $this->setParam($statement, $key, $value);

        }

    }

    private function setParam($statement, $key, $value){

        $statement->bindParam($key, $value);

    }

    public function execQuery($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);
 
        $this->setParams($stmt, $params);
 
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()):array
    {

        $stmt = $this->execQuery($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    
}

?>