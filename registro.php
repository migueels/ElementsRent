
<?php

include "Conexion.php";
session_start();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$direccion = $_POST["direccion"];
$password = $_POST["password"];
$nombreuser = $_POST["nombreuser"];        
        

if(isset($_POST['btnregistro'])){

    $sqladd = "INSERT INTO usuarios (nombre, apellido, nombreuser,direccion,email,password) VALUES ('$nombre','$apellido','$nombreuser','$direccion','$email','$password')";

    if(mysqli_query($conn,$sqladd)){
        echo "<script> alert('Usuario registrado: $nombreuser'); window.location='login.php' </script>";
    }else{
        echo "ERROR".$sql."<br>".mysql_error($conn);
    }        
}       



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>


  <style>
 body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
   background: url(img/se_alquila.jpg);
    background-size: cover;
    background-attachment: fixed;
}
* {
    box-sizing: border-box;
}
.container{
    width: 100%;
    padding: 10px;
}
.formulario{
    background: #fff;
    margin-top: 100px;
    padding: 3px;
}
h1{
    text-align: center;
    color: #1a2537;
    font-size: 40px;
}
input[type="text"],
input[type="password"]{
    font-size: 20px;
    width: 82%;
    padding: 10px;
    border: none;
}
.input-container{
    margin-bottom: 15px;
    border: 1px solid #aaa;
}
.input-container-c{
    margin-bottom: 15px;
    border: 1px solid #aaa;
}
.logo-small{
    min-width: 50px;
    text-align: center;
    color: #999;
}
.button{
    border: none;
    width: 100%;
    color: white;
    font-size: 20px;
    background:  #1590a0;
    padding: 15px 20px;
    border-radius: 5px;
    cursor: pointer;
}
.button:hover{
    background: cadetblue;
}
p{
    text-align: center;
}
.link{
    text-decoration: none;
      color: #1a2537;
    font-weight: 600;
}
.link:hover{
     color: cadetblue;
}
@media(min-width:768px)
{
    .formulario{
        margin: auto;
        width: 500px;
        margin-top: 150px;
        border-radius: 2%;
    }
}


  </style>
</head>
<body id="LoginPage" >

    <form action="registro.php" method="POST" class="formulario">
      
      <h1>Registro usuario</h1>
      <div class="container">

        <div class="input-container">
            <i class="glyphicon glyphicon-user logo-small"></i>
            <input type = "text" placeholder="Nombre" name="nombre">
        </div>

        <div class="input-container">
            <i class="glyphicon glyphicon-user logo-small"></i>
            <input type = "text" placeholder="Apellidos" name="apellido">
        </div>

        <div class="input-container">
          <i class="glyphicon glyphicon-user logo-small"></i>
          <input type = "text" placeholder="Nombre de usuario" name="nombreuser">
        </div>

        <div class="input-container">
            <i class="glyphicon glyphicon-envelope logo-small"></i>
            <input type = "text" placeholder="Correo Electronico" name="email">
        </div>

        <div class="input-container">
            <i class="glyphicon glyphicon-home logo-small"></i>
            <input type = "text" placeholder="Direccion domicilio (calle)" name="direccion">
        </div>


        <!-- contedor para la contraseña-->
        <div class="input-container">
          <i class="glyphicon glyphicon-lock logo-small"></i>
          <input type = "password" placeholder="Contraseña" name="password">
        </div>

    

        <!--boton submit de inicio login-->
        <input type = "submit" value="registro" class="button" name="btnregistro">
        <br>
        <p>¿Ya estas registrado?<a class="link" href="login.php">Login </a></p>


      </div>

    </form> 

    

     

</body>