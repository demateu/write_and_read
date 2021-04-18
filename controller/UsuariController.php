<?php

require_once 'model/Usuari.php';
require_once 'model/Llibre.php';
require_once 'controller/AvatarController.php';

/**
 * @author demateu
 */
class UsuariController{

    //test -> para borrar
    public function index(){
        //renderizar vista
        require_once 'view/panel_control/EscriptorView.php';
    }

    /**
     * renederitza la pàgina de registre d'un usuari a la URL:
     * <=?base?>usuari/registre
     */
    public function registre(){ 
        //cargamos la vista
        require_once 'view/registre/usuari.php';
    }

    /**
     * para guardar el usuario
     * recojer los datos por POST que nos llegan desde el formulario <usuario>
     * 
     * @return void
     */
    public function save(){//ojo era saveUsuari

        //comprobar si les dades introduïdes existen, que no estiguin buides
        $nickname = isset($_POST['nickname']) ? $_POST['nickname'] : false;
        $nom_i_cognoms = isset($_POST['nom_i_cognoms']) ? $_POST['nom_i_cognoms'] : false;
        $dni = isset($_POST['dni']) ? $_POST['dni'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $data_alta = isset($_POST['data_alta']) ? $_POST['data_alta'] : false;
        $avatar_id = isset($_POST['avatar_id']) ? $_POST['avatar_id'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;
        $subscrit = isset($_POST['subscrit']) ? $_POST['subscrit'] : false;
        $data_naixement = isset($_POST['naixement']) ? $_POST['naixement'] : false;
        $id_tipus_usuari = isset($_POST['id_tipus_usuari']) ? $_POST['id_tipus_usuari'] : false;
        $biografia = isset($_POST['biografia']) ? $_POST['biografia'] : false;


        //quedará la VALIDACION de los campos

        if(isset($_POST)){
            //instancio el objeto (el modelo usuario)
            $usuari = new Usuari(); 

            //setters para guardar los datos que llegan del form (registro/user)
            $usuari->setNickname($nickname);
            $usuari->setNom_i_cognoms($nom_i_cognoms);
            $usuari->setDni($dni);
            $usuari->setEmail($email);
            $usuari->setData_alta($data_alta);//private $data_alta;//definir un current date aqui, en el constructor o en el insert?
            $usuari->setAvatar_id($avatar_id);
            $usuari->setPassword($password);
            $usuari->setSubscrit($subscrit);
            $usuari->setData_naixement($data_naixement);
            $usuari->setId_tipus_usuari($id_tipus_usuari);
            $usuari->setBiografia($biografia);//nomes per escriptors

            //guardo todos estos datos en usuario
            $save = $usuari->save();

            var_dump($usuari);//borrar despues

            if($save){
                echo 'Enregistrat correctament';
            }else{
                echo 'Alguna cosa no ha anat bé amb el teu registre';
            }

        }
    }


    /**
     * @author demateu
     * 
     * renderitza la fitxa de l'escriptor a la següent url:
     * http://localhost:8888/write_and_read/usuari/fitxa
     * 
     * li arriba per GET (desde el main.js) l'id de l'escriptor que renderitzarà
     */
    public function fitxa(){
        //comprobar si me llega el id por GET
        if(isset($_GET['id'])){
            //guardo l'id de GETen una variable
            $id = $_GET['id'];

            //CONSEGUIR DADES ESCRIPTOR
            $escriptor = new Usuari();
            $escriptor->setId($id);
            $escriptor = $escriptor->buscarUsuari();

            //CONSEGUIR DADES LLIBRES PER ESCRIPTOR
            $escriptorLlibres = new Usuari();
            $escriptorLlibres->setId($id);
            $escriptorLlibres = $escriptorLlibres->buscarUsuariLlibres();

        }
        require_once 'view/panel_control/EscriptorView.php';
    }


    /**
     * TEST es ok, carga TODOS los usuarios
     */
    public function cargarAll(){
        $usuari = new Usuari();
        $usuaris = $usuari->getAll();//crido al metode getAll d'Usuari
        //$usuaris serà on accedim desde la vista
        require_once 'view/panel_control/EscriptorView.php';
    }




}


