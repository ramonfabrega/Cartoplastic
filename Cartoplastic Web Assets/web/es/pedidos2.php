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

			function enviar() {

				Element.show('mensajeExito');

				Element.hide('formularioPedidos');

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

					<div class="col" style="width: 100%;">

						<p>Nuestros ejecutivos de venta están disponibles para ayudarle a resolver cualquier duda, ampliar informaci&oacute;n, o solicitar alguno de nuestros servicios. <br />No dude en escribirnos y pronto recibir&aacute; noticias nuestras. Todos los campos marcados con * son obligatorios</p>

						<div id="mensajeExito" style="display:none;">

							<ul>

								<li class="chulitoExito"><? echo(CFG_MENSAJEEXITOENVIOMENSAJE); ?></li>

							</ul>

						</div>

						<form id="formularioPedidos">

						<div style="width: 50%; float: left;">

							<div style="float:left; padding-right: 20px;">

								<img src="/imagenes/datosContacto.png" width="82px" height="300px" alt="Datos de contacto">

							</div>

							<div>

								* Empresa<br />

								<input class="inputTextoLargo" name="empresa" mensajeError="El campo <b>Empresa</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty" type="text" value="" /><br /><br />

								* Nombre completo<br />

								<input class="inputTextoLargo" name="nombreCompleto" mensajeError="El campo <b>Nombre completo</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty" type="text" value="" /><br /><br />

								* Tel&eacute;fono<br />

								<input class="inputTextoLargo" name="telefono" mensajeError="El campo <b>Tel&eacute;fono</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty" type="text" value="" /><br /><br />

								* Fax<br />

								<input class="inputTextoLargo" name="fax" mensajeError="El campo <b>Fax</b> no puede estar vac&iacute;o y debe ser v&aacute;lido" tipoVerificacion="isNotEmpty"  type="text" value="" /><br /><br />

								* Correo electr&oacute;nico<br />

								<input class="inputTextoLargo" name="email" mensajeError="El campo <b>Correo electr&oacute;nico</b> no puede estar vac&iacute;o y debe ser v&aacute;lido" tipoVerificacion="isEmail"  type="text" value="" /><br /><br />

								* Direcci&oacute;n<br />

								<input class="inputTextoLargo" name="email" mensajeError="El campo <b>Correo electr&oacute;nico</b> no puede estar vac&iacute;o y debe ser v&aacute;lido" tipoVerificacion="isEmail"  type="text" value="" /><br /><br />

							</div>

						</div>

						<div style="width: 50%; float: left;">

							<div style="float:left; padding-right: 20px;">

								<img src="/imagenes/productoCantidad.png" width="82px" height="300px" alt="Elija producto y cantidad">

							</div>

							<div>

								* Linea / referencia<br />

								<div style="padding-top:6px;">

									<select class="selectTextoLargo" name="lineaInteres" mensajeError="Seleccione una <b>L&iacute;nea de inter&eacute;s</b>" tipoVerificacion="isNotDefault" onChange="mostrarProductosLinea();">

										<option value="productosPromocionales">Productos promocionales</option>

										<option value="productosPapeleria">Papeler&iacute;a</option>

										<option value="productosBindingCase">Binding case</option>

										<option value="productosLetterFile">Letter file</option>

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

										<select class="selectTextoLargo" style="display:none;" name="productosPromocionales" mensajeError="Seleccione un <b>producto</b>" tipoVerificacion="isNotDefault" onChange="mostrarSubProductosLinea('productosPromocionales');">

											<option value="subProductosProductosPromocionales">Rompecabezas</option>

											<option value="subProductosPapeleria">Asientos de estadio</option>

											<option value="subProductosBindingCase">Portavasos (Coasters)</option>

											<option value="subProductosLetterFile">Aislantes de calor para vasos</option>

											<option value="subProductosRevisteros">Revisteros</option>

											<option value="subProductosCajaDecorativas">Cajas Decorativas</option>

											<option value="subProductosNoListados">Otros no listados</option>

										</select>											

										<select class="selectTextoLargo" style="display:none;" name="productosPapeleria" mensajeError="Seleccione una <b>L&iacute;nea de inter&eacute;s</b>" tipoVerificacion="isNotDefault" onChange="mostrarSubProductosLinea('productosPapeleria');">

											<option value="subProductosPapeleriaTarjetas">Tarjetas</option>

											<option value="subProductosPapeleriaPapelMembrete">Papel membrete</option>

											<option value="subProductosPapeleriaSobres">Sobres</option>

											<option value="subProductosPapeleriaFoldersPresentaciones">Folders para presentaciones</option>

											<option value="subProductosPapeleriaLibretasApuntes">Libretas de apuntes</option>

											<option value="subProductosPapeleriaLibretasPad">Libretas tipo pad</option>

											<option value="subProductosPapeleriaEncuadernacion">Encuadernaci&oacute;n</option>

										</select>

										<select class="selectTextoLargo" style="display:none;" name="productosBindingCase" mensajeError="Seleccione una <b>L&iacute;nea de inter&eacute;s</b>" tipoVerificacion="isNotDefault" onChange="mostrarSubProductosLinea('productosBindingCase');">

											<option value="subProductosBindingCase49">No. 49 (tama&ntilde;o especial - 5 1/2" x 8 1/2"</option>

											<option value="subProductosBindingCase50">No. 50 (tama&ntilde;o carta - 8 1/2" x 11")</option>

											<option value="subProductosBindingCase51">No. 51 (tama&ntilde;o legal - 8 1/2" x 14")</option>

										</select>

										<select class="selectTextoLargo" style="display:none;" name="productosLetterFile" mensajeError="Seleccione una <b>L&iacute;nea de inter&eacute;s</b>" tipoVerificacion="isNotDefault" onChange="mostrarSubProductosLinea('productosLetterFile');">

											<option value="subProductosLetterFileCarta">Carta - 8 1/2" x 11"</option>

											<option value="subProductosLetterFileLegal">Legal - 8 1/2" x 14"</option>

										</select>

										<select class="selectTextoLargo" style="display:none;" name="productosPortafolios" mensajeError="Seleccione una <b>L&iacute;nea de inter&eacute;s</b>" tipoVerificacion="isNotDefault" onChange="mostrarSubProductosLinea('productosPortafolios');">

											<option value="subProductosPortafoliosCarta">Carta - 8 1/2" x 11"</option>

											<option value="subProductosPortafoliosLegal">Legal - 8 1/2" x 14"</option>

											<option value="subProductosPortafolios9x7">9" x 7"</option>

											<option value="subProductosPortafolios11x17">11" x 17"</option>

										</select>

										<select class="selectTextoLargo" style="display:none;" name="productosFoldersExpansibles" mensajeError="Seleccione una <b>L&iacute;nea de inter&eacute;s</b>" tipoVerificacion="isNotDefault" onChange="mostrarSubProductosLinea('productosFoldersExpansibles');">

											<option value="subProductosFoldersExpansiblesSencillo">Sencillo</option>

											<option value="subProductosFoldersExpansiblesConDivisiones">Con divisiones</option>

										</select>

										<select class="selectTextoLargo" style="display:none;" name="productosPortadores" mensajeError="Seleccione una <b>L&iacute;nea de inter&eacute;s</b>" tipoVerificacion="isNotDefault" onChange="mostrarSubProductosLinea('productosPortadores');">

											<option value="subProductosPortadoresPortaPads">PortaPads o Portalibretas / Carpetas de congreso</option>

											<option value="subProductosPortadoresPortaDiplomas">Portadiplomas / certificados</option>

											<option value="subProductosPortadoresPortaMenus">Portamenus / Portacuentas</option>

											<option value="subProductosPortadoresPortaDocumentos">Portadocumentos</option>

											<option value="subProductosPortadoresPortaChequeras">Portachequeras</option>

											<option value="subProductosPortadoresPortaCedulas">Portac&eacute;dulas / Portagafas</option>

											<option value="subProductosPortadoresPortaPolizas">Portap&oacute;lizas de seguros</option>

											<option value="subProductosPortadoresPortaDocumentosAutos">Portadocumentos de autos</option>

											<option value="subProductosPortadoresPortaDocumentosViaje">Portadocumentos de viaje</option>

											<option value="subProductosPortadoresIdentificadorMaletas">Identificador de maletas de viaje</option>

											<option value="subProductosPortadoresOtros">Otros identificadores</option>

										</select>

										<select class="selectTextoLargo" style="display:none;" name="productosCajaDecorativas" mensajeError="Seleccione una <b>L&iacute;nea de inter&eacute;s</b>" tipoVerificacion="isNotDefault" onChange="mostrarSubProductosLinea('productosCajaDecorativas');">

											<option value="subProductosCajaDecorativas">Otros identificadores (Explique que tipo de identificador necesita</option>

										</select>

										<select class="selectTextoLargo" style="display:none;" name="productosOtros" mensajeError="Seleccione una <b>L&iacute;nea de inter&eacute;s</b>" tipoVerificacion="isNotDefault" onChange="mostrarSubProductosLinea('productosOtros');">

											<option value="subProductosFoldersExpansiblesSencillo">Otros identificadores (Explique que tipo de identificador necesita</option>

										</select>

									</div>

								</div>

								<div id="otrasCaracteristicas">

									<br/>

									* Detalles<br />

									<div style="padding-top:6px;">

										<select class="selectTextoLargo" style="display:none;" name="subProductosPapeleriaTarjetas" mensajeError="Seleccione un <b>producto</b>" tipoVerificacion="isNotDefault">

											<option value="papeleriaTarjetasPresentacionRegalo">Presentaci&oacute;n/Regalo (2" x 3 1/2")</option>

											<option value="papeleriaTarjetasTamanosEspeciales">Tama&ntilde;os especiales</option>

										</select>

										<select class="selectTextoLargo" style="display:none;" name="subProductosPapeleriaFoldersPresentaciones" mensajeError="Seleccione un <b>producto</b>" tipoVerificacion="isNotDefault">

											<option value="papeleriaFoldersPresentacionesCarta">Carta</option>

											<option value="papeleriaFoldersPresentacionesLegal">Legal</option>

										</select>

										<select class="selectTextoLargo" style="display:none;" name="subProductosPapeleriaEncuadernacion" mensajeError="Seleccione un <b>producto</b>" tipoVerificacion="isNotDefault">

											<option value="papeleriaEncuadernacionDobleO">Anillo doble "O"</option>

											<option value="papeleriaEncuadernacionDobleO">Empastado</option>

										</select>

										<select class="selectTextoLargo" style="display:none;" name="subProductosPortadoresPortaPads" mensajeError="Seleccione un <b>producto</b>" tipoVerificacion="isNotDefault">

											<option value="portadoresPortaPads5x8">5 1/2" x 8 1/2"</option>

											<option value="portadoresPortaPadsCarta">Carta - 8 1/2" x 11"</option>

											<option value="portadoresPortaPadsLegal">Legal - 8 1/2" x 14"</option>

										</select>

									</div>

								</div>

								<div>

									<br/>

									* Cantidad<br />

									<input class="inputTextoLargo" name="cantidad" mensajeError="El campo <b>Cantidad</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty" type="text" value="" /><br /><br />

									Otros datos<br />

									<textArea class="textAreaLargo" name="otrosDatos"></textArea>

								</div>

							</div>

						</div>

						<div id="especificaciones" style="float: left; width: 100%; padding-top: 20px;">

							<div style="float:left; padding-right: 20px;">

								<img src="/imagenes/especificaciones.png" width="82px" height="300px" alt="Caracter&iacute;sticas del producto" />

							</div>

							<div id="formularioProductosPromocionales" style="display:none;">

								* Describa las necesidades de personalizaci&oacute;n<br />

								<textArea class="textAreaLargo" name="otrosDatosProductosPromocionales" mensajeError="El campo <b>Personalizaci&oacute;n</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty"></textArea>

							</div>

							<div id="formularioProductosPapeleria" style="display:none;">

								* Describa las necesidades de personalizaci&oacute;n<br />

								<textArea class="textAreaLargo" name="otrosDatosPapeleria" mensajeError="El campo <b>Personalizaci&oacute;n</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty"></textArea>

							</div>

							<div id="formularioOtros" style="display:none;">

								* Describa las necesidades de personalizaci&oacute;n<br />

								<textArea class="textAreaLargo" name="otrosDatosProductosPromocionales" mensajeError="El campo <b>Personalizaci&oacute;n</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty"></textArea>

							</div>

							<div id="formularioProductosBindingCase" style="display:none;">

								* Mecanismo<br />

								<div style="padding-top:6px;">

								<select class="selectTextoLargo" name="mecanismoProductosBindingCase" mensajeError="Seleccione un <b>mecanismo</b>" tipoVerificacion="isNotDefault">

									<option value="mecanismoProductosBindingCase7cm">7 cm</option>

									<option value="mecanismoProductosBindingCase8cm">8 cm</option>

								</select>

								</div><br />

								<div style="margin-right: 10px; float:left;">

								* Material<br />

								<div style="padding-top:6px;">

									<select class="selectTextoCorto" name="materialProductosBindingCase" mensajeError="Seleccione un <b>material</b>" tipoVerificacion="isNotDefault" onChange="mostrarColor('materialProductosBindingCase');">

										<option value="productosBindingCaseFibrone">Fibrone</option>

										<option value="productosBindingCaseVinilo">Vinilo</option>

									</select>

								</div>

								</div>

								<div>

									* Color<br />

									<div style="padding-top:6px;">

										<select class="selectTextoCorto" name="colorProductosBindingCaseFibrone" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

											<option value="colorProductosBindingCaseFibroneNegro">Negro</option>

											<option value="colorProductosBindingCaseFibroneRojo">Rojo</option>

											<option value="colorProductosBindingCaseFibroneAmarillo">Amarillo</option>

											<option value="colorProductosBindingCaseFibroneCeleste">Celeste</option>

										</select>

										<select class="selectTextoCorto" name="colorProductosBindingCaseVinilo" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

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

								<b>Personalizaci&oacute;n.</b><br />Describa sus necesidades de personalización en el lomo<br />

								<textArea class="textAreaLargo" name="personalizacionBindingCase"></textArea>

							</div>

							<div id="formularioProductosLetterFile" style="display:none;">

								* Mecanismo<br />

								<div style="padding-top:6px;">

								<select class="selectTextoLargo" name="mecanismoProductosLetterFile" mensajeError="Seleccione un <b>mecanismo</b>" tipoVerificacion="isNotDefault">

									<option value="mecanismoProductosLetterFile7a50">7 cm - 50 mm de capacidad</option>

									<option value="mecanismoProductosLetterFile7a75">7 cm - 75 mm de capacidad</option>

									<option value="mecanismoProductosLetterFile8a75">8 cm - 75 mm de capacidad</option>

								</select>

								</div><br />

								<div style="margin-right: 10px; float:left;">

									* Material<br />

									<div style="padding-top:6px;">

									<select class="selectTextoCorto" name="materialProductosLetterFile" mensajeError="Seleccione un <b>material</b>" tipoVerificacion="isNotDefault" onChange="mostrarColor('materialProductosLetterFile');">

										<option value="productosLetterFileCartonPercalina">Cart&oacute;n forrado con percalina</option>

										<option value="productosLetterFileCartonForrado">Cart&oacute;n forrado con papel impreso</option>

										<option value="productosLetterFileCartonVinilo">Cart&oacute;n y vinilo</option>

									</select>

									</div>

								</div>

								<div>

									* Color<br />

									<div style="padding-top:6px;">

									<select class="selectTextoCorto" name="colorProductosLetterFileCartonPercalina" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

										<option value="colorProductosLetterFileCartonPercalinaNegro">Negro</option>

										<option value="colorProductosLetterFileCartonPercalinaRojo">Blanco</option>

										<option value="colorProductosLetterFileCartonPercalinaAmarillo">Azul oscuro</option>

										<option value="colorProductosLetterFileCartonPercalinaCeleste">Celeste</option>

										<option value="colorProductosLetterFileCartonPercalinaGris">Gris</option>

										<option value="colorProductosLetterFileCartonPercalinaVerde">Verde</option>

										<option value="colorProductosLetterFileCartonPercalinaVino">Vino</option>

									</select>

										<select class="selectTextoCorto" name="colorproductosLetterFileCartonForrado" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

										<option value="colorProductosLetterFileCartonForradoBlanco">Blanco</option>								

									</select>

									<select class="selectTextoCorto" name="colorProductosLetterFileCartonVinilo" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

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

							</div>

							<div id="formularioProductosPortafolios" style="display:none;">

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

												<td style="width: 10px;"><input type="radio" name="tipoMecanismo" value="tipoRedondo100"></td>

												<td>½”</td>

												<td>100</td>

											</tr>

											<tr>

												<td style="width: 10px;"><input type="radio" name="tipoMecanismo" value="tipoRedondo200"></td>

												<td>1”</td>

												<td>200</td>

											</tr>

											<tr>

												<td style="width: 10px;"><input type="radio" name="tipoMecanismo" value="tipoRedondo300"></td>

												<td>1 ½”</td>

												<td>300</td>

											</tr>

											<tr>

												<td style="width: 10px;"><input type="radio" name="tipoMecanismo" value="tipoRedondo400"></td>

												<td>2”</td>

												<td>400</td>

											</tr>

											<tr>

												<td style="width: 10px;"><input type="radio" name="tipoMecanismo" value="tipoRedondo500"></td>

												<td>2 ½”</td>

												<td>500</td>

											</tr>

											<tr>

												<td style="width: 10px;"><input type="radio" name="tipoMecanismo" value="tipoRedondo600"></td>

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

												<td style="width: 10px;"><input type="radio" name="tipoMecanismo" value="tipoD250"></td>

												<td>1”</td>

												<td>250</td>

											</tr>

											<tr>

												<td style="width: 10px;"><input type="radio" name="tipoMecanismo" value="tipoD375"></td>

												<td>1 ½”</td>

												<td>375</td>

											</tr>

											<tr>

												<td style="width: 10px;"><input type="radio" name="tipoMecanismo" value="tipoD500"></td>

												<td>2”</td>

												<td>500</td>

											</tr>

											<tr>

												<td style="width: 10px;"><input type="radio" name="tipoMecanismo" value="tipoD625"></td>

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

									<select class="selectTextoCorto" name="materialProductosPortafolios" mensajeError="Seleccione un <b>material</b>" tipoVerificacion="isNotDefault" onChange="mostrarColor('materialProductosPortafolios');">

										<option value="productosPortafoliosCuerotexa">Cuerotexa</option>

										<option value="productosPortafoliosCastilian">Castilian</option>

										<option value="productosPortafoliosVinilo">Vinilo</option>

										<option value="productosPortafoliosPercalina">Percalina</option>

									</select>

									</div>

								</div>

								<div>

									* Color<br />

									<div style="padding-top:6px;">

									<select class="selectTextoCorto" name="colorProductosPortafoliosCuerotexa" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

										<option value="colorProductosPortafoliosCuerotexaAzulOscuro">Azul oscuro</option>

										<option value="colorProductosPortafoliosCuerotexaNegro">Negro</option>

										<option value="colorProductosPortafoliosCuerotexaVino">Vino</option>

										<option value="colorProductosPortafoliosCuerotexaChocolate">Chocolate</option>

									</select>

									<select class="selectTextoCorto" name="colorProductosPortafoliosCastilian" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

										<option value="colorProductosPortafoliosCastilianVerde">Verde</option>

										<option value="colorProductosPortafoliosCastilianVino">Vino</option>

										<option value="colorProductosPortafoliosCastilianAzul">Azul</option>

										<option value="colorProductosPortafoliosCastilianNegro">Negro</option>

									</select>

									<select class="selectTextoCorto" name="colorProductosPortafoliosVinilo" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

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

									<select class="selectTextoCorto" name="colorProductosPortafoliosPercalina" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

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

							<div id="formularioProductosDuplicados" style="display:none;">

								<div style="float:left; padding-right: 30px;">

									* Descripci&oacute;n general del material a duplicar<br />

									<textArea class="textAreaLargo" name="descripcionProductosDuplicados"></textArea><br /><br />

									* Original del documento<br />

									<div style="padding-top:6px;">

										<input type="file" />

									</div>

									<div style="padding-top:6px;">

										* Cantidad de duplicados por original<br />

										<input class="inputTextoLargo" name="cantidadProductosDuplicados" mensajeError="El campo <b>Cantidad de duplicados por original</b> no puede estar vac&iacute;o y debe ser un n&uacute;mber" tipoVerificacion="isNumber" type="text" value="" /><br /><br />

									</div>

									* Color de la tinta<br />

									<div style="padding-top:6px;">

									<select class="selectTextoLargo" name="colorTintaProductosDuplicados" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

										<option value="colorTintaProductosDuplicadosRoja">Roja</option>

										<option value="colorTintaProductosDuplicadosVerde">Verde</option>

										<option value="colorTintaProductosDuplicadosAzul">Azul</option>

										<option value="colorTintaProductosDuplicadosNegra">Negra</option>

									</select>

									</div>

									<br />

									* Entrega final en<br />

									<div style="padding-top:6px;">

										<label><input type="radio" name="entregaFinalProductosDivisiones" value="entregaProductosDuplicadosHojasSueltas" checked> Hojas sueltas</label><br />

									</div>

									<div style="padding-top:6px;">

										<label><input type="radio" name="entregaFinalProductosDivisiones" value="entregaProductosDuplicadosLibretas"> Libretas (tipo recibos o facturas)</label><br /><br />

									</div>

								</div>

								<div>

									<b>Observaciones</b> (Detalle todo aquello que requiera, numeraci&oacute;n, tama&ntilde;o, etc.)<br />

									<textArea class="textAreaLargo" name="observacionesProductosDuplicados"></textArea>

								</div>

							</div>

							<div id="formularioProductosDivisiones" style="display:none;">

								* Cantidad de juegos<br />

								<input class="inputTextoLargo" name="cantidadJuegosProductosDivisiones" mensajeError="El campo <b>Cantidad de juegos</b> no puede estar vac&iacute;o y debe ser un n&uacute;mber" tipoVerificacion="isNumber" type="text" value="" /><br /><br />

								* Cantidad de divisiones por juego<br />

								<input class="inputTextoLargo" name="cantidadDivisionesJuegosProductosDivisiones" mensajeError="El campo <b>Cantidad de divisiones por juego</b> no puede estar vac&iacute;o y debe ser un n&uacute;mber" tipoVerificacion="isNumber" type="text" value="" /><br /><br />

								* Materiales<br />

										<div style="padding-top:6px;">

											<select class="selectTextoCorto" name="materialesDivisionesJuegosProductosDivisiones" mensajeError="Seleccione un <b>material</b>" tipoVerificacion="isNotDefault" >

												<option value="materialesDivisionesJuegosProductosDivisionesPressboardEstandar">Pressboard genuino</option>

												<option value="materialesDivisionesJuegosProductosDivisionesPressboardT3">Pressboard Tipo 3</option>

												<option value="materialesDivisionesJuegosProductosDivisionesManila">Manila Tag</option>

											</select>

										</div><br />

								* Color de la cartulina<br />

								<div style="padding-top:6px;">

								<select class="selectTextoLargo" name="colorCartulinaProductosDivisiones" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

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

									* Impresi&oacute;n en la pesta&ntilde;a  <label><input type="radio" name="impresionPestanaProductosDivisiones" value="impresionPestanaProductosDivisionesSi" checked> Si </label><label><input type="radio" name="impresionPestanaProductosDivisiones" value="impresionPestanaProductosDivisionesNo"> No</label><br />

									* Impresi&oacute;n en el frente&nbsp;&nbsp;&nbsp; <label><input type="radio" name="impresionEnFrente" value="impresionEnFrenteSi" > Si </label><label><input type="radio" name="impresionEnFrente" value="impresionEnFrenteNo"  > No</label><br />

									* Impresi&oacute;n en alguna otra parte de la división <label><input type="radio" name="impresionOtroLugar" value="impresionOtroLugarSi" > Si </label><label><input type="radio" name="impresionOtroLugar" value="impresionOtroLugarNo"  > No</label><br />

									  &nbsp;&nbsp;Donde: <br />

									  &nbsp;&nbsp;<input class="inputTextoLargo" name="impresionOtroLugarSitio" type="text" size="15" /> <br /><br />

								</div>

								* Color del refuerzo pl&aacute;stico en la pesta&ntilde;a<br />

								<div style="padding-top:6px;">

								<select class="selectTextoLargo" name="colorRefuerzoPlasticoPestanaProductosDivisiones" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

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

								<b>Observaciones</b> (Detalle todo aquello que requiera, con o sin huecos)<br />

								<textArea class="textAreaLargo" name="observacionesProductosDivisiones"></textArea>

							</div>

							<div id="formularioProductosFoldersExpansibles" style="display:none;">

								<div style="float:left; padding-right: 30px;">

									<div style="margin-right: 10px; float:left;">

										* Materiales<br />

										<div style="padding-top:6px;">

											<select class="selectTextoCorto" name="materialFoldersExpansibles" mensajeError="Seleccione un <b>material</b>" tipoVerificacion="isNotDefault" onChange="mostrarColor('materialFoldersExpansibles');">

												<option value="foldersExpansiblesPressboardEstandar">Pressboard est&aacute;ndar</option>

												<option value="foldersExpansiblesPressboardT3">Pressboard T3</option>

												<option value="foldersExpansiblesManila">Manila Tag</option>

											</select>

										</div>

									</div>

									<div>

										* Color<br />

										<div style="padding-top:6px;">

											<select class="selectTextoCorto" name="colorFoldersExpansiblesPressboardEstandar" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

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

											<select class="selectTextoCorto" name="colorFoldersExpansiblesPressboardT3" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

												<option value="colorFoldersExpansiblesPressboardT3VerdeClaro">Verde claro</option>

												<option value="colorFoldersExpansiblesPressboardT3Celeste">Celeste</option>

												<option value="colorFoldersExpansiblesPressboardT3Rojo">Rojo</option>

												<option value="colorFoldersExpansiblesPressboardT3Chocolate">Chocolate</option>

											</select>

											<select class="selectTextoCorto" name="colorFoldersExpansiblesManila" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

												<option value="colorFoldersExpansiblesManilaNegro">Negro</option>

												<option value="colorFoldersExpansiblesManilaAzulOscuro">Azul oscuro</option>

												<option value="colorFoldersExpansiblesManilaCeleste">Celeste</option>

												<option value="colorFoldersExpansiblesManilaGris">Gris</option>

												<option value="colorFoldersExpansiblesManilaVerde">Verde</option>

												<option value="colorFoldersExpansiblesManilaVino">Vino</option>

												<option value="colorFoldersExpansiblesManilaBlanco">Blanco</option>

											</select>

										</div>

									</div><br />

									*Percalina<br />

									<div style="padding-top:6px;">

									<select class="selectTextoCorto" name="percalinaFoldersExpansibles" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

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

									<select class="selectTextoLargo" name="tamanoFolderExpansibles" mensajeError="Seleccione un <b>material</b>" tipoVerificacion="isNotDefault">

										<option value="tamanoFolderExpansiblesCarta">Carta</option>

										<option value="tamanoFolderExpansiblesLegal">Legal</option>

										<option value="tamanoFolderExpansiblesOtro">Otro (M&aacute;ximo 32" x 40")</option>

									</select>

									</div><br />

									* Tama&ntilde;o del lomo (en el caso de que sea con divisiones<br />

									<div style="padding-top:6px;">

									<select class="selectTextoLargo" name="tamanoLomoFolderExpansibles" mensajeError="Seleccione un <b>material</b>" tipoVerificacion="isNotDefault">

										<option value="tamanoLomoFolderExpansibles1">1"</option>

										<option value="tamanoLomoFolderExpansibles1medio">1 1/2"</option>

										<option value="tamanoLomoFolderExpansibles2">2"</option>

										<option value="tamanoLomoFolderExpansibles3">3” </option>

									</select>

									</div><br />

									* Cantidad de ganchos y posiciones<br />

									<input class="inputTextoLargo" name="cantidadGanchosPosicionesFolderExpansibles" mensajeError="El campo <b>Cantidad de ganchos y posiciones</b> no puede estar vac&iacute;o" tipoVerificacion="isNumber" type="text" value="" /><br /><br />

									* Perforaciones para portada, contraportada y divisiones<br />

									<div style="padding-top:6px;"><label><input type="checkbox" name="perforacionesFoldersExpansibles" value="perforacionesFoldersExpansiblesArriba" checked> Arriba</label></div> 

									<div style="padding-top:6px;"><label><input type="checkbox" name="perforacionesFoldersExpansibles" value="perforacionesFoldersExpansiblesAbajo"> Abajo</label></div> 

									<div style="padding-top:6px;"><label><input type="checkbox" name="perforacionesFoldersExpansibles" value="perforacionesFoldersExpansiblesDerecha"> Derecha</label></div> 

									<div style="padding-top:6px;"><label><input type="checkbox" name="perforacionesFoldersExpansibles" value="perforacionesFoldersExpansiblesIzquierda"> Izquierda</label></div>

									<br />

									<b>Divisiones</b><br />

									<div style="margin-right: 10px; float:left;">

										* Cantidad<br />

										<input class="inputTexto" style="width:135px;" name="cantidadDivisionesFoldersExpansibles" mensajeError="El campo <b>Cantidad de divisiones</b> no puede estar vac&iacute;o" tipoVerificacion="isNumber" type="text" value="" /><br /><br />

									</div>

									<div>

										* Material<br />

										<div style="padding-top:6px;">

										<select class="selectTextoCorto" name="materialDivisionesFoldersExpansibles" mensajeError="Seleccione un <b>material</b>" tipoVerificacion="isNotDefault">

											<option value="materialDivisionesFoldersExpansiblesPressboard">Pressboard</option>

											<option value="materialDivisionesFoldersExpansiblesManila">Manila</option>

										</select>

										</div>

									</div>

								</div>

								<div>

									* Posici&oacute;n de las pesta&ntilde;as<br />

									<label><input type="radio" align="top" name="posicionesFoldersExpansibles" value="posicionesFoldersExpansibles1" checked> <img src="/imagenes/pestanasFoldersExpansibles/posicion1.gif" /></label>

									<label><input type="radio" name="posicionesFoldersExpansibles" value="posicionesFoldersExpansibles2" checked> <img src="/imagenes/pestanasFoldersExpansibles/posicion2.gif" /></label>

									<label><input type="radio" name="posicionesFoldersExpansibles" value="posicionesFoldersExpansibles3"> <img src="/imagenes/pestanasFoldersExpansibles/posicion3.gif" /></label><br />

									<label><input type="radio" name="posicionesFoldersExpansibles" value="posicionesFoldersExpansibles4"> <img src="/imagenes/pestanasFoldersExpansibles/posicion4.gif" /></label>

									<label><input type="radio" name="posicionesFoldersExpansibles" value="posicionesFoldersExpansibles5"> <img src="/imagenes/pestanasFoldersExpansibles/posicion5.gif" /></label>

									<label><input type="radio" name="posicionesFoldersExpansibles" value="posicionesFoldersExpansibles6"> <img src="/imagenes/pestanasFoldersExpansibles/posicion6.gif" /></label><br />

									<label><input type="radio" name="posicionesFoldersExpansibles" value="posicionesFoldersExpansibles7"> <img src="/imagenes/pestanasFoldersExpansibles/posicion7.gif" /></label>

									<label><input type="radio" name="posicionesFoldersExpansibles" value="posicionesFoldersExpansibles8"> <img src="/imagenes/pestanasFoldersExpansibles/posicion8.gif" /></label>

									<label><input type="radio" name="posicionesFoldersExpansibles" value="posicionesFoldersExpansibles9"> <img src="/imagenes/pestanasFoldersExpansibles/posicion9.gif" /></label><br /><br />

								</div>

							</div>

							<div id="formularioProductosPortadores" style="display:none;">

								* Impresi&oacute;n<br />

								<div style="padding-top:6px;">

									<select class="selectTextoLargo" name="impresionProductosPortadores" mensajeError="Seleccione una <b>t&eacute;cnica de impresi&oacute;n</b>" tipoVerificacion="isNotDefault">

										<option value="impresionProductosSerigrafia">Serigraf&iacute;a</option>

										<option value="impresionProductosRepujado">Repujado</option>

										<option value="impresionProductosRealzado">Realzado</option>

										<option value="impresionProductosEstampado">Estampado</option>

									</select>

								</div><br />

								<div style="margin-right: 10px; float:left;">

									* Material<br />

									<div style="padding-top:6px;">

										<select class="selectTextoCorto" name="materialProductosPortadores" mensajeError="Seleccione un <b>material</b>" tipoVerificacion="isNotDefault"  onChange="mostrarColor('materialProductosPortadores');">

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

										<select class="selectTextoCorto" name="colorProductosPortadoresCuerotexa" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

											<option value="colorProductosPortadoresCuerotexaAzulOscuro">Azul oscuro</option>

											<option value="colorProductosPortadoresCuerotexaNegro">Negro</option>

											<option value="colorProductosPortadoresCuerotexaVino">Vino</option>

											<option value="colorProductosPortadoresCuerotexaChocolate">Chocolate</option>

										</select>

										<select class="selectTextoCorto" name="colorProductosPortadoresCastilian" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

											<option value="colorProductosPortadoresCastilianVino">Vino</option>

											<option value="colorProductosPortadoresCastilianAzul">Azul</option>

											<option value="colorProductosPortadoresCastilianNegro">Negro</option>

											<option value="colorProductosPortadoresCastilianVerde">Verde</option>

										</select>

										<select class="selectTextoCorto" name="colorProductosPortadoresVinilo" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

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

										<select class="selectTextoCorto" name="colorProductosPortadoresPercalina" mensajeError="Seleccione un <b>color</b>" tipoVerificacion="isNotDefault">

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

							</div>

						</div>

						<div style="width: 100%; float:left; padding-top:30px;">

							<div style="float:right;">

								<input id="botonEnviar" type="image" src="/imagenes/enviarSolicitudBtn.gif" width="183px" height="22px" alt="Enviar solicitud" onclick="enviar(); return false;" />

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

