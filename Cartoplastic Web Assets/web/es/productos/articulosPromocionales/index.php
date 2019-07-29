<? 

	$rutaRelativaIncludes = "../../..";

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

			arrPieFotos[3] = "En este caso la personalización es sobre vinilo transparente abierto o condenado.";

			arrPieFotos[4] = "Otra forma de personalizar es incluir una impresión de papel en un sobre de vinilo transparente condenado. La calidad de la impresión y el acabado son garantía de éxito.";

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

				$opcionActual = "articulosPromocionales";

				include($rutaRelativaIncludes . "/include/menu.inc");

			?>	

				<div id="testigo" >

					   Productos Promocionales 

				</div>

				<div id="contenido">

					<div class="tituloSeccion">

					<img src="/imagenes/tituloArticulosPromocionales.gif" width="302" height="22" alt="PRODUCTOS PROMOCIONALES" />					</div>

					<div class="separadorHorizontal"></div>

					<?

						 include($rutaRelativaIncludes . "/include/subMenuArticulosPromocionales.inc");

					?>

				<div class="colCompletaIzq" style="width:550px">

				<table border="0" align="left" cellpadding="4" cellspacing="4">

				  <tr>

					<td valign="top"><img class="imagenProducto" src="/imagenes/imgProductosPromocionales.jpg" width="200" height="133"  align="left" /></td>

				  </tr>

				</table>				  

				El marketing promocional y el marketing directo necesitan de soportes originales y de alta calidad para tener éxito. Productos promocionales que atrapen a su cliente y logren el objetivo de posicionar su marca, introducir un producto o lanzar una oferta, entre otros.<br />

				  <br />

				  Por eso, Cartoplastic pone a su disposición una gama flexible de productos promocionales. El único limite que tenemos es el de su imaginación.<br />

				  <br />

				  Los artículos promocionales son los reyes de la personalización. El sentido mismo de su existencia los convierte en soporte de marca o campaña y, por tanto, la personalización con su logo o con cualquier arte diseñado al efecto es 

				      fundamental. Pregunte a nuestros ejecutivos de venta por las múltiples opciones 

			      que tenemos de impresión o marcado, que van desde la serigrafía al repujado, pasando por la impresión digital, hasta el resaltado o el estampado (incluyendo colores metálicos).

				  </div>

					

			</div>

			</div>

			<?

				include($rutaRelativaIncludes . "/include/footer.inc");

			?>

		</div>

	</body>

</html>

