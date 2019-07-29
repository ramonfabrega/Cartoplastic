		<div id="franjaLinkHagaSuPedido">
			<div class="colIzq">
				<?
					if ($opcionActual != "home") {
						?> <a href="#inicio">Ir arriba</a> <?
					}
				?>
			</div>
			<div class="colDer">
				<? 
					if (($opcionActual != "pedidos") && ($opcionActual != "home")) {
						?> <a href="/es/pedidos.php" target="_blank"><img src="/imagenes/123HagaSuPedido.gif" width="193px" height="22px" alt="123 Haga su pedido"></a> <?
					}
				?>
			</div>
		</div>
		<div id="footer">
			<div class="colIzq">
				</a><img style="vertical-align: middle;"src="/imagenes/telefono.gif" width="660px" height="33px" alt="Tel&eacute;fono (507) 302-1466, Fax (507) 301-1683, Apartado 0831-01752. Panam&aacute;. Panama&aacute;">
			</div>
			
		</div>
		<div id="copyright">
			<div class="colDer" style="margin-top: 20px; padding-right: 30px;">
				<span class="copy">&copy; 2007 Todos los derechos reservados . Privacidad . <a href="http://www.tejidosutil.com" target="_blank">Made by tejidoSutil</a></span>
			</div>
		</div>
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			var pageTracker = _gat._getTracker("<? echo(CFG_IDGOOGLE); ?>");
			pageTracker._initData();
			pageTracker._trackPageview();
		</script>