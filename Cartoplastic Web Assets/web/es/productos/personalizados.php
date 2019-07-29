<? 

	$rutaRelativaIncludes = "../..";

	include_once($rutaRelativaIncludes . "/configuracion.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />

		<title><? echo(CFG_TITULOSITIO); ?> - Cubiertas y estuches</title>

		<? include($rutaRelativaIncludes . "/include/rel.inc"); ?>

		<script type="text/javascript">

			var total = 10;

			var eff = 'appear';

			var dur = 1;

			var imagenActual = 1;

			var tohide;

			function iniciarDiaporama() {

				Effect.toggle('imagen' + imagenActual, eff, { duration: dur });

				var pieFoto = document.getElementById("pieFoto");

				pieFoto.innerHTML = arrPieFotos[imagenActual-1];

			}

			function adelantarImagen() {

				imagenActual = (imagenActual < total) ? imagenActual + 1 : 1;

				tohide = (imagenActual == 1) ? total : imagenActual - 1;

				Effect.toggle('imagen' + tohide, eff, { duration: dur });

				Effect.toggle('imagen' + imagenActual, eff, { duration: dur });

				var pieFoto = document.getElementById("pieFoto");

				pieFoto.innerHTML = arrPieFotos[imagenActual-1];

			}

			function atrasarImagen(){

				imagenActual = (imagenActual > 1) ? imagenActual - 1 : total;

				tohide = (imagenActual == total) ? 1 : imagenActual + 1;

				Effect.toggle('imagen' + tohide, eff, { duration: dur });

				Effect.toggle('imagen' + imagenActual, eff, { duration: dur });

				var pieFoto = document.getElementById("pieFoto");

				pieFoto.innerHTML = arrPieFotos[imagenActual-1];

			}

			var arrPieFotos = [];

			arrPieFotos[0] = "Serigrafía a dos colores sobre vinilo.";

			arrPieFotos[1] = "La personalización en los portafolios puede aplicarse a las caras y/o al lomo.";

			arrPieFotos[2] = "La personalización permite incluir imágenes a todo color.";

			arrPieFotos[3] = "Personalizado en serigrafía sobre vinilo. Acolchado.";

			arrPieFotos[4] = "Otra forma de personalizar es incluir una impresión de papel en un sobre de vinilo transparente o condenado. La calidad de la impresión y el acabado son garantía de éxito.";

			arrPieFotos[5] = "Los estampados de Cartoplastic permiten la personalización de los distintos productos que ofrecemos con colores brillantes, incluyendo dorado, plateado, azul, rojo, verde, entre otros.";

			arrPieFotos[6] = "Los folders en pressboard permiten serigrafía de alta calidad.";

			arrPieFotos[7] = "Serigrafía sobre percalina para destacar la marca en el fondo de color. En este material se juega con los colores corporativos.";

			arrPieFotos[8] = "Este embozado en cuerotexa evita el uso de tintas y es muy utilizado en cubiertas y estruches.";

			arrPieFotos[9] = "En personalización, dependiendo del producto, no solo se imprime sino que se realza, como es el caso en la imagen.";

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

				$opcionActual = "personaliceProducto";

				include($rutaRelativaIncludes . "/include/menu.inc");

			?>	

				<div id="testigo" >

					   Personalice su producto </div>

				<div id="contenido">

					<div class="tituloSeccion">

						<img src="/imagenes/tituloPersonaliceProducto.gif" width="285px" height="25px" alt="PERSONALICE SU PRODUCTO" />
					</div>
					
	<div class="separadorHorizontal"></div>

					<div class="colCompletaIzqA">
						<div id="columnaFotoProducto">
							<img src="/imagenes/productos/personalizados/foto_01.jpg" class="imagenGaleriaMediano" style="display:none;" alt="Personalizado" id="imagen1" />

							<img src="/imagenes/productos/personalizados/foto_02.jpg" class="imagenGaleriaMediano" style="display:none;" alt="Personalizado" id="imagen2" />

							<img src="/imagenes/productos/personalizados/foto_03.jpg" class="imagenGaleriaMediano" style="display:none;" alt="Personalizado" id="imagen3" />

							<img src="/imagenes/productos/personalizados/foto_04.jpg" class="imagenGaleriaMediano" style="display:none;" alt="Personalizado" id="imagen4" />

							<img src="/imagenes/productos/personalizados/foto_05.jpg" class="imagenGaleriaMediano" style="display:none;" alt="Personalizado" id="imagen5" />

							<img src="/imagenes/productos/personalizados/foto_06.jpg" class="imagenGaleriaMediano" style="display:none;" alt="Personalizado" id="imagen6" />

							<img src="/imagenes/productos/personalizados/foto_07.jpg" class="imagenGaleriaMediano" style="display:none;" alt="Personalizado" id="imagen7" />

							<img src="/imagenes/productos/personalizados/foto_08.jpg" class="imagenGaleriaMediano" style="display:none;" alt="Personalizado" id="imagen8" />

							<img src="/imagenes/productos/personalizados/foto_09.jpg" class="imagenGaleriaMediano" style="display:none;" alt="Personalizado" id="imagen9" />

							<img src="/imagenes/productos/personalizados/foto_10.jpg" class="imagenGaleriaMediano" style="display:none;" alt="Personalizado" id="imagen10" />
			<div>
				<div class="flechaAtras1" onclick="atrasarImagen();"></div>
				<div class="flechaAdelante1" onclick="adelantarImagen();"></div>
			</div>
			</div>
			<div id="pieFoto" style="margin-top: 210px; width: 275px; text-align:left;"></div><br />
<br />

			</div><br />
<br />

						<div style="float:right; width:500px; margin-top:0px; margin-left:5px; position:relative; overflow:hidden;">
				    <p>Convierta los productos de Cartoplastic en vehículos de su marca y en herramientas eficaces de comunicaci&oacute;n corporativa. Le ofrecemos la posibilidad de personalizarlos, con diversas opciones de estampados y materiales, logos impresos, dise&ntilde;os a todo color, incluso personalización con nombre de cada portafolio. Adem&aacute;s, si usted quiere alg&uacute;n producto con caracter&iacute;sticas no especificadas en nuestros cat&aacute;logos, no dude en consultarnos: trataremos de complacerle. Cartoplastic es vers&aacute;til y su principal  objetivo es su satisfacci&oacute;n.</p>
				    <p> Algunas de las opciones que le ofrecemos para personalizar el producto son: 

				    <table width="85%" border="0" cellspacing="1" cellpadding="1">

                      <tr>

                        <td><img src="../../imagenes/iconoSubMenu.gif" width="4" height="10" />&nbsp;&nbsp;Serigraf&iacute;a </td>

                      </tr>

                      <tr>

                        <td><img src="../../imagenes/iconoSubMenu.gif" width="4" height="10" />&nbsp;&nbsp;Impresi&oacute;n a color en diferentes tipos de papel</td>

                      </tr>

                      <tr>

                        <td><img src="../../imagenes/iconoSubMenu.gif" width="4" height="10" />&nbsp;&nbsp;Estampado </td>

                      </tr>

                      <tr>

                        <td><img src="../../imagenes/iconoSubMenu.gif" width="4" height="10" />&nbsp;&nbsp;Repujado</td>

                      </tr>

                      <tr>

                        <td><img src="../../imagenes/iconoSubMenu.gif" width="4" height="10" />&nbsp;&nbsp;Realzado</td>

                      </tr>

                    </table>	</p>		

					<p>Para  conocer todas las opciones que tenemos para usted, comuníquese con nuestro  equipo al tel&eacute;fono (507) 302-1466, en el correo electr&oacute;nico <a href="mailto:ventas@cartoplastic.com">ventas@cartoplastic.com</a>			        </p><br />
<br />
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

