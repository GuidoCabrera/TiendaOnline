var quant = document.getElementById("quant");
var num = Number(quant.textContent);
var imagenes = new Array();
for(var i=0; i<num ; i++){
  imagenes.push('img'+(i+1));
}

var gallery = document.getElementById("gallery2");
var id= document.getElementById("identifier");

for(imagen of imagenes){
     gallery.innerHTML += `
     <div class="col-12 col-md-6 col-lg-4 col-xl-3">
     <div class="card my-2" id="cardGallery${imagen}">
     <a href="" data-toggle="modal" data-target="#id${imagen}">
       <img src="public/img/${id.textContent}/${imagen}.jpg" id="idp${imagen}" class="galleryImg" alt="" style="width:100%;">
     </a>
   </div>


   <!-- Modal -->
   <div class="modal fade" id="id${imagen}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

     <button type="button" class="close mr-3 mt-2" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true" class="icon-close"></span>
     </button>

     <div class="modal-dialog" role="document">
       <div class="modal-content">
   
         <img src="public/img/${id.textContent}/${imagen}.jpg" alt="" class="img-fluid  mt-2 rounded">

          <div class="modal-footer">

         <a href="${constURL}Buy/Article/${id.textContent}/${imagen}">

         <button type="button" id="btnBuy" class="btn btn-primary">Comprar</button>

         </a>
          </div>

       </div>
     </div>

   </div>
   <!-- cierre modal -->

 </div>`
}