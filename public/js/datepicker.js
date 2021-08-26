$(document).ready(function() {

      var fecha= new Date();
      var fecha2 = fecha.getDate()+"/"+(fecha.getMonth()+1)+"/"+(fecha.getFullYear()-16);
      
 $('#birthday').datepicker({
     language: "es",
     format: "dd/mm/yyyy",
     multidate: false,
     autoclose: true,
     endDate: fecha2,
     keyboardNavigation:false,
     defaultViewDate: fecha2
 });

})
