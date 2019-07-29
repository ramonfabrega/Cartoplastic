<? 
	$rutaRelativaIncludes = "../../..";
	include_once($rutaRelativaIncludes . "/configuracion.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
		<title><? echo(CFG_TITULOSITIO); ?> - Art&iacute;culos promocionales</title>
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
					Art&iacute;culos promocionales
				</div>
				<div id="contenido">
					<div class="tituloSeccion">
						<img src="/imagenes/tituloArticulosPromocionales.gif" width="327px" height="30px" alt="ART&Iacute;CULOS PROMOCIONALES" />
					</div>
					<div class="separadorHorizontal"></div>
					<?
						 include($rutaRelativaIncludes . "/include/subMenuArticulosPromocionales.inc");
					?>
					<div class="colCompletaIzq">
					<img src="/imagenes/bannerArticulosPromocionales.jpg" width="586px" height="300px" alt="Art&iacute;culos promocionales" /><br /><br />
					Cartoplastic tiene una gama flexible de productos promocionales. Partiendo de todas las materias primas disponibles (cartón, cartulina, papel, vinilo, percalina, etcétera), ofrecemos una gran variedad de artículos. El único límite que tenemos es el de su imaginación. Cartoplastic se adapta para satisfacer sus necesidades de marketing promocional 
					</div>
				</div>
			</div>
			<?
				include($rutaRelativaIncludes . "/include/footer.inc");
			?>
		</div>
	</body>
</html>
