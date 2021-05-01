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
     * @return void
     */
    public function save(){
        echo 'save obra';

        if (isset($_POST)) {
            //instancio l'objecte llibre
            $llibre = new Llibre();

            //GESTIO DEL PDF + LA IMATGE PUJATS DEL NOU LLIBRE
            //directori pel contingut del llibre
            $pdf_dir = "assets/img/llibres/";
            //el path del llibre (incloent el nom de l'arxiu)
                //The file input field in our HTML form above is named "fileToUpload".
            $pdf_nom = $pdf_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            //l'extensió de l'arxiu(in lower case)
            $imageFileType = strtolower(pathinfo($pdf_nom,PATHINFO_EXTENSION));


            // Controla si la imatge es real i no es fake
            if(isset($_POST["submit"])) {//CANVIAR "submit" PEL QUE TOQUI !!!
                    //The file input field in our HTML form above is named "fileToUpload".
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                  echo "File is an image - " . $check["mime"] . ".";
                  $uploadOk = 1;
                } else {
                  echo "File is not an image.";
                  $uploadOk = 0;
                }
              }

            // Comprobar que no està ja pujat el mateix arxiu
            if (file_exists($pdf_nom)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Limita el pes màxim de l'arxiu
                //The file input field in our HTML form above is named "fileToUpload".
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Limita el tipus d'arxiu
                //posar aquest per les imatges
                //per PDF buscar tipus d'arxiu: pdf
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            }

            //lo que queda
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $pdf_nom)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }            




            //directori per la imatge de portada del llibre
            $cover_dir = "assets/img/cover_books/";
            //el path del llibre (incloent el nom de l'arxiu)
            $cover_nom = $cover_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            //l'extensió de l'arxiu(in lower case)
            $imageFileType = strtolower(pathinfo($cover_nom,PATHINFO_EXTENSION));





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
            }
        }
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
