<?php
require "../modelo/conexion.php";
require'../modelo/m_cliente.php';
require'../modelo/m_zona.php';

$datos = array(
    $_POST['codigo'],
    $_POST['nombre'],
    $_POST['direccion'],
    $_POST['tipoCliente'],
    $_POST['fechaRegistro'],
    $_POST['codZona'],
    $_POST['cantidadPedido']
);

function registrar($datos) {
    $c = new cliente();
    $c->registrar($datos);
    $alert = "Se han guardado los datos";
    header("location:../cliente.php?des=".$alert);
}

function buscar($datos){
    $c = new cliente();
    $alert = "Esos datos no existen";
    $buscar = $c->buscar($datos[0]);
    if($dato = $c->formaArreglo($buscar)){
        header("location:../cliente.php?cod=".$dato['cod']."&nom=".$dato['nombre']."&dir=".$dato['direccion']."&tcl=".$dato['tipo_cliente']."&fre=".$dato['fechaRegistro']."&czo=".$dato['codZona']."&cpe=".$dato['cantidadPedido']);
    }
    else {
        header("location:../cliente.php");
    }
}

function editar($datos) {
    $c = new cliente();
    $c->editar($datos);
    $alert = "Se han Actualizado los datos";
    header("location:../cliente.php?des=".$alert);
}

function eliminar($datos) {
    $c = new cliente();
    $c->eliminar($datos[0]);
    $alert = "Se han Eliminado los datos";
    header("location:../cliente.php?des=".$alert);
}

function validarZona($datos, $opcion){
    $z = new zona();
    $buscar = $z->buscar($datos[5]);
    $alert = "Ese codigo de Zona no existe";
    if (!$z->formaArreglo($buscar)) {
        header("location:../cliente.php?des=".$alert);
    }
    else {
        switch ($opcion){
            case "incluir":
                registrar($datos);
                break;
            case "editar":
                editar($datos);
                break;
        }
    }

}

if (isset($_POST['incluir'])) {
    validarZona($datos, $_POST['incluir']);
}

if (isset($_POST['buscar'])) {
   buscar($datos);
}

if (isset($_POST['editar'])) {
    validarZona($datos, $_POST['editar']);
}

if (isset($_POST['eliminar'])) {
    eliminar($datos);
}
