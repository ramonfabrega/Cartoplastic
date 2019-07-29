<? 

	$rutaRelativaIncludes = "../../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Art&iacute;culos promocionales - Asientos de estadio</title>

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

				$opcionActual = "articulosPromocionales";

				include($rutaRelativaIncludes . "/include/menu.inc");

			?>	

				<div id="testigo">

					Productos Promocionales - Asientos de estadio

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloAsientosEstadio.gif" width="249px" height="25px" alt="ASIENTOS DE ESTADIO" />

					</div>

					<div class="separadorHorizontal"></div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuArticulosPromocionales.inc");

					?>

					<div class="colCompletaIzq" style="width:500px">

						<div class="columnaFotoProducto" style="float: left;">

							<img class="imagenProducto" src="/imagenes/productos/asientosEstadio.jpg" width="286px" height="286px" alt="Asientos de estadio" />

						</div>

						<div style="margin-left: 300px;">

							<b>Colores disponibles</b>

							<table id="tablaColores">

								<tr>

									<td>Negro</td>

									<td class="columnaColor" style="background-color: #000000;"></td>

								</tr>

								<tr>

									<td class="columnaTexto" >Azul oscuro</td>

									<td class="columnaColor" style="background-color: #1d1157;"></td>

								</tr>

								<tr>

									<td>Azul royal</td>

									<td class="columnaColor" style="background-color: #1a1c96;"></td>

								</tr>

								<tr>

									<td>Celeste</td>

									<td class="columnaColor" style="background-color: #236faf;"></td>

								</tr>

								<tr>

									<td>Blanco</td>

									<td class="columnaColor" style="background-color: #ffffff;"></td>

								</tr>

								<tr>

									<td>Rojo</td>

									<td class="columnaColor" style="background-color: #e71f1f;"></td>

								</tr>

								<tr>

									<td>Verde</td>

									<td class="columnaColor" style="background-color: #0fa019;"></td>

								</tr>

								<tr>

									<td>Gris claro</td>

									<td class="columnaColor" style="background-color: #d0cccc;"></td>

								</tr>

								<tr>

									<td>Gris oscuro</td>

									<td class="columnaColor" style="background-color: #4e4e47;"></td>

								</tr>

								<tr>

									<td>Amarillo</td>

									<td class="columnaColor" style="background-color: #e2c81b;"></td>

								</tr>

								<tr>

									<td>Aqua</td>

									<td class="columnaColor" style="background-color: #0d98ad;"></td>

								</tr>

							</table>

						</div>

						<br />

						<div style="float: left;">

							<p>Confeccionados en vinilo (vinyl) y foam, resulta una manera muy efectiva de promover una marca, puesto que se llevan como un maletín y la impresión en ambas caras será vista por muchos consumidores potenciales. Los asientos pueden llevar impresión en serigrafía en cualquier parte del área de 13” x 13”.</p>

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

