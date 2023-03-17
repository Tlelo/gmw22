<?php
//la ruta aqui cambia y la quiero ver desde el mismo archivo pero si es en el index la ruta es ./
@$_config = json_decode( file_get_contents( "./data/config.json" ) );
@$data_items_menu = json_decode( file_get_contents( "./data/item_menu.json" ) );


$_page = "";
$active_page = "";
$meta_description = "";
$page_title = "";
$keyboards = "";
$class_page = "";
$link_css = "";

//aqui me indicara que estoy en el index marcado en la url index.php
foreach ( $data_items_menu as $value ) {
	//este if solo entra donde estan los archivos .php
	if( $value->link_href == basename( $_SERVER["PHP_SELF"] ) ){
		$active_page = $value->link_href;
		$page_title = $value->page_title;
		$keyboards = $value->meta_key_words;
		$class_page = $value->page_class;
		$link_css = $value->link_css;
	}
}
unset( $value );

/*
MIS POSIBLES CASOS DE URL

-Cuando son archivo
index.php
citas-monstruos.php
habitos.php
juego-monstruo-financiero.php


PARA LOS MENU
#galery
"" pagina de blanco

*/