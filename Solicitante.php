<?php

    class Solicitante{

        public $nomeSolicitante;
        public $ruaSolicitante;
        public $compSolicitante;
        public $bairroSolicitante;
        public $cidadeSolicitante;
        public $ufSolicitante;
        public $cepSolicitante;
        public $telSolicitante;
        public $emailSolicitante;


        public function getNomeSolicitante() {
            return $this->nomeSolicitante;
        }

        public function getRuaSolicitante() {
            return $this->ruaSolicitante;
        }

        public function getCompSolicitante() {
            return $this->compSolicitante;
        }

        public function getBairroSolicitante() {
            return $this->bairroSolicitante ;
        }

        public function getCidadeSolicitante() {
            return $this->cidadeSolicitante ;
        }

        public function getUfSolicitante() {
            return $this->ufSolicitante;
        }

        public function getCepSolicitante() {
            return $this->cepSolicitante;
        }

        public function getTelSolicitante() {
            return $this->telSolicitante;
        }

        public function getEmailSolicitante() {
            return $this->emailSolicitante;
        }


        public function setNomeSolicitante($nomeSolicitante) {
            $this->nomeSolicitante = $nomeSolicitante;
        }

        public function setRuaSolicitante($ruaSolicitante) {
            $this->ruaSolicitante = $ruaSolicitante;
        }

        public function setCompSolicitante($compSolicitante) {
            $this->compSolicitante = $compSolicitante;
        }

        public function setBairroSolicitante($bairroSolicitante) {
            $this->bairroSolicitante = $bairroSolicitante;
        }

        public function setCidadeSolicitante($cidadeSolicitante) {
            $this->cidadeSolicitante = $cidadeSolicitante;
        }

        public function setUfSolicitante($ufSolicitante) {
            $this->ufSolicitante = $ufSolicitante;
        }

        public function setCepSolicitante($cepSolicitante) {
            $this->cepSolicitante = $cepSolicitante;
        }

        public function setTelSolicitante($telSolicitante) {
            $this->telSolicitante = $telSolicitante;
        }

        public function setEmailSolicitante($emailSolicitante) {
            $this->emailSolicitante = $emailSolicitante;
        }

    }

?>