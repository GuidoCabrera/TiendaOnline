 var input = document.getElementById("menu");

 input.addEventListener('click', function() {
    input.disabled = true;
    tiempo=setTimeout(function(){
        input.disabled = false;
      },800);
    });
