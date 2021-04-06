<?php
session_start();

require_once 'autoload.php';
require_once 'config/DataBase.php';
require_once 'config/parameters.php';
require_once 'helpers/Utils.php';

require_once 'view/layout/header.php';

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
if (isset($_GET['controller'])) {
    //si me llega, genero esta variable
    $nombre_controlador = $_GET['controller'].'Controller';
    //compruebo si existe el controlador, la clase
    if (class_exists($nombre_controlador)) {
        //si existe la clase, instancio el objeto
        $controlador = new $nombre_controlador();
        //si el metodo existe, llamo al metodo
        if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
            //recoje la accion desde la url por GET
            $action = $_GET["action"];
            //llama al metodo que pide la url
            $controlador->$action();
        }else{//3er if -> si el metodo no existe
            show_error();
            echo '3ero';
        }    
    } else {//2ndo if -> si hay controlador pero no hay clase ?
        //aqui debería quitar los libros por defecto
        show_error();
        echo '2ndo';
    }
} else {//1er if -> si no hay controlador, libros todos los defecto
    //es cuando no se le pasa ningun controlador
    //Aqui deberia mostrar la home por defecto (tal qual está)
    //show_error();
    //echo '1ero';
    require_once 'view/layout/slider.php';
    require_once 'view/main.php';
}


require_once 'view/layout/footer.php';


/**
 * NOTA:
 * tal qual está ahora, cuando carga el ErrorController, desconfigura los estilos
 */

