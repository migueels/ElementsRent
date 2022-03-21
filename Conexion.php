<!-- CONEXION CON LA BBDD-->

<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "elementsrent";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion: ".mysqli_connect_error());
}
?>
