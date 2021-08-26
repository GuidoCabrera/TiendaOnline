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
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/Estilo.css">
  <!-- Sidebar&Menu CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloMenu_SideB.css">


  <title>BOOTSTRAP WEB SITE</title>
</head>

<body class="bg-theme1">

  <div class="wrapper d-flex align-items-stretch">

   <?php  require 'Views/sidebar.php'  ?>

    <!-- Page-content -->

    <div id="content" class="p-4"> 

    <?php require 'Views/menu.php'  ?>

        <div id="carousel1" class="carousel slider" data-ride="carousel">

          <!-- indicadores -->

          <ul class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li>
          </ul>

          <!-- Imagenes -->

          <div class="carousel-inner">

            <div class="carousel-item active" data-interval="1500">
              <picture id="imagen-mobile1">
                <source srcset="<?php echo constant('URL')?>public/img/img-5-mobile.jpg" media="(max-width:991px)">
                <img src="<?php echo constant('URL')?>public/img/img-5.jpg" alt="" class="img-fluid" width="1060">
              </picture>

            </div>

            <div class="carousel-item" data-interval="1500">
              <picture>
                <source srcset="<?php echo constant('URL')?>public/img/img-6-mobile.jpg" media="(max-width:991px)">
                <img src="<?php echo constant('URL')?>public/img/img-6.jpg" alt="" class="img-fluid" width="1060">
              </picture>
            </div>

            <div class="carousel-item" data-interval="1500">
              <picture>
                <source srcset="<?php echo constant('URL')?>public/img/img-7-mobile.jpg" media="(max-width:991px)">
                <img src="<?php echo constant('URL')?>public/img/img-7.jpg" alt="" class="img-fluid" width="1060">
              </picture>
            </div>

          </div>

          <!-- controles izquierda y derecha -->
          <div class="carousel-controls">

            <a href="#carousel1" class="carousel-control-prev" role="button" data-slide="prev"> <span
                class="carousel-control-prev-icon"></span> </a>

            <a href="#carousel1" class="carousel-control-next" role="button" data-slide="next"> <span
                class="carousel-control-next-icon"></span> </a>

          </div>
        </div>

        <!-- Fin Carousel -->

      <div class="container-fluid">
        <div class="row">

          <div class="col-12 col-sm-12 col-md-10" id="container-contact">

            <div class="row align-items-center" style="height:70px;">

              <div class="col-4 text-center">

                <a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook icon-contact"></i></a>

              </div>

              <div class="col-4 text-center">

                <a href="https://www.instagram.com/" target="_blank"><i class="icon-instagram icon-contact"></i></a>

              </div>

              <div class="col-4 text-center">

                <a href="https://www.twitter.com/" target="_blank"><i class="icon-twitter icon-contact"></i></a>

              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="rounded" id="container-mail">
        <div class="container-fluid p-4">
          <div class="row">
            <div class="col-12">

         <div class="mail-text mb-3">
                <h2>Contact</h2>
                <p>If you have any questions, fill in the necessary information and send us your query</p>               
            </div>

              <form action="" method="POST" id="formMain">
                <div class="form-group">

                  <label for="name">Enter your name</label>
                  <div class="input-group input-group-sm input-p mb-3">
                    <div class="input-group-prepend">
                      <i class="icon-name input-group-text"></i>
                    </div>
                    <input type="text" id="name" name="name" autocomplete="off" class="form-control" placeholder="Example: John" style="width:60%">
                  </div>

                  <label for="surname">Enter your surname</label>
                  <div class="input-group input-group-sm input-p mb-3">
                  <div class="input-group-prepend">
                      <i class="icon-surname input-group-text"></i>
                    </div>
                    <input type="text" id="surname" name="surname" class="form-control" placeholder="Example: Johnson"
                      style="width:60%">
                  </div>

                  <label for="email">Enter your email</label>
                  <div class="input-group input-group-sm input-p">
                  <div class="input-group-prepend">
                      <i class="icon-at input-group-text"></i>
                    </div>
                    <input type="email" id="email" name="email" autocomplete="off" class="form-control form-block"
                      placeholder="Example: J-Johnson@example.com">
                  </div>
                  <small id="emailHelp" class="form-text text-muted mb-3 ">We will never share your email</small>

                  <label for="textarea">Enter your message</label>
                  <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <i class="icon-message input-group-text"></i>
                    </div>
                    <textarea class="form-control" name="textareaQ" id="txtQ" cols="25" rows="10"
                      Placeholder="Write your message"></textarea>
                  </div>

                  <button type="button" id="btnMainEmail" class="btn btn-primary btn-block">
                    Send your message
                  </button>

                  <p id="txtMainEmail"></p>

                </div>
              </form>

            </div>
          </div>
        </div>
       </div>  <!--Cierre Container-Mail -->

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
  <script src="<?php echo constant('URL')?>js/app.js"></script>
  <script src="<?php echo constant('URL')?>public/js/inputToggle.js"></script>
  <script src="<?php echo constant("URL")?>public/js/formMain.js"></script>
</body>

</html>