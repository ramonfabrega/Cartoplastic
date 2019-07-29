<? 
	$rutaRelativaIncludes = "..";
	include_once($rutaRelativaIncludes . "/configuracion.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
		<title><? echo(CFG_TITULOSITIO); ?> - Pedidos</title>
		<? include("../include/rel.inc"); ?>
		<script type="text/javascript" language="javascript">
			var arrFormularios = [];
			arrFormularios[0] = "formularioProductosPromocionales";
			arrFormularios[1] = "formularioProductosPapeleria";
			arrFormularios[2] = "formularioProductosBindingCase";
			arrFormularios[3] = "formularioProductosLetterFile";
			arrFormularios[4] = "formularioProductosPortafolios";
			arrFormularios[5] = "formularioProductosDuplicados";
			arrFormularios[6] = "formularioProductosDivisiones";
			arrFormularios[7] = "formularioProductosFoldersExpansibles";
			arrFormularios[8] = "formularioProductosPortadores";
			arrFormularios[9] = "formularioOtros";
			var mensaje = "";		
			function enviar() {
				scroll(0,0);
				// datosPersonales
				var empresa = getTextoInputText("empresa");
				var nombreCompleto = getTextoInputText("nombreCompleto");
				var telefono = getTextoInputText("telefono");
				var fax = getTextoInputText("fax");
				var email = getTextoInputText("email");
				var direccion = getTextoInputText("direccion");

				// datos producto
				var lineaInteres = getTextoSelect("lineaInteres");
				var valorProducto = getValorSelect("lineaInteres");
				var producto = "";
			
				var mensajeProducto = "";
				switch(valorProducto) {
					case "productosPromocionales" :
						producto = getTextoSelect(getValorSelect("lineaInteres"));
						var idTextAreaNecesidadesPersonalizacion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "NecesidadesPersonalizacion";
						var idSelectTipoImpresion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "TipoImpresion";
						var necesidadesPersonalizacion = getTextoTextArea(idTextAreaNecesidadesPersonalizacion);
						var tipoImpresion = getTextoSelect(idSelectTipoImpresion);
						if (necesidadesPersonalizacion != "" ) { mensajeProducto += "<b>Necesidades de personalización:</b> " + necesidadesPersonalizacion + "<br>"};
						if (tipoImpresion != "" ) { mensajeProducto += "<b>Tipo de impresión:</b> " + tipoImpresion + "<br>"};
					break;
					case "productosPapeleria" :
						producto = getTextoSelect(getValorSelect("lineaInteres"));
						var idTextAreaNecesidadesPersonalizacion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "NecesidadesPersonalizacion";
						var idSelectTipoImpresion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "TipoImpresion";
						necesidadesPersonalizacion = getTextoTextArea(idTextAreaNecesidadesPersonalizacion);
						tipoImpresion = getTextoSelect(idSelectTipoImpresion);
					break;
					case "productosBindingCase" :
						producto = getTextoSelect(getValorSelect("lineaInteres"));
						var idTextAreaNecesidadesPersonalizacion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "NecesidadesPersonalizacion";
						var idSelectTipoImpresion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "TipoImpresion";
						var necesidadesPersonalizacion = getTextoTextArea(idTextAreaNecesidadesPersonalizacion);
						var tipoImpresion = getTextoSelect(idSelectTipoImpresion);
						var mecanismo = getTextoSelect("tipoMecanismoBindingCase");
						var material = getTextoSelect("materialBindingCase");
						var valorMaterial = getValorSelect("materialBindingCase");
						var idSelectColor = "color" + valorMaterial.substr(0,1).toUpperCase() + valorMaterial.substr(1, valorMaterial.length);
						var color = getTextoSelect(idSelectColor);
						if (necesidadesPersonalizacion != "" ) { mensajeProducto += "<b>Necesidades de personalización:</b> " + necesidadesPersonalizacion + "<br>"};
						if (tipoImpresion != "" ) { mensajeProducto += "<b>Tipo de impresión:</b> " + tipoImpresion + "<br>"};
						mensajeProducto +=  "<b>Mecanismo:</b> " + mecanismo + "<br>";
						mensajeProducto +=  "<b>Material:</b> " + material + "<br>";
						mensajeProducto +=  "<b>Color:</b> " + color;
					break;
					case "productosLetterFile" :
						producto = getTextoSelect(getValorSelect("lineaInteres"));
						var idSelectTipoImpresion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "TipoImpresion";
						var tipoImpresion = getTextoSelect(idSelectTipoImpresion);
						var mecanismo = getTextoSelect("tipoMecanismoLetterFile");
						var valorMaterial = getValorSelect("materialLetterFile");
						var material = getTextoSelect("materialLetterFile");
						var idSelectColor = "color" + valorMaterial.substr(0,1).toUpperCase() + valorMaterial.substr(1, valorMaterial.length);
						var color = getTextoSelect(idSelectColor);
						if (tipoImpresion != "" ) { mensajeProducto += "<b>Tipo de impresión:</b> " + tipoImpresion + "<br>"};
						mensajeProducto +=  "<b>Mecanismo:</b> " + mecanismo + "<br>";
						mensajeProducto +=  "<b>Material:</b> " + material + "<br>";
						mensajeProducto +=  "<b>Color:</b> " + color;
					break;
					case "productosPortafolios" :
						producto = getTextoSelect(getValorSelect("lineaInteres"));
						var idSelectTipoImpresion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "TipoImpresion";
						var tipoImpresion = getTextoSelect(idSelectTipoImpresion);
						var mecanismo = getValorRadioGroup("tipoMecanismoPortafolio");
						var valorMaterial = getValorSelect("materialProductosPortafolios");
						var material = getTextoSelect("materialProductosPortafolios");
						var idSelectColor = "color" + valorMaterial.substr(0,1).toUpperCase() + valorMaterial.substr(1, valorMaterial.length);
						var color = getTextoSelect(idSelectColor);
						if (tipoImpresion != "" ) { mensajeProducto += "<b>Tipo de impresión:</b> " + tipoImpresion + "<br>"};
						mensajeProducto +=  "<b>Mecanismo:</b> " + mecanismo + "<br>";
						mensajeProducto +=  "<b>Material:</b> " + material + "<br>";
						if (color != undefined) {mensajeProducto +=  "<b>Color:</b> " + color};
					break;
					case "productosDuplicados" :
						producto = undefined;
						var idTextAreaNecesidadesPersonalizacion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "NecesidadesPersonalizacion";
						var idSelectTipoImpresion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "TipoImpresion";
						var necesidadesPersonalizacion = getTextoTextArea(idTextAreaNecesidadesPersonalizacion);
						var tipoImpresion = getTextoSelect(idSelectTipoImpresion);
						var cantidadDuplicados = getTextoInputText("cantidadProductosDuplicados");
						var color = getTextoSelect("colorTintaProductosDuplicados");
						var tipoEntregaFinal = getValorRadioGroup("entregaFinalProductosDivisiones");
						if (tipoImpresion != "" ) { mensajeProducto += "<b>Tipo de impresión:</b> " + tipoImpresion + "<br>"};
						mensajeProducto +=  "<b>Cantidad de duplicados por original:</b> " + cantidadDuplicados + "<br>";
						mensajeProducto +=  "<b>Color de la tinta:</b> " + color + "<br>";
						mensajeProducto +=  "<b>Entrega final:</b> " + tipoEntregaFinal;
					break;
					case "productosDivisiones" :
						producto = undefined;
						var cantidadJuegos = getTextoInputText("cantidadJuegosDivisiones");
						var cantidadDivisionesPorJuego = getTextoInputText("cantidadDivisionesPorJuego");
						var material = getTextoSelect("materialDivisiones");
						var idSelectTipoImpresion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "TipoImpresion";
						var tipoImpresion = getTextoSelect(idSelectTipoImpresion);
						var colorCartulina = getTextoSelect("colorCartulinaDivisiones");
						var impresionPestana = getValorRadioGroup("impresionPestanaProductosDivisiones");
						var impresionFrente = getValorRadioGroup("impresionEnFrente");
						var impresionOtraParte = getValorRadioGroup("impresionOtroLugar");
						var impresionDondeOtraParte = getTextoInputText("impresionDondeOtraParteDivisiones");
						var colorRefuerzoPestana = getTextoSelect("colorRefuerzoPestanaDivisiones");
						var idTextAreaNecesidadesPersonalizacion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "NecesidadesPersonalizacion";
						var observaciones = getTextoTextArea(idTextAreaNecesidadesPersonalizacion);
						if (tipoImpresion != "" ) { mensajeProducto += "<b>Tipo de impresión:</b> " + tipoImpresion + "<br>"};
						if (observaciones != "" ) { mensajeProducto += "<b>Observaciones:</b> " + observaciones + "<br>"};
						mensajeProducto +=  "<b>Cantidad de juegos:</b> " + cantidadJuegos + "<br>";
						mensajeProducto +=  "<b>Cantidad de divisiones por juego:</b> " + cantidadDivisionesPorJuego + "<br>";
						mensajeProducto +=  "<b>Color cartulina:</b> " + colorCartulina + "<br>";
						mensajeProducto +=  "<b>Impresión en la pestaña:</b> " + impresionPestana + "<br>";
						mensajeProducto +=  "<b>Impresión en el frente:</b> " + impresionFrente + "<br>";
						if(impresionOtraParte == "Si") {mensajeProducto +=  "<b>Impresión en otra parte:</b> " + impresionDondeOtraParte + "<br>";} else {mensajeProducto +=  "<b>Impresión en otra parte:</b> No<br>";}
						mensajeProducto +=  "<b>Color del refuerzo:</b> " + colorRefuerzoPestana;
					break;
					case "productosFoldersExpansibles" :
						producto = getTextoSelect(getValorSelect("lineaInteres"));
						var valorMaterial = getValorSelect("materialFoldersExpansibles");
						var material = getTextoSelect("materialFoldersExpansibles");
						var idSelectColor = "color" + valorMaterial.substr(0,1).toUpperCase() + valorMaterial.substr(1, valorMaterial.length);
						var color = getTextoSelect(idSelectColor);
						var percalina = getTextoSelect("percalinaFoldersExpansibles");
						var tamano = getTextoSelect("tamanoFoldersExpansibles");
						var idSelectTipoImpresion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "TipoImpresion";
						var tipoImpresion = getTextoSelect(idSelectTipoImpresion);
						var tamanoLomo = getTextoSelect("tamanoLomoFoldersExpansibles");
						var cantidadDivisiones = getTextoInputText("cantidadDivisionesFoldersExpansibles");
						var materialDivisiones = getTextoSelect("materialDivisionesFoldersExpansibles");
						if (tipoImpresion != "" ) { mensajeProducto += "<b>Tipo de impresión:</b> " + tipoImpresion + "<br>"};
						mensajeProducto +=  "<b>Material:</b> " + material + "<br>";
						mensajeProducto +=  "<b>Color:</b> " + color + "<br>";
						mensajeProducto +=  "<b>Percalina:</b> " + percalina + "<br>";
						mensajeProducto +=  "<b>Tamaño:</b> " + tamano + "<br>";
						mensajeProducto +=  "<b>Tamaño del lomo:</b> " + tamanoLomo + "<br>";
						mensajeProducto +=  "<b>Cantidad de divisiones:</b> " + cantidadDivisiones + "<br>";
						mensajeProducto +=  "<b>Material de las divisiones:</b> " + materialDivisiones;
					break;
					case "productosPortadores" :
						producto = getTextoSelect(getValorSelect("lineaInteres"));
						var idSelectTipoImpresion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "TipoImpresion";
						var tipoImpresion = getTextoSelect(idSelectTipoImpresion);
						var material = getTextoSelect("materialProductosPortadores");
						var valorMaterial = getValorSelect("materialProductosPortadores");
						var material = getTextoSelect("materialProductosPortadores");
						var idSelectColor = "color" + valorMaterial.substr(0,1).toUpperCase() + valorMaterial.substr(1, valorMaterial.length);
						var color = getTextoSelect(idSelectColor);
						if (tipoImpresion != "" ) { mensajeProducto += "<b>Tipo de impresión:</b> " + tipoImpresion + "<br>"};
						mensajeProducto +=  "<b>Material:</b> " + material + "<br>";
						mensajeProducto +=  "<b>Color:</b> " + color;
					break;
					case "otros" :
						producto = getTextoSelect(getValorSelect("lineaInteres"));
						var idTextAreaNecesidadesPersonalizacion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "NecesidadesPersonalizacion";
						var idSelectTipoImpresion = "formulario" + valorProducto.substr(0,1).toUpperCase() + valorProducto.substr(1,valorProducto.length) + "TipoImpresion";
						var necesidadesPersonalizacion = getTextoTextArea(idTextAreaNecesidadesPersonalizacion);
						var tipoImpresion = getTextoSelect(idSelectTipoImpresion);
						if (necesidadesPersonalizacion != "" ) { mensajeProducto += "<b>Necesidades de personalización:</b> " + necesidadesPersonalizacion + "<br>"};
						if (tipoImpresion != "" ) { mensajeProducto += "<b>Tipo de impresión:</b> " + tipoImpresion + "<br>"};
						break;
				}
				var detallesProducto = getTextoSelect(getValorSelect(valorProducto));
				var cantidad = getTextoInputText("cantidadProducto");
				var otrosDatos = getTextoTextArea("otrosDatosProducto");
				if (empresa != "" ) { mensaje += "<b>Empresa:</b> " + empresa + "<br>"};
				if (nombreCompleto != "" ) { mensaje += "<b>Nombre:</b> " + nombreCompleto + "<br>"};
				if (telefono != "" ) { mensaje += "<b>Teléfono:</b> " + telefono + "<br>"};
				if (fax != "" ) { mensaje += "<b>Fax:</b> " + fax + "<br>"};
				if (email != "" ) { mensaje += "<b>Email:</b> " + email + "<br>"};
				if (direccion != "" ) { mensaje += "<b>Dirección:</b> " + direccion + "<br>"};
				if (lineaInteres != undefined ) { mensaje += "<b>Línea de Interés:</b> " + lineaInteres + "<br>"};
				if (producto != undefined ) { mensaje += "<b>Producto:</b> " + producto + "<br>"};
				if (detallesProducto != undefined ) { mensaje += "<b>Detalles:</b> " + detallesProducto + "<br>"};
				if (cantidad != "" ) { mensaje += "<b>Cantidad:</b> " + cantidad + "<br>"};
				if (otrosDatos != "" ) { mensaje += "<b>Otros datos:</b> " + otrosDatos + "<br>"};
				mensaje += mensajeProducto;
				var parrafoMensaje = document.getElementById("datosPedido");
				parrafoMensaje.innerHTML = mensaje;
				Element.show('confirmacionPedido');
				Element.hide('formularioPedidos');
				Element.hide('mensajeError');
			}
			function confirmarPedido() {
				var opt = {
					method: 'post',
					postBody:  "nombreCompleto=" + getTextoInputText("nombreCompleto") + "&email=" + getTextoInputText("email") + "&datosPedido=" + mensaje,
					onSuccess: function(t) {
						Element.show('mensajeExito');
						scroll(0,0);
					},
					on404: function(t) {
						alert('Error 404: location "' + t.statusText + '" was not found.');
					},
					onFailure: function(t) {
						alert('Error ' + t.status + ' -- ' + t.statusText);
					}
				}
				new Ajax.Request('/php/enviarPedido.php', opt);
				Element.hide('confirmacionPedido');
			}
			function cancelarPedido(){
				mensaje = "";
				Element.hide('confirmacionPedido');
				Element.hide('mensajeError');
				Element.show('formularioPedidos');
			}
			function getTextoInputText(idInputText){
				var input = document.getElementById(idInputText);
				var valorInput = input.value;
				return valorInput;
			}
			function getTextoTextArea(idTextArea){
				var textArea = document.getElementById(idTextArea);
				var valorTextArea = textArea.value;
				return valorTextArea;
			}
			function getTextoSelect(idSelect){
				var select = document.getElementById(idSelect);
				if(select != null) {
					var valorSelect = select.value;
					var opciones = select.options;
					var lenOpcionesListado = opciones.length;
					for (var i = 0; i < lenOpcionesListado; i++) {
						if (opciones[i].value == valorSelect){
							return opciones[i].text;
						}
					}
				}
			}
			function getValorSelect(idSelect){
				var select = document.getElementById(idSelect);
				if(select != null) {
					var valorSelect = select.value;
					return (valorSelect);
				}
			}
			function getValorRadioGroup(nombreGrupo){
				var inputs = document.getElementsByTagName("input");
				var lenInputs = inputs.length;
				var arrGrupoRadio = [];
				for (var i = 0; i < lenInputs; i++) {
					input = inputs[i];
					var atributo = String(input.getAttribute('type'));
					if (atributo == "radio"){
						var nombreGrupoActual = String(input.getAttribute('name'));
						if (nombreGrupoActual == nombreGrupo){
							arrGrupoRadio.push(input);
						}
					}
				}
				var lenGrupoRadio = arrGrupoRadio.length;
				for (var i = 0; i < lenGrupoRadio; i++) {
        			if (arrGrupoRadio[i].checked) { 
        				return arrGrupoRadio[i].value;
        				break;
        			}
    			}
			}
			function mostrarProductosLinea(){
				var forma = document.forms.formularioPedidos;
				var valor = forma.lineaInteres.value;
				var idFormulario = "formulario" + valor.substr(0,1).toUpperCase() + valor.substr(1,valor.length);
				var formulario = document.getElementById(idFormulario);
				var intFormulariosLen = arrFormularios.length;
				for (var j = 0; j < intFormulariosLen; j++){
					var formularioActual = document.getElementById(arrFormularios[j]);
					if(idFormulario == arrFormularios[j]){
						Element.setStyle(formulario, {display: 'block'});
					} else {
						Element.setStyle(formularioActual, {display: 'none'});
					}
				}
				var campos = forma.getElementsByTagName("select");
				var intCamposLen = campos.length; 
				var i = 0;
				for (var k = 0; k < intCamposLen; k++){
					var campo = campos[k];
					if(campo.name.indexOf("productos") != -1){
						if(campo.name == valor){
							i++;
							Element.setStyle(campo, {display: ''});
							mostrarSubProductosLinea(valor);
						} else {
							Element.setStyle(campo, {display: 'none'});
						}
					} 
				}
				if (i == 0) {
					esconderSubProductosLinea();
					Element.setStyle("productos", {display: 'none'});
				} else {
					Element.setStyle("productos", {display: ''});
				}
			}
			function mostrarSubProductosLinea(strComboProducto){
				var forma = document.forms.formularioPedidos;
				var valor = forma[strComboProducto].value;
				var campos = forma.getElementsByTagName("select");
				var intCamposLen = campos.length; 
				var i = 0;
				for (var k = 0; k < intCamposLen; k++){
					var campo = campos[k];
					if(campo.name.indexOf("subProductos") != -1){
						if(campo.name == valor){
							i++;
							Element.setStyle(campo, {display: ''});
						} else {
							Element.setStyle(campo, {display: 'none'});
						}
					}
				}
				if (i == 0) {
					esconderSubProductosLinea();
					Element.setStyle("otrasCaracteristicas", {display: 'none'});
				} else {
					Element.setStyle("otrasCaracteristicas", {display: ''});
				}
			}
			function esconderSubProductosLinea(){
				var forma = document.forms.formularioPedidos;
				var campos = forma.getElementsByTagName("select");
				var intCamposLen = campos.length; 
				for (var k = 0; k < intCamposLen; k++){
					var campo = campos[k];
					if(campo.name.indexOf("subProductos") != -1){
						Element.setStyle(campo, {display: 'none'});
					}
				}
				Element.setStyle("otrasCaracteristicas", {display: 'none'});
			}
			function mostrarColor(strFormularioMaterial){
				var forma = document.forms.formularioPedidos;
				var valor = forma[strFormularioMaterial].value;
				var idColor = "color" + valor.substr(0,1).toUpperCase() + valor.substr(1,valor.length);
				// se calcula el contenido de strFormularioMaterial quitando la palabra material para poder igualar
				var idColorGenerico = "color" + strFormularioMaterial.substr(8,1).toUpperCase() + strFormularioMaterial.substr(9,valor.length);
				var campos = forma.getElementsByTagName("select");
				var intCamposLen = campos.length; 
				var i = 0;
				for (var k = 0; k < intCamposLen; k++){
					var campo = campos[k];
					if(campo.name.indexOf(idColorGenerico) != -1){
						if(campo.name == idColor){
							i++;
							Element.setStyle(campo, {display: ''});
						} else {
							Element.setStyle(campo, {display: 'none'});
						}
					} 
				}
			}
		</script>
	</head>
	<body>
		<a name="arriba"></a>
		<div id="contenedor">
			<?
				include($rutaRelativaIncludes . "/include/header.inc");
			?>
			<div id="franjaContenido">
			<?
				$opcionActual = "pedidos";
				include($rutaRelativaIncludes . "/include/menu.inc");
			?>	
				<div id="testigo">
					Pedidos 1,2,3
				</div>
				<div id="contenido">
					<div class="tituloSeccion">
						<img src="/imagenes/123HagaSuPedido.gif" width="193px" height="22px" alt="123 Haga su pedido">
					</div>
					<div class="col">
						<div id="mensajeError" style="display:none;">
							<div class="cabezoteMensajeError">
								<p class="cuerpoCabezoteMensajeError" style="margin:0px;"><? echo(CFG_TITULOBLOQUEMENSAJESERROR); ?></p>
							</div>
							<div id="mensajes" class="cuerpoMensajeError"></div>
						</div>
					</div>
					<div id="confirmacionPedido" style="display:none;">
						<p>Revise los datos sobre su pedido. Haga click en el bot&oacute;n <b>CONFIRMAR Y ENVIAR SOLICITUD</b> si son correctos.<br>Uno de nuestros ejecutivos de venta se pondr&aacute; en contacto con usted lo antes posible.</p>
						<p id="datosPedido"></p>
						<div style="width: 100%; float:left; padding-top:30px;">
							<div style="float:right;">
								<a href="javascript:cancelarPedido();">Cancelar</a>&nbsp&nbsp&nbsp&nbsp&nbsp<input id="botonConfirmar" type="image" src="/imagenes/confirmarEnviarSolicitudBtn.gif" width="329px" height="22px" alt="Confirmar y enviar solicitud" onclick="confirmarPedido(); return false;" />
							</div>
						</div>
					</div>
					<div class="col" style="width: 100%;">
						<div id="mensajeExito" style="display:none;">
							<ul>
								<li class="chulitoExito"><? echo(CFG_MENSAJEEXITOENVIOMENSAJE); ?></li>
							</ul>
						</div>
						<form id="formularioPedidos">
						<p>Nuestros ejecutivos de venta están disponibles para ayudarle a resolver cualquier duda, ampliar informaci&oacute;n, o solicitar alguno de nuestros servicios. <br />No dude en escribirnos y pronto recibir&aacute; noticias nuestras. Todos los campos marcados con * son obligatorios</p>
						<div style="width: 50%; float: left;">
							<div style="float:left; padding-right: 20px;">
								<img src="/imagenes/datosContacto.png" width="82px" height="300px" alt="Datos de contacto">
							</div>
							<div>
								Empresa<br />
								<input class="inputTextoLargo" name="empresa" id="empresa" type="text" value="" /><br /><br />
								* Nombre completo<br />
								<input class="inputTextoLargo" name="nombreCompleto" id="nombreCompleto" type="text" value="" mensajeError="El campo <b>Nombre completo</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty"/><br /><br />
								* Tel&eacute;fono<br />
								<input class="inputTextoLargo" name="telefono" id="telefono" type="text" value="" mensajeError="El campo <b>Tel&eacute;fono</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty"/><br /><br/>
								Fax<br />
								<input class="inputTextoLargo" name="fax" id="fax" type="text" value="" /><br /><br />
								* Email<br />
								<input class="inputTextoLargo" name="email" id="email"  type="text" value="" mensajeError="El campo <b>Email</b> no puede estar vac&iacute;o y debe ser v&aacute;lido. Ej: nombre@hotmail.com" tipoVerificacion="isEmail"/><br /><br />
								* Direcci&oacute;n<br />
								<input class="inputTextoLargo" name="direccion" id="direccion" type="text" value="" mensajeError="El campo <b>Direcci&oacute;n</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty" /><br /><br />
							</div>
						</div>
						<div style="width: 50%; float: left;">
							<div style="float:left; padding-right: 20px;">
								<img src="/imagenes/productoCantidad.png" width="82px" height="300px" alt="Elija producto y cantidad">
							</div>
							<div>
								* Linea / referencia<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="lineaInteres" id="lineaInteres" onChange="mostrarProductosLinea();">
										<option value="productosPromocionales">Productos promocionales</option>
										<option value="productosPapeleria">Papeler&iacute;a</option>
										<option value="productosBindingCase">Binding cases</option>
										<option value="productosLetterFile">Letter files</option>
										<option value="productosPortafolios">Portafolios</option>
										<option value="productosDuplicados">Duplicados</option>
										<option value="productosDivisiones">Divisiones</option>
										<option value="productosFoldersExpansibles">Folders expansibles</option>
										<option value="productosPortadores">Cubiertas y estuches</option>
										<option value="otros">Otros</option>
									</select>
								</div>
								<div id="productos">
									<br />
									* Productos<br />
									<div style="padding-top:6px;">
										<select rel="verificable" class="selectTextoLargo" style="display:none;" name="productosPromocionales" id="productosPromocionales" onChange="mostrarSubProductosLinea('productosPromocionales');">
											<option value="subProductosProductosPromocionalesRompecabezas">Rompecabezas</option>
											<option value="subProductosPapeleria">Asientos de estadio</option>
											<option value="subProductosBindingCase">Portavasos (Coasters)</option>
											<option value="subProductosLetterFile">Aislantes de calor para vasos</option>
											<option value="subProductosRevisteros">Revisteros</option>
											<option value="subProductosCajaDecorativas">Cajas Decorativas</option>
											<option value="subProductosNoListados">Otros no listados</option>
										</select>											
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="productosPapeleria" id="productosPapeleria" onChange="mostrarSubProductosLinea('productosPapeleria');">
											<option value="subProductosPapeleriaTarjetas">Tarjetas</option>
											<option value="subProductosPapeleriaPapelMembrete">Papel membrete</option>
											<option value="subProductosPapeleriaSobres">Sobres</option>
											<option value="subProductosPapeleriaFoldersPresentaciones">Folders para presentaciones</option>
											<option value="subProductosPapeleriaLibretasApuntes">Libretas de apuntes</option>
											<option value="subProductosPapeleriaLibretasPad">Libretas tipo pad</option>
											<option value="subProductosPapeleriaEncuadernacion">Encuadernaci&oacute;n</option>
										</select>
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="productosBindingCase" id="productosBindingCase" onChange="mostrarSubProductosLinea('productosBindingCase');">
											<option value="subProductosBindingCase49">No. 49 (tama&ntilde;o especial - 5 1/2" x 8 1/2"</option>
											<option value="subProductosBindingCase50">No. 50 (tama&ntilde;o carta - 8 1/2" x 11")</option>
											<option value="subProductosBindingCase51">No. 51 (tama&ntilde;o legal - 8 1/2" x 14")</option>
										</select>
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="productosLetterFile" id="productosLetterFile" onChange="mostrarSubProductosLinea('productosLetterFile');">
											<option value="subProductosLetterFileCarta">Carta - 8 1/2" x 11"</option>
											<option value="subProductosLetterFileLegal">Legal - 8 1/2" x 14"</option>
										</select>
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="productosPortafolios" id="productosPortafolios" onChange="mostrarSubProductosLinea('productosPortafolios');">
											<option value="subProductosPortafoliosCarta">Carta - 8 1/2" x 11"</option>
											<option value="subProductosPortafoliosLegal">Legal - 8 1/2" x 14"</option>
											<option value="subProductosPortafolios9x7">9" x 7"</option>
											<option value="subProductosPortafolios11x17">11" x 17"</option>
										</select>
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="productosFoldersExpansibles" id="productosFoldersExpansibles" onChange="mostrarSubProductosLinea('productosFoldersExpansibles');">
											<option value="subProductosFoldersExpansiblesSencillo">Sencillo</option>
											<option value="subProductosFoldersExpansiblesConDivisiones">Con divisiones</option>
										</select>
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="productosPortadores" id="productosPortadores" onChange="mostrarSubProductosLinea('productosPortadores');">
											<option value="subProductosPortadoresPortaPads">PortaPads o Portalibretas / Carpetas de congreso</option>
											<option value="subProductosPortadoresPortaDiplomas">Portadiplomas / certificados</option>
											<option value="subProductosPortadoresPortaMenus">Portamenus / Portacuentas</option>
											<option value="subProductosPortadoresPortaDocumentos">Portadocumentos</option>
											<option value="subProductosPortadoresPortaChequeras">Portachequeras</option>
											<option value="subProductosPortadoresPortaCedulas">Porta C&eacute;dulas / Porta tarjetas</option>
											<option value="subProductosPortadoresPortaPolizas">Portap&oacute;lizas de seguros</option>
											<option value="subProductosPortadoresPortaDocumentosAutos">Portadocumentos de autos</option>
											<option value="subProductosPortadoresPortaDocumentosViaje">Portadocumentos de viaje</option>
											<option value="subProductosPortadoresIdentificadorMaletas">Identificador de maletas de viaje</option>
											<option value="subProductosPortadoresOtros">Otros identificadores</option>
										</select>
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="productosCajaDecorativas" id="productosCajaDecorativas" onChange="mostrarSubProductosLinea('productosCajaDecorativas');">
											<option value="subProductosCajaDecorativas">Otros identificadores (Explique que tipo de identificador necesita</option>
										</select>
										
									</div>
								</div>
								<div id="otrasCaracteristicas">
									<br/>
									* Detalles<br />
									<div style="padding-top:6px;">
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="subProductosPapeleriaTarjetas" id="subProductosPapeleriaTarjetas">
											<option value="papeleriaTarjetasPresentacionRegalo">Presentaci&oacute;n/Regalo (2" x 3 1/2")</option>
											<option value="papeleriaTarjetasTamanosEspeciales">Tama&ntilde;os especiales</option>
										</select>
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="subProductosProductosPromocionalesRompecabezas" id="subProductosProductosPromocionalesRompecabezas">
											<option value="productosPromocionalesRompecabezas99">99 piezas (16 ½” X 10 ¾”)</option>
											<option value="productosPromocionalesRompecabezas24">24 piezas (10” X 16”)</option>
											<option value="productosPromocionalesRompecabezas12y24">12 y 24 piezas (4” X 6”)</option>
											<option value="productosPromocionalesRompecabezas15">15 piezas (8” X 10”)</option>
											<option value="productosPromocionalesRompecabezas20">20 piezas (7” X 6”)</option>
											<option value="productosPromocionalesRompecabezas35">35 piezas (10” X 16”)</option>
											<option value="productosPromocionalesRompecabezas50">50 piezas (11” X 17”)</option>
											<option value="productosPromocionalesRompecabezas9">9 piezas (4 ½” X 9”)</option>	
										</select>
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="subProductosPapeleriaFoldersPresentaciones" id="subProductosPapeleriaFoldersPresentaciones">
											<option value="papeleriaFoldersPresentacionesCarta">Carta</option>
											<option value="papeleriaFoldersPresentacionesLegal">Legal</option>
										</select>
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="subProductosPapeleriaEncuadernacion" id="subProductosPapeleriaEncuadernacion">
											<option value="papeleriaEncuadernacionDobleO">Anillo doble "O"</option>
											<option value="papeleriaEncuadernacionDobleO">Empastado</option>
										</select>
										<select rel="verificable"  class="selectTextoLargo" style="display:none;" name="subProductosPortadoresPortaPads" id="subProductosPortadoresPortaPads">
											<option value="portadoresPortaPads5x8">5 1/2" x 8 1/2"</option>
											<option value="portadoresPortaPadsCarta">Carta - 8 1/2" x 11"</option>
											<option value="portadoresPortaPadsLegal">Legal - 8 1/2" x 14"</option>
										</select>
									</div>
								</div>
								<div>
									<br/>
									* Cantidad<br />
									<input class="inputTextoLargo" name="cantidad" id="cantidadProducto" type="text" value="" /><br /><br />
									Otros datos<br />
									<textArea class="textAreaLargo" name="otrosDatos" id="otrosDatosProducto"></textArea>
								</div>
							</div>
						</div>
						<div id="especificaciones" style="float: left; width: 100%; padding-top: 20px;">
							<div style="float:left; padding-right: 20px;">
								<img src="/imagenes/especificaciones.png" width="82px" height="300px" alt="Caracter&iacute;sticas del producto" />
							</div>
							<div id="formularioProductosPromocionales" style="display:none;">
								Describa las necesidades de personalizaci&oacute;n<br />
								<textArea class="textAreaLargo" name="otrosDatosProductosPromocionales" id="formularioProductosPromocionalesNecesidadesPersonalizacion" ></textArea>
								<br /><br />
								* Impresi&oacute;n<br />
									<div style="padding-top:6px;">
										<select class="selectTextoLargo" name="impresionProductosPromocionales" id="formularioProductosPromocionalesTipoImpresion">
													<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
													<option value="impresionProductosRepujado">Repujado</option>
													<option value="impresionProductosRealzado">Realzado</option>
													<option value="impresionProductosEstampado">Estampado</option>
													<option value="impresionProductosColor">Color</option>
												<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
											</select>
										</div>	
							</div>
							<div rel="verificable" id="formularioProductosPapeleria" style="display:none;">
								Describa las necesidades de personalizaci&oacute;n<br />
								<textArea class="textAreaLargo" name="otrosDatosPapeleria" id="formularioProductosPapeleriaNecesidadesPersonalizacion" ></textArea>
								<br /><br />
								* Impresi&oacute;n<br />
									<div style="padding-top:6px;">
										<select class="selectTextoLargo" name="impresionProductosPapeleria" id="formularioProductosPapeleriaTipoImpresion">
													<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
													<option value="impresionProductosRepujado">Repujado</option>
													<option value="impresionProductosRealzado">Realzado</option>
													<option value="impresionProductosEstampado">Estampado</option>
													<option value="impresionProductosColor">Color</option>
												<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
											</select>
										</div>	
							</div>
							<div rel="verificable"  id="formularioOtros" style="display:none;">
								Describa las necesidades de personalizaci&oacute;n<br />
								<textArea class="textAreaLargo" name="otrosDatosProductosPromocionales" id="formularioOtrosNecesidadesPersonalizacion"></textArea>
								<br /><br />
								* Impresi&oacute;n<br />
									<div style="padding-top:6px;">
										<select class="selectTextoLargo" name="impresionOtros"  id="formularioOtrosTipoImpresion">
													<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
													<option value="impresionProductosRepujado">Repujado</option>
													<option value="impresionProductosRealzado">Realzado</option>
													<option value="impresionProductosEstampado">Estampado</option>
													<option value="impresionProductosColor">Color</option>
												
												<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
											</select>
										</div>	
							</div>
							<div rel="verificable"  id="formularioProductosBindingCase" style="display:none;">
								Describa sus necesidades de personalizaci&oacute;n en el lomo<br />
								<textArea class="textAreaLargo" name="otrosDatosProductosPromocionales" id="formularioProductosBindingCaseNecesidadesPersonalizacion" ></textArea>
								<br /><br />
								* Impresi&oacute;n<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="impresionBindingCase" id="formularioProductosBindingCaseTipoImpresion">
										<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
										<option value="impresionProductosRepujado">Repujado</option>
										<option value="impresionProductosRealzado">Realzado</option>
										<option value="impresionProductosEstampado">Estampado</option>
										<option value="impresionProductosColor">Color</option>
										<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
									</select>
								</div><br />
								* Mecanismo<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="mecanismoProductosBindingCase" id="tipoMecanismoBindingCase">
										<option value="mecanismoProductosBindingCase7cm">7 cm</option>
										<option value="mecanismoProductosBindingCase8cm">8 cm</option>
									</select>
								</div><br />
								<div style="margin-right: 10px; float:left;">
									* Material<br />
									<div style="padding-top:6px;">
										<select class="selectTextoCorto" name="materialProductosBindingCase" id="materialBindingCase" onChange="mostrarColor('materialProductosBindingCase');">
											<option value="productosBindingCaseFibrone">Fibrone</option>
											<option value="productosBindingCaseVinilo">Vinilo</option>
										</select>
									</div>
								</div>
								<div>
									* Color<br />
									<div style="padding-top:6px;">
										<select class="selectTextoCorto" name="colorProductosBindingCaseFibrone" id="colorProductosBindingCaseFibrone">
											<option value="colorProductosBindingCaseFibroneNegro">Negro</option>
											<option value="colorProductosBindingCaseFibroneRojo">Rojo</option>
											<option value="colorProductosBindingCaseFibroneAmarillo">Amarillo</option>
											<option value="colorProductosBindingCaseFibroneCeleste">Celeste</option>
										</select>
										<select class="selectTextoCorto" name="colorProductosBindingCaseVinilo" id="colorProductosBindingCaseVinilo">
											<option value="colorProductosBindingCaseViniloNegro">Negro</option>
											<option value="colorProductosBindingCaseViniloAzulOscuro">Azul oscuro</option>
											<option value="colorProductosBindingCaseViniloAzulRoyal">Azul royal</option>
											<option value="colorProductosBindingCaseViniloCeleste">Celeste</option>
											<option value="colorProductosBindingCaseViniloBlanco">Blanco</option>
											<option value="colorProductosBindingCaseViniloRojo">Rojo</option>
											<option value="colorProductosBindingCaseViniloVerde">Verde</option>
											<option value="colorProductosBindingCaseViniloGrisClaro">Gris claro</option>
											<option value="colorProductosBindingCaseViniloGrisOscuro">Gris oscuro</option>
											<option value="colorProductosBindingCaseViniloAmarillo">Amarillo</option>
											<option value="colorProductosBindingCaseViniloAqua">Aqua</option>
										</select>
									</div><br />
								</div>							
							</div>
							<div rel="verificable"  id="formularioProductosLetterFile" style="display:none; height:300px; ">
								* Impresi&oacute;n<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="impresionProductosLetterFile" id="formularioProductosLetterFileTipoImpresion">
										<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
										<option value="impresionProductosRepujado">Repujado</option>
										<option value="impresionProductosRealzado">Realzado</option>
										<option value="impresionProductosEstampado">Estampado</option>
										<option value="impresionProductosColor">Color</option>
										<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
									</select>
								</div><br />
								* Mecanismo<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="mecanismoProductosLetterFile" id="tipoMecanismoLetterFile">
										<option value="mecanismoProductosLetterFile7a50">7 cm - 50 mm de capacidad</option>
										<option value="mecanismoProductosLetterFile7a75">7 cm - 75 mm de capacidad</option>
										<option value="mecanismoProductosLetterFile8a75">8 cm - 75 mm de capacidad</option>
									</select>
								</div><br />
								* Material<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="materialProductosLetterFile" id="materialLetterFile" onChange="mostrarColor('materialProductosLetterFile');">
										<option value="productosLetterFileCartonPercalina">Cart&oacute;n forrado con percalina</option>
										<option value="productosLetterFileCartonForrado">Cart&oacute;n forrado con papel impreso</option>
										<option value="productosLetterFileCartonVinilo">Cart&oacute;n y vinilo</option>
									</select>
								</div><br />
								* Color<br />
								<div style="padding-top:6px;">
									<select class="selectTextoCorto" name="colorProductosLetterFileCartonPercalina" id="colorProductosLetterFileCartonPercalina">
										<option value="colorProductosLetterFileCartonPercalinaNegro">Negro</option>
										<option value="colorProductosLetterFileCartonPercalinaRojo">Blanco</option>
										<option value="colorProductosLetterFileCartonPercalinaAmarillo">Azul oscuro</option>
										<option value="colorProductosLetterFileCartonPercalinaCeleste">Celeste</option>
										<option value="colorProductosLetterFileCartonPercalinaGris">Gris</option>
										<option value="colorProductosLetterFileCartonPercalinaVerde">Verde</option>
										<option value="colorProductosLetterFileCartonPercalinaVino">Vino</option>
									</select>
									<select class="selectTextoCorto" name="colorProductosLetterFileCartonForrado" id="colorProductosLetterFileCartonForrado">
										<option value="colorProductosLetterFileCartonForradoBlanco">Blanco</option>								
									</select>
									<select class="selectTextoCorto" name="colorProductosLetterFileCartonVinilo" id="colorProductosLetterFileCartonVinilo">
										<option value="colorProductosLetterFileCartonViniloNegro">Negro</option>
										<option value="colorProductosLetterFileCartonViniloAzulOscuro">Azul oscuro</option>
										<option value="colorProductosLetterFileCartonViniloAzulRoyal">Azul royal</option>
										<option value="colorProductosLetterFileCartonViniloCeleste">Celeste</option>
										<option value="colorProductosLetterFileCartonViniloBlanco">Blanco</option>
										<option value="colorProductosLetterFileCartonViniloRojo">Rojo</option>
										<option value="colorProductosLetterFileCartonViniloVerde">Verde</option>
										<option value="colorProductosLetterFileCartonViniloGrisClaro">Gris claro</option>
										<option value="colorProductosLetterFileCartonViniloGrisOscuro">Gris oscuro</option>
										<option value="colorProductosLetterFileCartonViniloAmarillo">Amarillo</option>
										<option value="colorProductosLetterFileCartonViniloAqua">Aqua</option>
									</select>
								</div>		
							</div>
							<div rel="verificable" id="formularioProductosPortafolios" style="display:none;">
								* Mecanismo<br /><br />
								<div style="float: left; margin-right:10px;">
									<b>Tipo redondo</b><br />
									<div style="padding-top:6px;">
										<table class="tablaGeneral">
											<tr>
												<td style="width: 10px;">&nbsp;</td>
												<td>Tama&ntilde;o</td>
												<td>Capacidad en hojas</td>
											</tr>
											<tr>
												<td style="width: 10px;"><input type="radio" name="tipoMecanismoPortafolio" value="Tipo Redondo de ½”" checked></td>
												<td>½”</td>
												<td>100</td>
											</tr>
											<tr>
												<td style="width: 10px;"><input type="radio" name="tipoMecanismoPortafolio" value="Tipo Redondo de 1”"></td>
												<td>1”</td>
												<td>200</td>
											</tr>
											<tr>
												<td style="width: 10px;"><input type="radio" name="tipoMecanismoPortafolio" value="Tipo Redondo de 1 ½”"></td>
												<td>1 ½”</td>
												<td>300</td>
											</tr>
											<tr>
												<td style="width: 10px;"><input type="radio" name="tipoMecanismoPortafolio" value="Tipo Redondo de 2”"></td>
												<td>2”</td>
												<td>400</td>
											</tr>
											<tr>
												<td style="width: 10px;"><input type="radio" name="tipoMecanismoPortafolio" value="Tipo Redondo de 2 ½”"></td>
												<td>2 ½”</td>
												<td>500</td>
											</tr>
											<tr>
												<td style="width: 10px;"><input type="radio" name="tipoMecanismoPortafolio" value="Tipo Redondo de 3”"></td>
												<td>3”</td>
												<td>600</td>
											</tr>
										</table>
									</div>
								</div>
								<div>
									<b>Tipo D</b>
									<div style="padding-top:6px;">
										<table class="tablaGeneral">
											<tr>
												<td style="width: 10px;">&nbsp;</td>
												<td>Tama&ntilde;o</td>
												<td>Capacidad en hojas</td>
											</tr>
											<tr>
												<td style="width: 10px;"><input type="radio" name="tipoMecanismoPortafolio" value="Tipo D de 1”"></td>
												<td>1”</td>
												<td>250</td>
											</tr>
											<tr>
												<td style="width: 10px;"><input type="radio" name="tipoMecanismoPortafolio" value="Tipo D de 1 ½”"></td>
												<td>1 ½”</td>
												<td>375</td>
											</tr>
											<tr>
												<td style="width: 10px;"><input type="radio" name="tipoMecanismoPortafolio" value="Tipo D de 2”"></td>
												<td>2”</td>
												<td>500</td>
											</tr>
											<tr>
												<td style="width: 10px;"><input type="radio" name="tipoMecanismoPortafolio" value="Tipo D de 2 ½”"></td>
												<td>2 ½”</td>
												<td>625</td>
											</tr>
											<tr>
												<td style="width: 10px;">&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td style="width: 10px;">&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
											</tr>
										</table>
									</div>
								</div>
								<br />
								<div style="margin-right: 10px; float:left;">
									* Material<br />
									<div style="padding-top:6px;">
										<select class="selectTextoLargo" name="materialProductosPortafolios" id="materialProductosPortafolios" onChange="mostrarColor('materialProductosPortafolios');">
											<option value="productosPortafoliosCuerotexa">Cuerotexa</option>
											<option value="productosPortafoliosCastilian">Castilian</option>
											<option value="productosPortafoliosVinilo">Vinilo</option>
											<option value="productosPortafoliosPercalina">Percalina</option>
											<option value="productosPortafoliosCartonForrado">Cart&oacute;n forrado con papel impreso</option>
										</select>
									</div><br />
									* Impresi&oacute;n<br />
									<div style="padding-top:6px;">
										<select class="selectTextoLargo" name="impresionProductosPortafolios" id="formularioProductosPortafoliosTipoImpresion">
											<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
											<option value="impresionProductosRepujado">Repujado</option>
											<option value="impresionProductosRealzado">Realzado</option>
											<option value="impresionProductosEstampado">Estampado</option>
											<option value="impresionProductosColor">Color</option>
											<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
										</select>
									</div><br />								
								</div>
								<div>
									* Color<br />
									<div style="padding-top:6px;">
									<select class="selectTextoCorto" name="colorProductosPortafoliosCuerotexa" id="colorProductosPortafoliosCuerotexa" >
										<option value="colorProductosPortafoliosCuerotexaAzulOscuro">Azul oscuro</option>
										<option value="colorProductosPortafoliosCuerotexaNegro">Negro</option>
										<option value="colorProductosPortafoliosCuerotexaVino">Vino</option>
										<option value="colorProductosPortafoliosCuerotexaChocolate">Chocolate</option>
									</select>
									<select class="selectTextoCorto" name="colorProductosPortafoliosCastilian" id="colorProductosPortafoliosCastilian">
										<option value="colorProductosPortafoliosCastilianVerde">Verde</option>
										<option value="colorProductosPortafoliosCastilianVino">Vino</option>
										<option value="colorProductosPortafoliosCastilianAzul">Azul</option>
										<option value="colorProductosPortafoliosCastilianNegro">Negro</option>
									</select>
									<select class="selectTextoCorto" name="colorProductosPortafoliosVinilo" id="colorProductosPortafoliosVinilo">
										<option value="colorProductosPortafoliosViniloNegro">Negro</option>
										<option value="colorProductosPortafoliosViniloAzulOscuro">Azul oscuro</option>
										<option value="colorProductosPortafoliosViniloAzulRoyal">Azul royal</option>
										<option value="colorProductosPortafoliosViniloCeleste">Celeste</option>
										<option value="colorProductosPortafoliosViniloBlanco">Blanco</option>
										<option value="colorProductosPortafoliosViniloRojo">Rojo</option>
										<option value="colorProductosPortafoliosViniloVerde">Verde</option>
										<option value="colorProductosPortafoliosViniloGrisClaro">Gris claro</option>
										<option value="colorProductosPortafoliosViniloGrisOscuro">Gris oscuro</option>
										<option value="colorProductosPortafoliosViniloAmarillo">Amarillo</option>
										<option value="colorProductosPortafoliosViniloAqua">Aqua</option>
										<option value="colorProductosPortafoliosViniloAnaranjado">Anaranjado</option>
									</select>
									<select class="selectTextoCorto" name="colorProductosPortafoliosPercalina" id="colorProductosPortafoliosPercalina">
										<option value="colorProductosPortafoliosPercalinaNegro">Negro</option>
										<option value="colorProductosPortafoliosPercalinaAzulOscuro">Azul oscuro</option>
										<option value="colorProductosPortafoliosPercalinaCeleste">Celeste</option>
										<option value="colorProductosPortafoliosPercalinaGris">Gris</option>
										<option value="colorProductosPortafoliosPercalinaVerde">Verde</option>
										<option value="colorProductosPortafoliosPercalinaVino">Vino</option>
										<option value="colorProductosPortafoliosPercalinaBlanco">Blanco</option>
									</select>
									</div>
								</div>
							</div>
							<div rel="verificable"  id="formularioProductosDuplicados" style="display:none;">
								<div style="float:left; padding-right: 30px;">
									* Descripci&oacute;n general del material a duplicar<br />
									<textArea class="textAreaLargo" name="descripcionProductosDuplicados" id="formularioProductosDuplicadosNecesidadesPersonalizacion" ></textArea><br /><br />
									<div style="padding-top:6px;">
									* Cantidad de duplicados por original<br />
										<input class="inputTextoLargo" name="cantidadProductosDuplicados" id="cantidadProductosDuplicados" type="text" value="" /><br /><br />
									</div>
									* Impresi&oacute;n<br />
									<div style="padding-top:6px;">
										<select class="selectTextoLargo" name="impresionProductosDuplicados"  id="formularioProductosDuplicadosTipoImpresion">
											<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
											<option value="impresionProductosRepujado">Repujado</option>
											<option value="impresionProductosRealzado">Realzado</option>
											<option value="impresionProductosEstampado">Estampado</option>
											<option value="impresionProductosColor">Color</option>
											<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
										</select>
									</div><br />
									* Color de la tinta<br />
									<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="colorTintaProductosDuplicados" id="colorTintaProductosDuplicados">
										<option value="colorTintaProductosDuplicadosRoja">Roja</option>
										<option value="colorTintaProductosDuplicadosVerde">Verde</option>
										<option value="colorTintaProductosDuplicadosAzul">Azul</option>
										<option value="colorTintaProductosDuplicadosNegra">Negra</option>
									</select>
									</div>
									<br />
									* Entrega final en<br />
									<div style="padding-top:6px;">
										<label><input type="radio" name="entregaFinalProductosDivisiones" value="En hojas sueltas" checked>Hojas sueltas</label><br />
									</div>
									<div style="padding-top:6px;">
										<label><input type="radio" name="entregaFinalProductosDivisiones" value="En libretas (tipo recibos o facturas)">Libretas (tipo recibos o facturas)</label><br /><br />
									</div>
								</div>
							</div>
							<div rel="verificable" id="formularioProductosDivisiones" style="display:none;">
							<div style=" padding-left:102px;">
								* Cantidad de juegos<br />
								<input class="inputTextoLargo" name="cantidadJuegosProductosDivisiones" id="cantidadJuegosDivisiones" type="text" value="" /><br /><br />
								* Cantidad de divisiones por juego<br />
								<input class="inputTextoLargo" name="cantidadDivisionesJuegosProductosDivisiones" id="cantidadDivisionesPorJuego" type="text" value="" /><br /><br />
								* Materiales<br />
								<div style="padding-top:6px;">
									<select class="selectTextoCorto" name="materialesDivisionesJuegosProductosDivisiones" id = "materialDivisiones" >
										<option value="materialesDivisionesJuegosProductosDivisionesPressboardEstandar">Pressboard genuino</option>
										<option value="materialesDivisionesJuegosProductosDivisionesPressboardT3">Pressboard Tipo 3</option>
										<option value="materialesDivisionesJuegosProductosDivisionesManila">Manila Tag</option>
									</select>
								</div><br />
								* Impresi&oacute;n<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="impresionProductosDivisiones" id="formularioProductosDivisionesTipoImpresion">
										<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
										<option value="impresionProductosRepujado">Repujado</option>
										<option value="impresionProductosRealzado">Realzado</option>
										<option value="impresionProductosEstampado">Estampado</option>
										<option value="impresionProductosColor">Color</option>
										<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
									</select>
								</div><br />
								* Color de la cartulina<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="colorCartulinaProductosDivisiones" id="colorCartulinaDivisiones">
										<option value="colorCartulinaProductosDivisionesBlanca">Blanca</option>
										<option value="colorCartulinaProductosDivisionesCeleste">Celeste</option>
										<option value="colorCartulinaProductosDivisionesRosada">Rosada</option>
										<option value="colorCartulinaProductosDivisionesVerdeClaro">Verde claro</option>
										<option value="colorCartulinaProductosDivisionesAmarillo">Amarillo</option>
										<option value="colorCartulinaProductosDivisionesLila">Lila</option>
										<option value="colorCartulinaProductosDivisionesDurazno">Durazno</option>
										<option value="colorCartulinaProductosDivisionesFluorescente">Fluorescente</option>
										<option value="colorCartulinaProductosDivisionesOtro">Otro</option>
									</select>
								</div>
								<div style="padding-top:6px;">
									* Impresi&oacute;n en la pesta&ntilde;a  <label><input type="radio" name="impresionPestanaProductosDivisiones" value="Si" checked> Si </label><label><input type="radio" name="impresionPestanaProductosDivisiones" value="No"> No</label><br />
									* Impresi&oacute;n en el frente&nbsp;&nbsp;&nbsp; <label><input type="radio" name="impresionEnFrente" value="Si" > Si </label><label><input type="radio" name="impresionEnFrente" value="No"> No</label><br />
									* Impresi&oacute;n en alguna otra parte de la división <label><input type="radio" name="impresionOtroLugar" value="Si" > Si </label><label><input type="radio" name="impresionOtroLugar" value="No"> No</label><br />
									  &nbsp;&nbsp;Donde: <br />
									  &nbsp;&nbsp;<input class="inputTextoLargo" name="impresionOtroLugarSitio" id="impresionDondeOtraParteDivisiones" type="text" size="15" /> <br /><br />
								</div>
								* Color del refuerzo pl&aacute;stico en la pesta&ntilde;a<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="colorRefuerzoPlasticoPestanaProductosDivisiones" id="colorRefuerzoPestanaDivisiones">
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesSinRefuerzo">Sin refuerzo pl&aacute;stico</option>
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesTransparente">Transparente</option>
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesRojo">Rojo</option>
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesAmarillo">Amarillo</option>
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesVerde">Verde</option>
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesAnaranjado">Anaranjado</option>
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesAzul">Azul</option>
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesMorado">Morado</option>
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesRosado">Rosado</option>
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesGris">Gris</option>
										<option value="colorRefuerzoPlasticoPestanaProductosDivisionesChocolate">Chocolate</option>
									</select>
								</div><br />
								<b>Observaciones</b><br />
								<textArea class="textAreaLargo" name="observacionesProductosDivisiones" id="formularioProductosDivisionesNecesidadesPersonalizacion"></textArea>
							</div>
						</div>
						<div rel="verificable"  id="formularioProductosFoldersExpansibles" style="display:none;">
							<div style="float:left; padding-right:30px; padding-left:25px">
								<div style="margin-right: 10px; float:left;">
									* Materiales<br />
									<div style="padding-top:6px;">
										<select class="selectTextoCorto" name="materialFoldersExpansibles" id="materialFoldersExpansibles" onChange="mostrarColor('materialFoldersExpansibles');">
											<option value="foldersExpansiblesPressboardEstandar">Pressboard est&aacute;ndar</option>
											<option value="foldersExpansiblesPressboardT3">Pressboard T3</option>
											<option value="foldersExpansiblesManila">Manila Tag</option>
										</select>
									</div>
								</div>
								<div>
									* Color<br />
									<div style="padding-top:6px;">
										<select class="selectTextoCorto" name="colorFoldersExpansiblesPressboardEstandar" id="colorFoldersExpansiblesPressboardEstandar">
										<option value="colorFoldersExpansiblesPressboardAnaranjado">Anaranjado</option>
											<option value="colorFoldersExpansiblesPressboardGris">Gris</option>
											<option value="colorFoldersExpansiblesPressboardVerdeOscuro">Verde oscuro</option>
											<option value="colorFoldersExpansiblesPressboardVerdeClaro">Verde claro</option>
											<option value="colorFoldersExpansiblesPressboardNegro">Negro</option>
											<option value="colorFoldersExpansiblesPressboardRojo">Rojo</option>
											<option value="colorFoldersExpansiblesPressboardChocolate">Chocolate</option>
											<option value="colorFoldersExpansiblesPressboardAmarillo">Amarillo</option>
											<option value="colorFoldersExpansiblesPressboardTurquesa">Turquesa</option>
											<option value="colorFoldersExpansiblesPressboardAzul">Azul</option>
											<option value="colorFoldersExpansiblesPressboardCeleste">Celeste</option>
											<option value="colorFoldersExpansiblesPressboardKraft">Kraft</option>
										</select>
										<select class="selectTextoCorto" name="colorFoldersExpansiblesPressboardT3" id="colorFoldersExpansiblesPressboardT3">
											<option value="colorFoldersExpansiblesPressboardT3VerdeClaro">Verde claro</option>
											<option value="colorFoldersExpansiblesPressboardT3Celeste">Celeste</option>
											<option value="colorFoldersExpansiblesPressboardT3Rojo">Rojo</option>
											<option value="colorFoldersExpansiblesPressboardT3Chocolate">Chocolate</option>
										</select>
										<select class="selectTextoCorto" name="colorFoldersExpansiblesManila" id="colorFoldersExpansiblesManila">
											<option value="colorFoldersExpansiblesManilaCrema">Crema</option>
										</select>
									</div>
								</div><br />
								*Percalina<br />
								<div style="padding-top:6px;">
									<select class="selectTextoCorto" name="percalinaFoldersExpansibles" id="percalinaFoldersExpansibles">
										<option value="colorPercalinaFoldersExpansiblesNegro">Negro</option>
										<option value="colorPercalinaFoldersExpansiblesAzulOscuro">Azul oscuro</option>
										<option value="colorPercalinaFoldersExpansiblesCeleste">Celeste</option>
										<option value="colorPercalinaFoldersExpansiblesGris">Gris</option>
										<option value="colorPercalinaFoldersExpansiblesVerde">Verde</option>
										<option value="colorPercalinaFoldersExpansiblesVino">Vino</option>
										<option value="colorPercalinaFoldersExpansiblesBlanco">Blanco</option>
									</select>
								</div><br />
								* Tama&ntilde;o (recuerde que el m&aacute;ximo es 32" x 40")<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="tamanoFolderExpansibles" id="tamanoFoldersExpansibles">
										<option value="tamanoFolderExpansiblesCarta">Carta</option>
										<option value="tamanoFolderExpansiblesLegal">Legal</option>
										<option value="tamanoFolderExpansiblesOtro">Otro (M&aacute;ximo 32" x 40")</option>
									</select>
								</div><br />
								* Impresi&oacute;n<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="impresionFolderExpansibles" id="formularioProductosFoldersExpansiblesTipoImpresion">
										<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
										<option value="impresionProductosRepujado">Repujado</option>
										<option value="impresionProductosRealzado">Realzado</option>
										<option value="impresionProductosEstampado">Estampado</option>
										<option value="impresionProductosColor">Color</option>
										<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
									</select>
								</div><br />
								* Tama&ntilde;o del lomo (en el caso de que sea con divisiones)<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="tamanoLomoFolderExpansibles" id="tamanoLomoFoldersExpansibles">
										<option value="tamanoLomoFolderExpansibles1">1"</option>
										<option value="tamanoLomoFolderExpansibles1medio">1 1/2"</option>
										<option value="tamanoLomoFolderExpansibles2">2"</option>
										<option value="tamanoLomoFolderExpansibles3">3” </option>
									</select>
								</div><br />			
								<b>Divisiones</b><br />
								<div style="margin-right: 10px; float:left;">
									* Cantidad<br />
									<input class="inputTexto" style="width:135px;" name="cantidadDivisionesFoldersExpansibles" id="cantidadDivisionesFoldersExpansibles" type="text" value="" /><br /><br />
								</div>
								<div>
									* Material<br />
									<div style="padding-top:6px;">
										<select class="selectTextoCorto" name="materialDivisionesFoldersExpansibles" id="materialDivisionesFoldersExpansibles">
											<option value="materialDivisionesFoldersExpansiblesPressboard">Pressboard</option>
											<option value="materialDivisionesFoldersExpansiblesManila">Manila</option>
											<option value="materialDivisionesFoldersExpansiblesManila">Kraft</option>
										</select>
									</div>
								</div>
							</div>
							<div>
								Los folders expansibles ofrecen gran variedad de opciones de personalizaci&oacute;n. Para definir los detalles de su pedido p&oacute;ngase en contacto directamente con uno de nuestros ejecutivos de venta en el tel&eacute;fono (507) 302-1466.
							</div>
						</div>
							<div rel="verificable"  id="formularioProductosPortadores" style="display:none; height:300px;">
								* Impresi&oacute;n<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="impresionProductosPortadores" id="formularioProductosPortadoresTipoImpresion">
										<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
										<option value="impresionProductosRepujado">Repujado</option>
										<option value="impresionProductosRealzado">Realzado</option>
										<option value="impresionProductosEstampado">Estampado</option>
										<option value="impresionProductosColor">Color</option>
									
									<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
									</select>
								</div><br />
								<div style="margin-right: 10px; float:left;">
									* Material<br />
									<div style="padding-top:6px;">
										<select class="selectTextoCorto" name="materialProductosPortadores" id="materialProductosPortadores"  onChange="mostrarColor('materialProductosPortadores');">
											<option value="productosPortadoresCuerotexa">Cuerotexa</option>
											<option value="productosPortadoresCastilian">Castilian</option>
											<option value="productosPortadoresVinilo">Vinilo</option>
											<option value="productosPortadoresPercalina">Percalina</option>
										</select>
									</div>
								</div>
								<div>
									* Color<br />
									<div style="padding-top:6px;">
										<select class="selectTextoCorto" name="colorProductosPortadoresCuerotexa" id="colorProductosPortadoresCuerotexa">
											<option value="colorProductosPortadoresCuerotexaAzulOscuro">Azul oscuro</option>
											<option value="colorProductosPortadoresCuerotexaNegro">Negro</option>
											<option value="colorProductosPortadoresCuerotexaVino">Vino</option>
											<option value="colorProductosPortadoresCuerotexaChocolate">Chocolate</option>
										</select>
										<select class="selectTextoCorto" name="colorProductosPortadoresCastilian" id="colorProductosPortadoresCastilian">
											<option value="colorProductosPortadoresCastilianVino">Vino</option>
											<option value="colorProductosPortadoresCastilianAzul">Azul</option>
											<option value="colorProductosPortadoresCastilianNegro">Negro</option>
											<option value="colorProductosPortadoresCastilianVerde">Verde</option>
										</select>
										<select class="selectTextoCorto" name="colorProductosPortadoresVinilo" id="colorProductosPortadoresVinilo">
											<option value="colorProductosPortadoresViniloVino">Negro</option>
											<option value="colorProductosPortadoresViniloAzulOscuro">Azul oscuro</option>
											<option value="colorProductosPortadoresViniloAzulRoyal">Azul royal</option>
											<option value="colorProductosPortadoresViniloCeleste">Celeste</option>
											<option value="colorProductosPortadoresViniloBlanco">Blanco</option>
											<option value="colorProductosPortadoresViniloRojo">Rojo</option>
											<option value="colorProductosPortadoresViniloVerde">Verde</option>
											<option value="colorProductosPortadoresViniloGrisClaro">Gris claro</option>
											<option value="colorProductosPortadoresViniloGrisOscuro">Gris oscuro</option>
											<option value="colorProductosPortadoresViniloAmarillo">Amarillo</option>
											<option value="colorProductosPortadoresViniloAqua">Aqua</option>
											<option value="colorProductosPortadoresViniloAnaranjado">Anaranjado</option>
										</select>
										<select class="selectTextoCorto" name="colorProductosPortadoresPercalina" id="colorProductosPortadoresPercalina">
											<option value="colorProductosPortadoresPercalinaNegro">Negro</option>
											<option value="colorProductosPortadoresPercalinaAzulOscuro">Azul oscuro</option>
											<option value="colorProductosPortadoresPercalinaCeleste">Celeste</option>
											<option value="colorProductosPortadoresPercalinaGris">Gris</option>
											<option value="colorProductosPortadoresPercalinaVerde">Verde</option>
											<option value="colorProductosPortadoresPercalinaVino">Vino</option>
											<option value="colorProductosPortadoresPercalinaBlanco">Blanco</option>
										</select>
									</div>
								</div>
							</div>
							<div id="formularioProductosOtros" style="display:none;">
								Describa las necesidades de uypersonalizaci&oacute;n<br />
								<textArea class="textAreaLargo" name="otrosDatosProductosPromocionales" id="formularioProductosPromocionalesNecesidadesPersonalizacion" ></textArea>
								<br /><br />
								* Impresi&oacute;n<br />
								<div style="padding-top:6px;">
									<select class="selectTextoLargo" name="impresionProductosPromocionales" id="formularioProductosPromocionalesTipoImpresion">
										<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>
										<option value="impresionProductosRepujado">Repujado</option>
										<option value="impresionProductosRealzado">Realzado</option>
										<option value="impresionProductosEstampado">Estampado</option>
										<option value="impresionProductosColor">Color</option>
										<option value="impresionProductosSinImpresion">Sin Impresi&oacute;n</option>
									</select>
								</div>	
							</div>
						</div>
						<div style="width: 100%; float:left; padding-top:30px;">
							<div style="float:right;">
								<input id="botonEnviar" type="image" src="/imagenes/enviarSolicitudBtn.gif" width="183px" height="22px" alt="Enviar solicitud" onclick="verificarForma('formularioPedidos', 'enviar'); return false;" />
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<?
				include($rutaRelativaIncludes . "/include/footer.inc");
			?>
		</div>
		<script type="text/javascript" language="javascript">
			mostrarProductosLinea();
			mostrarColor('materialProductosBindingCase');
			mostrarColor('materialProductosLetterFile');
			mostrarColor('materialProductosPortafolios');
			mostrarColor('materialFoldersExpansibles');
			mostrarColor('materialProductosPortadores');
		</script>
	</body>
</html>