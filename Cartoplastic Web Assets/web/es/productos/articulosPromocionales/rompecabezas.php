<? 

	$rutaRelativaIncludes = "../../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Art&iacute;culos promocionales</title>

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

					Productos Promocionales - Rompecabezas

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloRompecabezas.gif" width="187px" height="25px" alt="ROMPECABEZAS" />

					</div>

					<div class="separadorHorizontal"></div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuArticulosPromocionales.inc");

					?>

					<div class="colCompletaIzq" style="width:500px">

						<div class="columnaFotoProducto" style="float: left;">

							<img class="imagenProducto" src="/imagenes/productos/rompecabezas.jpg" width="286px" height="286px" alt="Rompecabezas" />

						</div>

						<div style="margin-left: 300px;">

							En la actualidad tenemos moldes para hacer los siguientes tamaños:<br /><br/>

							<table class="tablaGeneral">

								<tr>

									<td><b>Tama&ntilde;o</b></td>

									<td><b>Piezas</b></td>
								</tr>
								<tr>
                                  <td>4&quot; X 6&quot;</td>
								  <td>12 y 24</td>
							  </tr>
								<tr>
                                  <td>4 ½&quot; X 6&quot;</td>
								  <td>9</td>
							  </tr>
								<tr>
                                  <td>6&quot; X 7&quot;</td>
								  <td>20</td>
							  </tr>
								<tr>
                                  <td>8&quot; X 10&quot;</td>
								  <td>15</td>
							  </tr>
								<tr>
                                  <td>10” X 16”</td>
								  <td>24 y 35 </td>
							  </tr>
								<tr>
                                  <td>11&quot; X 17&quot;</td>
								  <td>50</td>
							  </tr>
								<tr>
                                  <td>16 ½” X 10 ¾”</td>
								  <td>99</td>
							  </tr>
							</table>

						    <br />

						<div style="float: left;">
							<p style="text-align:left"><b>*</b>&nbsp;También confeccionamos rompecabezas personalizados de acuerdo a sus necesidades.							</p>
							<p><b> Material:</b> cartón especial puzzle, papel impreso a todo color con o sin barniz.</p>

							<p><b>Tipo de empaque:</b> Hay dos posibilidades de empaque para la presentación del rompecabezas: en bolsa plástica con o sin respaldo o en caja de cartón con impresión en la tapa.</p>

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

