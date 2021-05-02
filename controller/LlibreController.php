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
        echo 'save obra';//fins aqui ok

        if (isset($_POST)) {
            //instancio l'objecte llibre
            $llibre = new Llibre();

            $nom_pdf = $_FILES['carrega_pdf']['name'];//Undefined index: carrega_pdf
            var_dump($nom_pdf);
            $formato_pdf = $_FILES['carrega_pdf']['type'];//?
            $mida_pdf = $_FILES['carrega_pdf']['size'];//?

            //si el pdf medeix màxim 20MB serà ok
            if($mida_pdf <= 20000000){
                echo 'es ok';
            }else{
                var_dump($mida_pdf);
                echo "L'arxiu excedeix els 20MB";
            }

            echo 'test';
            //Ruta de la carpeta destí del servidor on guardarà el pdf
            $directori_desti_pdf = $_SERVER['DOCUMENT_ROOT'].'/write_and_read/assets/img/llibres/';
            //Pasar l'arxiu de la carpeta temporal a la carpeta destí
            move_uploaded_file($_FILES['carrega_pdf']['tmp_name'], $directori_desti_pdf.$nom_pdf);//?


            /*
            //GESTIO DEL PDF + LA IMATGE PUJATS DEL NOU LLIBRE
            //directori pel contingut del llibre
            $pdf_dir = "assets/img/llibres/";
            //el path del llibre (incloent el nom de l'arxiu)
                //The file input field in our HTML form above is named "fileToUpload".
            $pdf_nom = $pdf_dir . basename($_FILES["carrega_pdf"]["name"]);
            $uploadOk_pdf = 1;
            //l'extensió de l'arxiu(in lower case)
            $imageFileType = strtolower(pathinfo($pdf_nom,PATHINFO_EXTENSION));


            // Comprobar que no està ja pujat el mateix arxiu
            if (file_exists($pdf_nom)) {
                echo "Ja hi ha un arxiu amb aquest nom";
                $uploadOk_pdf = 0;
            }

            // Limita el pes màxim de l'arxiu
                //The file input field in our HTML form above is named "fileToUpload".
            if ($_FILES["carrega_pdf"]["size"] > 500000) {
                echo "Aquest pdf pesa massa; redueix-lo i torna-ho a provar.";
                $uploadOk_pdf = 0;
            }

            // Limita el tipus d'arxiu
            if($imageFileType != "pdf") {
            echo "Només és permès el format PDF.";
            $uploadOk_pdf = 0;
            }

            //guarda el pdf a la carpeta
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk_pdf == 0) {
                echo "L'arxiu no ha estat carregat.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["carrega_pdf"]["tmp_name"], $pdf_nom)) {
                echo "L'arxiu ". htmlspecialchars( basename( $_FILES["carrega_pdf"]["name"])). " ha estat carregat.";
                } else {
                echo "L'arxiu no ha estat carregat per algun error.";
                }
            }            

            //.................
            */
            /*
            $nom_img = $_FILES['carrega_img']['name'];
            var_dump($nom_img);
            $formato_img = $_FILES['carrega_img']['type'];
            $mida_img = $_FILES['carrega_img']['size'];
            //Ruta de la carpeta destí del servidor on guardarà el pdf
            $directori_desti_img = $_SERVER['DOCUMENT_ROOT'].'/write_and_read/assets/img/cover_books/';
            //Pasar l'arxiu de la carpeta temporal a la carpeta destí
            move_uploaded_file($_FILES['carrega_img']['tmp_name'], $directori_desti_img.$nom_img);
            */

            //màxim per imatges 1MB -> 1000000

            /*
            //PUJA EL COVER/IMG DEL NOU LLIBRE
            //directori per la imatge de portada del llibre
            $cover_dir = "assets/img/cover_books/";
            //el path del llibre (incloent el nom de l'arxiu)
            $cover_nom = $cover_dir . basename($_FILES["carrega_img"]["name"]);
            $uploadOk_cover = 1;
            //l'extensió de l'arxiu(in lower case)
            $imageFileType = strtolower(pathinfo($cover_nom,PATHINFO_EXTENSION));

            // Comprobar que no està ja pujat el mateix arxiu
            if (file_exists($pdf_nom)) {
                echo "Ja hi ha un arxiu amb aquest nom";
                $uploadOk_cover = 0;
            }

            // Limita el pes màxim de l'arxiu
                //The file input field in our HTML form above is named "fileToUpload".
            if ($_FILES["cover_nom"]["size"] > 500000) {
                echo "Aquesta imatge pesa massa; redueix-la i torna-ho a provar.";
                $uploadOk_cover = 0;
            }

            // Limita el tipus d'arxiu
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
            echo "Només és permès pujar arxius en format JPG, JPEG, PNG.";
            $uploadOk_cover = 0;
            }

            //guarda la imatge a la carpeta
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk_cover == 0) {
                echo "L'arxiu no ha estat carregat.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["cover_nom"]["tmp_name"], $pdf_nom)) {
                echo "L'arxiu ". htmlspecialchars( basename( $_FILES["cover_nom"]["name"])). " ha estat carregat.";
                } else {
                echo "L'arxiu no ha estat carregat per algun error.";
                }
            } 




            //DADES DE L'ESCRIPTOR LOGUEJAT (desde $_SESSION)
            $escriptorLoguejat = $_SESSION['usuari'];
            var_dump($escriptorLoguejat);
            echo $escriptorLoguejat->id;//treu l'id de l'usuari actual loguejat

            //DADES DEL NOU LLIBRE QUE ARRIBEN DESDE EL FORM
            $titol_llibre = isset($_POST['titol']) ? $_POST['titol'] : false;
            $descripcio_curta = isset($_POST['descripcio_curta']) ? $_POST['descripcio_curta'] : false;
            $sinopsis = isset($_POST['sinopsis']) ? $_POST['sinopsis'] : false;
            $id_categoria = isset($_POST['id_categoria']) ? $_POST['id_categoria'] : false;

            //setters para guardar los datos que llegan del form (registro/user)
            $llibre->setId_escriptor($escriptorLoguejat->id);
            $llibre->setTitol($titol_llibre);
            $llibre->setDescripcio_curta($descripcio_curta);
            $llibre->setSinopsis($sinopsis);

            $llibre->setContingut_url($_POST['contingut_url']);
            //pdf-> conseguir la url on s'ha penjat
           
            $llibre->setPortada_url($_POST['portada_url']);
            //imatge pujada, aconseguir la url on s'hagi penjat

            $llibre->setId_categoria($id_categoria);
            //sera com els avatars, amb un check


            //guardo todos estos datos en llibre
            $save = $llibre->save();

            if ($save) {
                echo 'Enregistrat correctament';
            } else {
                echo 'Alguna cosa no ha anat bé amb el teu registre';
            }*/
        }//fi isset($_POST)
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
}
