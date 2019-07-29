function verificarForma(nombreFormulario, accionEnviar){
	var forma = document.getElementById(nombreFormulario);
	var boolExito = revisarCampos(["input", "textArea", "select"], forma);
	if (boolExito) {
		if (arguments.length > 1) {
			eval(accionEnviar)();
		} else {
			forma.submit();
		}
	}
}
function revisarCampos(arrTipoCampos, forma){
	var intTipoCamposLen = arrTipoCampos.length;
	var l = 0;
	var arrCamposError = new Array();
	var arrCamposCorrectos = new Array();
	for (var n = 0; n < intTipoCamposLen; n++){
		var campos = forma.getElementsByTagName(arrTipoCampos[n]);
		var intCamposLen = campos.length; 
		var arrCamposText = new Array();
		for (var k = 0; k < intCamposLen; k++){
			var campo = campos[k];
			switch(arrTipoCampos[n]){
				case "input":
					if ((campo.type == "text") && (campo.getAttribute('tipoVerificacion') != undefined)){
						arrCamposText.push(campo);
					}
					if ((campo.type == "radio") && (campo.getAttribute('tipoVerificacion') != undefined)){
						arrCamposText.push(campo);
					}
				break;
				case "textArea":
					if (campo.getAttribute('tipoVerificacion') != undefined){
						arrCamposText.push(campo);
					}
				break;
				case "select":
					if (campo.getAttribute('tipoVerificacion') != undefined){
						arrCamposText.push(campo);
					}
				break;
				default :
					alert ("El tipo de campo no se reconoce");
				break;
			}
			
		}
		var j = 0;
		var m = arrCamposText.length;
		for (var i = 0; i < m; i++){
			var campo = arrCamposText[i];
			var propiedadVerificacion = String(campo.getAttribute('tipoVerificacion'));
			
			switch(propiedadVerificacion){
				case "isEmail" :
					boolVerificacion = isEmail(campo.value);
					break;
				case "isNotEmpty" :
					boolVerificacion = isNotEmpty(campo.value, false);
					break;
				case "isURL" :
					boolVerificacion = isURL(campo.value);
					break;
				case "isDate" :
					boolVerificacion = isDate(campo.value);
					break;
				case "isNotDefault" :
					boolVerificacion = isNotDefault(campo.value);
					break;
				case "noVerificar" :
					j++;
					break;
				default:
					break;
			}
			if (boolVerificacion) {
				arrCamposCorrectos.push(campo);
				j++;
			} else {
				arrCamposError.push(campo);
			}
		}
		if (j == m) {
			l++;
		}
	}
	if (l == intTipoCamposLen){
		mostrarCorrectos(arrCamposCorrectos);
		return true;
	} else {
		mostrarError(arrCamposError);
		mostrarCorrectos(arrCamposCorrectos);
	}
}
function mostrarError(arrCamposError){
	var intInputsErrorLen = arrCamposError.length;
	var strMensaje = "";
	strMensaje += "<ul>"
	for (var i = 0; i < intInputsErrorLen; i++){
		var campo = arrCamposError[i];
		Element.setStyle(campo, {borderColor: '#CC0000'});
		strMensaje += "<li class='listadoFlecha'>" + campo.getAttribute('mensajeError') + "</li>";
	}
	strMensaje += "</ul><br />";
	strMensaje += "Por favor arregle estos problemas (marcados abajo en rojo) e intente nuevamente.";
	Element.show('mensajeError');
	var parrafoMensaje = document.getElementById("mensajes");
	parrafoMensaje.innerHTML = strMensaje;
}
function mostrarCorrectos(arrCamposCorrectos){
	var intInputsCorrectosLen = arrCamposCorrectos.length;
	for (var i = 0; i < intInputsCorrectosLen; i++){
		var campo = arrCamposCorrectos[i];
		Element.setStyle(campo, {borderColor: '#CCCCCC'});
	}
}