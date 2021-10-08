<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Fontastic icons -->
  <!-- <link href="https://file.myfontastic.com/AHaPVaXbSxDQAqiRnR8mH3/icons.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloFonts.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloChangePass.css">
  <!-- Sidebar&Menu CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloMenu_SideB.css">
    <title>Document</title>
</head>

<body class="bg-theme1">

<div class="wrapper d-flex align-tems-stretch">

    <div id="content" class="p-4">

    <div id="containerChangePass">

    <form action="<?php echo constant('URL')?>recoverPass/newPassword" method="post" id="formChangePass">

    <h2 class="text-white text-center mt-2">Change Password</h2>

    <input type="password" name="password" id="password" placeholder="Insert your new password" class="form-control text-center">
    
    <input type="password" name="password2" id="password2" placeholder="Repeat your new password" class="form-control text-center">

    <div class="mt-4 text-center">
    <button type="button" id="btnChangePass" class="btn btn-primary">Change password</button>
    <p id="txtChangePass" class="text-center"></p>
    </div>

    </form>

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
  <script src="<?php echo constant('URL')?>public/js/formChangePass.js"></script>
</body>
</html>