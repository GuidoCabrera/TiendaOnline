var inputs = document.querySelectorAll("#formChangePass input");
var form = document.getElementById("formChangePass");
var button = document.getElementById("btnChangePass");
var txt = document.getElementById("txtChangePass");

const campos = {
    password: false,
    password2: false
}

validateForm(inputs,campos);

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