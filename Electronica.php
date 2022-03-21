<?php

include("Conexion.php");
session_start();

if(!isset($_SESSION['nombreuser'])){ //esto es para comporbar que tiene sesion iniciada
    header("Location: login.php"); //si no esta logueado al acceder al index redirecciona a login
}

//$sql = "SELECT * FROM productos WHERE categoria = 'Electronica' ";
//$query = mysqli_query($conn,$sql);
//$_ID = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title >Productos</title>
	<link rel="stylesheet" type="text/css" href="ElementsRent.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="ElementsRent.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="css_carrito/styles.css" rel="stylesheet" />
    <link href="css_carrito/estilos.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/sweetalert2.min.css">

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
.checked {
  color: orange;
}
.container{
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
    max-width: 1300px;

}

.header{
    background: radial-gradient(#fff,#34b9b9);
    
}

.site-footer{
  padding:4em 0;
  background-size:cover;
  background-position:center center;
  background-repeat:no-repeat;
  color:rgba(2, 0, 0, 0.5);
  position:relative;
}

.site-footer:before{
  position:absolute;
  content:"";
  background:rgba(43, 184, 177);
  top:0;
  left:0;
  right:0;
  bottom:0;
}

.site-footer .footer-heading{
  font-size:20px;
}

.site-footer a
{
color:rgba(20, 1, 1, 0.3);
}
.site-footer a:hover{
  color:#fff;
}
.site-footer ul li{
  margin-bottom:10px;
}


</style>
</head>
<body>
    <a href="carrito.php" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>
    <div class="header">

        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="img/logo.png" width="100.px">
                </div>
                <nav>
                    <ul>
                     <li><a href="index2.php">Inicio</a></li>
                     <li class="dropdown">
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias
                         <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                           <li><a href="Electronica.html">Eletronica</a></li>
                           <li><a href="Construccion.html">Contrucción y obras</a></li>
                           <li><a href="TV_Audio.html">TV, Audio & Imagen</a></li> 
                         </ul>
                       </li>
                     <li><a href="Contacto.html">Contacto</a></li>
                     <li><a href="NuevoProducto.php">+ Producto</a></li>
        
                     
                     <li><a href="carrito.php"><span class="glyphicon glyphicon-shopping-cart logo-small"></span></a></li>
                     <li class="dropdown">
                         
                         <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user logoo-small"></span></a>
                         
                         <ul class="dropdown-menu">
                            <li><?php echo ucwords($_SESSION['nombreUser']);?></li>
                           <li><a href="logout.php">Log out  <span class="glyphicon glyphicon-log-out logoo-small"></span></a></li>
                        
    
                         </ul>
                     </li>
                     <li><a href="#"><span id="translate_element" class="	glyphicon glyphicon-question-sign"></span></a></li>
                    </ul>
                </nav>
            </div> 
        </div>
    </div>

    <!-- PRODUCTOS -->

    <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Electrónica</h1>
        </div>

        <div class="container-productos" id="lista-productos">
            

                <div class="card-deck mb-3 text-center">
                   <?php
                    $query = "SELECT * FROM productos WHERE fechaAdd < '2022-03-22'";
                    $resultado = $conn->query($query);
                    while($row = $resultado->fetch_assoc()){
                        ?> 

                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-bold"><?php echo $row['nombreProducto']; ?></h4>
                        </div>
                        <div class="card-body">
                            <img src = "data:imagen/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" class="card-img-top">
                            <h2 class="card-title pricing-card-title precio"><?php echo $row['precio']; ?>€</h2>
                            <ul class="list-unstyled mt-3 mb-4">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                
                            </ul>
                            <!--<a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a> -->
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['idProducto']; ?>" href="#">Agregar</a></div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>


                </div>
            
            



        </div>
    </main>

    <!--footer-->

    <footer class="site-footer">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <h3 class="footer-heading mb-4 text-white">About</h3>
                 <p>Tratamos de ofrecer el mejor servicio y mostrar los articulos más actualizados posibles</p>
              </div>
              <div class="col-md-6">
                 <div class="row">
                    <div class="col-md-6">
                       <h3 class="footer-heading mb-4 text-white">Menu</h3>
                       <ul class="list-unstyled">
                          <li><a href="#">Contacto</a></li>
                          <li><a href="#">Nuevo producto</a></li>
                       </ul>
                    </div>
                    <div class="col-md-6">
                       <h3 class="footer-heading mb-4 text-white">Categorias</h3>
                       <ul class="list-unstyled">
                          <li><a href="#" target="blank">Electronica</a></li>
                          <li><a href="#" target="blank">Construccion y obras</a></li>
                          <li><a href="#" target="blank">TV, Audio & Imagen</a></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-md-2">
                 <div class="col-md-12">
                    <h3 class="footer-heading mb-4 text-white">Redes Sociales</h3>
                 </div>
                 <div class="col-md-12">
                    <p> <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a><a href="#" class="p-2"><span class="icon-twitter"></span></a> <a href="#" class="p-2"><span class="icon-instagram"></span></a> <a href="#" class="p-2"><span class="icon-vimeo"></span></a> </p>
                 </div>
              </div>
           </div>
           <div class="row pt-5 mt-5 text-center">
              <div class="col-md-12">
                 <p> Copyright &copy; All Rights Reserved | ElementsRent </p>
              </div>
           </div>
        </div>
      </footer>
    
    
      <!--SCRIP-->
      <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'es,ca,eu,gl,en,fr,it,pt,de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'translate_element');
                }
        </script>
        
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>    

	
</body>
</html>