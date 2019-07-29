<? 

	$rutaRelativaIncludes = "..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Inicio</title>

		<? include("../include/rel.inc"); ?>

	</head>

	<body>

		<a name="arriba"></a>

		<div id="contenedor">

			<?

				include($rutaRelativaIncludes . "/include/header.inc");

			?>

			<div id="franjaContenido" style="padding-bottom: 30px;">

			<?

				$opcionActual = "home";

				include($rutaRelativaIncludes . "/include/menu.inc");

				$arrProductos[0] = array("pathImagen" => "/imagenes/productos/asientosEstadio.jpg", "nombreProducto" => "Asientos de estadio", "enlace" => "/es/productos/articulosPromocionales/asientosEstadio.php");

				$arrProductos[1] = array("pathImagen" => "/imagenes/productos/bindingCase.jpg", "nombreProducto" => "Binding Case", "enlace" => "/es/productos/bindingCase/bindingCase.php");

				$arrProductos[2] = array("pathImagen" => "/imagenes/productos/cajasDecorativas.jpg", "nombreProducto" => "Cajas decorativas", "enlace" => "/es/productos/articulosPromocionales/cajasDecorativas.php");

				$arrProductos[3] = array("pathImagen" => "/imagenes/productos/coasters.jpg", "nombreProducto" => "Coasters", "enlace" => "/es/productos/articulosPromocionales/coastersPortavasos.php");

				$arrProductos[4] = array("pathImagen" => "/imagenes/productos/divisiones.jpg", "nombreProducto" => "Divisiones", "enlace" => "/es/productos/portafoliosDuplicadosDivisiones/divisiones.php");

				$arrProductos[5] = array("pathImagen" => "/imagenes/productos/foldersExpansibles.jpg", "nombreProducto" => "Folders expansibles", "enlace" => "/es/productos/foldersExpansibles.php");

				$arrProductos[6] = array("pathImagen" => "/imagenes/productos/letterFile.jpg", "nombreProducto" => "Letter file", "enlace" => "/es/productos/bindingCase/letterFile.php");

				$arrProductos[7] = array("pathImagen" => "/imagenes/productos/papeleria.jpg", "nombreProducto" => "Papeler&iacute;a", "enlace" => "/es/productos/papeleria.php");

				$arrProductos[8] = array("pathImagen" => "/imagenes/productos/portafolios.jpg", "nombreProducto" => "Portafolios", "enlace" => "/es/productos/portafoliosDuplicadosDivisiones/portafolios.php");

				$arrProductos[9] = array("pathImagen" => "/imagenes/productos/portaRevistas.jpg", "nombreProducto" => "Portarevistas", "enlace" => "/es/productos/portadores.php#portaRevistas");

				$arrProductos[10] = array("pathImagen" => "/imagenes/productos/rompecabezas.jpg", "nombreProducto" => "Rompecabezas", "enlace" => "/es/productos/articulosPromocionales/rompecabezas.php");

			?>	

				<div id="contenedorMedio">

					<div id="contenedorMedioIzq" ><a href="/es/productos/bindingCase/bindingCase.php"><img src="/imagenes/bannerHomeBindingCase.png" /></a></div>

					<div id="contenedorMedioDer" >

						<a href="/es/productos/personalizados.php"><img src="/imagenes/bannerHomePersonalizarProducto.jpg" /></a>

						<div id="contenedorMedioDerAbajo" >

							<a href="/es/pedidos.php"><img src="/imagenes/bannerHomePedidos.jpg" /></a>

						</div>

					</div>

					<div id="franjaProductosDestacados" style="float: none; clear:both;  margin-left: 10px;">

						<div style="margin-left: -10px; padding-top: 20px; padding-bottom: 20px;">

							<img src="/imagenes/titularProductosDestacados.jpg" />

						</div>	

						<?

							$i = 0;

							$inicio = 0;

							$cantidadProductosVisibles = 5;

							$cantidadProductos = count($arrProductos);

							$ancho = 156;

							$alto = 156;

							$arrRandom = array();

							while ($i < $cantidadProductosVisibles)	{

								$idNuevo = FALSE;

								while ($idNuevo != TRUE) {

									$id = rand($inicio, $cantidadProductos - 1);

									$intLenRandom = count($arrRandom);

									if ($intLenRandom > 1) {

										$j = 0;

										$k = 0;

										while ($j < $intLenRandom){

											if ($id != $arrRandom[$j]) {

												$k++;

											}

											$j++;

										}

										if ($k == $intLenRandom) {

											array_push($arrRandom, $id);

											$idNuevo = TRUE;

										} 

									} else {

										array_push($arrRandom, $id);

										$idNuevo = TRUE;

									}

								}

								?> 

									<div style="float: left; margin: 6px;">

										<a 	id="<? echo($id); ?>" href="<? echo($arrProductos[$id]["enlace"]); ?>"><img class="imagenContenido" src="<? echo($arrProductos[$id]["pathImagen"]); ?>" width="<? echo($ancho); ?>px" height="<? echo($alto); ?>px" alt="<? echo($arrProductos[$id]["nombreProducto"]); ?>" /></a>

										<br />

										<br />

										<p style="text-align:center; font-size: 9px;">

										<?

											echo($arrProductos[$id]["nombreProducto"]); 

										?>

										</p>

									</div>

								<?

								$i++;

							}

						?>

					</div>

				</div>

			</div>

			<?

				include($rutaRelativaIncludes . "/include/footer.inc");

			?>

		</div>

	</body>

</html>

