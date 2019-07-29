<? 

	$rutaRelativaIncludes = "../../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Art&iacute;culos promocionales - Cajas decorativas</title>

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

					Productos Promocionales - Cajas decorativas

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloCajasDecorativas.gif" width="238px" height="25px" alt="CAJAS DECORATIVAS" />

					</div>

					<div class="separadorHorizontal"></div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuArticulosPromocionales.inc");

					?>

					<div class="colCompletaIzq" style="width:500px">

						<div class="columnaFotoProducto" style="float: left;">

							<img class="imagenProducto" src="/imagenes/productos/cajasDecorativas.jpg" width="286px" height="286px" alt="Cajas decorativas" />

						</div>

						<div style="margin-left: 300px;">

							<p>Cajas finas de regalos, generalmente utilizadas por las joyerías, chocolaterías, bombonerías y cualquier otro negocio en donde el empaque o caja donde va el producto sea su carta de presentación.</p>

							<p>Las cajas se fabrican en cartón grueso y son forradas con percalina impresa. La percalina permite que se imprima digitalmente, lo que facilita la reproducción desde fotografías hasta cualquier arte a todo color.</p>

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

