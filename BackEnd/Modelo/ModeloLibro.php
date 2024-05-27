<?php

require_once "../Conexion/Conexion.php";

class libro {

    public function ObtenerLibroModelo(){
        $connection = connection();
        $sql = "SELECT * FROM libro";
        $respuesta = $connection->query($sql);
        $libros = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }
    public function ObtenerLibroPorFechaModelo(){
        $connection = connection();
        $sql = "SELECT * FROM libro ORDER BY DESC";
        $respuesta = $connection->query($sql);
        $libros = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }
    public function ObtenerLibroPorPrecioModelo(){
        $connection = connection();
        $sql = "SELECT * FROM libro ORDER BY DESC";
        $respuesta = $connection->query($sql);
        $libros = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }
    public function CrearLibroModelo($id, $nombre, $fecha, $precio){
        $sql = "INSERT INTO libro(id, nombre, fecha, precio) VALUES( '$id', '$nombre', '$fecha', '$precio');";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

    public function EliminarLibroModelo($id){
        $sql = "DELETE FROM libro WHERE id = $id;";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
    public function ModificarLibroModelo($id){
        $sql = "UPDATE libro WHERE id = $id;";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
}
?>