<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'srrs');
define('DB_TABLE', 'animalComplaints');


function connectar(){

    try {

        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;

    }catch(Exception $e){
        
        echo $e->getMessage();
        return null;
    }
}

function getAnimalComplaints(){

    try {

       $con = connectar();
       $con = $con->query("SELECT * FROM animalComplaints ORDER BY id");

       return $con;

    }catch(Exception $e){
        
        echo $e->getMessage();
        return null;
    }

}

function create($nomeSolicitante, $ruaSolicitante, $compSolicitante){

    try {

       $con = connectar();

       $stmt = $con->prepare("INSERT INTO animalComplaints (nomeSolicitante, ruaSolicitante, compSolicitante) VALUES (?,?,?)");
       $stmt->bind_param("sss", $nomeSolicitante, $ruaSolicitante, $compSolicitante);
       $stmt->execute();
       $stmt->close();

    }catch(Exception $e){
        
        echo $e->getMessage();
        return null;
    }

}

function show($id){

    try {

       $con = connectar();
       $con = mysqli_query($con, "SELECT * FROM animalComplaints WHERE id = $id");

       return $con;

    }catch(Exception $e){
        
        echo $e->getMessage();
        return null;
    }

}


function update($nomeSolicitante, $ruaSolicitante, $compSolicitante, $id){

    try {

       $con = connectar();

       $response = $con->prepare("UPDATE animalComplaints SET nomeSolicitante = ?, ruaSolicitante = ?, compSolicitante = ? WHERE id = $id");
       $response->bind_param("sss", $nomeSolicitante, $ruaSolicitante, $compSolicitante);
       $response->execute();
       $response->close();

    }catch(Exception $e){
        
        echo $e->getMessage();
        return null;
    }

}

function delete($id){

    try {

       if($id){
        $con = connectar();
        $con->query("DELETE FROM animalComplaints WHERE id = $id");
        $con->close();
       }

    }catch(Exception $e){
        
        echo $e->getMessage();
        return null;
    }

}
?>