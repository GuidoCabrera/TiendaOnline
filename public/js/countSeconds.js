var cont = 10;

function conteo(){
    document.getElementById("txtSeconds").innerHTML = cont;

    if(cont==0){
        window.location.href= constURL+'Main';
    }

    else{
        cont = cont-1;
        setTimeout(conteo,1000);
    }
}
conteo();