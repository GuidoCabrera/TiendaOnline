var inputs = document.querySelectorAll("#containerSecondary div .secondaryPhotos");
var photoPrimary = document.getElementById("mainPhoto");
var photoSecondary = document.getElementById("PhotoOne");

photoSecondary.style.border = "2px solid #cc1439ed";
photoSecondary.style.boxShadow = "inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px hsla(348, 82%, 44%, 0.746)";

for(var i=0; i<inputs.length; i++){
    
    inputs[i].addEventListener("click",function(e){
      var input = e.target; 
      inputs.forEach((photoS) => {
        if(input.id==photoS.id){
          photoS.style.border = "2px solid #cc1439ed";
          photoS.style.boxShadow = "inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px hsla(348, 82%, 44%, 0.746)";
        }
        else{
          photoS.style.border = "none"
          photoS.style.boxShadow = "none";
        }
      });

       photoPrimary.src = input.src;  
    });

  }