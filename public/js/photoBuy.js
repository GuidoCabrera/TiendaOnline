var inputs = document.getElementById("containerSecondary").getElementsByClassName("secondaryPhotos");
var photoPrimary = document.getElementById("mainPhoto");
var photoSecondary = document.getElementById("PhotoOne");

photoSecondary.style.border = "2px solid #cc1439ed";
photoSecondary.style.boxShadow = "inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px hsla(348, 82%, 44%, 0.746)";

for(var i=0; i<inputs.length; i++){
    
    inputs[i].addEventListener("click",function(e){
      var input = e.target;
      if(input.id=="PhotoOne"){
        input.style.border = "2px solid #cc1439ed";
        input.style.boxShadow = "inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px hsla(348, 82%, 44%, 0.746)";
        for(var y=1;y<=2;y++){
          inputs[y].style.border = "none"
          inputs[y].style.boxShadow = "none";
        }
      }
      else if(input.id=="PhotoTwo"){
        input.style.border = "2px solid #cc1439ed";
        input.style.boxShadow = "inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px hsla(348, 82%, 44%, 0.746)";
         for(var y=0;y<=2;y+=2){
           inputs[y].style.border = "none"
           inputs[y].style.boxShadow = "none";
         }
      }
      else{
        input.style.border = "2px solid #cc1439ed";
        input.style.boxShadow = "inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px hsla(348, 82%, 44%, 0.746)";
        for(var y=0;y<=1;y++){
          inputs[y].style.border = "none"
          inputs[y].style.boxShadow = "none";
        }
      }

      photoPrimary.src = input.src;  
      
    });

  }

