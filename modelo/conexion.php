<?php

    class conexion {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "clase1";
        
        public function conectar() {
            $con = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
            return $con;
        }
        
        public function query($query) {
            return mysqli_query($this->conectar(), $query);
        }
        
        public function cambiaArreglo($dato){
            return mysqli_fetch_array($dato, MYSQLI_ASSOC);
        }
    }