<?php 
	// define se define constantes para el acceso de archivo
	require_once "./app/define.php";
	require_once LAYOUT . "head.php";
	require_once LAYOUT . "header.php";
?>
<main>
	<section class="container_full">
		<section class="container">
			<section class="row">
				<section class="welcome_descripcion">

					<section class="span1">
						<h1>Te damos la <br>bienvenida al</h1>
						<div>
							<img src="<?php echo IMG;?>Global_money_week_mexico_2023.svg" alt="">
						</div>
						
					</section>

					<section class="span2">
						<p>La semana anual de concientización financiera que te invita a descubrir diferentes formas en las que puedes tomar decisiones financieras informadas, alcanzar tus metas y construir tu futuro.</p>

						<p>Los últimos dos años, en nuestro país, han participado más de un millón y medio de niñas, niños, jóvenes y adultos.</p>

						<p class="fcolor1">¡Tú también puedes fomar parte de este gran evento!</p>

						<p class="ffuente">Para ello te invitamos a participar en el <span>Espacio Global Money Week México, </span>un escenario donde podrás acceder a actividades educativas presenciales o digitales.</p>

						<div class="home_txt_fecha">
							<h2>¡Aparta las fechas!<br>
							<span>Del 20 al 31 de marzo</span></h2>
						</div>		
					</section>

				</section> 
				<!-- end welcome_descripcion -->
			</section>
		</section>
		<img src="./img/bg_home.png" class="bg_desk" alt="">
		<img src="./img/bg_home_movil.png" class="bg_movil" alt="">
	</section>
</main>

<footer>
	<?php require_once LAYOUT . "footer.php"; ?>
</footer>

<script src="./js/index.js" type="module"></script>

</body>
</html>
