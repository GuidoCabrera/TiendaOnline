<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Datepicker boostrap -->
    <link rel="stylesheet" href="<?php echo constant("URL")?>public/libsExternals/css/bootstrap-datepicker.standalone.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloFonts.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>/public/css/EstiloMenu_SideB.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>/public/css/EstiloSetting.css">
    <title>Document</title>
</head>
<body class="bg-theme1">
   
   <div class="wrapper d-flex align-items-stretch">
   
   <?php require 'Views/sidebar.php'?>

   <div id="content" class="p-4">

  <?php require 'Views/menu.php'?>   

   <div id="containerSetting">
   <h2 id="title" class="text-center mb-4">Your data</h2>
      <form action="<?php echo constant('URL')?>Setting/ChangeData" id="FormSetting" method="post">
          <div id="inputGroup">

          <div class="inputBox">
           <span class="details">Name</span>   
          <input type="text" name="name" class="form-control" disabled="true" value="<?php $this->user->getNombre();?>"><button type="button" name="name"><i class="icon-pencil"></i></button>
            <p></p>
          </div>

          <div class="inputBox">
           <span class="details">Surname</span>   
          <input type="text" name="surname" class="form-control" disabled="true" value="<?php $this->user->getApellido();?>"><button type="button" name="surname"><i class="icon-pencil"></i></button>
            <p></p>
          </div>

          <div class="inputBox">
           <span class="details">Password</span>   
          <input type="password" name="password" class="form-control" disabled="true" value="<?php $this->user->getContraseña();?>"><button type="button" id="BtnPass" name="password"><i class="icon-pencil"></i></button>
            <p></p>
          </div>

          <div class="inputBox">
           <span class="details">Birthday</span>   
           <input type="text" name="birthday" autocomplete="off" disabled="true" value=<?php echo $this->user->getFechaNac();?> class="form-control" id="birthday"><button type="button" name="birthday"><i class="icon-pencil"></i></button>
            <p></p>
          </div>

          </div>

          <div class="boxBtn">
         <button type="button" id="btnSetting" class="btn">Save</button>
         <p id="txtBtnSetting" class="text-white"></p>
          </div>

          <p id="respa"></p>

      </form>

   </div>


   </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
<!-- Datepicker Boostrap -->
    <script src="<?php echo constant("URL")?>public/libsExternals/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo constant("URL")?>public/libsExternals/locales/bootstrap-datepicker.es.min.js"></script>
    <!-- public js  -->
    <script src="<?php echo constant("URL")?>public/js/url.js"></script>
    <script src="<?php echo constant("URL")?>public/js/main.js"></script>
    <script src="<?php echo constant('URL')?>public/js/inputToggle.js"></script>
    <script src="<?php echo constant('URL')?>public/js/setting.js"></script>
    <script src="<?php echo constant("URL")?>public/js/datepickerSett.js"></script>
</body>
</html>