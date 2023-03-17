<?php 
	// define se define constantes para el acceso de archivo
	require_once "./app/define.php";
	require_once LAYOUT . "head.php";
	require_once LAYOUT . "header.php";
?>
<main>

	<section class="container">
		<h1>En los últimos dos años:</h1>
		<div class="content_card_logros">

			<div class="card">
				<div class="header">
					<img src="<?php echo IMG;?>item_logro_1.svg" alt="">
				</div>
				
				<div class="text">
						<h3>1,592,816</h3>
						<p>niños, niñas, adolescentes y adultos participaron</p>
				</div>
				
				<img src="<?php echo IMG;?>logros_card.png" alt="" class="img_card">
			</div>

			<div class="card">
				<div class="header">
					<img src="<?php echo IMG;?>item_logro_2.svg" alt="">
				</div>

				<div class="text">
					<h3>48 líderes</h3>
					<p>de educación financiera sumaron esfuerzos</p>
				</div>

				<img src="<?php echo IMG;?>logros_card.png" alt="" class="img_card">
			</div>

			<div class="card">
				<div class="header">
					<img src="<?php echo IMG;?>item_logro_3.svg" alt="">
				</div>

				<div class="text">
					<h3>439<br> actividades y recursos</h3>
					<p>educativos brindados</p>
				</div>

				<img src="<?php echo IMG;?>logros_card.png" alt="" class="img_card">
			</div>
		</div>
	</section>

	<img src="<?php echo IMG;?>bg_logros_desk.png" class="bg_desk" alt="">
	<img src="<?php echo IMG;?>bg_logros_mobil.png" class="bg_movil" alt="">
</main>

<footer>
	<?php require_once LAYOUT . "footer.php"; ?>
</footer>

<script src="./js/index.js" type="module"></script>

</body>
</html>
