var sidebar = document.getElementById("sidebar");
var quant = document.getElementById("quant");
var num = Number(quant.textContent);
var ids = [[],[]];

 for(var i=0; i<num ; i++){
      ids[0].push('idpimg'+(i+1));
      ids[1].push('cardGalleryimg'+(i+1));
 }

//  console.log(num);
//  console.log(ids[0].length);
var img = new Array(ids[0].length);
var card = new Array(ids[1].length);
var tam1 = window.innerWidth;

for (var i = 0; i < ids[0].length; i++) {
    img[i] = document.getElementById(ids[0][i]);
    card[i] = document.getElementById(ids[1][i]);
}

if(sidebar.className=="" && tam1 <= 890 && tam1 >= 768){
    for (var i = 0; i < img.length; i++) {
        img[i].style.height = "300px";
        card[i].style.margin = "0 -8px";
    }
}
else if(sidebar.className=="" && tam1 <= 767 && tam1 >= 640){
    for (var i = 0; i < img.length; i++) {
        img[i].style.height = "470px";
        card[i].style.margin = "0 -4px";
    }
   }

   else if(sidebar.className=="" && tam1 <= 639 && tam1 >= 575.9){
    for (var i = 0; i < img.length; i++) {
        img[i].style.height = "370px";
        card[i].style.margin = "0 -8px";
    }
   }

$(window).resize(function () 
{
    terms();  
});

var EventoBoton = document.getElementById("sidebarCollapse");
EventoBoton.addEventListener("click", function () {
     terms();  
});

function terms(){
    var tam2 = window.innerWidth;

    if(tam2<=890&&tam2>=768){
     adjustImg("370px","0 auto","300px","0 -8px");
    }

    else if(tam2<=767&&tam2>=640){
        adjustImg("550px","0 30px","470px","0 -4px");
       }

    else if(tam2<=639&&tam2>=575.9){
        adjustImg("500px","0 20px","370px","0 -8px");
       }

    else{
        for (var i = 0; i < img.length; i++) {
            img[i].attributeStyleMap.delete('height');
            card[i].attributeStyleMap.delete('margin');
        }
    }
}

 function adjustImg(heightAct,marginAct,heightInc,marginInc){
      if (sidebar.className == "active") {
          for (var i = 0; i < img.length; i++) {
              img[i].style.height = heightAct;
              card[i].style.margin = marginAct;
          }
      } else if (sidebar.className == "") {
          for (var i = 0; i < img.length; i++) {
              img[i].style.height = heightInc;
              card[i].style.margin = marginInc;
          }
      }
 }