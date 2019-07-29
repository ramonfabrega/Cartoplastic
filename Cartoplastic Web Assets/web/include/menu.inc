<div id="menu">

	<? 

		if (($opcionActual != "home") && ($opcionActual != "personaliceProducto")) { 

			?>

				<a href="/es/productos/personalizados.php"><img id="bannerPersonalizar" src="/imagenes/bannerPersonalizar.png" width="184px" height="90px" alt="Personalice su producto. Lo que usted quiera para ser &uacute:nico" /></a>

			<? ; 

		}

	?>

	<div class="opcionMenu"><? if ($opcionActual == "portafolios") { ?><a href="/es/productos/portafoliosDuplicadosDivisiones/portafolios.php"><img src="/imagenes/menuPortafoliosSeleccionado.gif" alt="Portafolios, duplicados y divisiones" /></a><? ; } else { ?><a href="/es/productos/portafoliosDuplicadosDivisiones/portafolios.php"><img src="/imagenes/menuPortafolios.gif" alt="Portafolios, duplicados y divisiones" /></a><?; } ?></div>

	<div class="opcionMenu"><? if ($opcionActual == "foldersExpansibles") { ?><a href="/es/productos/foldersExpansibles.php"><img src="/imagenes/menuFoldersSeleccionado.gif" alt="Folders expansibles" /></a><? ; } else { ?><a href="/es/productos/foldersExpansibles.php"><img src="/imagenes/menuFolders.gif" alt="Folders expansibles" /></a><?; } ?></div>

	<div class="opcionMenu"><? if ($opcionActual == "bindingCase") { ?><a href="/es/productos/bindingCase/bindingCase.php"><img src="/imagenes/menuBindingCaseSeleccionado.gif" alt="Binding cases y letter files" /></a><? ; } else { ?><a href="/es/productos/bindingCase/bindingCase.php"><img src="/imagenes/menuBindingCase.gif" alt="Binding cases y letter files" /></a><?; } ?></div>

	<div class="opcionMenu"><? if ($opcionActual == "articulosPromocionales") { ?><a href="/es/productos/articulosPromocionales/rompecabezas.php"><img src="/imagenes/menuArticulosPromocionalesSeleccionado.gif" alt="Art&iacute;culos promocionales" /></a><? ; } else { ?><a href="/es/productos/articulosPromocionales/index.php"><img src="/imagenes/menuArticulosPromocionales.gif" alt="Art&iacute;culos promocionales" /></a><?; } ?></div>

	<div class="opcionMenu"><? if ($opcionActual == "portadores") { ?><a href="/es/productos/portadores.php"><img src="/imagenes/menuPortadoresSeleccionado.gif" alt="Portadores" /></a><? ; } else { ?><a href="/es/productos/portadores.php"><img src="/imagenes/menuPortadores.gif" alt="Portadores" /></a><?; } ?></div>

	<div class="opcionMenu"><? if ($opcionActual == "papeleria") { ?><a href="/es/productos/papeleria.php"><img src="/imagenes/menuPapeleriaSeleccionado.gif" alt="Papeler&iacute;a" /></a><? ; } else { ?><a href="/es/productos/papeleria.php"><img src="/imagenes/menuPapeleria.gif" alt="Papeler&iacute;a" /></a><?; } ?></div>

</div>