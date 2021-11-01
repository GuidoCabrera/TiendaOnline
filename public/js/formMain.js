var inputs = document.querySelectorAll("#formMain input");
var form = document.getElementById("formMain");
var button = document.getElementById("btnMainEmail");
var txt = document.getElementById("txtMainEmail");

const campos = {
    name: false,
    surname: false,
    email: false
}

validateForm(inputs,campos);

button.addEventListener("click", (e) => {

      if(campos.name && campos.surname && campos.email){
          txt.innerHTML= "email sent successfully";
          setTimeout(() => {
            form.submit(); 
           },4000);
      }
      else{
        txt.innerHTML= "any of the first 3 fields were not filled in correctly, please try again";
      }
});