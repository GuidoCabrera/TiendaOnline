<?php

class createAccount extends controller{

   function __construct(){
      parent::__construct();
  }

  function render(){
   session_start(); 
   if(isset($_SESSION['user']['id'])){
     header('Location:'.constant('URL').'main');
   }
   else{
     session_unset();
     session_destroy();
   }
     $this->view->render('CreateAccount/index');
  }

  function sendMail(){

   if(!empty($_POST['Email'])&&!empty($_POST["Code"])){
       $email = $_POST['Email'];
       $code = $_POST['Code'];

      // $codRandom = str_pad(rand(1,999999), 6, "0", STR_PAD_LEFT);

      $header = "From: guidocabrerasdla97@gmail.com"."\r\n". 
      "Reply-To: guidocabrerasdla97@gmail.com"."\r\n". 
      "X-Mailer: PHP/".phpversion();
       $mail = mail($email,"Registracion tienda online","su codigo para completar la registracion es: ".$code,$header);

        if($mail){
              echo "<script type='text/javascript'>  
              alert('se ha enviado el mail correctamente');
              </script>";
        }
        else{
           echo "<script type='text/javascript'>  
              alert('ha ocurrido un error al manda el mail, complete nuevamente el formulario');
              window.location.href='".constant("URL")."createAccount';
              </script>";
        }
      }

    else{
    echo "<script type='text/javascript'>
       if(window.location.href=='".constant("URL")."createAccount/registrarCliente'){
                alert('Ha ocurrido un error con los datos proporcionados, por favor complete los campos nuevamente');
                window.location.href='".constant("URL")."createAccount';
                }
    </script>";
    }
   
   // $this->render('');  
  }

  function insertC(){

    if(!empty($_POST['name'])&&!empty($_POST['surname'])&&!empty($_POST['password'])&&!empty($_POST['Email'])&&!empty($_POST['birthday'])){
       $name = $_POST['name'];
       $surname = $_POST['surname'];
       $password = $_POST['password'];
       $birthday = $_POST['birthday'];
       $email = $_POST['Email'];
       $codeA = $_POST['CodeA'];
       $codeI = $_POST['CodeI'];

       if($codeA==$codeI){

          if($this->model->insert(['nombre' => $name,'apellido' => $surname,'pass' => $password,'FechaNac' => $birthday,'email' => $email])){

            if($this->model->getByEmail($email)){
         echo "<script type='text/javascript'>
                  window.location.href='".constant("URL")."successful';
       </script>";
      }
   }
   
   else{
      echo "<script type='text/javascript'>
         alert('Ha surgido un error al enviar los datos');
</script>";
   }
       }

       else{
         echo "<script type='text/javascript'>
         alert('El Codigo de verificacion es incorrecto');
</script>";
       }
          
  }
}


};
?>