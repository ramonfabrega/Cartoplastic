<? 

	$rutaRelativaIncludes = "../../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Binding Case &amp; Letter file - Binding case</title>

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

				$opcionActual = "bindingCase";

				include($rutaRelativaIncludes . "/include/menu.inc");

			?>	

				<div id="testigo">

					Binding Case &amp; Letter file - Binding case

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloBindingCase.gif" width="159px" height="25px" alt="BINDING CASE" />

					</div>

					<div class="separadorHorizontal"></div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuBindingCaseLetterFile.inc");

					?>

					<div class="colCompletaIzq" style="width:670px">

						<div class="columnaFotoProducto" style="float: left;">

							<img class="imagenContenido" src="/imagenes/productos/bindingCase.jpg" width="286px" height="286px" alt="Binding case" />

						</div>

						<div style="margin-left: 300px;">

							<b>Colores disponibles</b>

							<table width="296" id="tablaColores">

								<tr>

									<td colspan="3"><b>En Vinilo</b></td>

									<td colspan="3"><b>En Fibrone</b></td>
								</tr>

								<tr>

									<td width="148">Negro</td>

									<td width="6"  class="columnaColor" style="background-color: #000000;"></td>

									<td width="3" ></td>
									<td width="107">Negro</td>

									<td width="6" class="columnaColor" style="background-color: #000000;"></td>
								    <td ></td>
								</tr>

								<tr>

									<td>Azul oscuro</td>

									<td class="columnaColor" style="background-color: #1d1157;"></td>

									<td ></td>
									<td>Rojo</td>

									<td class="columnaColor" style="background-color: #ff121e"></td>
								    <td ></td>
								</tr>

								<tr>

									<td>Azul royal</td>

									<td class="columnaColor" style="background-color: #1a1c96"></td>

									<td></td>
									<td>Amarillo</td>

									<td class="columnaColor" style="background-color: #e2c81b"></td>
								    <td ></td>
								</tr>

								<tr>

									<td>Celeste</td>

									<td class="columnaColor" style="background-color: #236faf"></td>

									<td ></td>
									<td>Celeste</td>

									<td class="columnaColor" style="background-color: #236faf"></td>
								    <td ></td>
								</tr>

								<tr>

									<td>Blanco</td>

									<td class="columnaColor" style="background-color: #ffffff"></td>
								</tr>

								<tr>

									<td>Rojo</td>

									<td class="columnaColor" style="background-color: #ff121e"></td>
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

							<b>Material:</b> Fibrone y vinilo, a solicitud de algunos clientes.<br />

							<br /><br />

							<b>Mecanismo:</b><br /> 

							Lever Arch, disponible en: 

							<ul>

								<li>7 cm (estándar USA), capacidad 75mm (500 hojas)</li>

								<li>8  cm (estándar Europa), capacidad 75mm (500  hojas)</li>

							</ul><br />

							<b>Denominaciones para la venta:</b>

							<ul>

								<li>No. 49 (tamaño especial –5 ½” x 8 ½”)</li>

								<li>No. 50 (tamaño carta- 8 ½” x 11”)</li>

								<li>No. 51 (tamaño legal - 8 ½”x 14”)</li>

							</ul>

							<br />

							<b>Opciones de personalización:</b> <br />

						  Usted puede personalizar sus binding case incluyendo una etiqueta pegada en el lomo cuando el material elegido sea fibrone. En el caso del vinilo, se puede imprimir la imagen que usted desee en serigrafía, o puede repujarse, realzarse o estamparse.</div>

					</div>

				</div>

			</div>

			<?

				include($rutaRelativaIncludes . "/include/footer.inc");

			?>

		</div>

	</body>

</html>

