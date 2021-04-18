<?php

require_once 'model/Llibre.php';

class LlibreController{

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

            //guardo todos estos datos en llibre
            $save = $llibre->save();

            if($save){
                echo 'Enregistrat correctament';
            }else{
                echo 'Alguna cosa no ha anat bé amb el teu registre';
            }

        }
    }
	/**
     * renderitza la fitxa de llibre
     * pediria los datos al modelo (BBDD)
     */
    public function fitxa(){
    
        //concretar si se recibe por GET
        //accedir-hi per aqui: http://localhost:8888/write_and_read/llibre/fitxa
        if(isset($_GET['id'])){
			$id = $_GET['id'];

            $llibre = new Llibre();
            $llibre->setId($id);
            $llibre = $llibre->buscarLlibrePerId();
		}
		
	require_once 'view/panel_control/LlibreView.php';
    }
	
	/**
     * test
     */
    public function cargarAll(){
        $llibre = new Llibre();
        $llibres = $llibre->getAll();
        
        require_once 'view/panel_control/LlibreView.php';
    }

}


