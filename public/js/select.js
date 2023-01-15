$("#pais").change(function() {
    if($("#pais").val() !== "0"){
      $('#ciudades').prop('disabled', false);
    }else{
        $('#ciudades').prop('disabled', 'disabled');
      
    }
  });