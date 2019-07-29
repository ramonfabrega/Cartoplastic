<? 

	$rutaRelativaIncludes = "../../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Art&iacute;culos promocionales - Revistas</title>

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

					Productos Promocionales - Revistas

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloRevisteros.gif" width="139px" height="25px" alt="REVISTEROS" />

					</div>

					<div class="separadorHorizontal"></div>

					<?

						include($rutaRelativaIncludes . "/include/subMenuArticulosPromocionales.inc");

					?>

					<div class="colCompletaIzq" style="width:500px">

						<div class="columnaFotoProducto" style="float: left;">

								<img class="imagenProducto" src="/imagenes/productos/portaRevistas.jpg" width="286px" height="286px" alt="Revisteros" />

						</div>

						<div style="margin-left: 300px;">

							<p>Confeccionados en cartón y recubiertos en papel/percalina impresa a todo color.   Ideales para ofrecer con una mejor presentaci&oacute;n, revistas o impresiones a clientes de una empresa.  De esta manera las mismas son f&aacute;cilmente almacenadas y pueden colocarse en anaqueles.</p>

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

