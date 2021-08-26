<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Fontastic icons -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloFonts.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloRecPass.css">
  <!-- Sidebar&Menu CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloMenu_SideB.css">
    <title>Document</title>
</head>


<body class="bg-theme1">
    <div class="wrapper d-flex align-items-stretch">

        <?php require 'Views/sidebar.php' ?>

        <div id="content" class="p-4">

        <?php require 'Views/menu.php' ?>

        <div id="containerRecPass">

          <h2>Recover your password</h2>

          <p>Enter your email address to search for your account and send an email to your mailbox so you can reset your password</p>

          <form action="<?php echo constant('URL')?>recoverPass/sendEmail" class="form-group" method="POST" id="formRecPass">

          <input type="email" autocomplete="off" name="email" class="form-control text-center rounded-pill" placeholder="Enter your email-adress">

          </form>
           
           <div id="btnGroup">
            <button type="submit" class="btn btn-primary" form="formRecPass" id="btn1">Search</button>
            <a href="<?php echo constant('URL')?>">
            <button type="button" class="btn btn-secondary" id="btn2">Cancel</button>
            </a>
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
  <script src="<?php echo constant('URL')?>public/js/main.js"></script>
  <script src="<?php echo constant('URL')?>public/js/inputToggle.js"></script>
</body>
</html>