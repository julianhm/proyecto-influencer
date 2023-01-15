

function cambia_ciudades(){
 //tomamos el valor del select paises elegido
 var idpais
 
 	idpais = document.getElementById('pais').value	
	 
     // verificamos si el Pais está definido

if (idpais!=0) { 
      	 //si estaba definido, entonces coloco las opciones del pais correspondiente. 
      	 //selecciono el array del departamento adecuado 
      	 mis_ciudades=eval("pais_"+idpais) 
		 mis_ciudades_id=eval("pais_"+idpais+"_id") 
		   //alert(mis_ciudades); 
      	  //calculo el numero de municipios 
      	 num_ciudades = mis_ciudades.length 
      	 //marco el número de municipios en el select 
      	 document.registro.ciudades.length = num_ciudades 
      	 //para cada pais del array, lo introduzco en el select 
      	 for(i=0;i<num_ciudades;i++){ 
         	 document.registro.ciudades.options[i].value=mis_ciudades_id[i]
         	 document.registro.ciudades.options[i].text=mis_ciudades[i] 
      	 }	
   	    }else{ 
      	 //si no había pais seleccionado, elimino los municipios del select 
      	 document.registro.ciudades.length = 1 
      	 //coloco un guión en la única opción que he dejado 
      	 document.registro.ciudades.options[0].value = "0" 
      	 document.registro.ciudades.options[0].text = "SELECCIONE UNA CIUDAD" 
   	   } 
   	}// FIN DE FUNCIONcambia_departamento

	   

   

   