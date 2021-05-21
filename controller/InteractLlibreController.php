<?php

require_once 'model/InteractLlibre.php';

class InteractLlibreController
{

    /**
     * @author Victor Espada
     * 
     * el lector comenta un llibre 
     * 
     * 
     * @return void
     */
    public function comenta(){

        if (isset($_POST)) {

            $interactLlibre = new InteractLlibre();

            //REBEM LES DADES DEL LECTOR LOGUEJAT (desde $_SESSION)
            $id_lector = $_SESSION['usuari'];

            //DADES DEL NOU COMENTARI QUE ARRIBEN DESDE EL FORM
			$id_llibre = isset($_POST['id_llibre']) ? $_POST['id_llibre'] : false;
            $critica = isset($_POST['critica']) ? $_POST['critica'] : false;
            
            
            /**
             * INSERT INTO llibre VALUES 
             */
            //setters para guardar los datos que llegan del form
            $interactLlibre->setId_lector($id_lector->id);
            $interactLlibre->setId_llibre($id_llibre);
            $interactLlibre->setCritica($critica);

            //GUARDEM TOTES LES DADES A LA BBDD
            $save = $interactLlibre->comenta();

            if ($save) {
                echo'<script type="text/javascript">
                alert("comentari desat");
                </script>';
            } else {
                echo'<script type="text/javascript">
                alert("Alguna cosa no ha anat bé amb el teu comentari");
                </script>';
            }
            
        }//fi isset($_POST)
        
        header("Location:http://localhost:8888/write_and_read/llibre/fitxa&id=".$id_llibre);
    }

	/**
     * @author Victor Espada
     * 
     * el lector comenta un llibre 
     * 
     * 
     * @return void
     */
    public function puntua(){

        if (isset($_POST)) {

            $interactLlibre = new InteractLlibre();

            //REBEM LES DADES DEL LECTOR LOGUEJAT (desde $_SESSION)
            $id_lector = $_SESSION['usuari'];

            //DADES DEL NOU COMENTARI QUE ARRIBEN DESDE EL FORM
			$id_llibre = isset($_POST['id_llibre']) ? $_POST['id_llibre'] : false;
            $puntuacio = isset($_POST['puntuacio']) ? $_POST['puntuacio'] : false;
            
            
            /**
             * INSERT INTO llibre VALUES 
             */
            //setters para guardar los datos que llegan del form
            $interactLlibre->setId_lector($id_lector->id);
            $interactLlibre->setId_llibre($id_llibre);
            $interactLlibre->setPuntuacio($puntuacio);

            //GUARDEM TOTES LES DADES A LA BBDD
            $save = $interactLlibre->puntua();

            if ($save) {
                echo'<script type="text/javascript">
                alert("puntuacio desada");
                </script>';
            } else {
                echo'<script type="text/javascript">
                alert("Alguna cosa no ha anat bé amb la teva puntuacio");
                </script>';
            }
            
        }//fi isset($_POST)
        
        header("Location:http://localhost:8888/write_and_read/llibre/fitxa&id=".$id_llibre);
    }

	 public function fitxa()
    {
        //concretar si se recibe por GET
        //accedir-hi per aqui: http://localhost:8888/write_and_read/interactllibre/fitxa
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $interactLlibre = new interactLlibre();
            $interactLlibre->setId($id);
            $interactLlibres = $interactLlibre->buscarComentariPerId();
        }

        require_once 'view/elements/comentarisLlistat.php';
    }


    /**
     * test
     */
    public function comentarisAll()
    {
        $interactLlibre = new InteractLlibre();
        $interactLlibres = $interactLlibre->getAllComentaris();

        require_once 'view/panel_control/LlibreView.php';	
    }
}
