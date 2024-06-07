<?php
class Procedimiento{
public function ObtenerLibro($id){
    return $id['id'];
    }
}

//public function InsertarProcedimientoDAO($nombre, $fecha, $precio){
$sql = "INSERT INTO procedimiento(nombre, fecha, precio);";
$connection = connection();
$respuesta = $connection->query($sql);
if ($respuesta){
        return new Respuesta(true, "Procedimiento insertado", $respuesta);
}else{
return new Respuesta(false, "Error al insertar el procedimiento", $respuesta);
}
//}

//public function ModificarProcedimientoDAO($id, $nombre, $fecha, $precio){
    $sql = "UPDATE libro SET nombre = '$nombre' , fecha = '$fecha' , precio = $precio WHERE id = $id";
    $connection = connection();
    $respuesta = $connection->query($sql);
    return $respuesta;

//}

?>