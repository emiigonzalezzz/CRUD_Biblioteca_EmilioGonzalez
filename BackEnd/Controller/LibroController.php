<?php

require_once '../Model/LibroDAO.php';

$function = $_GET['function'];

switch ($function){
    case "ObtenerLibro":
        ObtenerLibro();
    break;
    case "ObtenerLibroPorFecha":
        ObtenerLibroPorFecha();
    break;
    case "ObtenerLibroPorPrecio":
        ObtenerLibroPorPrecio();
    break;
    case "IngresarLibro":
        IngresarLibro();
    break;
    case "EliminarLibro":
        EliminarLibro();
    break;
    case "ModificarLibro":
        ModificarLibro();
    break;
}

function ObtenerLibro(){
    $resultado = (new libro())->ObtenerLibroModel();
    echo json_encode($resultado);
}
function ObtenerLibroPorFecha(){
    $resultado = (new libro())->ObtenerLibroPorFechaModel();
    echo json_encode($resultado);
}
function ObtenerLibroPorPrecio(){
    $resultado = (new libro())->ObtenerLibroPorPrecioModel();
    echo json_encode($resultado);
}
function IngresarLibro(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new libro())->IngresarLibroModel($id, $nombre, $fecha, $precio);
    echo json_encode($resultado);
}

function EliminarLibro(){
    $id = $_POST["id"];
    $resultado = (new libro())->EliminarLibroModel($id);
    echo json_encode($resultado);
}
function ModificarLibro(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new libro())->ModificarLibroModel($id, $nombre, $fecha, $precio);
    echo json_encode($resultado);
}


?>