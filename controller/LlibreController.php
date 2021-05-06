<?php

require_once 'model/Llibre.php';

class LlibreController
{

    /**
     * renederitza la pàgina de registre d'un llibre a la URL:
     * <=?base?>llibre/registre
     */
    public function registre()
    {
        //cargamos la vista
        require_once 'view/registre/llibre.php';
    }

    /**
     * @author demateu
     * 
     * l'escriptor crea un llibre nou des d'el panell d'escriptor
     * recull les dades que li arriben per POST des d'el form
     * 
     * $_FILES (name, type, size, tmp_name, error)
     * $_FILES['imagen1']['tmp_name']->imagen1 es el name del input del form
     * Els arxius que pujarà l'usuari 1er s'emmagatzemaran a una carpeta temporal: tmp_name
     * El que farem serà passar l'arxiu des d'aqui fins a la carpeta del servidor
     * 
     * @return void
     */
    public function save(){

        if (isset($_POST)) {
            //instancio l'objecte llibre
            $llibre = new Llibre();

            //REBEM LES DADES DE L'ARXIU SELECCIONAT PEL CONTINGUT DEL LLIBRE
            //el nom de l'arxiu
            $nom_pdf = $_FILES['carrega_pdf']['name'];
            //el format de l'arixu
            $formato_pdf = $_FILES['carrega_pdf']['type'];
            //la mida de l'arxiu (en bites)
            $mida_pdf = $_FILES['carrega_pdf']['size'];
            //Ruta de la carpeta destí del servidor on guardarà el pdf
            $directori_desti_pdf = $_SERVER['DOCUMENT_ROOT'].'/write_and_read/assets/img/llibres/';

            //VALIDACIONS DE L'ARXIU
            if($mida_pdf > 20971520){
                //echo "L'arxiu excedeix els 20MB.";
                echo'<script type="text/javascript">
                alert("Fa més de 20MB");
                </script>';
            }elseif($formato_pdf!="application/pdf"){
                echo'<script type="text/javascript">
                alert("El format no es PDF");
                </script>';                
            }else{
                //Pasar l'arxiu de la carpeta temporal a la carpeta destí del servidor
                $pdf_guardat = move_uploaded_file($_FILES['carrega_pdf']['tmp_name'], $directori_desti_pdf.$nom_pdf);
                $url_pdf_guardat = $directori_desti_pdf.$nom_pdf;
            }

            //.................

            //REBEM LES DADES DE LA IMATGE PEL COVER DEL LLIBRE
            //el nom de l'arxiu
            $nom_img = $_FILES['carrega_img']['name'];
            //el format de l'arixu
            $formato_img = $_FILES['carrega_img']['type'];
            //la mida de l'arxiu (en bites)
            $mida_img = $_FILES['carrega_img']['size'];
            //Ruta de la carpeta destí del servidor on guardarà el pdf
            $directori_desti_img = $_SERVER['DOCUMENT_ROOT'].'/write_and_read/assets/img/cover_books/';

            //VALIDACIONS DE LA COVER DEL LLLIBRE (IMG)
            if($mida_img > 1048576){
                //echo "L'arxiu excedeix els 20MB.";
                echo'<script type="text/javascript">
                alert("Excedeix 1MB");
                </script>';
            }elseif($formato_img!="image/png" && $formato_img!="image/jpeg" && $formato_img!="image/jpg"){
                echo'<script type="text/javascript">
                alert("El format no es JPG, JPEG ni PNG");
                </script>';               
            }else{
                //Pasar l'arxiu de la carpeta temporal a la carpeta destí del servidor
                $img_guardat = move_uploaded_file($_FILES['carrega_img']['tmp_name'], $directori_desti_img.$nom_img);
                $url_img_guardat = $directori_desti_img.$nom_img;
            }
        
            if(!$pdf_guardat || !$img_guardat){
                echo'<script type="text/javascript">
                alert("Et falta afegir un arxiu");
                </script>';
            }

            //.................

            //REBEM LES DADES DE L'ESCRIPTOR LOGUEJAT (desde $_SESSION)
            $escriptorLoguejat = $_SESSION['usuari'];
            //var_dump($escriptorLoguejat);
            //echo $escriptorLoguejat->id;//treu l'id de l'usuari actual loguejat

            //DADES DEL NOU LLIBRE QUE ARRIBEN DESDE EL FORM
            $titol_llibre = isset($_POST['titol']) ? $_POST['titol'] : false;
            $descripcio_curta = isset($_POST['descripcio_curta']) ? $_POST['descripcio_curta'] : false;
            $sinopsis = isset($_POST['sinopsis']) ? $_POST['sinopsis'] : false;

            //recorrem l'array del select categories
            $id_categoria = isset($_POST['id_categoria']) ? $_POST['id_categoria'] : false;//està buit
            echo $id_categoria[0];
            
            //var_dump($id_categoria);//false
            /**
             * INSERT INTO llibre VALUES 
             * (NULL, '{$this->getId_escriptor()}', '{$this->getTitol()}', 
             * '{$this->getDescripcio_curta()}', '{$this->getSinopsis()}', 
             * '{$this->getContingut_url()}', CURDATE(), NULL, '{$this->getPortada_url()}', 
             * '{$this->getId_categoria()}', NULL, NULL)
             */
            //setters para guardar los datos que llegan del form (registro/user)
            $llibre->setId_escriptor($escriptorLoguejat->id);
            $llibre->setTitol($titol_llibre);
            $llibre->setDescripcio_curta($descripcio_curta);
            $llibre->setSinopsis($sinopsis);

            $llibre->setContingut_url($url_pdf_guardat);
            //pdf-> conseguir la url on s'ha penjat
           
            $llibre->setPortada_url($url_img_guardat);
            //imatge pujada, aconseguir la url on s'hagi penjat

            $llibre->setId_categoria($id_categoria[0]);//poso manual per veure si es aixo
            //sera com els avatars, amb un check

            //GUARDEM TOTES LES DADES A LA BBDD (NOU LLIBRE)
            $save = $llibre->save();

            if ($save) {
                echo 'Enregistrat correctament';
            } else {
                echo 'Alguna cosa no ha anat bé amb el registre del teu llibre';
            }
            
        }//fi isset($_POST)
        
        require 'view/panel_control/EscriptorPerfilView.php';
    }


    /**
     * renderitza la fitxa de llibre
     * pediria los datos al modelo (BBDD)
     */
    public function fitxa()
    {
        //concretar si se recibe por GET
        //accedir-hi per aqui: http://localhost:8888/write_and_read/llibre/fitxa
        if (isset($_GET['id'])) {
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
    public function cargarAll()
    {
        $llibre = new Llibre();
        $llibres = $llibre->getAll();

        require_once 'view/panel_control/LlibreView.php';
    }

    /**
     * @author Ronny
     * 
     * Carrega al contingut del llibre
     */
    public function llegirLlibre()
    {
        if (isset($_POST['titol']) && isset($_POST['contingut_url'])) {
            //LLegir pdf 
            require_once 'vendor/autoload.php';
            $parser = new \Smalot\PdfParser\Parser();
            $pdf = $parser->parseFile(base_url . 'assets/img/llibres/' . $_POST['contingut_url']);

            // Retrieve all pages from the pdf file.
            $pages  = $pdf->getPages();
            require_once 'view/LlegirLlibre.php';
            
        }
    }

    /**
     * @author Ronny
     * 
     * Mostra el llistat de llibres per categoria 
     * 
     */
    public function categoria(){
        if (isset($_GET['id'])){

            $llibre = new Llibre();
            $llibre->setId_categoria($_GET['id']);
            $cat= $llibre->getLlibresPerCategoria();
            $nomCat=$llibre->getLlibresperCategoria()->fetch_Object()->nom_cat;
            $descripcioCat=$llibre->getLlibresperCategoria()->fetch_Object()->descripcio_cat;
        

            require_once 'view/panel_control/FitxesLlibres.php';
        }else{
            echo "No s'ha trobat aquesta categoria";
        }
        
    }
}
