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
  <link rel="stylesheet" href="public/css/EstiloGallery.css">
  <!-- Sidebar&Menu CSS -->
  <link rel="stylesheet" href="public/css/EstiloMenu_SideB.css">
  <title>Document</title>
</head>

<body class="bg-theme1">

  <div class="wrapper d-flex align-items-stretch">

    <?php  require 'Views/sidebar.php'  ?>

    <!-- Page-content -->

    <div id="content" class="p-4">

      <?php require 'Views/menu.php'  ?>

      <h2 id="identifier" class="text-center mb-4"><?php echo $this->id; ?></h2>

      <?php 
      $directory = "public/img/".$this->id;
      $dirint = dir($directory);

      $total_imagenes = count(glob('public/img/'.$this->id.'/{*.jpg,*.gif,*.png}',GLOB_BRACE));
      ?> <p class="text-white d-none" id="quant"><?php echo $total_imagenes ?></p> <?php
      
       while(($archive = $dirint->read()) !== false){
         if(preg_match("/jpg/i",$archive)||preg_match("/png/i",$archive)||preg_match("/gif/i",$archive)){
           ?> <p class="text-white d-none"> <?php echo $directory."/".$archive;  ?> </p> <?php
          }
       }
      $dirint->close();
      ?>

      <div class="container-fluid p-0">

        <div class="row" id="gallery2">
        
          
        </div>
      </div>

      <!-- cierre contenedor boots -->

    </div>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="public/js/url.js"></script>
  <script src="public/js/main.js"></script>
  <script src="public/js/gallery.js"></script>
  <script src="public/js/image.js"></script>
  <script src="public/js/inputToggle.js"></script>
</body>

</html>