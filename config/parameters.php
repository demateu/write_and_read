<?php

/**
 * creamos/definimos varias constantes
 * 
 * En las vistas habrá que añadir base_url a las URL
 * Entodas partes en las que tengamos que cargar algun fichero o mostrar algo, debemos poner delante de la URL: base_url
 * EJEMPLO:
 * <img src="<?=base_url?>assets/img/camiseta.png" />
 */
define("base_url", "http://localhost:8888/write_and_read/");
//define("controller_default", "TotsController");//hablemos si asi va bien
//define("action_default", "index");//falta definir-> hablémoslo: index o otro metodo

?>