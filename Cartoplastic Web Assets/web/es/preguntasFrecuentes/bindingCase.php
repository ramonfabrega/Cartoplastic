<? 
	$rutaRelativaIncludes = "../..";
	include_once($rutaRelativaIncludes . "/configuracion.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
		<title><? echo(CFG_TITULOSITIO); ?> - Preguntas Frecuentes - Sobre binding case</title>
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
					Preguntas Frecuentes | Sobre binding case
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
							<img src="/imagenes/tituloPreguntasBindingCase.gif" width="216px" height="22px" alt="Sobre binding case" />
						</div>
						<div id="preguntasFrecuentes">
							<ol>
								<li>
									<span class="pregunta">¿Para que se usa un binding case?</span><br />
									El binding case se usa para almacenar facturas y documentos similares de manera que se pueda tener un manejo rápido y eficiente de los mismos. El archivo se hace abriéndole huecos en la parte superior del documento.
								</li>
								<li>
									<span class="pregunta">Cuántos tipos de binding case hay?</span><br />
									Los binding case se clasifican en tres, de acuerdo al tamaño de los mismos:  el No. 49, para documentos de 5 ½” x 8 ½” , el No. 50 para documentos de hasta 8 ½” x 11”, y el No. 51, para documetos de hasta 8 ½” x 13”
								</li>
								<li>
									<span class="pregunta">¿Puedo personalizar los binding case?</span><br />
									El binding case tiene una etiqueta pegada en el lomo, que bien puede diseñarse a requerimiento del cliente.
								</li>
								<li>
									<span class="pregunta">Siempre los he visto en negro… ¿puedo pedirlos en otro color?</span><br />
									También tenemos disponible el mismo material (fibrón) en rojo, amarillo y celeste.  Sin embargo, si el cliente así lo desea, el binding case puede fabricarse de cualquiera de los materiales que tenemos en la fábrica (vinilo, cuerotexa, percalina, etcétera).  El fibrón es el material utilizado por excelencia por lo flexible que es y lo duradero en un clima como el de Panamá.
								</li>
								<li>
									<span class="pregunta">¿Quién usa un binding case?</span><br />
									Cualquier persona que requiera archivar documentos administrativos.  Sin embargo, los usuarios más habituales son  los departamentos de auditoría, facturación, contabilidad y archivo.
								</li>
								<li>
									<span class="pregunta">¿Por qué cada binding case viene en una caja de cartón?</span><br />
									Porque al momento de colocarlos todos juntos en un zona de archivo, resulta muy cómodo sacar el que se necesita consultar por medio de la argolla que tiene y el espacio que él ocupa quedará reservado por la caja que lo contiene.  De esta forma, además, no se caerán los otros Binding case ni será incómodo sacarlos cuando los necesitemos.
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
