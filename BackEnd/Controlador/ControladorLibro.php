<?php

require_once '../Modelo/ModeloLibro.php';

$funcion = $_GET['funcion'];

switch ($funcion){
    case "ObtenerLibro":
        ObtenerLibro();
    break;
    case "ObtenerLibroPorFecha":
        ObtenerLibroPorFecha();
    break;
    case "ObtenerLibroPorPrecio":
        ObtenerLibroPorPrecio();
    break;
    case "CrearLibro":
        CrearLibro();
    break;
    case "EliminarLibro":
        EliminarLibro();
    break;
    case "ModificarLibro":
        ModificarLibro();
    break;
}

function ObtenerLibro(){
    $resultado = (new libro())->ObtenerLibroModelo();
    echo json_encode($resultado);
}
function ObtenerLibroPorFecha(){
    $resultado = (new libro())->ObtenerLibroModelo();
    echo json_encode($resultado);
}
function ObtenerLibroPorPrecio(){
    $resultado = (new libro())->ObtenerLibroModelo();
    echo json_encode($resultado);
}
function CrearLibro(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new libro())->CrearLibro($id, $nombre, $fecha, $precio);
    echo json_encode($resultado);
}

function EliminarLibro(){
    $id = $_POST["id"];
    $resultado = (new libro())->EliminarLibro($id);
    echo json_encode($resultado);
}
function ModificarLibro(){
    $id = $_POST["id"];
    $resultado = (new libro())->ModificarLibro($id);
    echo json_encode($resultado);
}


?>