<?= form_open("/tiendavirtual/recibirCarrito/") ?>
<body>
	<body bgcolor ="Gray">
		<body text ="Black">
			<font face="Banco">
				<font size="4">

	<?php
	if($productos){
		$cantidad = array(
			'name' => 'cantidadArticulos',
			'placeholder' => 'Cantidad de articulos',
		);
	foreach ($productos->result() as $producto) {
		?>

	<TABLE BORDER=0 WIDTH=1000>

		<TR>
			<TD WIDTH=100 HEIGHT=600 VALIGN=TOP>
				<p>PRODUCTO</p>
				<center><img src="C:\xampp\htdocs\IngenieriadeSoftware\application\views"> </center>
				<?= $producto->nombreProducto; ?>
			</TD>

			<TD WIDTH=100 HEIGHT=600 VALIGN=TOP>
				<p>PRECIO</p>
				<?= $producto->precio; ?>
			</TD>

			<TD WIDTH=100 HEIGHT=600 VALIGN=TOP>
				<p>DESCRIPCION</p>
				<?= $producto->descripcion; ?>
			</TD>
			<TD WIDTH=100 HEIGHT=100 VALIGN=TOP>
				<!--<p>CANTIDAD</p>

				<select dantidad="">
					<option>
						1
					</option>
					<option>
						2
					</option>
					<option>
						3
					</option>
					<option>
						4
					</option>-->
					<?= form_label('Cantidad articulos: ', 'cantidadArticulos') ?>
					  <?= form_input($cantidad) ?>

				</TD>
			</TR>
			<TR>
				<TD WIDTH=100>
				</TD>

				<TD WIDTH=200 VALIGN=MIDDLE ALIGN=RIGHT>
					<a href="<?=$_SERVER["HTTP_REFERER"]?>">
						<input type ="submit" value="Agregar al Carrito" name="Agregar" >
					</a>
				</input>
			</TD>

			<TD WIDTH=200 VALIGN=MIDDLE ALIGN=RIGHT>
				<a href="<?=$_SERVER["HTTP_REFERER"]?>">
					<input type ="submit" value="Atras" name="Atras" >
				</a>
			</TD>
		</TR>

	</TABLE>

	<?php }
}else{
	echo"<p>Error en la aplicacion</p>";
}
?>
<?= form_get($producto->idProducto) ?>
<?= form_get($producto->precio) ?>
<?= form_get($cantidad) ?>

<?= form_close() ?>
</body>
</html>
