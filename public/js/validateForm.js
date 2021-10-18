const expresiones = {
	name: /^[a-zA-ZÀ-ÿ]{4,20}$/, // Letras y puede llevar acentos.
	password: /^.{4,16}$/, // 4 a 16 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	cumpleaños: /^\d{7,14}$/ // 7 a 14 numeros.
}

function validateForm(inputs,campos){

const validation = (e) =>{
	
    switch(e.target.name){
        case "name":
            inputValidation(expresiones.name,e.target,"name");
            break;
        case "surname":
            inputValidation(expresiones.name,e.target,"surname");
            break;
        case "password":
			validationPassword2();
			inputValidation(expresiones.password,e.target,"password");
			break;
		case "password2":
			validationPassword2();
			break;
        case "email":
            inputValidation(expresiones.email,e.target,"email");
            break;
    }
}

const inputValidation = (expresion,input,campo) => {
	if(expresion.test(input.value)){
		campos[campo] = true;
	 }
	 else if(input.value==""){
		campos[campo] = false;
	 }
	 else{   
		campos[campo] = false;
	 }
}

const validationPassword2 = () => {
	var pass1 = document.getElementById("password");
	var pass2 = document.getElementById("password2");

	 if(pass2.value==""){
		campos["password2"] = false;
	 }
	else if(pass1.value!==pass2.value){
		campos["password2"] = false;
	}
	else if(pass1.value==pass2.value&&campos.password){
		campos["password2"] = true;
	}
}

inputs.forEach(input => {
	input.addEventListener ("keyup",validation);
	input.addEventListener ("blur",validation);  
});

}