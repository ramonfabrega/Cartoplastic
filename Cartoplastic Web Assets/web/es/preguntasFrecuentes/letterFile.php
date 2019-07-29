<? 
	$rutaRelativaIncludes = "../..";
	include_once($rutaRelativaIncludes . "/configuracion.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
		<title><? echo(CFG_TITULOSITIO); ?> - Preguntas Frecuentes - Sobre letter file</title>
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
				$opcionActual = "preguntasFrecuentes";
				include($rutaRelativaIncludes . "/include/menu.inc");
			?>	
				<div id="testigo">
					Preguntas Frecuentes | Sobre letter file
				</div>
				<div id="contenido">
					<div class="tituloSeccion">
						<img src="/imagenes/tituloPreguntasFrecuentes.gif" width="256px" height="22px" alt="Preguntas Frecuentes" />
					</div>
					<p>Aquí tiene un amplio listado de respuestas a las dudas más frecuentes respecto a Cartoplastic. Si su inquietud no queda resuelta, no dude en <a href="/es/contactenos.php">contactarnos</a></p>
					<div class="separadorHorizontal"></div>
					<?
						 include($rutaRelativaIncludes . "/include/subMenuPreguntasFrecuentes.inc");
					?>
					<div class="colCompletaIzq">
						<div class="tituloSeccion">
							<img src="/imagenes/tituloPreguntasLetterFile.gif" width="195px" height="22px" alt="Sobre letter file" />
						</div>
						<div id="preguntasFrecuentes">
							<ol>
								<li>
									<span class="pregunta">¿Qué es un letter file?</span><br />
									Un letter file es una especie de portafolio que tiene el mecanismo lever arch (dos huecos solamente).
								</li>
								<li>
									<span class="pregunta">¿Para qué se usa un letter file?</span><br />
									Se usa para archivar documentos de manera vertical, y donde se requiera una fácil y constante manipulación de los mismos. El letter file tiene una gran capacidad de almacenamiento, ya que en cada uno se pude archivar hasta 500 hojas.
								</li>
								<li>
									<span class="pregunta">¿Cuántos tipos de letter file existen?</span><br />
									Actualmente, ofrecemos dos tipos: No. 50, que sirve para almacenar hojas 8 ½” x 11”, y el No. 51, que se utiliza para almacenar hojas de hasta 8 ½” x 14”.  Tenemos dos mecanismos en función de las dimensiones de abre huecos: 7 cm, que es la medida estándar americana ,y 8cm., la medida europea.
								</li>
								<li>
									<span class="pregunta">¿Puedo personalizar el letter file?</span><br />
									El letter file  tiene una etiqueta pegada en el lomo, que bien puede diseñarse a requerimiento del cliente.
								</li>
								<li>
									<span class="pregunta">¿En qué colores puedo pedirlos?</span><br />
									El letter file es confeccionado en cartón forrado con percalina, de manera que pueden ordenarse en los siguientes colores: negro, azul oscuro, aqua, gris, verde, vino y blanco.
								</li>
								<li>
									<span class="pregunta">¿Quién usa un letter file?</span><br />
									Cualquier persona que requiera archivar documentos. Sin embargo, los usuarios más habituales son  los departamentos de auditoría, facturación, contabilidad y archivo.
								</li>
							</ol>
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
