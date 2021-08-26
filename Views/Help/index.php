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
  <link rel="stylesheet" href="public/css/EstiloHelp.css">
  <!-- Sidebar&Menu CSS -->
  <link rel="stylesheet" href="public/css/EstiloMenu_SideB.css">

    <title>Document</title>
</head>
<body class="bg-theme1">

 <div class="wrapper d-flex align-items-stretch">
   
    <?php  require 'Views/sidebar.php'  ?>

    <div id="content" class=" p-4">

    <?php require 'Views/menu.php'  ?> 

     <div class="container-fluid p-0">
         <div class="row">
             <div class="col">

            <div class="nav-item dropdown align-self-center mb-3" id="divCat"> <a href="#" class="nav-link dropdown-toggle mt-2" data-toggle="dropdown">Categorias</a>
             <div class="dropdown-menu text-left nav-links-p">
                 <li class="mb-2 ml-2"> <button type="button" id="btnHelp1" onclick="Change('btnHelp1');">Preguntas generales</button> </li>
                 <li class="mb-2 ml-2"> <button type="button" id="btnHelp2" onclick="Change('btnHelp2');">Compras</button> </li>
                 <li class="mb-2 ml-2"> <button type="button" id="btnHelp3" onclick="Change('btnHelp3');">Pago</button> </li>
                 <li class="mb-2 ml-2"> <button type="button" id="btnHelp4" onclick="Change('btnHelp4');">Envios</button> </li>
                 <li class="mb-1 ml-2"> <button type="button" id="btnHelp5" onclick="Change('btnHelp5');">Mi cuenta</button> </li> 
           </div>
            </div>

             <div class="accordion" id="accordionPreg">

             <div class="card rounded" id="cardPregG" style="z-index:1;">

             <div class="card-header text-center">
               <a href="#unoPregGene" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Como compro?</a>
             </div>

             <div id="unoPregGene" class="collapse">
               <div class="card-body text-center">
                  <p>Registrate o inicia sesion, explora el catalogo y cuando encuentre un producto que le interese haga click en su imagen. Selecciona talle y colores disponibles, luego haga click en el boton "agregar al carrito"
                    y continue completando los pasos consiguientes.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#dosPregGene" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Como hago para hacer una consulta sobre un articulo?</a>
             </div>

             <div id="dosPregGene" class="collapse">
               <div class="card-body text-center">
                 <p>Ingresando en la imagen del producto estara disponible la opcion "consulta del producto".</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#tresPregGene" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Como agrego un producto al carrito?</a>
             </div>

             <div id="tresPregGene" class="collapse">
               <div class="card-body text-center">
                 <p>Ingresando a cualquier categoria de ropa/accesorios, seleccione la imagen del producto, eliga talle y colores disponibles, luego haga click en el boton "agregar al carrito".</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#cuatroPregGene" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Todos los productos estan en stock?</a>
             </div>

             <div id="cuatroPregGene" class="collapse">
               <div class="card-body text-center">
                 <p>Los productos publicados no tienen stock asegurado. Esto se puede verificar al abrir el detalle del producto.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#cincoPregGene" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Donde veo los articulos en oferta?</a>
             </div>

             <div id="cincoPregGene" class="collapse">
               <div class="card-body text-center">
                 <p>Cada seccion de la tienda (Women,Men,Children,Accesories) tiene subcategorias que filtran los resultados deseados, seleccionando la opcion "ofertas" accede a estas.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#seisPregGene" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Hay opción de Envio gratis?</a>
             </div>

             <div id="seisPregGene" class="collapse">
               <div class="card-body text-center">
                 <p>Los envíos gratis se activan en compras mayores a determinado monto solo en productos adheridos a ciertas promociones. </p>
               </div>
             </div>

             <div class="card-header text-center noLine">
               <a href="#sietePregGene" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Es seguro comprar en X?</a>
             </div>

             <div id="sietePregGene" class="collapse">
               <div class="card-body text-center">
                 <p>Todos nuestros productos tienen 2 semanas de devolución siempre y cuando sean devueltos en optimas condiciones.</p>
               </div>
             </div>

             </div>

          <div class="card ocultar" id="cardPregC">

              <div class="card-header text-center">
              <a href="#unoPregC" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Cómo sé que recibieron mi pedido?</a>
              </div>

              <div id="unoPregC" class="collapse">
               <div class="card-body text-center">
                <p>Luego de haber completado un pedido y este se haya consolidado en la tienda, recibiras un mail con la información de tu pedido realizado.</p>
               </div>
              </div>

              <div class="card-header text-center">
              <a href="#dosPregC" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Dónde veo mis pedidos emitidos?</a>
              </div>

              <div id="dosPregC" class="collapse">
               <div class="card-body text-center">
                <p>Selecciona la opcion "Mi cuenta" y ingresa a la categoria "Mis pedidos".</p>
               </div>
              </div>

              <div class="card-header text-center">
              <a href="#tresPregC" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Puedo modificar o cancelar un pedido que ya realicé?</a>
              </div>

              <div id="tresPregC" class="collapse">
               <div class="card-body text-center">
                <p>Las modificaciones o cancelaciónes tienen un rango maximo de tiempo de 12hs, luego de transcurrido este tiempo no se podra cancelar ni modificar el pedido. </p>
               </div>
              </div>

              <div class="card-header text-center">
              <a href="#cuatroPregC" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿El pago se informa automáticamente?</a>
              </div>

              <div id="cuatroPregC" class="collapse">
               <div class="card-body text-center">
                <p>Cuando realices el pago notificá a la Tienda con el comprobante de pago/depósito/transferencia para que podamos verificarlo y proceder con el envío de tu pedido.</p>
               </div>
              </div>

              <div class="card-header text-center">
                <a href="#cincoPregC" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Qué ocurre luego de pagar mi pedido?</a>
              </div>

              <div class="collapse" id="cincoPregC">
                <div class="card-body text-center">
                  <p>Luego de que el pago haya sido verificado, procedemos a preparar el pedido y llevarlo al correo para su envio.</p>
                </div>
              </div>

             </div>  

             <div class="card ocultar" id="cardPregP">

             <div class="card-header text-center">
               <a href="#firstPregP" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Qué métodos de pago ofrecen?</a>
             </div>

             <div class="collapse" id="firstPregP">
               <div class="card-body text-center">
                 <p>Contamos con pago mediante transferencia bancaria o atraves de mercado pago.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#dosPregP" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Existe algun tipo de recargo al pagar por algun medio?</a>
             </div>

             <div class="collapse" id="dosPregP">
               <div class="card-body text-center">
                 <p>Al pagar con mercado pago existe un recargo segun el producto seleccionado.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#tresPregP" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Los pagos se informan automáticamente?</a>
             </div>
             
             <div class="collapse" id="tresPregP">
               <div class="card-body text-center">
                 <p>No. Recordá enviar a la tienda el comprobante de pago para que podamos confirmarlo y lo acreditemos a tu compra.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#cuatroPregP" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Cómo hago para informar un pago?</a>
             </div>

             <div class="collapse" id="cuatroPregP">
               <div class="card-body text-center">
                 <p>Ingresando a "Mi cuenta" la seccion "Mis pedidos". En el detalle de tu pedido, vas a encontrar el botón para informar el pago.</p>
               </div>
             </div>

             </div>

             <div class="card ocultar" id="cardPregE">
             
             <div class="card-header text-center">
               <a href="#firstPregE" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Qué medios de envío puedo elegir?</a>
             </div>

             <div class="collapse" id="firstPregE">
               <div class="card-body text-center">
                 <p>Por el momento solo contamos con el envio mediante Correo argentino. <br> *Recorda verificar si la empresa llega a tu domicilio, en caso contrario tendras que retirar tu pedido en la 
                 sucursal mas cercana.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#dosPregE" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Como puedo ver el estado del envio?</a>
             </div>

             <div class="collapse" id="dosPregE">
               <div class="card-body text-center">
                 <p>Ingresa a "Mi cuenta" la seccion "Mis pedidos". En el detalle de tu pedido, habra un codigo para que observes el seguimiento de tu pedido mediante la pagina de correo argentino.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#tresPregE" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Porque no aparece mi codigo de seguimiento?</a>
             </div>
             
             <div class="collapse" id="tresPregE">
               <div class="card-body text-center">
                 <p>Puede haber varios motivos: <br>
                  -tu paquete aun se encuentra en la tienda <br> -tu pedido fue despachado pero todavia no fue procesado.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#cuatroPregE" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">Mi pedido no llega</a>
             </div>

             <div class="collapse" id="cuatroPregE">
               <div class="card-body text-center">
                 <p>Si todavia no tenes numero de seguimiento: Tu pedido aun no fue despachado o fue despachado recientemente. <br>
                 Si ya tenes numero de seguimiento: Revisa el estado de envio en la pagina de la empresa de logistica.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#cincoPregE" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">La empresa de envío no entregó mi paquete</a>
             </div>

             <div class="collapse" id="cincoPregE">
               <div class="card-body text-center">
                 <p>El paquete puede quedar retenido por la empresa de logistica por distintos motivos: <br>
                 -Error en el codigo postal <br> -No estas en tu domicilio <br> -Demora de mas de 10 dias en retirar el paquete de la sucursal <br>
                 -Etiquetas arrugadas o dañadas</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#seisPregE" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">Mi pedido fue enviado a una dirección/sucursal equivocada</a>
             </div>

             <div class="collapse" id="seisPregE">
               <div class="card-body text-center">
                 <p>Segun el caso hay dos opciones: <br> -Si el paquete esta en poder del correo, comunicate con el servicio de correo y solicita que lo envien a la sucursal mas cercana o al domicilio correcto. <br>
                 -Si el paquete fue devuelto a nosotros, contactanos e indicanos el numero de pedido y los datos correctos para que podamos rehacer el envio. (dependiendo del caso es
                 probable que se te cobre el costo del reenvio)
                 </p>
               </div>
             </div>

             </div>

             <div class="card ocultar" id="cardPregA">
             
             <div class="card-header text-center">
               <a href="#firstPregA" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Cómo me registro?</a>
             </div>

             <div class="collapse" id="firstPregA">
               <div class="card-body text-center">
                 <p>Accediendo a la opcion del menu "Create Account" (recuerda que es obligatorio proporcionar una cuenta de email valida)</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#dosPregA" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Cómo inicio sesión?</a>
             </div>

             <div class="collapse" id="dosPregA">
               <div class="card-body text-center">
                 <p>Ingresa a la opcion del menu "Access" e ingresa tu nombre de usuario y contraseña establecidas anteriormente. </p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#tresPregA" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Qué hago si olvidé mi usuario?</a>
             </div>
             
             <div class="collapse" id="tresPregA">
               <div class="card-body text-center">
                 <p>Podés encontrar tu nombre de usuario en el mail que recibiste de nosotros al momento de registrarte. Si no encontrás ese mail, recuperá tu nombre de usuario haciendo clic en "Recuperar Contraseña" en la ventana de inicio de sesión("Access").
                  Esta accion tambien va a restablecer tu contraseña.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#cuatroPregA" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Qué hago si olvide mi contraseña?</a>
             </div>

             <div class="collapse" id="cuatroPregA">
               <div class="card-body text-center">
                 <p>Recuperá tu contraseña haciendo clic en "Recuperar Contraseña" en la ventana de inicio de sesión("Access")</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#cincoPregA" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Dónde veo la información de mi cuenta? </a>
             </div>

             <div class="collapse" id="cincoPregA">
               <div class="card-body text-center">
                 <p>Ingresando a "Mi cuenta" haciendo click en la opcion "Mis datos" encontraras toda la información proporcionada a tu cuenta. Desde este mismo sitio puedes cambiar la información que desees.</p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#seisPregA" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Como cambio la informacion de mi cuenta?</a>
             </div>

             <div class="collapse" id="seisPregA">
               <div class="card-body text-center">
                 <p>Ingresando a "Mi cuenta" haciendo click en la opcion "Mis datos" encontraras las opciones para cambiar los datos que desees.
                 </p>
               </div>
             </div>

             <div class="card-header text-center">
               <a href="#sietePregA" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">¿Dónde veo mis pedidos realizados?</a>
             </div>

             <div class="collapse" id="sietePregA">
               <div class="card-body text-center">
                 <p>Ingresando a "Mi cuenta" haciendo click en la opcion "Mis pedidos" encontraras los pedidos ya completados y los que se encuentran en proceso.</p>
               </div>
             </div>

             </div>

             </div>

             <!-- Cierre acordeon -->

             </div>
         </div>
     </div>
     
     <!-- Cierre contenedor acordeon -->


     </div>

    </div>

 

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="public/js/main.js"></script>
  <script src="public/js/help.js"></script>
  <script src="public/js/inputToggle.js"></script>
</body>
</html>