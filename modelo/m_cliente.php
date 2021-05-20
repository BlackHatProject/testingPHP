<?php
    
    class cliente extends conexion {       
        public function registrar($datos){
            $sql = "INSERT INTO cliente VALUES('$datos[0]',
                                               '$datos[1]',
                                               '$datos[2]',
                                               '$datos[3]',
                                               '$datos[4]',
                                               '$datos[5]',
                                               '$datos[6]')";
            return $result = parent::query($sql);
        }
        
        public function buscar($id){
            $sql = "SELECT * from cliente where cod='$id'";
            return $result = parent::query($sql);
        }
        
        public function editar($datos){
            $sql = "UPDATE cliente set nombre='$datos[1]',
                                       direccion='$datos[2]', 
                                       tipo_cliente='$datos[3]',
                                       fechaRegistro='$datos[4]',
                                       codZona='$datos[5]',
                                       cantidadPedido='$datos[6]'
                                       WHERE cod='$datos[0]'";
            return $result = parent::query($sql);
        }
        
        public function eliminar($id){
            $sql = "DELETE from cliente where cod='$id'";
            return $result = parent::query($sql);
        }
        
        public function formaArreglo($dato){
            return parent::cambiaArreglo($dato);
        }
    }