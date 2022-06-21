<?php

    require_once "Solicitante.php";

    class Complaint extends Solicitante{

        public $tipo;

        public function __construct($tipo) {
            $this->tipo = $tipo;
        }

        public function getTipo(){
            return $this->tipo;
        }


        public function createComplaint(){

            $nomeSolicitante = $this->getNomeSolicitante();

            try {
        
               $con = connectar();
        
               mysqli_query($con, "INSERT INTO teste (nomeSolicitante) VALUES ($nomeSolicitante)");

               
               $stmt->bind_param("s", $nomeSolicitante);
               $stmt->execute();
               $stmt->close();
    
        
            }catch(Exception $e){
                
                echo $e->getMessage();
                return null;
            }
        }

    }

?>