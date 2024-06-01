<?php

require_once "../Connection/Connection.php";

class libro {

    public function ObtenerLibroModel(){
        $connection = connection();
        $sql = "SELECT * FROM libro;";
        $respuesta = $connection->query($sql);
        $libros = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }
    public function ObtenerLibroPorFechaModel(){
        $connection = connection();
        $sql = "SELECT * FROM libro ORDER BY fecha DESC";
        $respuesta = $connection->query($sql);
        $libros = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }
    public function ObtenerLibroPorPrecioModel(){
        $connection = connection();
        $sql = "SELECT * FROM libro ORDER BY precio DESC";
        $respuesta = $connection->query($sql);
        $libros = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }
    public function IngresarLibroModel($nombre, $fecha, $precio){
        $sql = "INSERT INTO libro(nombre, fecha, precio) VALUES('$nombre', '$fecha', '$precio');";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

    public function EliminarLibroModel($id){
        $sql = "DELETE FROM libro WHERE id = $id;";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
    public function ModificarLibroModel($id, $nombre, $fecha, $precio){
        $sql = "UPDATE libro SET nombre = '$nombre' , fecha = '$fecha' , precio = $precio WHERE id = $id";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
}
?>