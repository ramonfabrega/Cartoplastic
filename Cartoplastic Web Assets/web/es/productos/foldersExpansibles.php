<? 

	$rutaRelativaIncludes = "../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Folders Expansibles</title>

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

				$opcionActual = "foldersExpansibles";

				include($rutaRelativaIncludes . "/include/menu.inc");

			?>	

				<div id="testigo">

					Folders expansibles

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloFoldersExpansibles.gif" width="262px" height="25px" alt="Folders expansibles" />

					</div>

					<div class="separadorHorizontal"></div>

					<div class="colCompletaIzq" style="width:100%;">

						<div id="columnaFotoProducto">

							<img src="/imagenes/productos/foldersExpansibles.jpg" class="imagenGaleria" style="display:none;" alt="Folders expansibles" id="imagen1" />

							<img src="/imagenes/productos/foldersExpansibles_02.jpg" class="imagenGaleria" style="display:none;" alt="Folder expansibles" id="imagen2" />

							<img src="/imagenes/productos/foldersExpansibles_03.jpg" class="imagenGaleria" style="display:none;" alt="Folder expansibles" id="imagen3" />

							<img src="/imagenes/productos/foldersExpansibles_04.jpg" class="imagenGaleria" style="display:none;" alt="Folder expansibles" id="imagen4" />

							<div>

								<div class="flechaAtras" onclick="atrasarImagen();"></div>

								<div class="flechaAdelante" onclick="adelantarImagen();"></div>

							</div>

						</div>

						<div style="margin-left: 282px;">

							<b>Colores disponibles</b>

							<table id="tablaColoresFolders">

								<tr>

									<td colspan="3"><b>Pressboard</b></td>

									<td colspan="3"><b>Percalina (color del lomo)</b></td>

									<td colspan="2"><b>Pressboard T3</b></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Anaranjado</td>

									<td width="6" class="columnaColor" style="background-color: #e8611e;"></td>

									<td></td>
									<td class="columnaTexto" >Negro</td>

									<td width="6" class="columnaColor" style="background-color: #000000;"></td>

									<td ></td>
									<td class="columnaTexto" >Verde claro</td>

									<td width="6" class="columnaColor" style="background-color: #d3e7cd;"></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Gris</td>

									<td class="columnaColor" style="background-color: #d0cccc;"></td>

									<td ></td>
									<td class="columnaTexto" >Azul oscuro</td>

									<td class="columnaColor" style="background-color: #1d1157;"></td>

									<td></td>
									<td class="columnaTexto" >Celeste</td>

									<td class="columnaColor" style="background-color: #0d98ad;"></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Verde </td>

									<td class="columnaColor" style="background-color: #4f8a10;"></td>

									<td ></td>
									<td class="columnaTexto" >Celeste</td>

									<td class="columnaColor" style="background-color: #236faf;"></td>

									<td ></td>
									<td class="columnaTexto" >Rojo</td>

									<td class="columnaColor" style="background-color: #930b3b;"></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Verde claro</td>

									<td class="columnaColor" style="background-color: #90b584;"></td>

									<td ></td>
									<td class="columnaTexto" >Gris</td>

									<td class="columnaColor" style="background-color: #d0cccc;"></td>

									<td></td>
									<td class="columnaTexto" >Chocolate</td>

									<td class="columnaColor" style="background-color: #7e664f;"></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Amarillo </td>

									<td class="columnaColor" style="background-color: #e2c81b;"></td>

									<td ></td>
									<td class="columnaTexto" >Verde oscuro </td>

									<td class="columnaColor" style="background-color: #1c4f1a;"></td>
								    <td ></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Rojo</td>

									<td class="columnaColor" style="background-color: #930b3b;"></td>

									<td ></td>
									<td class="columnaTexto" >Rosado</td>

									<td class="columnaColor" style="background-color: #ba1131;"></td>
								    <td ></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Chocolate</td>

									<td class="columnaColor" style="background-color: #723710;"></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Azul</td>

									<td class="columnaColor" style="background-color: #1a1c96;"></td>
								</tr>

									<tr>

									<td class="columnaTexto" >Azul Oscuro</td>

									<td class="columnaColor" style="background-color: #1d1157;"></td>
								</tr>

								<tr>

									<td class="columnaTexto" >Celeste</td>

									<td class="columnaColor" style="background-color: #007fb6;"></td>
								</tr>
							</table>

						</div>

						<br />

					  <div><br />

							<br />

							Utilice los Folders expansibles de larga duración para sus diferentes proyectos. Obtenga los beneficios de varias divisiones y múltiples áreas para archivar sus documentos dentro de un mismo folder. Son una excelente solución para archivos de personal, contabilidad, cuentas y/o préstamos bancarios, etcétera.<br />

							Las divisiones tienen pestañas que pueden ser personalizadas para facilitar la identificación.<br />

							<br />

							<b>Material</b><br />

							Pressboard Genuino y Tipo 3,

							percalina para el lomo.<br />

							<br />

							<b>Denominaciones para la venta</b><br />

							Sencillos y con múltiples divisiones en diversos tamaños:

							<ul>

								<li>Carta (11” x 8 ½”)</li>

								<li>Legal (14” x 8 ½”)</li>

								<li>Hasta un máximo de 32” x 40”</li>

							</ul>

							<br />

							<b>Características</b><br /> 

							Las divisiones están disponibles es Pressboard Genuino, Tipo 3 o Kraft, además de Manila Tag de 175 libras.  La expansión entre cada división puede ser de 1” (estándar), 1 1/2”, 2” o 3”. <br />

							<br />

							Se puede incluir en un fólder hasta 8 divisiones y 18 ganchos para archivar. Las divisiones pueden estar preimpresas y protegidas con mylar transparente o en colores.<br />

							<br />

							Las pestañas de los folders pueden estar en múltiples posiciones  e inclusive pueden protegerse con Plastic Tab para hacerlas más duradera. El lomo del fólder (acordeón) es fabricado en percalina. Se le puede incluir una liga para facilitar la manipulación de los folder  gruesos.<br />

							<br />
							<table width="95%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td><img src="../../imagenes/pestanasFoldersExpansibles/posicion1.gif" width="80" height="80" /></td>
                                <td><img src="../../imagenes/pestanasFoldersExpansibles/posicion2.gif" width="80" height="80" /></td>
                                <td><img src="../../imagenes/pestanasFoldersExpansibles/posicion3.gif" width="80" height="80" /></td>
                                <td><img src="../../imagenes/pestanasFoldersExpansibles/posicion4.gif" width="80" height="80" /></td>
                                <td><img src="../../imagenes/pestanasFoldersExpansibles/posicion5.gif" width="80" height="80" /></td>
                                <td><img src="../../imagenes/pestanasFoldersExpansibles/posicion6.gif" width="80" height="80" /></td>
                                <td><img src="../../imagenes/pestanasFoldersExpansibles/posicion7.gif" width="80" height="80" /></td>
                                <td><img src="../../imagenes/pestanasFoldersExpansibles/posicion8.gif" width="80" height="80" /></td>
                                <td><img src="../../imagenes/pestanasFoldersExpansibles/posicion9.gif" width="80" height="80" /></td>
                              </tr>
                              <tr>
                                <td colspan="9"><div align="center">Haga<a href="ganchos.pdf" target="_blank"> click aquí </a>para  ver la información detallada correspondiente a la posición de los ganchos.</div></td>
                              </tr>
                            </table>
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

