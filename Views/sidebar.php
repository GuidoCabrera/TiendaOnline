<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<input type="checkbox" id="menu" autocomplete="off">

<nav id="sidebar">
      <div class="navbar-p1 p-4 pt-5">

        <a href="<?php echo constant('URL')?>Main" class="img logo d-sm-block d-none mb-4"
          style="background-image: url(<?php echo constant('URL');?>public/img/TiendaOnline.jpg); margin:0 auto;"></a>

        <ul class="list-unstyled">
          <li> <a href="<?php echo constant('URL'); ?>Women"><i class="icon-female"></i> Women</a></li>
          <li> <a href="<?php echo constant('URL'); ?>Men"><i class="icon-male"></i> Men</a></li>
          <li> <a href="<?php echo constant('URL'); ?>Children"><i class="icon-child"></i> Children</a></li>
          <li> <a href="<?php echo constant('URL'); ?>Accessories"><i class="icon-accesories"></i> Accessories</a></li>
        </ul>

        <div class="footer d-sm-block d-none">
          <p class="text-justified">
            <p>Copyright &copy; <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This site is was created by <br> Guido Cabrera </p>
          </p>
        </div>

      </div>
    </nav>
    
</body>
</html>