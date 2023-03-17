<?php 
	// define se define constantes para el acceso de archivo
	require_once "./app/define.php";
	require_once LAYOUT . "head.php";
	require_once LAYOUT . "header.php";
?>
<main>
		<section class="container">
		<h1>Estos son los líderes de educación financiera que han hecho posible el <span>Global Money Week México 2023</span>:</h1>
		<p><br></p>
			<section class="row">
				
			
				<?php
					$afiliados_lista = json_decode( file_get_contents( DATA. "aliados_links.json") );
					$new_afiliados = array();
					foreach( $afiliados_lista as $item ){
						if( $item->activo ){
							$new_afiliados[ $item->order ] = $item;
						}
					}
					//elementos par ordenar
					ksort( $new_afiliados );
				?>
				
				<div class="contenido_afiliados">
					<?php foreach( $new_afiliados as $card ): ?>
						<div class="card">
							<img src="<?php echo $card->img; ?>" alt="<?php echo $card->alt; ?>">

							<ul class="nav_link">
								<?php foreach( $card->list as $link ): ?>
									<li>
										<a href="<?php echo $link->link; ?>" target="_blank">
											<?php echo $link->enlace; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endforeach; ?>
				</div>

					
				<!-- end welcome_descripcion -->
			</section>
		
		<img src="./img/bg_aliados_desk.svg" class="bg_desk" alt="">
		<img src="./img/bg_aliados_movil.svg" class="bg_movil" alt="">
	</section>
</main>

<footer>
	<?php require_once LAYOUT . "footer.php"; ?>
</footer>

<script src="./js/index.js" type="module"></script>

</body>
</html>
