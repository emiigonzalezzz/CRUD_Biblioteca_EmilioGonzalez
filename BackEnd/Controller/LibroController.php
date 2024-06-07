<?php

require_once '../Model/LibroDAO.php';

$function = $_GET['function'];

switch ($function) {
    case "ObtenerLibro":
        ObtenerLibro();
        break;
    case "ObtenerOrdenados":
        ObtenerOrdenados();
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

function ObtenerLibro()
{
    $resultado = (new libro())->ObtenerLibroModel();
    echo json_encode($resultado);
}
function ObtenerOrdenados()
{
    $columna = $_POST['columna'];
    $orden = $_POST['orden'];
    $resultado = (new libro())->ObtenerOrdenadosModel($columna, $orden);
    echo json_encode($resultado);
}

function IngresarLibro()
{
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new libro())->IngresarLibroModel($nombre, $fecha, $precio);
    echo json_encode($resultado);
}

function EliminarLibro()
{
    $id = $_POST["id"];
    $resultado = (new libro())->EliminarLibroModel($id);
    echo json_encode($resultado);
}
function ModificarLibro()
{
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new libro())->ModificarLibroModel($id, $nombre, $fecha, $precio);
    echo json_encode($resultado);
}
