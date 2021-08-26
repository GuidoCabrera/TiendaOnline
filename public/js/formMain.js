const inputs = document.querySelectorAll("#formMain input");
var form = document.getElementById("formMain");
var button = document.getElementById("btnMainEmail");
var txt = document.getElementById("txtMainEmail");

const expresiones = {
	name: /^[a-zA-ZÀ-ÿ]{3,25}$/, // Letras y puede llevar acentos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
}

const campo = {
    name: false,
    surname:false,
    email: false
}

const validation = (e) =>{
    switch(e.target.name){
        case "name":
            validationF(expresiones.name,e.target,"name");
            break;
        case "surname":
            validationF(expresiones.name,e.target,"surname");
            break;
        case "email":
            validationF(expresiones.email,e.target,"email");
            break;
    }
}

 const validationF = (expresion,input,field) => {
     if(expresion.test(input.value)){
         campo[field] = true;
     }
     else if(input.value==""){
        campo[field] = false;
     }
     else{
        campo[field] = false;
     }
 }

inputs.forEach((input) => {   
    input.addEventListener ("keyup",validation);
    input.addEventListener ("blur",validation);  
});

button.addEventListener("click", (e) => {
      if(campo.name && campo.surname && campo.email){
          txt.innerHTML= "email sent successfully";
          setTimeout(() => {
            form.submit(); 
           },4000);
      }
      else{
        txt.innerHTML= "any of the first 3 fields were not filled in correctly, please try again";
      }
});