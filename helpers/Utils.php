<?php
/**
 * librerias utiles para pequeñas tareas y funcionalidades
 */

    class Utils{

    /**
     * Si la sesion existe que la borre
     * 
     * @param name nombre de la sesion
     * 
     * @return name nombre de la sesion eliminada
     * 
     * @author demateu
     */
    public static function deleteSession($name){
        //comprovamos si la sesion con este nombre existe
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }

        return $name;
    }



}