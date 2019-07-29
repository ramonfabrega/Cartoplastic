<? 

	$rutaRelativaIncludes = "../../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Portafolios,  divisiones y duplicados  - Divisiones</title>

		<? include($rutaRelativaIncludes . "/include/rel.inc"); ?>

	</head>

	<body>

		<a name="arriba"></a>

		<div id="contenedor">

			<?

				include($rutaRelativaIncludes . "/include/header.inc");

			?>

			<div id="franjaContenido">

			<?

				$opcionActual = "portafolios";

				include($rutaRelativaIncludes . "/include/menu.inc");

			?>	

				<div id="testigo">

					Portafolios,  divisiones y duplicados  | Divisiones

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloDivisiones.gif" width="124px" height="25px" alt="DIVISIONES" />

					</div>

					<div class="separadorHorizontal"></div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuPortafoliosDuplicados.inc");

					?>

					<div class="colCompletaIzq" style="width:670px">

						<div class="columnaFotoProducto" style="float: left;">

							<img class="imagenProducto" src="/imagenes/productos/divisiones.jpg" width="286px" height="286px" alt="Asientos de estadio" />

						</div>

						<div style="margin-left: 300px;">

							<b>Colores disponibles</b>

							<table id="tablaColores">

								<tr>

									<td class="columnaTexto" >Transparente</td>

									<td class="columnaColor" style="background-color: #ffffff;"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Rojo</td>

									<td class="columnaColor" style="background-color: #cc0920;"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Anaranjado</td>

									<td class="columnaColor" style="background-color: #e8611e;"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Amarillo</td>

									<td class="columnaColor" style="background-color: #fff10d"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Amarillo oscuro</td>

									<td class="columnaColor" style="background-color: #eab62b;"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Verde claro</td>

									<td class="columnaColor" style="background-color: #5dca93"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Verde </td>

									<td class="columnaColor" style="background-color: #368f36"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Aqua</td>

									<td class="columnaColor" style="background-color: #0d98ad"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Gris</td>

									<td class="columnaColor" style="background-color: #a3a39f"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Rosado</td>

									<td class="columnaColor" style="background-color: #f7a7db"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Morado</td>

									<td class="columnaColor" style="background-color: #643679"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Chocolate</td>

									<td class="columnaColor" style="background-color: #93691f"></td>

								</tr>

							</table>

						</div>

						<br />

					  <div style="float: left; text-align:justify">

							Las divisiones se fabrican principalmente en  cartulina de 90 lbs blanca, pero también hay la posibilidad de hacerlas en cartulina celeste, rosada, verde claro y amarillo. Además, se pueden solicitar divisiones  en cartulinas fluorescentes y en cualquier otro material disponible en el mercado.<br />

							<br />

							Estas divisiones pueden llevar impresión en las pestañas para personalizarlas. Las pestañas están  protegidas del uso continuo por medio de un material plástico (mylar), que está disponible en una amplia gama de colores (ver listado de colores disponibles arriba). <br />

							<br />

							Los tamaños de las divisiones se adaptan a las diferentes medidas de portafolios y/o folders que el cliente utilice.<br />

							<br />

							El cliente elije la cantidad de divisiones que desea para cada portafolio/folder, y el tamaño de la pestaña dependerá de la cantidad de posiciones que se requieran.</div>

					</div>

				</div>

			</div>

			<?

				include($rutaRelativaIncludes . "/include/footer.inc");

			?>

		</div>

	</body>

</html>

