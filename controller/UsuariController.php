<?php

require_once 'model/Usuari.php';


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
     * @author demateu
     * renderitza la pàgina de login
     */
    public function login(){
        //renderitza la vista
        require_once 'view/registre/login.php';
    }

    /**
     * @author demateu
     * login dels usuaris
     * 
     * esta a mitges
     */
    public function loginUser(){
        //En el form de loguearse tendremos una accion que será 'login.php' que nos llevara a este archivo
        //En el archivo login.php, debemos iniciar sesion + conexion a la BBDD:
	    //conexion a la BBDD -> el require_one
        //Recoger los datos del formulario
	    if(isset($_POST)){
			$emailForm = trim($_POST['email']);
			$passwordForm = $_POST['password'];//1234 desde el form

            //fem una consulta per comprobar les credencials de l'usuari
            //Consultar la BBDD para comparar la coincidencia del email recibido (si coincide, loguearnos)
            $usuari = new Usuari();
            $usuari->setEmail($emailForm);
            $login = $usuari->buscarUsuariperEmail(); //es ok
            var_dump($login);

            if($login){ 
                //comparamos las 2 contraseñas para verificar que son la misma
                //(la del usuario logueado y la del de la BBDD con el mismo email)
                $verify = password_verify($passwordForm, $login->password);

                if($verify){
                    echo 'coinciden passwords!!!';
                    //Utilizar una sesion para guardar los datos de la sesion logueado
                    //creo la sessió i allà guardo l'objecte de l'usuari
                    $_SESSION['usuari'] = $login;

                    //si el usuario existe hay que borrar si existe la sesion del error
                    if(isset($_SESSION['error_login'])){
                        session_unset();
                    }

                    //si el loguin es ok es redirigeix a l'usuari al seu panell de control
                    require_once 'view/panel_control/EscriptorPerfilView.php';

                }else{
                    echo 'no coinciden passowrds';
                    //Si algo falla, enviar una sesion con el fallo
                    $_SESSION['error_login'] = "Login incorrecto :-(";

                    //si el loguin es kao es redirigeix a l'usuari a la pagina de registre
                    require_once 'view/registre/login.php';
                }

            }else{
                //Si algo falla, enviar una sesion con el fallo
                //$_SESSION['error_login'] = "Login incorrecto :-(";
                require_once 'view/registre/login.php';
            }

		}
        //Redirigir al index para que la pagina recarge
        //header('Location: http://localhost:8888/write_and_read/index.php');
        //require_once 'view/main.php';
        
    }


    /**
     * para guardar el usuario
     * recojer los datos por POST que nos llegan desde el formulario <usuario>
     * 
     * @return void
     */
    public function save(){//ojo era saveUsuari
        //@author demateu
        //https://www.udemy.com/course/master-en-php-sql-poo-mvc-laravel-symfony-4-wordpress/learn/lecture/11745158#overview
        //if(isset($_POST)){

            //iniciar sessió
            //if(!isset($_SESSION)){
                //session_start();
            //}

            //recollir ls valors del formulari de registre

            //validar les dades abans d'introduirles a la BBDD
        //}


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
            //guardo l'id de GET en una variable
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

    /**
     * Dashboar usuari test
     */
    public function perfilUser(){
        //CONSEGUIR DADES USUARI
        $usuari = new Usuari();
        $usuari->setEmail('vero@gmail.com');
        $usuari = $usuari->buscarUsuariperEmail();

        //Get img url per avatars
        $dir = "assets/img/avatar";

        $imatgesAvatar = array_values(array_filter(scandir($dir), function($file) use ($dir) { 
            return !is_dir($dir . '/' . $file);
        }));
        
        require_once 'view/panel_control/LectorPerfilView.php';
    }


    /**
     * @author demateu
     * Renderitza el panell de control de l'escriptor
     * 
     * @return void
     */
    public function escriptorControl(){
    
        //CONSEGUIR DADES ESCRIPTOR
        //de quina forma li arribaran les dades desde el login? -> SESION
        //buscarUsuariperEmail()

        require_once 'view/panel_control/EscriptorPerfilView.php';
    }




    

}


