<?php
require_once 'autoload.php';
require_once 'config/parameters.php';

require_once 'view/layout/header.php';
require_once 'view/layout/slider.php';
//mas layouts despues del controlador frontal

/**
 * cuando detecte que la pagina no existe
 * se cargara el controlador
 */
function show_error(){
    $error = new ErrorController();
    //cargamos el metodo index del controlador
    $error->index();
}

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
    $nombre_controlador = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action']) ){
    //volcamos en una variable el valor por defecto del controller
    $nombre_controlador = controller_default;

}else{
    show_error();
    exit();//para la ejecucion y lo de abajo ya no lo ejecuta
}

//compruebo si existe el controlador, la clase
if(class_exists($nombre_controlador)){
    //si existe la clase, instancio el objeto
    $controlador = new $nombre_controlador();

    //si el metodo existe, llamo al metodo
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){//recoje variables por get
        //recoje la accion desde la url por GET
        $action = $_GET["action"];
        //llama al metodo que pide la url
        $controlador->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action']) ){
        $action_default = action_default;
        //cargo la accion por defecto
        $controlador->$action_default();
    }else{
        show_error();
    }

}else{
    show_error();
}

require_once 'view/llibres/tots.php';
require_once 'view/layout/main.php';
require_once 'view/layout/footer.php';
