<?php 
	// define se define constantes para el acceso de archivo
	require_once "./app/define.php";
	require_once LAYOUT . "head.php";
	require_once LAYOUT . "header.php";
?>
<main>
	<section class="container">

		<div class="cartelera_contenido">
			<div class="header_text">

				<div class="span1">
					<h1>Cartelera de <br>actividades</h1>
				</div>

				<div class="span2">
					<p>Planear es una habilidad financiera vital. Así, planificar tu participación en el GMW será muy importante para que no te pierdas de nada: consulta o descarga la cartelera de actividades disponibles, organiza tu agenda y participa en tantas como tú desees.</p>
				</div>

			</div>

			<section class="btn_proximamente--cartelera">
			<a href="./Downloads/GMWCarteleraPresencial.pdf" target="_blank">
					<img src="<?php echo IMG;?>actividades_presenciales.png" alt="actividades_presenciales">
				</a>
				
				<a href="./Downloads/GMWCarteleraDigitalFinal.pdf" target="_blank">
					<img src="<?php echo IMG;?>actividades_digitales.png" alt="actividades_digitales">
				</a>
					
				<a href="./Downloads/GMWCarteleraNacional.pdf" target="_blank">
					<img src="<?php echo IMG;?>actividades_en_el_interior_de_la_republica.png" alt="actividades_en_el_interior_de_la_republica">
				</a>
			</section>
		
			<div class="txt_descripcion--cartelera">
				<p>Te esperamos en el MIDE, en las fechas del Global Money Week<br> tendrás acceso a una promoción especial.</p>

				<a href="./Downloads/BOLETO2x1.pdf" target="_blank" title="😉 Entradas 2X1 al Mide | Muse Interactivo de Economia">
					<span>Descárgala aquí.</span>
				</a>
				
			</div>
		</div>

	</section>

	<div class="img--cartelera">
		<img src="./img/bg_cartelera_forma.svg" class="bg_desk_1" alt="">
		<img src="./img/bg_cartelera.png" class="bg_desk" alt="">
		<img src="./img/bg_cartelera_movil_forma.svg" class="bg_movil_1" alt="">
		<img src="./img/bg_cartelera_movil.png" class="bg_movil" alt="">
	</div>
	
</main>

<footer>
	<?php require_once LAYOUT . "footer.php"; ?>
</footer>

<script src="./js/index.js" type="module"></script>

</body>
</html>
