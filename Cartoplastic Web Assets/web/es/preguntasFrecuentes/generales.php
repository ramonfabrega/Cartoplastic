<? 
	$rutaRelativaIncludes = "../..";
	include_once($rutaRelativaIncludes . "/configuracion.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
		<title><? echo(CFG_TITULOSITIO); ?> - Preguntas Frecuentes - Generales</title>
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
					Preguntas Frecuentes | Generales
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
							<img src="/imagenes/tituloPreguntasGenerales.gif" width="118px" height="22px" alt="Generales" />
						</div>
						<div id="preguntasFrecuentes">
							<ol>
								<li>
									<span class="pregunta">¿Cuál es el tiempo de entrega de un pedido?</span><br />
									El tiempo de entrega varía dependiendo del tipo de pedido solicitado (cantidad y acabado) y de la disponibilidad de equipos en la fábrica. En todo caso, una vez especifique sus necesidades podremos darle un tiempo estimado.
								</li>
								<li>
									<span class="pregunta">¿Pueden hacerse pedidos con entregas parciales?</span><br />
									Por supuesto que sí.  De hecho, tratamos de animar a nuestros clientes a incluir pedidos con fechas de entrega diferidas para comodidad de ambas partes.
								</li>
								<li>
									<span class="pregunta">Si pido poca cantidad… ¿me entregan más rápido?</span><br />
									En realidad la cantidad sólo influye en el tiempo de entrega cuando su número es muy elevado.  La preparación de los equipos y el tipo de trabajo requerido influyen más en el tiempo de entrega. Por tanto, no por hacer un pedido pequeño se gana tiempo necesariamente.
								</li>
								<li>
									<span class="pregunta">¿Puede Cartoplastic encargarse del diseño del producto que requiero?</span><br />
									Cartoplastic tiene un departamento de arte que puede ayudar en el diseño del producto solicitado.
								</li>
								<li>
									<span class="pregunta">¿Cómo entrego los artes?</span><br />
									Los artes, en caso de que sean trabajados fuera de la empresa, deben venir en formato de Ilustrador 10 o jpeg (con resolución mínima de 400 dpi).
								</li>
								<li>
									<span class="pregunta">¿A qué se refieren con el sangrado en los artes?</span><br />
									Es el espacio requerido para que la máquina pueda sujetar el material a imprimir; es el borde de todo arte.  En él no hay impresión y el mismo varía dependiendo del producto a fabricar.  Cartoplastic indicará el tamaño requerido para cada trabajo.
								</li>
								<li>
									<span class="pregunta">¿Se pueden personalizar todos los artículos que se fabrican en Cartoplastic?</span><br />
									Todo lo que fabricamos puede personalizarse o en otras palabras, hacerse de acuerdo a los requerimientos del cliente.
								</li>
								<li>
									<span class="pregunta">¿Cuál es la diferencia entre estampado, serigrafía e impresión digital?</span><br />
									El estampado es una técnica que utiliza una lámina que transfiere el color al producto a fabricar, ya sea por calor o por presión. Los colores que se obtienen son sólidos y no pueden mezclarse entre ellos (en otras palabras, no es todo color).<br />
									La impresión digital utiliza una impresora de alta resolución y es a todo color.<br />
									La serigrafía utiliza una técnica con positivos que se transfieren a una malla; la tinta se aplica sobre ésta para transferirla al producto a fabricar.  La variedad de colores que se obtiene es muy amplia y se pueden mezclar para obtener productos casi a todo color.
								</li>
								<li>
									<span class="pregunta">¿Cuál es la diferencias entre cuerotexa, castilian y vinyl?</span><br />
									El cuerotexa y el castilian se asemejan al cuero natural, siendo el cuerotexa el más parecido; el castilian es un intermedio entre éste y el vinilo.<br />
									El vinilo es un polímero resistente al agua, lavable y de larga duración.  Su textura es más dura que la de los otros dos.
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
