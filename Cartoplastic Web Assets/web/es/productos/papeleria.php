<? 

	$rutaRelativaIncludes = "../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Papeler&iacute;a</title>

		<? include($rutaRelativaIncludes . "/include/rel.inc"); ?>		<script type="text/javascript">

			var total = 2;

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

	<body onLoad="iniciarDiaporama();">		<a name="arriba"></a>

		<div id="contenedor">

			<?

				include($rutaRelativaIncludes . "/include/header.inc");

			?>

			<div id="franjaContenido">

			<?

				$opcionActual = "papeleria";

				include($rutaRelativaIncludes . "/include/menu.inc");

			?>	

				<div id="testigo">

					Papeler&iacute;a

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloPapeleria.gif" width="269px" height="30px" alt="PAPELER&Iacute; EN GENERAL" />

					</div>

					<div class="separadorHorizontal"></div>

					<div class="colCompletaIzq" style="width:100%;">

						<div id="columnaFotoProducto">

							<img src="/imagenes/productos/papeleria.jpg" class="imagenGaleria" style="display:none;" alt="Papeler&iacute;a" id="imagen1" />

							<img src="/imagenes/productos/papeleria_02.jpg" class="imagenGaleria" style="display:none;" alt="Papeler&iacute;a" id="imagen2" />

							<div>

								<div class="flechaAtras" onclick="atrasarImagen();"></div>

								<div class="flechaAdelante" onclick="adelantarImagen();"></div>

							</div>

						</div>

						<div style="margin-left: 310px;">

							<ul>

								<li class="listadoSubmenu"><b>Tarjetas de presentación o de regalos, papel membrete, sobres </b> y todo lo necesario para la identificación personal y de empresas.</li><br />

								<li class="listadoSubmenu"><b>Folders</b> tamaño carta o legal, para presentación de propuestas o para congresos, con o sin bolsillos, ranura para colocación de tarjetas de presentación e impresos a todo color.</li><br />

								<li class="listadoSubmenu"><b>Libretas</b> de apuntes de carátula dura de cualquier medida y a especificaciones del cliente. Libretas estilo Pads, con o sin numeración, con copias para papel carbón o con papel químico.</li>

								<br />

								<li class="listadoSubmenu"><b>Encuadernación</b> de documentos que requieran distinción, elegancia y calidad, con nuestro sistema Channel Bind, con anillo doble “O”, o empastados.  Las carátulas duras pueden confeccionarse de percalina, cuerotexa, castilian o vinilo (vinyl) y pueden estamparse a colores (incluidos  dorado y plateado).</li><br />

								<li class="listadoSubmenu">Capacidad de realizar <b>impresiones realzadas o repujadas</b> en todo color (incluidos  dorado y plateado).</li><br />

								<li class="listadoSubmenu"><b>Tintas especiales</b> que permiten dar a ciertos artículos un toque diferente. Por ejemplo:

									<ol>

										<li><b>Tinta para tableros.</b>  Son los recubrimientos que permiten que los papeles puedan convertirse en tableros para rayar con tiza o en aquellos que utilizan marcadores (y que se pueden borrar y reutilizar muchas veces).</li>

										<li><b>Tinta que reacciona al calor.</b>  Recubrimiento que al frotar con el dedo deja ver la impresión que hay abajo.</li>

										<li><b>Tinta scratch.</b>  Recubrimiento que al rasparlo deja al descubierto la impresión que hay abajo.</li>

										<li><b>Tinta para realce.</b>  Recubrimiento transparente en ciertas áreas de la impresión que permite resaltar aspectos específicos de la misma.</li>

										<li><b>Tinta fluorescente.</b>  No se aprecia a simple vista, pero reacciona con luz fluorescente y permite ver otras facetas de la impresión.</li>

									</ol>

								</li>

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

