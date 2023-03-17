<?php 
	// define se define constantes para el acceso de archivo
	require_once "./app/define.php";
	require_once LAYOUT . "head.php";
	require_once LAYOUT . "header.php";
?>
<main>
	<section class="container">

		<div class="header_content">
			<div class="span1">
				<h1>Recursos digitales</h1>
			</div>
			<div class="span2">
				<p>Los líderes de educación financiera ponen a tu disposición algunos recursos y herramientas digitales para despertar tu curiosidad por las finanzas personales.</p>

				<p>¡Toca el nombre del recurso para abrirlo y, si te gusta o es de tu interés, compártelo para que más personas tengan acceso a esta información! </p>
			</div>
		</div>

		<?php 
			$data_recurso = json_decode( file_get_contents( DATA ."recursos_lista.json" ) );
			$listaRecurso = array();
			foreach( $data_recurso as $item ){
				if( $item->activo ){ $listaRecurso[ $item->order ] = $item; }
			}

			// Por ordena los item en caso que toque personalizar un orden
			ksort( $listaRecurso );
			
		?>
		<div class="content_list">
			<?php 
				$bloque = 1;
				$iterador = 1;
				$separador = 10;
			?>
			<?php foreach( $listaRecurso as $value ): ?>

				<?php //apertura de bloque ?>
				<?php if( $iterador == 1 ): ?>
					<div class="bloque_<?php echo $bloque; ?>">
				<?php endif; ?>

				<?php if( $iterador <= $separador || $iterador >= $separador): ?>
					<div class="item_list" data-index="<?php echo $iterador?>">
						<h3><?php echo $value->titulo; ?></h3>
						<p><?php echo $value->sub_titulo; ?></p>						
						<p class="txt_des_recursos">
							<a href="<?php echo $value->link; ?>" target="_blank">
							<?php echo $value->descripcion; ?></a>
						</p>
						
					</div>
				<?php endif; ?>

				<?php if( $iterador == $separador ): ?>
					<!-- Cierre Bloque 1 || Bloque 2 -->
					</div>
					<div class="bloque_<?php echo $bloque + 1; ?>">
				<?php endif; ?>

				<?php if( count( $listaRecurso ) == $iterador ): ?>
					<!-- cierre total -->
					</div>
				<?php endif; ?>
				
				<?php $iterador++; ?>
			<?php endforeach; ?>
		</div>

	</section>

	<img src="./img/bg_recursos_desk.svg" class="bg_desk" alt="">
	<img src="./img/bg_recursos_mobil.svg" class="bg_movil" alt="">
</main>

<footer>
	<?php require_once LAYOUT . "footer.php"; ?>
</footer>

<script src="./js/index.js" type="module"></script>

</body>
</html>
