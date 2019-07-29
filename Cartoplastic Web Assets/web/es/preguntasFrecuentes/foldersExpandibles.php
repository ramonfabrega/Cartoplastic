<? 
	$rutaRelativaIncludes = "../..";
	include_once($rutaRelativaIncludes . "/configuracion.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
		<title><? echo(CFG_TITULOSITIO); ?> - Preguntas Frecuentes - Sobre folders expandibles</title>
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
					Preguntas Frecuentes | Sobre folders expandibles
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
							<img src="/imagenes/tituloPreguntasFolders.gif" width="310px" height="22px" alt="Sobre folders expansibles" />
						</div>
						<div id="preguntasFrecuentes">
							<ol>
								<li>
									<span class="pregunta">¿Qué es un folder expandible?</span><br />
									Es una carpeta confeccionada en un material muy duro y perdurable, llamado pressboard.  El lomo, confeccionado en percalina,  tiene forma de acordeón y permite almacenar una gran cantidad de documentos bajo un mismo nombre.
								</li>
								<li>
									<span class="pregunta">¿Para qué se usa un fólder expandible?</span><br />
									Para almacenar una gran cantidad de documentos relacionados pero que ameritan una o varias subdivisiones internas.
								</li>
								<li>
									<span class="pregunta">¿Cuántos tipos de folders expandibles hay?</span><br />
									Tenemos una gran variedad, ya que se pueden fabricar de 1 a 8 divisiones internas y hasta 18 ganchos en diversas posiciones.  Cada cliente escoge cómo desea el suyo. Las posiciones de los ganchos, así como la de las pestañas, están en el documento XXXX (Pendiente)
								</li>
								<li>
									<span class="pregunta">¿Cuál es el tamaño de los folders expansibles?</span><br />
									Usualmente se venden para hojas 8 ½” x 11” y 8 ½” x 14”, pero pueden fabricarse a cualquier medida hasta 32” x 40”.  El lomo puede medir de 1” a 5”.
								</li>
								<li>
									<span class="pregunta">¿Puedo personalizar el folder expansible?</span><br />
									Si pueden personalizarse de muchas maneras. La primera es imprimiendo la portada, ya sea en estampado o con serigrafía. Lo demás es completamente personalizado, ya que las divisiones se imprimen en las pestañas con lo que el cliente necesite.  Estas pestañas pueden protegerse con mylar del color que se desee. 
								</li>
								<li>
									<span class="pregunta">¿En qué color puedo pedirlos?</span><br />
									Depende del material, estas son las opciones:<br />
									Pressboard estándar: naranja, gris, verde oscuro, verde claro, negro, rojo, chocolate, amarillo, turquesa y azul.<br />
									Pressboard T3: verde claro, celeste, rojo y chocolate.<br />
									Percalina para el lomo: negro, azul oscuro, celeste, gris, verde, vino y blanco
								</li>
								<li>
									<span class="pregunta">¿Quién usa estos folders expansibles?</span><br />
									Los mayores usuarios son las instituciones bancarias y financieras, ya que los créditos requieren el almacenamiento de muchos documentos y de esta manera es más fácil encontrarlos.  Las entidades de gobierno, departamento de recursos humanos, en fin, toda aquella persona que desee hacer una subclasificiación dentro de un archivo, es un cliente potencial de estos folders.
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
