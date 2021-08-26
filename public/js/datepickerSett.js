var fechaInput = document.getElementById("birthday");

$(document).ready(function() {
    var fecha= new Date();
    var fecha2 = (fecha.getFullYear()-16)+"/"+(fecha.getMonth()+1)+"/"+fecha.getDate();
    
$('#birthday').datepicker({
   language: "es",
   format: "yyyy-mm-dd",
   multidate: false,
   autoclose: true,
   endDate: fecha2,
   keyboardNavigation:false
});

});