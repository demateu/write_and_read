<?php

require_once 'model/Usuari.php';
//require_once 'view/panel_control/EscriptorView.php';//no se si aquest es necessari

/**
 * @author demateu
 */
class UsuariController{

    //test -> para borrar
    public function index(){
        $usuari = new Usuari();
        $usuaris = $usuari->getAllEscriptors();

        var_dump($usuaris->fetch_object());
        var_dump($usuari->getAllEscriptors());

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
     * renderitza la fitxa de l'escriptor
     * pediria los datos al modelo (BBDD)
     */
    public function fitxa(){
    
        //faltara concretar si se recibe por GET o POST (pongo de mientras GET)
        //accedir-hi per aqui: http://localhost:8888/write_and_read/usuari/fitxa
        //if(isset($_GET['id'])){
            //require_once 'view/panel_control/EscriptorView.php';
        if(isset($_GET['id'])){
            var_dump($_GET['id']);

            //aqui guardo el id que me llega por GET
            $id = $_GET['id'];
            //tenemos que modificar los enlaces de nuestro menu
            //para poder pasarle un parametro por GET por la URL

            //aqui ya uso el modelo y su modulo
            $escriptor = new Usuari();//instancio
            $escriptor->setId($id);

            $escriptor = $escriptor->buscarEscriptor();
        }

        require_once 'view/panel_control/EscriptorView.php';

            $usuari = new Usuari();
            $escriptor = $usuari->buscarPorId($_GET['id']);
            var_dump($escriptor);

            if(!$escriptor == false){
                //pasar datos a la vista de Fitxa escriptor; cargo la vista
                require_once 'view/panel_control/EscriptorView.php';
            }else{
                //esto no deberia pasar
                echo 'Algo no ha ido bien';
            }
        //}else{
            //echo 'ops';
       // }
    }


    /**
     * TEST
     */
    public function cargarAll(){
        $usuari = new Usuari();
        $usuaris = $usuari->getAll();
        
        require_once 'view/panel_control/EscriptorView.php';
    }




}


