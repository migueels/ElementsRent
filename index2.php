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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ELEMENTS REN</title>
    <!--<link rel = "stylesheet" href="style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css_carrito/styles.css" rel="stylesheet" />
    <link href="css_carrito/estilos.css" rel="stylesheet" />
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
.container{
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
    max-width: 1300px;

}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;

}
.col-2{
    flex-basis: 50%;
    min-width: 300px;
}
.col-2 img{
    padding: 50px 0;
    max-width: 60%;
    padding-left: 20px;
    
}
.col-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
}
.btn{
    display: inline-block;
    background: #2ddddd;
    color: white;
    padding: 8px 30px;
    margin: 30px 0px;
    border-radius: 30px;
}

.small-container{
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}

.small-container .card{
    width: 275px;
    height: auto;
    border-radius:8px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    margin: 20px;
    text-align: center;
    transition: all 0.25s;
    float: left;
}

.small-container .card:hover{
    transform: translate(-15px);
    box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
}

.small-container img{
    width: 330px;
    height: 220px;
}



.col-4{
    flex-basis: 25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px; 

}

.col-4 img{
    width: 50%;
}

.title{
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555

}

.small-container-one{
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
    text-align: center;
}
.small-container-one h3{
    text-align: center;
    color: black;
    padding-bottom: 25px;
}


.categories{
    margin: 70px 0;   
}

.col-3{
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}
.col-3 img{
    width: 50%;
}    


.header{
    background: radial-gradient(#fff,#34b9b9);
    
}

.carousel-control.right, .carousel-control.left {
  background-image: none;
  color: #f4511e;
}

.carousel-indicators li {
  border-color: #34b9b9;
}

.carousel-indicators li.active {
  background-color: #34b9b9;
}

.item h4 {
  font-size: 19px;
  line-height: 1.375em;
  font-weight: 400;
  font-style: italic;
  margin: 70px 0;
}

.item span {
  font-style: normal;
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
                     <li><a href="#myPage">Inicio</a></li>
                     <li class="dropdown">
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias
                         <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                           <li><a href="Electronica.php">Eletronica</a></li>
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
            <div class="row">
                <div class="col-2">
    
                    <h1>Alquila tu producto<br>con un solo click!</h1>
                    <p>Disfruta por un tiempo determinado del prodcuto que más te apetezca. 
                    <br>El resto de usuarios te lo facilitan</p>
                    <a href="" class="btn">Explora los productos</a>  
                </div>
                <div class="col-2">
                    <img src="img/rentar.png">
    
                </div>
            </div>
        </div>

    </div>
    


    <!-- CONTAINER NOSOTROS INFO-->
    <div class="categories">
        <div id="nosotros" class="small-container-one">
            <h1>ELEMENTs RENT</h1>
            <p><em>la plataforma de alquileres de confianza</em></p>
            <br>
            <div class="row">
              <div class="col-3">
                <h2 class="text-center"><strong>¿QUIENES SOMOS?</strong></h2><br>
                <a href="#demo" data-toggle="collapse">
                  <img src="img/quienesomos.png" alt="icono quien somos" alt="Random Name">
                  
                </a>
              <h3>ElementsRent es una empresa creada con capital español en 2019. Sus fundadores son grandes expertos en el sector de las ventas de segunda mano.</h3>
              </div>
              <div class="col-3">
                <h2 class="text-center"><strong>OBJETIVO</strong></h2><br>
                <a href="#demo2" data-toggle="collapse">
                  <img src="img/quehacemos.png" alt="icono que hacemos" alt="Random Name" >
                </a>
                <h3>En ElementsRent queremos ayudar a los clientes a encontrar objetos que quieren utilizar en algun momento de su vida,y pueda utilizarlo en el momento que lo necesiten.</h3>
                
              </div>
              <div class="col-3">
                <h2 class="text-center"><strong>¿DÓNDE ESTAMOS?</strong></h2><br>
                <a href="#demo3" data-toggle="collapse">
                  <img src="img/localizacion.jpg" alt="icono localizacion" alt="Random Name" >
                </a>
                <h3>Nuestra sede de trabajo se encuentra ubicada en Pozuelo de Alarcón,Madrid</h3>
              </div>
            </div>
          </div>
    </div>


    
        <!--CONTAINER PARA MOSTRAR LOS ARTICULOS RECIEN AÑADIDOS-->
        <!-- selec from cuando el date sea menos a 2 dias -->
        
   
   <div class="small-container">
       <h1 class="title">Recientes</h1>
       <?php
        $query = "SELECT * FROM productos WHERE fechaAdd < '2022-03-22'";
        $resultado = $conn->query($query);
        while($row = $resultado->fetch_assoc()){
            ?>

            <div class="card">
                <img src = "data:imagen/jpg;base64, <?php echo base64_encode($row['imagen']); ?>">
                <h4><?php echo $row['nombreProducto']; ?></h4>
                <h4><?php echo $row['precio']; ?>€</h4>
                


            </div>

        <?php

        }
        ?>
       
       
   </div>

   <br>
   <br>
   <br>
    


    <!--AQUI VOY A METER OTRO CONTAINER-->



    <!--OPINIONES-->
        
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
            <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
            </div>
            <div class="item">
            <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
            </div>
            <div class="item">
            <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
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