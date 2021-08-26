var inputs = document.querySelectorAll("#formChangePass input");
var form = document.getElementById("formChangePass");
var button = document.getElementById("btnChangePass");
var txt = document.getElementById("txtChangePass");

const expresiones = {
	password: /^.{4,16}$/ // 4 a 16 digitos.
}

const campos = {
    password: false,
    password2: false
}

const validationC = (e) => {
     switch(e.target.name){
         case "password":
         validationPass();
         validationCh(expresiones.password,e.target,"password");
         break;
         case "password2":
         validationPass();
         break;
     }
}

 const validationCh = (expresion,input,campo) => {
     if(expresion.test(input.value)){
         campos[campo]=true;
     }
     else if(input.value==""){
         campos[campo]=false;
     }
     else{
         campos[campo]=false;
     }
 }

 const validationPass = () => {
    var pass1 = document.getElementById("password");
	var pass2 = document.getElementById("password2");

    if(pass2.value==""){
        campos["password2"] = false;
    }
    else if(pass2.value!==pass1.value){
        campos["password2"] = false;
    }
    else if(pass2.value==pass1.value&&campos.password){
        campos["password2"] = true;
    }
 }

inputs.forEach((input) => {
    input.addEventListener("keyup",validationC);
    input.addEventListener("blur",validationC);
})

button.addEventListener('click', (e) => {

    if(campos.password&&campos.password2&&inputs[0].value==inputs[1].value){
        form.submit();
    }
    else if (inputs[0].value!==inputs[1].value) {
           txt.innerHTML = "Passwords do not match";
    }
    else{
      txt.innerHTML = "passwords must have a range of 4 to 16 characters";
    }

})
