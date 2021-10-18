<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php session_start(); ?>

    <!-- Bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Fontastic icons -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloFonts.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloHelp.css">
  <!-- Sidebar&Menu CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloMenu_SideB.css">

    <title>Document</title>
</head>
<body class="bg-theme1">

 <div class="wrapper d-flex align-items-stretch">
   
    <?php  require 'Views/sidebar.php'  ?>

    <div id="content" class=" p-4">

    <?php require 'Views/menu.php'  ?> 

     <div class="container-fluid p-0">
        <div class="row">
          <div class="col">

            <div class="nav-item dropdown align-self-center mb-3" id="divCat"> <a href="#" class="nav-link dropdown-toggle mt-2" data-toggle="dropdown">Categorias</a>
              <div class="dropdown-menu text-left nav-links-p">
                 <li class="mb-2 ml-2"> <button type="button" id="btnHelp1" onclick="Change('btnHelp1');">Preguntas generales</button> </li>
                 <li class="mb-2 ml-2"> <button type="button" id="btnHelp2" onclick="Change('btnHelp2');">Compras</button> </li>
                 <li class="mb-2 ml-2"> <button type="button" id="btnHelp3" onclick="Change('btnHelp3');">Pago</button> </li>
                 <li class="mb-2 ml-2"> <button type="button" id="btnHelp4" onclick="Change('btnHelp4');">Envios</button> </li>
                 <li class="mb-1 ml-2"> <button type="button" id="btnHelp5" onclick="Change('btnHelp5');">Mi cuenta</button> </li> 
              </div>
            </div>

             <div class="accordion" id="accordionPreg">

             <div class="card rounded" id="cardPregG" style="z-index:1;">
             
             <?php $this->mostrar("PregG",7); ?>

             </div>

             <div class="card ocultar" id="cardPregC">

             <?php $this->mostrar("PregC",5); ?>

             </div>  

             <div class="card ocultar" id="cardPregP">

             <?php $this->mostrar("PregP",4); ?>

             </div>

             <div class="card ocultar" id="cardPregE">
             
             <?php $this->mostrar("PregE",6); ?>

             </div>

             <div class="card ocultar" id="cardPregA">
             
             <?php $this->mostrar("PregA",7); ?>

             </div>

             </div>

             <!-- Cierre acordeon -->

            </div>
        </div>
    </div>
     
     <!-- Cierre contenedor acordeon -->

     </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="public/js/main.js"></script>
  <script src="public/js/help.js"></script>
  <script src="public/js/inputToggle.js"></script>
</body>
</html>