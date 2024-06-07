<?php
class Respuesta {
    public $succes;
    public $mensaje;
    public $data;

    function __construct($succes, $mensaje, $data) {
    $this ->succes = $succes;
    $this ->mensaje = $mensaje;
    $this -> data = $data;
    }
}
?>