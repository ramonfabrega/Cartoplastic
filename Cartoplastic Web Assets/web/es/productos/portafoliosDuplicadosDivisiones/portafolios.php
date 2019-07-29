<? 

	$rutaRelativaIncludes = "../../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Portafolios,  divisiones y duplicados  - Portafolios</title>

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

	</head>

	<body onLoad="iniciarDiaporama();">

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

					Portafolios,  divisiones y duplicados  | Portafolios

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloPortafolios.gif" width="154px" height="25px" alt="PORTAFOLIOS" />

					</div>

					<div class="separadorHorizontal"></div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuPortafoliosDuplicados.inc");

					?>

					<div class="colCompletaIzq" style="width:680px">

						<div id="columnaFotoProducto">

							<img src="/imagenes/productos/portafolios.jpg" class="imagenGaleria" style="display:none;" alt="Portafolios" id="imagen1" />

							<img src="/imagenes/productos/portafolios_02.jpg" class="imagenGaleria" style="display:none;" alt="Portafolios" id="imagen2" />

							<img src="/imagenes/productos/portafolios_03.jpg" class="imagenGaleria" style="display:none;" alt="Portafolios" id="imagen3" />

							<img src="/imagenes/productos/portafolios_04.jpg" class="imagenGaleria" style="display:none;" alt="Portafolios" id="imagen4" />

							<div>

								<div class="flechaAtras" onclick="atrasarImagen();"></div>

								<div class="flechaAdelante" onclick="adelantarImagen();"></div>

							</div>

						</div>

						<div style="margin-left: 288px;">

							<b>Colores disponibles</b>

							<table id="tablaColoresPortafolio">

								<tr>

									<td colspan="4"><b>Vinilo</b></td>

									<td colspan="4"><b>Percalina</b></td>

									<td colspan="4"><b>Castillian</b></td>

									<td colspan="4"><b>Cuerotexa</b></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Negro</td>

									<td class="columnaColor" style="background-color: #000000;"></td>

									<td></td>
									<td></td>
									<td class="columnaTexto" >Negro</td>

									<td class="columnaColor" style="background-color: #000000;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto" >Negro</td>

									<td class="columnaColor" style="background-color: #000000;"></td>

									<td></td>
									<td></td>
									<td class="columnaTexto" >Negro</td>

									<td class="columnaColor" style="background-color: #000000;"></td>
								    <td ></td>
								    <td ></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Azul oscuro</td>

									<td class="columnaColor" style="background-color: #1d1157;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto" >Azul oscuro</td>

									<td class="columnaColor" style="background-color: #1d1157;"></td>

									<td></td>
									<td></td>
									<td class="columnaTexto" >Azul oscuro</td>

									<td class="columnaColor" style="background-color: #1d1157;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto" >Azul Oscuro </td>

									<td class="columnaColor" style="background-color: #1d1157;"></td>
								    <td></td>
								    <td></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Azul Royal</td>

									<td class="columnaColor" style="background-color: #1a1c96;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto" >Celeste</td>

									<td class="columnaColor" style="background-color: #236faf;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto" >Azul Royal</td>

									<td class="columnaColor" style="background-color: #1a1c96;"></td>

									<td></td>
									<td></td>
									<td class="columnaTexto" >Vino </td>

									<td class="columnaColor" style="background-color: #662234;"></td>
								    <td></td>
								    <td></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Celeste</td>

									<td class="columnaColor" style="background-color: #236faf;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto" >Gris</td>

									<td class="columnaColor" style="background-color: #d0cccc;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto" >Celeste</td>

									<td class="columnaColor" style="background-color: #236faf;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto" >Chocolate</td>

									<td class="columnaColor" style="background-color: #553f25;"></td>
								    <td ></td>
								    <td ></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Blanco</td>

									<td class="columnaColor" style="background-color: #ffffff;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto" >Verde Oscuro </td>

									<td class="columnaColor" style="background-color: #1c4f1a;"></td>

									<td ></td>
									<td ></td>
									<td  class="columnaTexto">Anaranjado</td>

									<td class="columnaColor" style="background-color: #e8611e;"></td>									
								    <td ></td>
								    <td ></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Rojo</td>

									<td class="columnaColor" style="background-color: #e71f1f;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto" >Rosado</td>

									<td class="columnaColor" style="background-color: #ba1131;"></td>

									<td ></td>
									<td ></td>
									<td class="columnaTexto">Blanco</td>

									<td class="columnaColor" style="background-color: #ffffff;"></td>									
								    <td></td>
								    <td></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Rojo Vino</td>

									<td class="columnaColor" style="background-color: #91343a;"></td>

								    <td ></td>
								    <td ></td>
								<tr>
								<tr>

									<td class="columnaTexto" >Vino</td>

									<td class="columnaColor" style="background-color: #5a2729;"></td>

								    <td ></td>
								    <td ></td>
								<tr>
								<tr>

									<td class="columnaTexto" >Verde</td>

									<td class="columnaColor" style="background-color: #2b7661;"></td>

								    <td ></td>
								    <td ></td>
								<tr>
								<tr>

									<td class="columnaTexto" >Verde oscuro</td>

									<td class="columnaColor" style="background-color: #0f4d2a;"></td>

								    <td ></td>
								    <td ></td>
								<tr>

									<td class="columnaTexto" >Gris Claro</td>

									<td class="columnaColor" style="background-color: #908b8a;"></td>

								    <td ></td>
								    <td ></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Gris oscuro</td>

									<td class="columnaColor" style="background-color: #4e4e47;"></td>

								    <td ></td>
								    <td ></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Amarillo</td>

									<td class="columnaColor" style="background-color: #e2c81b;"></td>

								    <td ></td>
								    <td ></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Aqua</td>

									<td class="columnaColor" style="background-color: #0d98ad;"></td>

								    <td ></td>
								    <td ></td>
								</tr>						
						  </table>

						</div>

						<br />

						<b>Materiales:</b>

						<ul>

							<li>Cuerotexa</li>

							<li>Castillian</li>

							<li>Vinilo (vinyl)</li>

							<li>Percalina</li>

						</ul>

						<br />

						<b>Mecanismos</b><br /><br />

						<div style="float: left; margin-right:10px;">

							

							<table class="tablaGeneral">

								<tr>

									<td colspan="2"><b>Tipo Redondo</b></td>

								</tr>

								<tr>

									<td colspan="2"><img src="/imagenes/mecanismoRedondo.jpg" width = "228px" alt="Mecanismo Redondo" /></td>

								</tr>

								<tr>

									<td>Tama&ntilde;o</td>

									<td>Capacidad en hojas</td>

								</tr>

								<tr>

									<td>½”</td>

									<td>100</td>

								</tr>

								<tr>

									<td>1”</td>

									<td>200</td>

								</tr>

								<tr>

									<td>1 ½”</td>

									<td>300</td>

								</tr>

								<tr>

									<td>2”</td>

									<td>400</td>

								</tr>

								<tr>

									<td>2 ½”</td>

									<td>500</td>

								</tr>

								<tr>

									<td>3”</td>

									<td>600</td>

								</tr>

							</table>

						</div>

						<div>

							<table class="tablaGeneral">

								<tr>

									<td colspan="2"><b>Tipo D</b></td>

								</tr>

								<tr>

									<td colspan="2"><img src="/imagenes/mecanismoD.jpg" width = "228px" alt="Mecanismo en D" /></td>

								</tr>

								<tr>

									<td>Tama&ntilde;o</td>

									<td>Capacidad en hojas</td>

								</tr>

								<tr>

									<td>1”</td>

									<td>250</td>

								</tr>

								<tr>

									<td>1 ½”</td>

									<td>375</td>

								</tr>

								<tr>

									<td>2”</td>

									<td>500</td>

								</tr>

								<tr>

									<td>2 ½”</td>

									<td>625</td>

								</tr>

								<tr>

									<td>&nbsp;</td>

									<td>&nbsp;</td>

								</tr>

								<tr>

									<td>&nbsp;</td>

									<td>&nbsp;</td>

								</tr>

							</table>

						</div>

						<br />

						<b>Denominaciones para la venta:</b>

						<ul>

							<li>11” x 8 ½”</li>

							<li>14” x 8 ½”</li>

							<li>9” X 7”*</li>

							<li>11” x 17”</li>

							<li>Tamaños especiales</li>

						</ul>

						<br />

						El tamaño 9” x 7” está disponible en argolla redonda de 1” y 1 1/2”, y en argolla tipo “D” de 1”.<br />

						<br />

					</div>

				</div>

			</div>

			<?

				include($rutaRelativaIncludes . "/include/footer.inc");

			?>

		</div>

	</body>

</html>

