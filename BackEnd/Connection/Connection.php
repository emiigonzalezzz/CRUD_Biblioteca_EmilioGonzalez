<?php

ini_set('display_errors', '0');
ini_set('display_starup_errors', '0');
ini_set('log_errors', '0');
ini_set('errors_log', '../Log/php_errors.php');
function connection(){
    try{
        $host = "localhost";
        $usr = "root";
        $pass = "";
        $bd = "biblioteca";
        $puerto = "3306";
        $mysqli = new mysqli($host, $usr, $pass, $bd, $puerto);
        return $mysqli;


    }catch (Exception $e){

         echo $e->getMessage();
    }
  
}
?>