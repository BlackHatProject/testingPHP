<?php
require "../modelo/conexion.php";
require'../modelo/m_zona.php';

$datos = array(
    $_POST['cod'],
    $_POST['des'],
    $_POST['ubi']
);

function registrar($datos) {
    $z = new zona();
    $z->registrar($datos);
    header("location:../zona.php");
}

function buscar($datos){
    $z = new zona();
    $buscar = $z->buscar($datos[0]);
    if($dato = $z->formaArreglo($buscar)){
        header("location:../zona.php?cod=".$dato['cod']."&des=".$dato['des']."&ubi=".$dato['ubi']);
    }
    else {
        header("location:../zona.php");
    }
}

function editar($datos) {
    $z = new zona();
    $z->editar($datos);
    header("location:../zona.php");
}

function eliminar($datos) {
    $z = new zona();
    $z->eliminar($datos[0]);
    header("location:../zona.php");
}

if (isset($_POST['incluir'])) {
    registrar($datos);
}

if (isset($_POST['buscar'])) {
    buscar($datos);
}

if (isset($_POST['editar'])) {
    editar($datos);
}

if (isset($_POST['eliminar'])) {
    eliminar($datos);
}


