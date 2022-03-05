
<?php

include "Conexion.php";
session_start();

        
if(!isset($_SESSION['idUser'])){ //esto es para comporbar que tiene sesion iniciada
    header("Location: login.php"); //si no esta logueado al acceder al index redirecciona a login
}
        

if(isset($_POST['btnupload'])){

    $nombreProducto = $_POST['nombreProducto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $imagen =   addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
    $idUser = $_SESSION['idUser'];

    $sqladd = "INSERT INTO productos (nombreProducto,descripcion, precio, categoria, fechaAdd,idUser, imagen) values ('$nombreProducto','$descripcion','$precio','$categoria',NOW(),'$idUser','$imagen')";

    if(mysqli_query($conn,$sqladd)){
        echo "<script> alert('Prducto registrado: $nombreProducto'); window.location='index2.php' </script>";
    }else{
        echo "ERROR".$sql."<br>".mysql_error($conn);
    }        
}       



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ELEMENTS REN</title>
    <!--<link rel = "stylesheet" href="style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.navbar{
    display: flex;
    align-items: center;
    padding: 20px;
}
nav{
    flex: 1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style-type: none;
}
nav ul li{
    display: inline-block;
    margin-right: 20px;
    width: 120px;
    
}

a{
    text-decoration: none;
    color: #555;
}

p{
    color: #555;
}

.header{
    background: radial-gradient(#fff,#34b9b9)
}

.new-product-page{
    padding: 50px 0;
    background: radial-gradient(#fff,#34b9b9)
}

.container{
    width: 85%;
    padding: 5px;
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

.button{
    border: none;
    width: 80%;
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
        width: 400px;
        margin-top: 20px;
        border-radius: 2%;
    }
}





</style>

</head>


<body>


    <div class="header">

        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="img/logo.png" width="100.px">
                </div>
                <nav>
                    <ul>
                     <li><a href="#myPage">Inicio</a></li>
                     <li class="dropdown">
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias
                         <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                           <li><a href="#">Eletronica</a></li>
                           <li><a href="#">Contrucción y obras</a></li>
                           <li><a href="#">TV, Audio & Imagen</a></li> 
                         </ul>
                       </li>
                     <li><a href="#">Contacto</a></li>
                     <li><a href="NuevoProducto.php">+ Producto</a></li>
             
                     
                     <li><a href="#"><span class="glyphicon glyphicon-shopping-cart logo-small"></span></a></li>
                     <li class="dropdown">
                         
                         <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user logoo-small"></span></a>
                         
                         <ul class="dropdown-menu">
                            <li><?php echo ucwords($_SESSION['nombreuser']);?></li>
                           <li><a href="logout.php">Log out  <span class="glyphicon glyphicon-log-out logoo-small"></span></a></li>
                        
    
                         </ul>
                     </li>
                     <li><a href="#"><span id="translate_element" class="	glyphicon glyphicon-question-sign"></span></a></li>
                    </ul>
                </nav>
            </div> 
            
        </div>

    </div>


    <!-- form añadir nuevo prodcuto -->
    <div class="new-product-page">
        <div class="container-product">
            <form action="newProducto.php" method="POST" class="formulario" enctype = "multipart/form-data">
      
                <h1>Registro usuario</h1>
                <div class="container">
          
                  <div class="input-container">
                      
                      <input type = "text" placeholder="Nombre producto" name="nombreProducto">
                  </div>
                  <p>nombres categorias</p>
                  <div class="input-container">
                      
                      <input type = "text" placeholder="Categoria" name="categoria">
                  </div>
          
                  <div class="input-container">
                    
                    <input type = "text" placeholder="precio por dia" name="precio">
                  </div>
          
          
                  <div class="input-container">
                    <label class="font-weight-bold" for="message">Descripción producto</label> <div id="info">Máximo 300 caracteres</div> <textarea id="texto" onkeypress=" limita(event, 300);" onkeyup="actualizaInfo(100)" rows="6" cols="30" name="descripcion" id="message" class="form-control"></textarea> 

                  </div>

                  <div class="row form-group">
                    <div class="col-md-12">
                        <label for="imagen">Imagen</label>
                        <div class="upimg">
                          <input type="file" name="imagen" id=""foto>
                        </div>
                        <div id="form_alert"></div>
                    </div>

                    </div>
                
          
          
              
          
                  <!--boton submit de inicio login-->
                  <input type = "submit" value="upload" class="button" name="btnupload">
                  <br>
                  <p>Cancelar upload<a class="link" href="index.php">Login </a></p>
                  

          
                </div>
          
              </form> 
        </div>
    </div>
    

</body>
</html>