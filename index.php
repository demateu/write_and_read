<?php
require_once 'autoload.php';

require_once 'view/layout/header.php';
require_once 'view/layout/main.php';


/**
 * Controlador Frontal:
 * Se encarga de recojer parametros GET a través de la URL
 * y ver a que controlador pertenecen
 * cargar ese archivo/objeto y llamar al metodo correspondiente que tmb nos llega por la URL
 * 
 * Ejemplo:
 * http://localhost:8888/write_and_read/?controller=EscriptorController&action=listar
 */
//compruebo si me llega el controlador por la url
if(isset($_GET['controller'])){
    //si me llega, genero esta variable
    $nombre_controlador = $_GET['controller'];
}else{
    //si no llega lanza mensaje de error y corta la ejecucion
    echo "La pagina que buscas no existe";
    exit();//para la ejecucion y lo de abajo ya no lo ejecuta
}

//compruebo si existe el controlador, la clase
if(class_exists($nombre_controlador)){
    //si existe la clase, instancio el objeto
    $controlador = new $nombre_controlador();

    //si el metodo existe, llamo al metodo
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        //recoje la accion desde la url por GET
        $action = $_GET["action"];
        //llama al metodo que pide la url
        $controlador->$action();

    }else{
        echo "La pagina que buscas no existe1";
    }

}else{
    echo "La pagina que buscas no existe2";
}


require_once 'view/layout/footer.php';
