<?php

include "conexion.php";
error_reporting(0);
session_start();

if(isset($_SESSION["nombreuser"])){
    header("Location: index.html");
}

?>