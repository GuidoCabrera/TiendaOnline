var num = document.getElementById("boxCant");


for(var i=1;i<=10;i++){
   var span = document.createElement("span");
   span.textContent = i;
   num.appendChild(span);
}

var num2 = num.getElementsByTagName("span");
var index=0;

  function nextNum(){
    num2[index].style.display="none";
    index = (index+1) % num2.length;
    num2[index].style.display="initial";
  }

  function prevNum(){
    num2[index].style.display="none";
    index = (index-1+num2.length) % num2.length;
    num2[index].style.display="initial";
  }
