<? 

	$rutaRelativaIncludes = "../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Cubiertas y estuches</title>

		<? include($rutaRelativaIncludes . "/include/rel.inc"); ?>

		<script type="text/javascript">

			var total = 5;

			var eff = 'appear';

			var dur = 1;

			var imagenActual = 1;

			var tohide;

			function iniciarDiaporama() {

				Effect.toggle('imagen' + imagenActual, eff, { duration: dur });

			}

			function adelantarImagen() {

				imagenActual = (imagenActual < total) ? imagenActual + 1 : 1;

				tohide = (imagenActual == 1) ? total : imagenActual - 1;

				Effect.toggle('imagen' + tohide, eff, { duration: dur });

				Effect.toggle('imagen' + imagenActual, eff, { duration: dur });

			}

			function atrasarImagen(){

				imagenActual = (imagenActual > 1) ? imagenActual - 1 : total;

				tohide = (imagenActual == total) ? 1 : imagenActual + 1;

				Effect.toggle('imagen' + tohide, eff, { duration: dur });

				Effect.toggle('imagen' + imagenActual, eff, { duration: dur });

			}

		</script>

	</head>

	<body onLoad="iniciarDiaporama();">

		<a name="arriba"></a>

		<div id="contenedor">

			<?

				include($rutaRelativaIncludes . "/include/header.inc");

			?>

			<div id="franjaContenido">

			<?

				$opcionActual = "portadores";

				include($rutaRelativaIncludes . "/include/menu.inc");

			?>	

				<div id="testigo">

					Cubiertas y estuches

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloPortadores.gif" width="275px" height="25px" alt="CUBIERTAS Y ESTUCHES" />

					</div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuPortadores.inc");

					?>

					<p>

						Toda clase de artículos para llevar documentos diversos, confeccionados en todos los materiales que manejamos, inclusive algunos de ellos con foam para que luzcan acolchados.<br /><br />

						<b>Colores y materiales disponibles:</b><br />

						Cuerotexa: azul oscuro, negro, vino y chocolate.<br />

						Castillian: verde, vino, azul y negro.<br />

						Vinilo (vinyl): negro, azul oscuro, azul royal, celeste, blanco, rojo, verde, gris claro, gris oscuro, amarillo, aqua y anaranjado.<br />

						Percalina: negro, azul oscuro, celeste, gris, verde, vino y blanco.<br /><br />

						<b>Impresión:</b><br />

						Serigrafía, repujado, realzado o estampado  a varios colores (inclusive dorado y plateado).

					</p>

					<div class="separadorHorizontal"></div>

					<div class="colCompletaIzq" style="width:100%;">

						<div id="columnaFotoProducto">

							<img src="/imagenes/productos/cubiertasEstuches.jpg" class="imagenGaleria" style="display:none;" alt="Estuches" id="imagen1" />

							<img src="/imagenes/productos/cubiertasEstuches_02.jpg" class="imagenGaleria" style="display:none;" alt="Estuches" id="imagen2" />

							<img src="/imagenes/productos/cubiertasEstuches_03.jpg" class="imagenGaleria" style="display:none;" alt="Estuches" id="imagen3" />

							<img src="/imagenes/productos/cubiertasEstuches_04.jpg" class="imagenGaleria" style="display:none;" alt="Estuches" id="imagen4" />

							<img src="/imagenes/productos/cubiertasEstuches_05.jpg" class="imagenGaleria" style="display:none;" alt="Estuches" id="imagen5" />

							<div>

								<div class="flechaAtras" onclick="atrasarImagen();"></div>

								<div class="flechaAdelante" onclick="adelantarImagen();"></div>

							</div>

						</div>

						<div style="margin-left: 310px;">

							<ul>

								<li>

									<a name="portaPads"></a><b>PortaPads o Portalibretas/ Carpetas de congreso</b><br />

									Utilizados para congresos, seminarios o cualquier presentación donde se quiera obsequiar  a los participantes con un artículo de calidad que identifique a la empresa o institución, o para que los colaboradores internos luzcan muy profesionales.<br />

									Incluyen bolsillo diagonal o recto para colocar papeles sueltos, así como bolsillo transparente para colocar tarjetas de presentación.<br />

									El portalibretas o las carpetas se puede entregar también con la libreta de apuntes y la pluma.<br />

									Las carpetas de Congreso llevan una tapa que cierra con velcro que la hace parecer casi un maletín.<br /><br />

									<b>Tamaños:</b>

									<ul>

										<li>5 ½” X 8 ½”</li>

										<li>8 ½” X 11”</li>

										<li>8 ½” X 14”</li>

									</ul>

								</li>

								<br />

								<li>

									<a name="portaDiplomas"></a><b>Portadiplomas/ certificados</b><br />

									Ideal para graduaciones, entrega de certificados o documentos importantes.								</li>

								<br />

								<li>

									<a name="portaCuentas"></a><b>Portamenús / Portacuentas</b><br />

									Ideal para restaurantes, cafeterías y sitios de diversión.  Se confeccionan de acuerdo a las necesidades de cada negocio (número de páginas internas, material, etcétera). El producto terminado está listo para ser utilizado inmediatamente (menú con las páginas impresas adentro).<br />

									Los porta cuenta incluyen bolsillo plástico para colocar la tarjeta de crédito.								</li>

								<br />

								<li>

									<a name="portaDocumentos"></a><b>Portadocumentos</b><br />

									Confeccionados en tamaño carta o legal, son ideales para la presentación de documentos para ser firmados por clientes o donde se requiera el transporte de sólo unas cuantas hojas.								</li>

								<br />

								<li>

									<a name="portaChequeras"></a><b>Portachequeras</b><br />

									Son solicitadas por bancos e instituciones financieras que suministran chequeras a sus clientes.  Amplia variedad de diseños, de acuerdo a las especificaciones del cliente.  Utilizados para chequeras con o sin librito.								</li>

								<br />

							  <li>

									<a name="portaCedulas"></a><b>Portacédulas / Portatarjetas</b><br />

								  Confeccionadas en diversos materiales, muchas empresas utilizan este artículo para promocionar su marca o nombre y es de un gran valor para quien lo recibe: protege documentos importantes como la cédula, licencia y otros, y a la vez le da distinción a quien la utiliza.								</li>

								<br />

								<li>

									<a name="portaPoliza"></a><b>Portapóliza de seguros</b><br />

									Confeccionados  en vinilo de color y/o transparente e impresos a todo color.  Son utilizados por compañías de seguro y  corredores de seguros para entregar las pólizas a sus clientes. Tenemos modelos  sencillos y múltiples, con los que se entrega el paquete completo de pólizas al  cliente.</li>

								<br />

								<li>

									<a name="portaDocumentosAuto"></a><b>Portadocumentos de autos</b><br />

									Estos artículos son utilizados por las agencias de autos para entregar los documentos del carro que el cliente está adquiriendo. Tenemos varios modelos disponibles y son confeccionados de acuerdo a las necesidades del cliente (cantidad de bolsillos, forma, etcétera) y van impresos con el logo de la empresa.</li>

								<br />

								<li>

									<a name="portaDocumentosViaje"></a><b>Portadocumentos de viaje</b><br />

									Utilizado por muchas agencias de viaje y líneas aéreas, son confeccionados generalmente en vinilo (vinyl), pero pueden fabricarse en cualquiera de los materiales disponibles.  Es un estuche para que el viajero coloque su pasaporte, tarjeta de abordar, pasaje, etcétera.  Lleva cierre con velcro.<br />

									

									Tenemos varios estilos y tamaños que se ajustan a las necesidades del cliente.</li>

								<br />

								<li>

									<a name="identificadores"></a><b>Identificador de maletas de viaje/ Identificadores varios</b><br />

									Confeccionados en vinilo de los colores disponibles, impresos en ambas caras, una de ellas con el logo de la empresa y en el otro con la información que el cliente desee colocar.<br />

									Utilizados por empresas para identificar productos o artículos que están expuestos al agua y/o inclemencias del tiempo.  Por ejemplo, las maletas de viajeros (Aerolineas/Agencias de Viaje) y plantas (Agricultura).</li>

							</ul>

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

