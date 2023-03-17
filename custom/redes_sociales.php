<?php 

$redes = json_decode( file_get_contents( "./data/redes_sociales.json" ) );  
$nlist = array();
//crear una lista para ordenar por medio de su indice
foreach( $redes as $item ){
	if( $item->publish ){
		$nlist[ $item->order ] = $item;
	}
}
// Crea una nueva lista de item y con el metodo ordeno por medio de indices
ksort( $nlist );

?>

<nav class="redes_sociales">
	<ul class="row">	
		<?php foreach( $nlist as $red ): ?>	

			<li>
				<a href="<?php echo $red->link; ?>" target="<?php echo $red->target; ?>">
					<img src="<?php echo IMG .$red->image; ?>" alt="<?php echo $red->alt; ?>">
				</a>
			</li>
	
		<?php endforeach; ?>
		<?php unset( $nlist, $red ); ?>
	</ul>
</nav>