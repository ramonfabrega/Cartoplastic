<? 

	$rutaRelativaIncludes = "..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Cont&aacute;ctenos</title>

		<? include("../include/rel.inc"); ?>

		<script type="text/javascript" language="javascript">

			function enviar() {

				var opt = {

					// Use POST

					method: 'post',

					postBody:  Form.serialize('formularioConsultas'),

					// Handle successful response

					onSuccess: function(t) {

						Element.show('mensajeExito');

						Element.hide('formularioConsultas');

					},

					// Handle 404

					on404: function(t) {

						alert('Error 404: location "' + t.statusText + '" was not found.');

					},

					// Handle other errors

					onFailure: function(t) {

						alert('Error ' + t.status + ' -- ' + t.statusText);

					}

					}

				new Ajax.Request('/php/consultas.php', opt);

				Element.show('enviandoMensaje');

				Element.hide('mensajeError');

				Element.hide('botonEnviar');

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

				$opcionActual = "contactenos";

				include($rutaRelativaIncludes . "/include/menu.inc");

			?>	

				<div id="testigo">

					Cont&aacute;ctenos

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloContacto.gif" width="148px" height="27px" alt="Cont&aacute;ctenos" />

					</div>

					<div class="col">

						<div id="mensajeError" style="display:none;">

							<div class="cabezoteMensajeError">

								<p class="cuerpoCabezoteMensajeError" style="margin:0px;"><? echo(CFG_TITULOBLOQUEMENSAJESERROR); ?></p>

							</div>

							<div id="mensajes" class="cuerpoMensajeError"></div>

						</div>

					</div>

					<div class="col">

						<p>Nuestro equipo est&aacute; disponible para ayudarle a resolver cualquier duda, ampliar informaci&oacute;n, o solicitar alguno de nuestros servicios. <br />No dude en escribirnos y pronto recibir&aacute; noticias nuestras. Todos los campos marcados con * son obligatorios</p>

						<div id="mensajeExito" style="display:none;">

							<ul>

								<li class="chulitoExito"><? echo(CFG_MENSAJEEXITOENVIOMENSAJE); ?></li>

							</ul>

						</div>

						<div class="formularioAncho">

							<form id="formularioConsultas">

								<div class="fondoInput">

									* Empresa<br />

									<input class="inputTexto" name="empresa" mensajeError="El campo <b>Empresa</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty" type="text" value="" />

								</div>

								<div class="fondoInput">

									* Nombre completo<br />

									<input class="inputTexto" name="nombreCompleto" mensajeError="El campo <b>Nombre completo</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty" type="text" value="" />

								</div>

								<div class="fondoInput">

									* Tel&eacute;fono<br />

									<input class="inputTexto" name="telefono" mensajeError="El campo <b>Tel&eacute;fono</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty" type="text" value="" />

								</div>

								<div class="fondoInput">

									* Fax<br />

									<input class="inputTexto" name="fax" mensajeError="El campo <b>Fax</b> no puede estar vac&iacute;o y debe ser v&aacute;lido" tipoVerificacion="isNotEmpty"  type="text" value="" />

								</div>

								<div class="fondoInput">

									* Correo electr&oacute;nico<br />

									<input class="inputTexto" name="email" mensajeError="El campo <b>Correo electr&oacute;nico</b> no puede estar vac&iacute;o y debe ser v&aacute;lido" tipoVerificacion="isEmail"  type="text" value="" />

								</div>

								<div class="fondoInput">

									* Linea de inter&eacute;s<br />

									<div style="padding-top:6px;">

									<select class="selectTexto" name="lineaInteres" mensajeError="Seleccione una <b>L&iacute;nea de inter&eacute;s</b>" tipoVerificacion="isNotDefault">
										<option value="portafoliosDuplicadosDivisiones">Portafolios, divisiones y duplicados </option>

										<option value="foldersExpansibles">Folders expansibles</option>
										<option value="letterFile">Letter files</option>
										<option value="bindingCase">Binding cases</option>
										<option value="productosPromocionales">Productos promocionales</option>
										<option value="cubiertasEstuche">Cubiertas y estuche</option>
										<option value="papeleria">Papelería</option>
										<option value="otros">Otros</option>

									</select>

									</div>

								</div>

								<div class="fondoTextArea">

									* Mensaje<br />

									<textArea name="mensaje" mensajeError="El campo <b>Mensaje</b> no puede estar vac&iacute;o" tipoVerificacion="isNotEmpty" ></textArea>

								</div>

								<div>

									<p id="enviandoMensaje" class="btnEnviarForma" style="display:none;">Enviando mensaje &nbsp; <img src="/imagenes/indicator.gif" alt="Enviando mensaje" /></p>

									<p id="botonEnviar">

										<input type="image" class="btnEnviarForma" src="/imagenes/btnEnviar.gif" value="Enviar" onclick="verificarForma('formularioConsultas', 'enviar'); return false;" />

									</p>

								</div>

							</form>

						</div>

						<div style="float:left; margin-left: 30px;">

							<b>Datos de contacto</b><br />

							Tel (507) 302-1466<br />

							Fax (507) 301-1683<br />

							Apartado 0831-01752<br />

							Panam&aacute;, Panam&aacute;

						</div>

						<div class="separadorHorizontal"></div>

						<div class="tituloSeccion" style="float:left;">

							<img src="/imagenes/tituloMapa.gif" width="61px" height="20px" alt="Mapa de ubicaci&oacute;n" />

						</div>

						<div class="col">

							<a name="mapa"></a>

							<img src="/imagenes/mapa.gif" width="542px" height="600px" alt="Mapa de ubicaci&oacute;n" />

						</div>

					</div>

				</div>

			</div>

			<?

				include($rutaRelativaIncludes . "/include/footer.inc");

			?>

		</div>

	</body>

</html>

