<?php
function databaseConnection(){
        $server = '127.11.59.130';
        $username = 'adminrDiqiWG';
        $passwd = 'UVGnpltJfhep';
        $database = '2Fit';
        $dsn = "mysql:host=$server; dbname=$database";
        try{
            $dataConn = new PDO($dsn, $username, $passwd); //creates a PDO Object
        } catch (PDOException $exc) {
                echo "<p>An error occurred while connecting to the database</p>";
        }
        
        if(is_object($dataConn)){
            return $dataConn;
        }
        else{
            return FALSE;
        }
}
function getScriptures(){
$conn = databaseConnection();
    
    try{
        $sql = 'SELECT * FROM products';
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();
            
    } catch (PDOException $ex) {
        echo 'getScriptures error';
    }
        if(is_array($data)){
            return $data;
        }
        else{
            return FALSE;
        }
}
function getSpecificScriptures($searchVariable){
$conn = databaseConnection();
    
    try{
    
        $sql = "SELECT * FROM products WHERE name LIKE '%$name%'";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':name', $searchVariable, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();
            
    } catch (PDOException $ex) {
        echo 'getScriptures error';
    }
        if(is_array($data)){
            return $data;
        }
        else{
            return FALSE;
        }
}
