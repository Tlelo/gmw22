<?php 
	// define se define constantes para el acceso de archivo
	require_once "./app/define.php";
	require_once LAYOUT . "head.php";
	require_once LAYOUT . "header.php";
?>
<main>
	<section class="container">
		<div class="content">
			<h1>Contacto</h1>
			<p>Estamos para ayudarte, si tienes alguna duda respecto al evento puedes ponerte en contacto con nosotros en los correos electrónicos: <br>
			<span>ivonne.gonzalez@mide.org.mx</span><br>
			<span>natalia.garcia@mide.org.mx</span></p>

			<p>Síguenos en nuestras redes sociales para mantenerte actualizado acerca del GMW y sus actividades.</p>

			<div class="redes_sociales_global">
				<?php require_once CUSTOM ."redes_sociales.php"; ?>
			</div>
			<p>Comparte tu experiencia y utiliza los hashtags oficiales del evento para que ubiquemos tus publicaciones:<br> 
			<span>#GlobalMoneyWeek2023</span><br>
			<span>#GlobalMoneyWeekMX</span><br>
			<span>#GMWMX2023</span></p>
		</div>
	</section>

	<img src="./img/bg_contacto.png" class="bg_desk" alt="">
	<img src="./img/bg_contacto_movil.png" class="bg_movil" alt="">
</main>

<footer>
	<?php require_once LAYOUT . "footer.php"; ?>
</footer>

<script src="./js/index.js" type="module"></script>

</body>
</html>
