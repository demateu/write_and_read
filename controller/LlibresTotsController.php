<?php
/**
 * Si me iteresa que la pagina de productos sea la pagina principal
 * se podría cargar aquí una vista (renderizar vista, ver index())
 * 
 * creamos la carpeta producto y creamos una vista allí para ser cargada desde aqui
 */


class LlibresTotsController{

    public function index(){
        echo "Text per seguiment: Controlador LlibresTotsController, Accion index";

        //renderizar vista
        require_once 'view/llibres/tots.php';
    }    

}