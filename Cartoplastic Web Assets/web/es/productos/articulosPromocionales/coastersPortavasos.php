<? 

	$rutaRelativaIncludes = "../../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Art&iacute;culos promocionales - Coasters o portavosas</title>

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

					Productos Promocionales - Coasters o portavasos

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloCoasters.gif" width="298px" height="25px" alt="COASTERS O PORTAVASOS" />

					</div>

					<div class="separadorHorizontal"></div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuArticulosPromocionales.inc");

					?>

					<div class="colCompletaIzq" style="width:500px">

						<div class="columnaFotoProducto" style="float: left;">

								<img class="imagenProducto" src="/imagenes/productos/coasters.jpg" width="286px" height="286px" alt="Coasters" />

						</div>

						<div style="margin-left: 300px;">

							<p>Excelente  articulo promocional para cualquier negocio donde se ofrezcan bebidas. También  puede ser utilizado por empresas, o a título personal en eventos o fiestas  especiales agregando un toque de distinción en la atención a clientes o  invitados.<br />

							  <br />

						    Pueden imprimirse a todo color y están disponibles en forma redonda de 4” de diámetro, cuadrada de 3 ½” y rectangular de 4” X 8".</p>

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

