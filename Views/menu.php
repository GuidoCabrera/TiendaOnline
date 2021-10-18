<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-md exclusive">
        <div class="container-fluid exclusive">

          <button type="button" id="sidebarCollapse" class="btn btn-primary d-none d-sm-block ml-3">
            <i class="icon-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>

          <div class="d-block d-sm-none ml-auto mb-0">

          <label for="menu" class="menu-bar exclusive" data-toggle="collapse" data-target="#menu-responsive2">
          <i class="icon-bars exclusive"></i>
           </label>

          </div>

          <button type="button" id="NavbarCollapse" class="btn btn-dark d-none d-sm-block d-md-none d-sm-none btn-sm-lg ml-auto mr-2 "
            data-toggle="collapse" data-target="#menu-responsive">
            <i class="icon-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>

           <div class="collapse navbar-collapse exclusive" id="menu-responsive2">

            <ul class="navbar-nav text-center d-block d-sm-none exclusive nav-links-p">
              <h2 class="exclusive ">Settings</h2>
              <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>Main" class="nav-link exclusive"><i class="icon-home exclusive"></i>Home</a></li>
              <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>Help" class="nav-link exclusive"><i class="icon-help exclusive"></i>Help</a></li>
              <?php if(isset($_SESSION['user']['id'])) { ?>

              <div class="dropdown exclusive">

              <a href="#" role="button" class="dropdown-toggle nav-link exclusive" id="Dropdown-responsive" data-toggle="dropdown"><i class="icon-create exclusive"></i> <?= ucfirst($_SESSION['user']['nombre']); ?></a>

              <div class="dropdown-menu exclusive" aria-labelledby="Dropdown-responsive" id="dropdownMenu-responsive">
                 <a href="<?php echo constant('URL')?>setting" class="dropdown-item exclusive">Settings</a>
                 <a href="<?php echo constant('URL')?>PurchaseHistory" class="dropdown-item exclusive">Purchase history</a>
                 <a href="<?php echo constant('URL')?>Controllers/logOut.php" class="dropdown-item exclusive">Log out</a>
                 </div> 

              </div>
             <?php  } 
             else { ?>
             <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>CreateAccount" class="nav-link exclusive"><i class="icon-create exclusive"></i>Create Account</a></li>
              <li class="nav-item exclusive mb-5"><a href="<?php echo constant('URL')?>Access" class="nav-link exclusive"><i class="icon-login exclusive"></i>Access</a></li>
              <?php }
             ?>             

              <h2 class="exclusive " id="h2Id">Categories</h2>
              <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>Women" class="nav-link exclusive"><i class="icon-female exclusive"></i>Women</a></li>
              <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>Men" class="nav-link exclusive"><i class="icon-male exclusive"></i>Men</a></li>
              <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>Children" class="nav-link exclusive"><i class="icon-child exclusive"></i>Children</a></li>
              <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>Accessories" id="linkAcce" class="nav-link exclusive"><i class="icon-accesories exclusive"></i>Accessories</a></li>
            </ul>
            
          </div> 

          <div class="collapse navbar-collapse" id="menu-responsive">

            <ul class="navbar-nav ml-auto text-sm-left text-md-right nav-links-p">
              <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>Main" class="nav-link">Home</a></li>
              <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>Help" class="nav-link">Help</a></li>
              <?php if(isset($_SESSION['user']['id'])) { ?>

              <div class="dropdown" id="containerDropdown">

              <a href="#" role="button" class="dropdown-toggle exclusive" id="dropdownMenuLink" data-toggle="dropdown"> <?= ucfirst($_SESSION['user']['nombre']); ?> </a>

                 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="dropdownMenu">
                 <a href="<?php echo constant('URL')?>Setting" class="dropdown-item">Settings</a>
                 <a href="<?php echo constant('URL')?>PurchaseHistory" class="dropdown-item">Purchase history</a>
                 <a href="<?php echo constant('URL')?>Controllers/logOut.php" class="dropdown-item">Log out</a>
                 </div> 

              </div>

             <?php  } 
             else { ?>
              <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>CreateAccount" class="nav-link">Create Account</a></li>
              <li class="nav-item exclusive"><a href="<?php echo constant('URL')?>Access" class="nav-link">Access</a></li>
             <?php } ?>
            </ul>
            
          </div>


        </div>
      </nav>
    
</body>
</html>