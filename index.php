<?php

include("Conexion.php");
session_start();

if(!isset($_SESSION['nombreuser'])){ //esto es para comporbar que tiene sesion iniciada
    header("Location: login.php"); //si no esta logueado al acceder al index redirecciona a login
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
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3,h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #115;
  }
  .logo {
    color: #f4511e;
    font-size: 100px;
  }
  .logo-small {
    color: #f4511e;
    font-size: 25px;
  }
  .logoo-small {
    color: #706664;
    font-size: 25px;
  }

  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 70%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #ffffff;
    color: #000000;
  }
  .bg-1 h3 {color: rgb(0, 0, 0);}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2bb8b1;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #000000 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: rgb(38, 194, 160) !important;
    background-color: #4b4b9c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: rgb(32, 141, 214) !important;
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
.form-control {
  border-radius: 0;
}
textarea {
  resize: none;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="img/logo.png" width="100px" align="left"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
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
        <li><a href="#">+ Producto</a></li>

        
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart logo-small"></span></a></li>
        <li class="dropdown">
            
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo ucwords($_SESSION['nombreuser']);?><span class="glyphicon glyphicon-user logoo-small"></span></a>
            
            <ul class="dropdown-menu">
              <li><a href="logout.php">Log out<span class="glyphicon glyphicon-log-out logoo-small"></span></a></li>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="ny.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>      
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="la.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>








<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>ELEMENTs RENT</h3>
  <p><em>la plataforma de alquileres de confianza</em></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>¿QUIENES SOMOS?</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="img/quienesomos.png" alt="icono quien somos" alt="Random Name" width="100" height="100">
        
      </a>
    <p>ElementsRent es una empresa creada con capital español en 2019. Sus fundadores son grandes expertos en el sector de las ventas de segunda mano.</p>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>OBJETIVO</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="img/quehacemos.png" alt="icono que hacemos" alt="Random Name" width="100" height="100">
      </a>
      <p>En ElementsRent queremos ayudar a los clientes a encontrar objetos que quieren utilizar en algun momento de su vida,y pueda utilizarlo en el momento que lo necesiten.</p>
      
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>¿DÓNDE ESTAMOS?</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="img/localizacion.jpg" alt="icono localizacion" alt="Random Name" width="100" height="100">
      </a>
      <p>Nuestra sede de trabajo se encuentra ubicada en Pozuelo de Alarcón,Madrid</p>
    </div>
  </div>
</div>




<!-- COntanider servicios ofrecidos-->
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <h3>SERVICIOS</h3>
  <p><em>En Elements Rent ofrecemos</em></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
    <span class="glyphicon glyphicon-euro logo"></span><p><strong>GARANTÍA</strong></p>
      
    <p>Garantia gratuita 3 dias, envio gratuito</p>
    </div>
    <div class="col-sm-4">
     <span class="glyphicon glyphicon-plane logo"></span><p class="text-center"><strong>ENVIO GRÁTIS</strong></p>
      
      <p>Envios gratuitos por alquileres superiores a 50 €</p>
      
    </div>
    <div class="col-sm-4">
        <span class="glyphicon glyphicon-gift logo"></span><p class="text-center"><strong>OFERTAS DESTACADAS</strong></p>
      
      <p>Ofertas exclusivas a lo largo del año</p>
    </div>
  </div>
</div>





<!-- Container (Productos destacados) -->

<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">PRODUCTOS DESTACADOS</h3>
    <p class="text-center">Productos favoritos de los usuarios</p>
    <br>
    <br><p>Categorias favoritas de los usuarios</p>
    <ul class="list-group">
      <li class="list-group-item">Electronica <span class="badge">Top 1</span></li>
      <li class="list-group-item">Contrucción y obras <span class="badge">Top 2</span></li> 
      <li class="list-group-item">TV, Sonido & Imagen <span class="badge">Top 3</span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="paris.jpg" alt="tv" width="400" height="300">
          <p><strong>TV</strong></p>
          <p>TV Samsung 53"</p>
          
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="newyork.jpg" alt="martillo" width="400" height="300">
          <p><strong>Martillo</strong></p>
          <p>Descripcion del martillo</p>
          
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="sanfran.jpg" alt="dron" width="400" height="300">
          <p><strong>Dron</strong></p>
          <p>Descripcion del dron</p>
          
        </div>
      </div>
    </div>
  </div>
  


<!-- Seccion productos destacados 


			
		</div><
<br>
<br>
<br>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid ">
    <h2 class="text-center">CONTACTO</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Estamos a disposicion de los alumnos para cualquien duda relevante en relacion con la Universidad. Nuestro horario es de Lnes- Viernes (8:00- 20:00)</p>
        <p><span class="glyphicon glyphicon-map-marker"></span>Pozuelo de Alarcón, Madrid</p>
        <p><span class="glyphicon glyphicon-phone"></span>917306589</p>
        <p><span class="glyphicon glyphicon-envelope"></span> UniversidadFranciscoVitoria@ufv.es</p>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="carrera" name="carrera" placeholder="Asunto" type="text" required>
          </div>
        </div>
        <textarea class="form-control" id="comentario" name="comments" placeholder="Commentario" rows="5" name = "comentario"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>

<!-- Image of location/map -->
<img src="map.jpg" class="img-responsive" style="width:100%">

<!-- Footer -->
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
                    <li><a href="preguntas.html">Contacto</a></li>
                    <li><a href="colabora.html">Nuevo producto</a></li>
                 </ul>
              </div>
              <div class="col-md-6">
                 <h3 class="footer-heading mb-4 text-white">Categorias</h3>
                 <ul class="list-unstyled">
                    <li><a href="https://elpais.com/" target="blank">Electronica</a></li>
                    <li><a href="https://ec.europa.eu/info/index_es" target="blank">Construccion y obras</a></li>
                    <li><a href="https://www.elmundo.es/" target="blank">TV, Audio & Imagen</a></li>
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

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>