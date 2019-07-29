/**
 * tabs.js
 * Autor: Carlos Reyes
 * Fecha: 2007/07/23
 * Descripcion: Codigo para mostrar/esconder tabs
 */
var intTabsLen = 0;
function iniciarTabs(strTabInicial){
	intTabsLen = arrContenido.length;
	var i = 0;
	var intIdInicial = 0;
	while (i < intTabsLen) {
		if (arrContenido[i].identificador == strTabInicial){
			intIdInicial = i;
			break;
		} else {
			i++;
		}
	}
	escogerTab(intIdInicial);
}
function mostrarContenido(idLayer){
	var strIdentificadorTab = arrContenido[idLayer].identificador;
	var strContenido = "contenido" + strIdentificadorTab;
	Element.setStyle(strContenido, {display: 'block'});
	var strFoto = "foto" + strIdentificadorTab;
	Element.setStyle(strFoto, {display: 'block'});
	var strTab = "tab" + strIdentificadorTab;
	Element.setStyle(strTab, {backgroundColor: '#88B92D'});
	var strTextoOpcion = "textoOpcion" + strIdentificadorTab;
	Element.addClassName(strTextoOpcion, 'textoOpcion');
	var strMensaje = strPrefijoTestigo + arrContenido[idLayer].tipTestigo;
	var bloqueTestigo = document.getElementById("testigo");
	bloqueTestigo.innerHTML = strMensaje;
}
function ocultarContenido(idLayer){
	var strIdentificadorTab = arrContenido[idLayer].identificador;
	var strContenido = "contenido" + strIdentificadorTab;
	Element.setStyle(strContenido, {display: 'none'});
	var strFoto = "foto" + strIdentificadorTab;
	Element.setStyle(strFoto, {display: 'none'});
	var strTab = "tab" + strIdentificadorTab;
	Element.setStyle(strTab, {backgroundColor: '#D0E3AC'});
	var strTextoOpcion = "textoOpcion" + strIdentificadorTab;
	Element.removeClassName(strTextoOpcion, 'textoOpcion');
}

function escogerTab(intIdTab){
	for (var i = 0; i < intTabsLen; i++) {
		ocultarContenido(i);
	}
	mostrarContenido(intIdTab);
}