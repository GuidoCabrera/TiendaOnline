var inputs = document.querySelectorAll("#inputGroup .inputBox input");
var buttons = document.querySelectorAll("#inputGroup .inputBox button");
var btnSubmit = document.getElementById("btnSetting");
var form = document.getElementById("formSetting");
var aux = false;
var dataex="";

const valueInputs = {
    name: inputs[0].value,
    surname: inputs[1].value,
    password: inputs[2].value,
    birthday: inputs[3].value
}

buttons.forEach((button) => {
    
    button.addEventListener("click",function(){
        
        inputs.forEach((input) => {
            if(button.name == input.name){
               input.disabled = false;
               input.focus();
               var val = input.value; 
               input.value = ''; 
               input.value = val;
            }
        });

    });

});

btnSubmit.addEventListener("click", function(){
      
         for(var i=0;i<inputs.length;i++){
           if(inputs[i].value!=valueInputs[inputs[i].name]){
               aux=true;
               if(dataex==""){
                dataex = inputs[i].name+"="+inputs[i].value+"&";
               }
               else{
               dataex += inputs[i].name+"="+inputs[i].value+"&";
            }
           }
         }

   if(aux==true){
     dataex = dataex.slice(0,-1);
          
     $.ajax({
      type:'post',
      url: 'http://192.168.2.102/PHP/ProyectoBootstrap/Setting/ChangeData',
      data: dataex,
      success: function(resp){
        $("#respa").html(resp);
    }
  });
    return false;
}
  else{
    var txtBtn = document.getElementById("txtBtnSetting").innerText = "No se ha producido ningun cambio";
  }

     }); 

    




