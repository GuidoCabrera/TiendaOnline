<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php session_start(); ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Fontastic icons -->
  <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/EstiloFonts.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/EstiloBuy.css">
  <!-- Sidebar&Menu CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/EstiloMenu_SideB.css">

  <title>Document</title>
</head>

<body class="bg-theme1">

  <div class="wrapper d-flex align-items-stretch">

    <?php require 'Views/sidebar.php' ?>

    <div id="content" class="p-4">

      <?php require 'Views/menu.php' ?>

      <div class="container-fluid">

        <div class="row" id="containerBuy">

          <div id="containerSecondary">

            <div class="boxPhoto d-flex justify-content-center">
              <img src="<?php echo constant('URL');?>public/img/<?php echo $this->cate ?>/<?php echo $this->img ?>.jpg" id="PhotoOne" alt=""
                class="img-fluid secondaryPhotos">
           </div>

            <div class="boxPhoto d-flex justify-content-center">
              <img src="<?php echo constant('URL');?>public/img/<?php echo $this->cate ?>/<?php echo $this->img ?>/<?php echo $this->img ?>.2.png" id="PhotoTwo" alt=""
                class="img-fluid secondaryPhotos">
           </div>

            <div class="boxPhoto d-flex justify-content-center">
              <img src="<?php echo constant('URL');?>public/img/<?php echo $this->cate ?>/<?php echo $this->img ?>/<?php echo $this->img ?>.3.png" id="PhotoThree" alt=""
              public\img\children\img2\img2.3.png  
                class="img-fluid secondaryPhotos">
           </div>

          </div>

          <div id="containerMain">

            <img src="<?php echo constant('URL');?>public/img/<?php echo $this->cate ?>/<?php echo $this->img ?>.jpg"
              alt="" id="mainPhoto" class="img-fluid">

          </div>

          <div id="containerDetails">

            <h2 class="text-center mt-3">Title</h2>

            <div id="containerPrice">
              <p id="finalPrice" class="font-weight-bold text-center">$750</p>
              <p id="discount">Descuento del 25%</p>
              <p id="previousPrice" class="text-muted"><s>$1000</s></p>
            </div>

            <p class="textBuy ml-3 mr-2" id="textCant" style="display:inline">Cantidad</p>
            
            <div id="containerInputNumber">
              <span class="prev" onclick="prevNum()"></span>
              <span class="next" onclick="nextNum()"></span> 
              <div id="boxCant" form="formularioBuy">
              </div>
            </div>

            <p id="availableStock">En stock</p>

            <form action="" method="post" id="formularioBuy">

              <p class="textBuy ml-3">Seleccione un color disponible</p>

               <div class="boxRelative">
                <div class="optionbox"> <select>
                    <option>Choose your color</option>
                    <option>Black</option>
                    <option>Red</option>
                    <option>Blue</option>
                    <option>White</option>
                  </select> </div>
              </div> 


              <p class="textBuy ml-3" id="text">Seleccione un talle disponible</p>

               <div class="radio-group">
                <div class="input-container">
                  <input class="radio-button" type="radio" name="radio" />
                  <div class="containerWaist">
                    <div class="icon">
                      <p id="waist-xs">XS</p>
                    </div>
                    <label class="Waist-label">Extra Small</label>
                  </div>
                </div>

                <div class="input-container">
                  <input class="radio-button" type="radio" name="radio" />
                  <div class="containerWaist">
                    <div class="icon">
                      <p>S</p>
                    </div>
                    <label class="Waist-label">Small</label>
                  </div>
                </div>

                <div class="input-container">
                  <input class="radio-button" type="radio" name="radio" />
                  <div class="containerWaist">
                    <div class="icon">
                      <p>M</p>
                    </div>
                    <label class="Waist-label">Medium</label>
                  </div>
                </div>

                <div class="input-container">
                  <input class="radio-button" type="radio" name="radio" />
                  <div class="containerWaist">
                    <div class="icon">
                      <p>L</p>
                    </div>
                    <label class="Waist-label">Large</label>
                  </div>
                </div>

                <div class="input-container">
                  <input class="radio-button" type="radio" name="radio" />
                  <div class="containerWaist">
                    <div class="icon">
                      <p>XL</p>
                    </div>
                    <label class="Waist-label">Extra Large</label>
                  </div>
                </div> 

              </div>

              <div class="containerSubmit mb-2 d-xl-none">
              <button type="submit" class="btn rounded-pill text-center btnSubmit">Comprar</button>
              </div>

            </form>

            </div>

            <div  class="containerSubmit mb-2 d-xl-block d-none">
              <button type="submit" class="btn rounded-pill text-center btnSubmit" form="formularioBuy">Comprar</button>
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
    <script src="<?php echo constant('URL');?>public/js/main.js"></script>
    <script src="<?php echo constant('URL');?>public/js/inputToggle.js"></script>
    <script src="<?php echo constant('URL');?>public/js/inputCant.js"></script>
    <script src="<?php echo constant('URL');?>public/js/photoBuy.js"></script>
</body>

</html>