<?php

class DataBase{

    public static function conectar(){

        //configuracion de la conexion
        $db_location = "localhost";
        $user = "root";
        $pass = "hP8!pST3y!K38";
        $db_name = "writeyread";

        //crear la conexion
        $conexion = new mysqli( $db_location, $user, $pass, $db_name);

        //setear la BBDD a utf8

        $conexion->query("SET NAMES utf8");
        //$conexion->query("SET NAMES utf8");

        //linias de Ronny, ver si se quitan las de arriba o se deja todo
        $conexion->set_charset("utf8");


        //devolver la conexion para usarla desde donde la pidamos
        return $conexion;

    }


}

?>