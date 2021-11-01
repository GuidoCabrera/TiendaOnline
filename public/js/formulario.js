const formulario = document.getElementById('formCreate');
const inputs = document.querySelectorAll('#formCreate input');
const button = document.getElementById("buttonCreate");
var inputCode = document.getElementById("codeEmail");
var button2 = document.getElementById("btnCheck");
var formularioE = document.getElementById("formEmail");
var num = Math.floor(100000 + Math.random() * 900000); 
 
const expresiones = {
	name: /^[a-zA-ZÀ-ÿ]{4,20}$/, // Letras y puede llevar acentos.
	password: /^.{4,16}$/, // 4 a 16 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	cumpleaños: /^\d{7,14}$/ // 7 a 14 numeros.
}

const campos = {
	name: false,
	surname:false,
	password: false,
	password2: false,
	email: false,
	cumpleaños: false
}

function check(e){
	var code = (e.which) ? e.which : e.keyCode;

	if(code==8) { // backspace.
		return true;
	  } 
	else if(code>=48 && code<=57) { // is a number.
		return true;
	  } 
	else{ // other keys.
		return false;
	  }
}

const validarFormulario = (e) => {
	switch (e.target.name) {

		case "name":
		 validarCampo(expresiones.name,e.target,"name");
			break;

		case "surname":
			validarCampo(expresiones.name,e.target,"surname");
			break;

		case "password":
			validarPassword2();
			validarCampo(expresiones.password,e.target,"password");
			break;

		case "password2":
			validarPassword2();
			break;

		case "birthday":
			// validarCampo(expresiones.cumpleaños,e.target,"birthday");
			break;

		case "email":
			validarCampo(expresiones.email,e.target,"email");
			let tam = window.innerWidth;
			 if(e.target.value.length>=21){
			 	document.getElementById("i-email").style.display="none";
			 }
			 else if(tam<=410){
			 	document.getElementById("i-email").style.display="none";
			 }
			 else{
			 document.getElementById("i-email").style.display="inline";
			}
			break;
	}
}

const validarCampo = (expresion,input,campo) => {
	if(expresion.test(input.value)){
		document.getElementById("i-"+campo).setAttribute("class","icon-valid visible");
		document.getElementById("txt-"+campo).setAttribute("class","text-center small invisible");
		campos[campo] = true;
	 }
	 else if(input.value==""){
		document.getElementById("i-"+campo).setAttribute("class","invisible");
		document.getElementById("txt-"+campo).setAttribute("class","text-center small invisible");
		campos[campo] = false;
	 }
	 else{   
		document.getElementById("i-"+campo).setAttribute("class","icon-invalid visible");
		document.getElementById("txt-"+campo).setAttribute("class","text-center small visible");
		campos[campo] = false;
	 }
}

const validarPassword2 = () => {
	var pass1 = document.getElementById("password");
	var pass2 = document.getElementById("password2");

	 if(pass2.value==""){
		document.getElementById("i-password2").setAttribute("class","invisible");
		document.getElementById("txt-password2").setAttribute("class","text-center small invisible");
		campos["password2"] = false;
	 }
	else if(pass1.value!==pass2.value){
		document.getElementById("i-password2").setAttribute("class","icon-invalid visible");
		document.getElementById("txt-password2").setAttribute("class","text-center small visible");
		campos["password2"] = false;
	}
	else if(pass1.value==pass2.value&&campos.password){
		document.getElementById("i-password2").setAttribute("class","icon-valid visible");
		document.getElementById("txt-password2").setAttribute("class","text-center small invisible");
		campos["password2"] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener("keyup", validarFormulario);
	input.addEventListener("blur", validarFormulario);
	 if(input.name=="email"){
	 	input.addEventListener("keypress", (e)=>{
			let tam = window.innerWidth;
             if(e.target.value.length>=21){
	 		 	document.getElementById("i-email").style.display="none";
	 		 }
	 		 else if(tam<=410){
				document.getElementById("i-email").style.display="none";
			 }
			 else{
			    document.getElementById("i-email").style.display="inline";
		     }
	 	});
	 }
})

function enviarMail(){

	var dataex = "Email="+inputs[5].value+"&Code="+num;

	$.ajax({
		type:'post',
		url: constURL+'createAccount/sendMail',
		data: dataex,
		success: function(resp){
			$("#respa").html(resp);
		}
	  });
	return false;
};

 button.addEventListener('click', (e) => {

 		var txt = document.getElementById('txt-submit');

 		 if(campos.name && campos.surname && campos.password && campos.password2 && campos.email){
        
		 	txt.innerHTML = "Form sent successfully.";
		 	setTimeout(() => {
		 		txt.innerHTML="";
		 		$('#emailValidation').modal('show');	 
		 	   },2000);
		
 		 	document.querySelectorAll("#containerSingIn i").forEach((icono) =>{
 		 		icono.setAttribute("class","invisible");
 		    })		
         }

 		 else{
 		 	txt.innerHTML = "<b>Error:</b> Please fill in the form correctly.";
 		 }
	
 	});

	function enviar(){

		if(inputCode.value.length==6){
		
		var dataen = "name="+inputs[0].value+"&surname="+inputs[1].value+"&password="+inputs[2].value+"&birthday="+inputs[4].value+"&Email="+inputs[5].value+"&CodeA="+num+"&CodeI="+inputCode.value;
        
		$.ajax({
      type:'post',
		  url: constURL+'createAccount/InsertC',
      data: dataen,
		  success: function(resp){
			  $("#respa").html(resp);
		  }
		});
		}

		else{
         alert("you must enter a 6-digit number");
		}
		return false;
	};	 