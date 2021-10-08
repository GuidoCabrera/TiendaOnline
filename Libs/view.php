<?php

class view{

 function __construct(){
 }

 function render($nombre){
    require 'Views/'.$nombre.'.php';
 }

 function mostrar($id,$numPreg){
   $arrayHead = [
    "PregG" => ["¿Como Compro?","¿Como hago para hacer una consulta sobre un articulo?","¿Como agrego 
      un producto al carrito?","¿Todos los productos estan en stock?","¿Donde veo los 
      articulos en oferta?","¿Hay opción de Envio gratis?","¿Es seguro comprar en X?"],
    "PregC" => ["¿Cómo sé que recibieron mi pedido?","¿Dónde veo mis pedidos emitidos?",
      "¿Puedo modificar o cancelar un pedido que ya realicé?", "¿El pago se informa automáticamente?", "¿Qué ocurre luego de pagar mi pedido?"],
    "PregP" => ["¿Qué métodos de pago ofrecen?","¿Existe algun tipo de recargo al pagar por algun medio?",
      "¿Los pagos se informan automáticamente?","¿Cómo hago para informar un pago?"],
    "PregE" => [ "¿Qué medios de envío puedo elegir?","¿Como puedo ver el estado del envio?",
      "¿Porque no aparece mi codigo de seguimiento?","Mi pedido no llega","La empresa de envío no entregó mi paquete","Mi pedido fue enviado a una dirección/sucursal equivocada"],
    "PregA" => [
      "¿Cómo me registro?","¿Cómo inicio sesión?","¿Qué hago si olvidé mi usuario?","¿Qué hago si olvide mi contraseña?","¿Dónde veo la información de mi cuenta?","¿Como cambio la informacion de mi cuenta?",
      "¿Dónde veo mis pedidos realizados?"]
   ];
   $arrayBody = [
    "PregG" => ["Registrate o inicia sesion, explora el catalogo y cuando 
     encuentre un  producto que le interese haga click en su imagen. Selecciona talle y colores disponibles, luego haga click en el boton 'agregar al carrito'
     y continue completando los pasos consiguientes.","Ingresando en la imagen del producto estara disponible la opcion 'consulta del producto'","Ingresando a cualquier categoria de ropa/accesorios, seleccione la imagen del producto, eliga talle y colores disponibles, luego haga click en el boton 'agregar al carrito'.","Los productos publicados no tienen stock asegurado. Esto se puede verificar al abrir el detalle del producto.","Cada seccion de la tienda (Women,Men,Children,Accesories) tiene subcategorias que filtran los resultados deseados, seleccionando la opcion 'ofertas' accede a estas.","Los envíos gratis se activan en compras mayores a determinado monto solo en productos adheridos a ciertas promociones.","Todos nuestros productos tienen 2 semanas de devolución siempre y cuando sean devueltos en optimas condiciones."],
    "PregC" => ["Luego de haber completado un pedido y este se haya consolidado 
     en la tienda, recibiras un mail con la información de tu pedido realizado.",
     "Selecciona la opcion 'Mi cuenta' y ingresa a la categoria 'Mis pedidos'.",
     "Las modificaciones o cancelaciónes tienen un rango maximo de tiempo de 12hs, luego de transcurrido este tiempo no se podra cancelar ni modificar el pedido.",
     "Cuando realices el pago notificá a la Tienda con el comprobante de pago/depósito/transferencia para que podamos verificarlo y proceder con el envío de tu pedido.",
     "Luego de que el pago haya sido verificado, procedemos a preparar el pedido y llevarlo al correo para su envio."],
    "PregP" => [ "Contamos con pago mediante transferencia bancaria o atraves de    mercado pago.",
     "Al pagar con mercado pago existe un recargo segun el producto seleccionado.", "No, Recordá enviar a la tienda el comprobante de pago para que podamos confirmarlo y lo acreditemos a tu compra.",
     "Ingresando a 'Mi cuenta' la seccion 'Mis pedidos'. En el detalle de tu pedido, vas a encontrar el botón para informar el pago."],
    "PregE" => [
     "Por el momento solo contamos con el envio mediante Correo argentino.".nl2br("\n ")."*Recorda verificar si la empresa llega a tu domicilio, en caso contrario tendras que retirar tu pedido en la 
     sucursal mas cercana.",
     "Ingresa a 'Mi cuenta' la seccion 'Mis pedidos'. En el detalle de tu pedido, habra un codigo para que observes el seguimiento de tu pedido mediante la pagina de correo argentino.",
     "Puede haber varios motivos:".nl2br("\n ")."
     -Tu paquete aun se encuentra en la tienda".nl2br("\n ")."-Tu pedido fue despachado pero todavia no fue procesado.",
     "Si todavia no tenes numero de seguimiento: Tu pedido aun no fue despachado o fue despachado recientemente.".nl2br("\n ")."
     Si ya tenes numero de seguimiento: Revisa el estado de envio en la pagina de la empresa de logistica.",
     "El paquete puede quedar retenido por la empresa de logistica por distintos motivos:".nl2br("\n ")."
     -Error en el codigo postal".nl2br("\n ")."-No estas en tu domicilio".nl2br("\n ")."-Demora de mas de 10 dias en retirar el paquete de la sucursal".nl2br("\n ")."
     -Etiquetas arrugadas o dañadas",
     "Segun el caso hay dos opciones:".nl2br("\n ")."-Si el paquete esta en poder del correo, comunicate con el servicio de correo y solicita que lo envien a la sucursal mas cercana o al domicilio correcto.".nl2br("\n ")."-Si el paquete fue devuelto a nosotros, contactanos e indicanos el numero de pedido y los datos correctos para que podamos rehacer el envio. (dependiendo del caso es probable que se te cobre el costo del reenvio)"],
    "PregA" => [
     "Accediendo a la opcion del menu 'Create Account' (recuerda que es obligatorio proporcionar una cuenta de email valida)",
     "Ingresa a la opcion del menu 'Access' e ingresa tu nombre de usuario y contraseña establecidas anteriormente.",
     "Podés encontrar tu nombre de usuario en el mail que recibiste de nosotros al momento de registrarte. Si no encontrás ese mail, recuperá tu nombre de usuario haciendo clic en 'Recuperar Contraseña' en la ventana de inicio de sesión('Access'). Esta accion tambien va a restablecer tu contraseña.",
     "Recuperá tu contraseña haciendo clic en 'Recuperar Contraseña' en la ventana de inicio de sesión('Access')",
     "Ingresando a 'Mi cuenta' haciendo click en la opcion 'Mis datos' encontraras toda la información proporcionada a tu cuenta. Desde este mismo sitio puedes cambiar la información que desees.",
     "Ingresando a 'Mi cuenta' haciendo click en la opcion 'Mis datos' encontraras las opciones para cambiar los datos que desees.",
     "Ingresando a 'Mi cuenta' haciendo click en la opcion 'Mis pedidos' encontraras los pedidos ya completados y los que se encuentran en proceso."]
   ];

  for($i=0;$i<$numPreg;$i++){
    $idCards = $id.strval($i);
    echo '<div class="card-header text-center">
     <a href="#'.$idCards.'" class="card-link" data-toggle="collapse" data-parent="#accordionPreg">'.$arrayHead[$id][$i].'</a>
     </div>

     <div id="'.$idCards.'" class="collapse">
     <div class="card-body text-center">
        <p>'.$arrayBody[$id][$i].'</p>
     </div>
     </div>';
  }

}

}
?>