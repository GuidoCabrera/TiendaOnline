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
  <link rel="stylesheet" href="<?php echo constant("URL")?>public/css/EstiloCreateA.css">
  <!-- Sidebar&Menu CSS -->
  <link rel="stylesheet" href="<?php echo constant("URL")?>public/css/EstiloMenu_SideB.css">
  <!-- Datepicker boostrap -->
  <link rel="stylesheet" href="<?php echo constant("URL")?>public/libsExternals/css/bootstrap-datepicker.standalone.css">


  <title>Document</title>
</head>

<body class="bg-theme1">

  <div class="wrapper d-flex align-items-stretch">

    <?php  require 'Views/sidebar.php'  ?>

    <div id="content" class="p-4">

      <?php require 'Views/menu.php'  ?>

      <div class="container-fluid p-0">

        <div class="row" id="containerSingIn">

          <div class="col-12 col-md-9 p-0">

            <h1 class="text-center text-uppercase mb-2 mt-4">Sing In</h1>

            <form class="form-group" method="post" id="formCreate" onsubmit="return enviarMail();">

              <div class="input-grupo">
                <input type="text" name="name" autocomplete="off" class="form-control text-center"
                  placeholder="Enter your name"> <i id="i-name"></i>
              </div>
              <p class="text-center small invisible" id="txt-name">Only characters with a quantity of 4 to 20 are allowed</p>

              <div class="input-grupo">
                <input type="text" name="surname" autocomplete="off" class="form-control text-center"
                  placeholder="Enter your surname"> <i id="i-surname"></i>
              </div>
              <p class="text-center small invisible" id="txt-surname">Only characters with a quantity of 4 to 20 are allowed</p>

              <div class="input-grupo">
                <input type="password" name="password" id="password" autocomplete="off" class="form-control text-center"
                  placeholder="Enter your password"> <i id="i-password"></i>
              </div>
              <p class="text-center small invisible" id="txt-password">only 4 to 16 digits are allowed</p>

              <div class="input-grupo">
                <input type="password" name="password2" id="password2" autocomplete="off" class="form-control text-center"
                  placeholder="Enter your password again"> <i id="i-password2"></i>
              </div>
              <p class="text-center small invisible" id="txt-password2">Passwords do not match</p>

              <div class="input-grupo">
                <input type="text" name="birthday" readonly autocomplete="off" class="form-control text-center" id="birthday"
                  placeholder="Enter your birthday"> <i id="i-birthday"></i>
              </div>

              <div class="input-grupo">
                <input type="email" name="email" id="inputEmail" autocomplete="off" class="form-control text-center"
                  placeholder="Enter your email"> <i id="i-email"></i>
              </div>
              <p class="text-center small invisible" id="txt-email">The text entered is not an email</p>

            </form>

             <div id="boxBtn">
               <button type="submit" form="formCreate" id="buttonCreate" name="buttonSingIn" data-toggle="" data-target="" class="btn mb-4">Sing In</button>
              <p class="small text-center" id="txt-submit"></p>
            </div> 
             
          </div>

  <div class="modal fade" id="emailValidation" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content d-flex">

       <div class="modal-header">
        <h5 class="modal-title">Email validation</h5>

        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="icon-close"></span>
        </button> -->

      </div>

      <div class="modal-body">
        <p class="mt-1">A 6-digit code has been sent to your email, enter your code to continue</p>
         <form id="formEmail" method="post" onsubmit="return enviar();">
        <div class="input-grupo">
        <input type="text" name="codeEmail" id="codeEmail" maxlength="6" onkeypress="return check(event);" class="form-control text-center" autocomplete="false">
        </div>
        </form> 
        
      </div>

          <div class="modal-footer">

          <p>If you choose to cancel <br> or update the page, you must fill<br> in the fields again to register </p>

          <a href="<?php echo constant('URL')?>createAccount">
          <button type="button" id="btnCancel" class="btn btn-secondary rounded">Cancel</button>
        </a> 
         <button type="submit" form="formEmail" id="btnCheck" class="btn btn-primary">Check</button>
       <p id="respa"></p>
          </div>

       </div>
     </div>
  </div>

  <!-- cierre modal -->

          <div class="col-3 d-none d-md-block p-0 align-self-center">

            <a href="<?php echo constant("URL")?>Main" class="img logo rounded-circle"
              style="background-image: url(<?php echo constant("URL")?>public/img/comunicacion-global.png);"></a>

          </div>


        </div>
      </div>
    </div>


    <!--Boostrap CDN  -->
    
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
    <!-- public js -->
    <script src="<?php echo constant("URL")?>public/js/url.js"></script>
    <script src="<?php echo constant("URL")?>public/js/main.js"></script>
    <script src="<?php echo constant("URL")?>public/js/datepicker.js"></script>
    <script src="<?php echo constant("URL")?>public/js/inputToggle.js"></script>
    <script src="<?php echo constant("URL")?>public/js/formulario.js"></script>

</body>

</html>