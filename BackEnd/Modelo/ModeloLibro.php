<?php

require_once "../Conexion/Conexion.php";

class Libro {

    public function ObtenerLibroModelo(){
        $connection = connection();
        $sql = "SELECT * FROM libro";
        $respuesta = $connection->query($sql);
        $libros = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }
    public function ObtenerLibroPorFecha(){
        $connection = connection();
        $sql = "SELECT * FROM libro ORDER BY desc";
        $respuesta = $connection->query($sql);
        $libros = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }
    public function ObtenerLibroPorPrecio(){
        $connection = connection();
        $sql = "SELECT * FROM libro ORDER BY desc";
        $respuesta = $connection->query($sql);
        $libros = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }
    public function CrearLibro($id, $nombre, $fecha, $precio){
        $sql = "INSERT INTO libro(id, nombre, fecha, precio) VALUES( '$id', '$nombre', '$fecha', '$precio');";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

    public function EliminarUsuario($id){
        $sql = "DELETE FROM libro WHERE id = $id;";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
    public function ModificarLibro($id){
        $sql = "UPDATE libro WHERE id = $id;";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
}
?>