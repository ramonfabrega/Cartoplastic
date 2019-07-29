<? 

	$rutaRelativaIncludes = "../../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Portafolios,  divisiones y duplicados  - Duplicados</title>

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

					Portafolios,  divisiones y duplicados  | Duplicados

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloDuplicados.gif" width="143px" height="25px" alt="DUPLICADOS" />

					</div>

					<div class="separadorHorizontal"></div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuPortafoliosDuplicados.inc");

					?>

					<div class="colCompletaIzq">

						Cartoplastic puede entregar el material que va dentro del portafolio reproducido y compaginado.  Si se va a utilizar para dictar un curso, por  ejemplo, se incluyen las copias necesarias para que todos los participantes tengan el material disponible al momento que inician las clases.<br /><br />

						Los duplicados se pueden hacer en hojas de colores y con la impresión en tinta roja, verde, azul o negra. Además, los duplicados se pueden entregar en hojas sueltas o en libretas (tipo pads).

					</div>

				</div>

			</div>

			<?

				include($rutaRelativaIncludes . "/include/footer.inc");

			?>

		</div>

	</body>

</html>

