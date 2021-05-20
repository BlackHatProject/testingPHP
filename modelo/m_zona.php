<?php
    
    class zona extends conexion {       
        public function registrar($datos){
            $sql = "INSERT INTO zona VALUES('$datos[0]','$datos[1]','$datos[2]')";
            return $result = parent::query($sql);
        }
        
        public function buscar($id){
            $sql = "SELECT * from zona where cod='$id'";
            return $result = parent::query($sql);
        }
        
        public function editar($datos){
            $sql = "UPDATE zona set des='$datos[1]',ubi='$datos[2]' WHERE cod='$datos[0]'";
            return $result = parent::query($sql);
        }
        
        public function eliminar($id){
            $sql = "DELETE from zona where cod='$id'";
            return $result = parent::query($sql);
        }
        
        public function formaArreglo($dato){
            return parent::cambiaArreglo($dato);
        }
    }
