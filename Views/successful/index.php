<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Fontastic icons -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloFonts.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo constant("URL")?>public/css/EstiloMenu_SideB.css">
  <!-- Sidebar&Menu CSS -->
  <link rel="stylesheet" href="<?php echo constant("URL")?>public/css/EstiloSuccessful.css">
    <title>Document</title>
</head>

<body class="bg-theme1">
    
<div class="wrapper d-flex align-items-stretch">    

<div id="content" class="p-4">

<div class="container">
  <div class="row">
    <div class="col-12 col-md-8 text-center" id="containerSuccess">
    
    <p class="txtSuccess"> Your request was successful, you will be redirected in </p> 
    <p id="txtSeconds"> 10 </p> <p class="txtSuccess">seconds...</p>
    
    </div>
  </div>
</div>

</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="<?php echo constant("URL")?>public/js/url.js"></script>
  <script src="<?php echo constant("URL")?>public/js/main.js"></script>
  <script src="<?php echo constant("URL")?>public/js/countSeconds.js"></script>
  
  </body>
</html>