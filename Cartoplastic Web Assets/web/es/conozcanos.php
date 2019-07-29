<? 
	$rutaRelativaIncludes = "..";
	include_once($rutaRelativaIncludes . "/configuracion.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
		<title><? echo(CFG_TITULOSITIO); ?> - Con&oacute;zcanos</title>
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
				$opcionActual = "conozcanos";
				include($rutaRelativaIncludes . "/include/menu.inc");
			?>	
				<div id="testigo">
					Con&oacute;zcanos
				</div>
				<div id="contenido">
					<div class="fotoColumnaIzquierda">
						<img class="imagenContenido" src="/imagenes/equipoHumanoTrabajando_01.jpg" width="310px" height="217px" alt="Personal trabajando" />
					</div>
					<div class="colCompletaIzq">
						<div class="tituloSeccion">
							<img src="/imagenes/tituloConozcanos.gif" width="190px" height="22px" alt="Con&oacute;zcanos" />
						</div>
						<div style="padding-bottom: 50px;">
							<img class="imagenContenido" src="/imagenes/fachada.jpg" width="500px" height="217px" alt="Fachada" /><br /><br />
							La historia de Cartoplastic, S.A. es la del dinamismo y la adaptación al mercado. Nuestros 45 colaboradores actuales forman un equipo compacto que trabaja en unas de las instalaciones más modernas de Panamá.<br />
							<br />
							Desde el inicio de sus operaciones  en 1983, Cartoplastic ha ido innovando en tecnología y en servicios a sus clientes. Primero con la gran modernización de sus equipos y la ampliación de su capacidad productiva en 1993, coincidiendo con el cambio de marca al actual Cartoplastic, S.A.. Desde ese año se ofrece el servicio de personalización de los productos con serigrafía a dos colores hasta que en 2007 se pone en marcha la serigrafía a todo color para este tipo de productos.<br />
							<br />
							En 2005,  Cartoplastic se muda de sus instalaciones históricas en la Avenida Balboa después de 22 años de labores e inaugura la moderna sede del Parque Industrial Costa del Este. La nueva planta permitió una mejor distribución de la cadena productiva, la instalación de aire acondicionado en toda la zona de producción y el mejor almacenamiento de la materia prima.<br />
							<br />
							En 2006, la compañía comienza a estampar papeles y cartulinas como paso previo al servicio actual, que incluye estampado de vinilos y el repujado de cartones y vinilos.
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
