
<?php

include("Conexion.php");
session_start();

$password = $_POST["password"];
$nombreuser = $_POST["nombreuser"];        

if(isset($_SESSION['nombreuser'])){
  header("Location: index2.html");
}

if(isset($_POST['btnlogin'])){

    $query = mysqli_query($conn,"SELECT  * FROM usuarios WHERE nombreuser = '$nombreuser' AND password = '$password'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){

        $_SESSION['nombreuser'] = $nombreuser;
        echo "<script> alert('Bienvenido: $nombre'); window.location='index2.php' </script>";
    }else{
        echo "<script> alert('Usuario no registrado'); window.location='registro.php' </script>";
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
    padding: 15px;
}
.formulario{
    background: #fff;
    margin-top: 150px;
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

    <form action="" method="post" class="formulario">
      <h1>Login usuario</h1>
      <div class="container">

        <div class="social-login">
          <div class="social-login-element">
           <img src="img/facevook.png" alt="facebook-imagen"> 
           
          </div>
          <br>
          <div class="social-login-element">
            <img src="img/google.png" alt="google-imagen"> 
            
           </div>
        </div>
        <br>
        <br>
        <p>OR</p>
        <div class="input-container">
          <i class="glyphicon glyphicon-user logo-small"></i>
          <input type = "text" placeholder="Nombre de usuario" name="nombreuser">
        </div>

        <!-- contedor para la contraseña-->
        <div class="input-container">
          <i class="glyphicon glyphicon-lock logo-small"></i>
          <input type = "password" placeholder="Contraseña" name="password">
        </div>

        <!--Captcha google api-->
        <div id="status" class="input-container-c">
          <div class="g-recaptcha" data-sitekey = "6Lela6keAAAAAG5RFLdamaVwt6BArtRA1uVeo1h9">
          </div>
        </div>

        <!--fin del captcha-->

        <!--boton submit de inicio login-->
        <input type = "submit" onclick="download()" value="Login" class="button" name="btnlogin">
        <br>
        <p>¿Aun no estas registrado?<a class="link" href="registro.php">Registrate </a></p>


      </div>

    </form> 

    

<script>
  function download(){
    var response = grecaptcha.getResponse();
    if(response.length !=0)
      window.open("https.//google.com/");
    else  
      document.getElementById('status').innerHTML = "Debes aceptar el captcha;"
  }
</script>
     

</body>