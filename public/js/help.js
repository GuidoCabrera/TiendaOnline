var Change = function (id) {
    var btnAct = document.getElementById(id);
    var btnInc = [document.getElementById("btnHelp1"), 
     document.getElementById("btnHelp2"),document.getElementById("btnHelp3"), 
     document.getElementById("btnHelp4"),document.getElementById("btnHelp5")];
    var cards = [document.getElementById("cardPregG"), 
     document.getElementById("cardPregC"),document.getElementById("cardPregP"), 
     document.getElementById("cardPregE"),document.getElementById("cardPregA")];
    
    for(var i=0;i<btnInc.length;i++){
        
        if(btnInc[i].id != btnAct.id ){
            cards[i].setAttribute("class","card ocultar");      
        }
        else{
            cards[i].setAttribute("class","card mostrar");
        }

    }

};