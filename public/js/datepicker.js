function datepicker(fecha,format){

 $(document).ready(function() {
    $('#birthday').datepicker({
        language: "es",
        format: format,
        multidate: false,
        autoclose: true,
        endDate: fecha,
        keyboardNavigation:false,
    });
  
 });
}