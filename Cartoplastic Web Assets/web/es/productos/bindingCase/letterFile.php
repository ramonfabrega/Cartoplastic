<? 

	$rutaRelativaIncludes = "../../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Binding Case &amp; Letter file - Letter file</title>

		<? include($rutaRelativaIncludes . "/include/rel.inc"); ?>

		<script type="text/javascript">

			var total = 4;

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

				$opcionActual = "bindingCase";

				include($rutaRelativaIncludes . "/include/menu.inc");

			?>	

				<div id="testigo">

					Binding Case &amp; Letter file - Letter file

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloLetterFile.gif" width="134px" height="23px" alt="LETTER FILE" />

					</div>

					<div class="separadorHorizontal"></div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuBindingCaseLetterFile.inc");

					?>

					<div class="colCompletaIzq" style="width:670px">

						<div id="columnaFotoProducto">

							<img src="/imagenes/productos/letterFile.jpg" class="imagenGaleria" style="display:none;" alt="Letter File" id="imagen1" />

							<img src="/imagenes/productos/letterFile_01.jpg" class="imagenGaleria" style="display:none;" alt="Letter File" id="imagen2" />

							<img src="/imagenes/productos/letterFile_02.jpg" class="imagenGaleria" style="display:none;" alt="Letter File" id="imagen3" />

							<img src="/imagenes/productos/letterFile_03.jpg" class="imagenGaleria" style="display:none;" alt="Letter File" id="imagen4" />

							<div>

								<div class="flechaAtras" onclick="atrasarImagen();"></div>

								<div class="flechaAdelante" onclick="adelantarImagen();"></div>

							</div>

						</div>

						<div style="margin-left: 288px;">

							<b>Colores disponibles</b>

							<table width="296" id="tablaColoresFolders">

								<tr>

									<td colspan="3"><b>En Vinilo</b></td>

									<td colspan="2"><b>En Percalina</b></td>
								</tr>

								<tr>

									<td>Negro</td>

									<td width="6" class="columnaColor" style="background-color: #000000;"></td>

									<td ></td>
									<td>Negro</td>

									<td width="6" class="columnaColor" style="background-color: #000000;"></td>
								</tr>

								<tr>

									<td>Azul oscuro</td>

									<td class="columnaColor" style="background-color: #1d1157;"></td>

									<td ></td>
									<td>Azul oscuro</td>

									<td class="columnaColor" style="background-color: #1d1157;"></td>
								</tr>

								<tr>

									<td>Azul royal</td>

									<td class="columnaColor" style="background-color: #1a1c96"></td>

									<td ></td>
									<td>Celeste</td>

									<td class="columnaColor" style="background-color: #236faf"></td>
								</tr>

								<tr>

									<td>Celeste</td>

									<td class="columnaColor" style="background-color: #236faf"></td>

									<td ></td>
									<td>Gris</td>

									<td class="columnaColor" style="background-color: #d0cccc"></td>
								</tr>

								<tr>

									<td>Blanco</td>

									<td class="columnaColor" style="background-color: #ffffff"></td>

									<td ></td>
									<td>Verde Oscuro </td>

									<td class="columnaColor" style="background-color: #1c4f1a"></td>
								</tr>

								<tr>

									<td>Rojo</td>

									<td class="columnaColor" style="background-color: #e71f1f"></td>

									<td ></td>
									<td>Rosado</td>

									<td class="columnaColor" style="background-color: #ba1131"></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Rojo Vino</td>

									<td class="columnaColor" style="background-color: #91343a;"></td>
								<tr>
								<tr>

									<td class="columnaTexto" >Vino</td>

									<td class="columnaColor" style="background-color: #5a2729;"></td>
								<tr>
								<tr>

									<td class="columnaTexto" >Verde</td>

									<td class="columnaColor" style="background-color: #2b7661;"></td>
								<tr>
								<tr>

									<td class="columnaTexto" >Verde oscuro</td>

									<td class="columnaColor" style="background-color: #0f4d2a;"></td>
								<tr>

									<td class="columnaTexto" >Gris Claro</td>

									<td class="columnaColor" style="background-color: #908b8a;"></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Gris oscuro</td>

									<td class="columnaColor" style="background-color: #4e4e47;"></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Amarillo</td>

									<td class="columnaColor" style="background-color: #e2c81b;"></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Aqua</td>

									<td class="columnaColor" style="background-color: #0d98ad;"></td>
								</tr>						
						  </table>

						</div>

						<br />

						<div style="float: left;">

							<b>Material:</b> Cartón forrado en percalina o en vinilo<br /><br />

							<b>Mecanismo:</b> <br />

						  Lever Arch, disponible en:
						  <ul>

								<li>7 cm (estándar USA), capacidad 50 mm (300 hojas) y 75mm (500 hojas)</li>

								<li>8 cm (estándar Europa), capacidad 50 mm (300 hojas) y 75mm (500 hojas)</li>

						  </ul>

							<b><br />

							Otras características:</b><br />

							<ul>

							  <li>Argolla  para fácil manipulación</li>

							  <li>Rado para estabilidad que permite parar el Letter file</li>

						      <li>Riel protector para resguardar la base y aumentar la durabilidad<br />

						      </li>

						  </ul>

						  <b><br />

						  Denominaciones para la venta:</b> <br />

                            <ul>

							<li>Carta- 11” x 8 ½”  (50mm o 75mm)</li>

							<li>Legal - 14” x 8 ½”   (50mm o 75mm)</li>
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

