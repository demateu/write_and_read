<?php

require_once 'model/Llibre.php';

class LlibreController{


    /**TEST PARA VER LA VISTA RENDERIZADA Y COMPROBAR Q VA
     * <=?base?>llibre/index
     * @author demateu
     */
    public function index(){
        require_once 'view/panel_control/LlibreView.php';
    }

    /**
     * renederitza la pàgina de registre d'un llibre a la URL:
     * <=?base?>llibre/registre
     */
    public function registre(){ 
        //cargamos la vista
        require_once 'view/registre/llibre.php';
    }

    /**
     * para guardar el llibre
     * recoger los datos por POST que nos llegan desde el formulario <llibre>
     * 
     * @return void
     */
    public function save(){
        if(isset($_POST)){
            //instancio el objeto (el modelo usuario)
            $llibre = new Llibre(); 

            //setters para guardar los datos que llegan del form (registro/user)
            $llibre->setId_escriptor($_POST['id_escriptor']);
            $llibre->setTitol(($_POST['titol']));
            $llibre->setDescripcio_curta($_POST['descripcio_curta']);
            $llibre->setSinopsis($_POST['sinopsis']);
            $llibre->setContingut_url($_POST['contingut_url']);
            $llibre->setData_alta($_POST['data_alta']);
            $llibre->setCops_llegit($_POST['cops_llegit']);
            $llibre->setPortada_url($_POST['portada_url']);
            $llibre->setId_categoria($_POST['id_categoria']);
            $llibre->setMitja_vots($_POST['mitja_vots']);
            $llibre->setCops_votat($_POST['cops_votat']);

            //guardo todos estos datos en usuario
            $save = $llibre->save();

            var_dump($llibre);

            if($save){
                echo 'Enregistrar correctament';
            }else{
                echo 'Alguna cosa no ha anat bé amb el teu registre';
            }

        }
    }


}


