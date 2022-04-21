with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && nombreprop.value==""){
			ok=false;
			alert("Debe escribir un nombre de propietario");
			nombreprop.focus();
		}
		if(ok &&nombremasc.value==""){
			ok=false;
			alert("Debe escribir el nombre de su mascota");
			nombremasc.focus();
		}
		if(ok &&tipo.value==""){
			ok=false;
			alert("Debe escribir si su mascota es gato, perro u otro");
			tipo.focus();
		}
		if(ok &&fecha.value==""){
			ok=false;
			alert("Debe elegir una fecha");
			fecha.focus();
		}		
		if(ok && servicio.value==""){
			ok=false;
			alert("Debe elegir un servicio");
			servicio.focus();
		}
		


		if(ok){ submit(); }
	}
}
