//funcion para capturar el id del checkbox seleccionado en la seccion "¿De qué temas hablas?""
$("body").on("click", "label", function(e) {
  var getValue = $(this).attr("for");
  var goToParent = $(this).parents(".select-size");
  var getInputRadio = goToParent.find("input[id = " + getValue + "]");
  //console.log(getInputRadio.attr("id"));  
});


//funcion para habilitar o desabilitar los inputs de las redes sociales
function smInputState(checkbox_id, input_id) {
	console.log("sale "+checkbox_id+" y "+input_id);
	if ($('#'+checkbox_id).is(':checked')) {
		$('#'+input_id).removeClass('disable-sm-input');
		$('#'+input_id).prop('disabled', false);
	} else {
		$('#'+input_id).prop('disabled', true);
    	$('#'+input_id).val('');
    	$('#'+input_id).addClass('disable-sm-input');
  	}    
}