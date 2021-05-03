<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once 'model/Usuari.php';

/**
 * @author demateu
 */
class UsuariController
{

    /**
     * renederitza la pàgina de registre d'un usuari a la URL:
     * <=?base?>usuari/registre
     */
    public function registre()
    {
        //cargamos la vista
        require_once 'view/registre/usuari.php';
    }

    /**
     * @author demateu
     * renderitza la pàgina de login
     */
    public function login()
    {
        //renderitza la vista
        require_once 'view/registre/login.php';
    }

    /**
     * @author demateu
     * login dels usuaris
     * 
     * esta a mitges pero funciona
     */
    public function loginUser()
    {
        //En el form de loguearse tendremos una accion que nos llevara a este archivo

        //Recoger los datos del formulario
        if (isset($_POST)) {
            $emailForm = trim($_POST['email']);
            $passwordForm = $_POST['password']; //1234 desde el form

            //fem una consulta per comprobar les credencials de l'usuari
            //Consultar la BBDD para comparar la coincidencia del email recibido (si coincide, loguearnos)
            $usuari = new Usuari();
            $usuari->setEmail($emailForm);
            $login = $usuari->buscarUsuariperEmail(); //es ok

            if ($login) {
                //comparamos las 2 contraseñas para verificar que son la misma
                //(la del usuario logueado y la del de la BBDD con el mismo email)
                $verify = password_verify($passwordForm, $login->password);

                if ($verify) {
                    //Utilizar una sesion para guardar los datos de la sesion logueado
                    //creo la sessió i allà guardo l'objecte de l'usuari
                    $_SESSION['usuari'] = $login;

                    //si el usuario existe hay que borrar si existe la sesion del error
                    if (isset($_SESSION['error_login'])) {
                        session_unset();
                    }

                    //Si el usuari es lector renderitza la vista lector
                    if ($login->id_tipus_usuari == '1') {
                        $this->perfilUser();
                        
                        //Sino renderitza la d'escriptor
                    } else {
                        require_once 'view/panel_control/EscriptorPerfilView.php';
                    }
                } else {
                    //Si algo falla, enviar una sesion con el fallo
                    $_SESSION['error_login'] = "Login incorrecto :-(";

                    //si el loguin es kao es redirigeix
                    require_once 'view/registre/login.php';
                }
            } else {
                //Si algo falla, enviar una sesion con el fallo
                $_SESSION['error_login'] = "Login incorrecto :-(";
                require_once 'view/registre/login.php';
            }
        }
    }

    /**
     * @author demateu
     * 
     * rebre les dades del form d'actualizació des d'el panell de control de l'usuari
     * redirigeix a la mateixa pàgina i surt un missatge:
     * 'dades actualizades correctament'
     */
    public function saveCanvis()
    {

        //rebre els valors i passar-ho a les variables
        if (isset($_POST)) {

            //recollir les dades per actualitzar
            $nickname = isset($_POST['nickname']) ? $_POST['nickname'] : false;
            $nom_i_cognoms = isset($_POST['nom_i_cognoms']) ? $_POST['nom_i_cognoms'] : false;
            $dni = isset($_POST['dni']) ? $_POST['dni'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            //$data_alta = isset($_POST['data_alta']) ? $_POST['data_alta'] : false;
            $avatar_id = isset($_POST['avatarType']) ? $_POST['avatarType'] : false; //esta tornant false
            //$password = isset($_POST['password']) ? $_POST['password'] : false;
            $subscrit = isset($_POST['subscrit']) ? $_POST['subscrit'] : false; //estña tornant false
            //$data_naixement = isset($_POST['naixement']) ? $_POST['naixement'] : false;
            //$id_tipus_usuari = isset($_POST['id_tipus_usuari']) ? $_POST['id_tipus_usuari'] : false;
            $biografia = isset($_POST['biografia']) ? $_POST['biografia'] : false;

            //array d'errors, per imprimir cada error per pantalla
            $errors = array();

            $usuari = new Usuari();
            //enviem dades a la BBDD
            //$nickname,  $nom_i_cognoms, $dni, $email, $avatar_id, $subscrit, $biografia
            $actualitzat = $usuari->updateUser($nickname, $nom_i_cognoms, $email, $dni, $biografia, $avatar_id);
            //demano la url de l'avatar a la BBDD a traves de l'email
            $avatarUrl = new Usuari();
            $avatarUrl->setEmail($email);
            $avatarUrl = $avatarUrl->buscarUsuariperEmail();
            if ($actualitzat) {
                //actualitzo les dades de l'usuari
                //provo de passar-li els valors nous
                $_SESSION['usuari']->nickname = $nickname; //li passo el valor nou
                $_SESSION['usuari']->nom_i_cognoms = $nom_i_cognoms; //li passo el valor nou
                $_SESSION['usuari']->dni = $dni; //li passo el valor nou
                $_SESSION['usuari']->biografia = $biografia; //li passo el valor nou

                $_SESSION['usuari']->avatar_id = $avatar_id; //li passo el valor nou
                $_SESSION['usuari']->avatar_url_imagen = $avatarUrl->avatar_url_imagen; //li passo el valor nou

                $_SESSION['completado'] = 'Canvis fets correctament';
                echo 'Canvis fets correctament';
            } else {
                $_SESSION['errores']['general'] = 'Alguna cosa no ha anat bé amb la teva actualització';
                echo 'Alguna cosa no ha anat bé amb la teva actualització';
            }

            //Validar les dades
            //nickname
            /*
            if(!empty($nickname)){
                $nickname_validat = true;
            }else{
                $nickname_validat  = false;
                $errores['nickname'] = "El nickname no és valid";
            }
            //nom_i_cognoms
            if(!empty($nom_i_cognoms) && !is_numeric($nom_i_cognoms)){
                $nom_i_cognoms_validat = true;
            }else{
                $nom_i_cognoms_validat = false;
                $errores['nom_i_cognoms'] = "El nom i cognoms no son correctes";
            }
            //etc, ferho amb tots

            $guardar_usuari = false;

            if(count($errores)==0){
                $guardar_usuari = true;

                //guardo todos estos datos en usuario
                $usuari = $_SESSION['usuari'];
                
                //cridem la query update de la BBDD
                $actualitzat = $usuari->updateUser();

                //PONER ESTO DE OTRA FORMA, MÁS MEJOR
                if($actualitzat){
                    var_dump($actualitzat);
                    die();
                    //actualitzo les dades de l'usuari
                    $_SESSION['usuari']['nickname'] = $actualitzat->getNickname();

                    $_SESSION['completado'] = 'Canvis fets correctament';
                    echo 'Canvis fets correctament';
                }else{
                    $_SESSION['errores']['general'] = 'Alguna cosa no ha anat bé amb la teva actualització';
                    echo 'Alguna cosa no ha anat bé amb la teva actualització';
                }            
            }//fi if
            */

            //Si el usuari es lector renderitza la vista lector
            if ($avatarUrl->id_tipus_usuari == '1') {
                $this->perfilUser();
                //Sino renderitza la d'escriptor
            } else {
                //l'id de l'escriptor
                $id = $avatarUrl->id;


                //CONSEGUIR DADES LLIBRES PER ESCRIPTOR
                $escriptorLlibres = new Usuari();
                $escriptorLlibres->setId($id);
                $escriptorLlibres = $escriptorLlibres->buscarUsuariLlibres();
                require_once 'view/panel_control/EscriptorPerfilView.php';
            }
        }

        //afegir a la vista un condicional amb missatge: dades actualizades correctament
    }

    /**
     * para guardar el usuario
     * recojer los datos por POST que nos llegan desde el formulario <usuario>
     * 
     * @return void
     */
    public function save()
    { //ojo era saveUsuari
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

        if (isset($_POST)) {

            //if(buscaRepetit($nickname,nickname)==1){
            //echo "El Username: '$nickname' ja existeix";

            //instancio el objeto (el modelo usuario)
            $usuari = new Usuari();

            //setters para guardar los datos que llegan del form (registro/user)
            $usuari->setNickname($nickname);
            $usuari->setNom_i_cognoms($nom_i_cognoms);
            $usuari->setDni($dni);
            $usuari->setEmail($email);
            $usuari->setData_alta($data_alta); //private $data_alta;//definir un current date aqui, en el constructor o en el insert?
            $usuari->setAvatar_id($avatar_id);
            $usuari->setPassword($password);
            $usuari->setSubscrit($subscrit);
            $usuari->setData_naixement($data_naixement);
            $usuari->setId_tipus_usuari($id_tipus_usuari);
            $usuari->setBiografia($biografia); //nomes per escriptors

            //guardo todos estos datos en usuario
            $save = $usuari->save();


            if ($save == 0) {
                echo "<h4 class='text-center'>Enregistrat correctament, ja pots fer login:</h4>";
                include("./view/registre/login.php");
            } else if ($save == 1) {
                echo file_get_contents("./view/registre/usuari.php");
                echo "<div id='error_login'><p class='text-center'>El Username '$nickname' ja existeix</p></div>";
            } else if ($save == 2) {
                echo file_get_contents("./view/registre/usuari.php");
                echo "<div id='error_login'><p class='text-center'>Un usuari ja està registrat amb el correu '$email'</p></div>";
            } else if ($save == 3) {
                echo file_get_contents("./view/registre/usuari.php");
                echo "<div id='error_login'><p class='text-center'>Ja hi ha un usuari amb el mateix DNI: '$dni'</p></div>";
            } else {
                echo file_get_contents("./view/registre/usuari.php");
                echo "<div id='error_login'><p class='text-center'>Alguna cosa no ha anat bé amb el teu registre</p></div>";
            }
        }

        /*if($save){
                echo 'Enregistrat correctament';
            }else{
                echo 'Alguna cosa no ha anat bé amb el teu registre';}
            }*/
    }




    /**
     * @author demateu
     * 
     * et deslogueja -> NO FUNCIONA
     */
    public function logoutUser()
    {

        echo 'test';

        if (isset($_SESSION['usuari'])) {
            unset($_SESSION['usuari']);
            session_destroy();
            echo 'usuari desloguejat';
        }

        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
            session_destroy();
        }
        //header('location:'.base_url);
        //header ("Location: ".base_url);
        //require_once 'index.php';
        require 'view/panel_control/EscriptorView.php';
    }


    /**
     * @author demateu
     * 
     * renderitza la fitxa de l'escriptor a la següent url:
     * http://localhost:8888/write_and_read/usuari/fitxa
     * 
     * li arriba per GET (desde el main.js) l'id de l'escriptor que renderitzarà
     */
    public function fitxa()
    {
        //comprobar si me llega el id por GET
        if (isset($_GET['id'])) {
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
        require 'view/panel_control/EscriptorView.php';
    }


    /**
     * TEST es ok, carga TODOS los usuarios
     */
    public function cargarAll()
    {
        $usuari = new Usuari();
        $usuaris = $usuari->getAll(); //crido al metode getAll d'Usuari
        //$usuaris serà on accedim desde la vista
        require_once 'view/panel_control/EscriptorView.php';
    }

    /**
     * Dashboard usuari test
     */
    public function perfilUser()
    {
        if (isset($_SESSION['usuari'])) {

            //Tab favorits 
            $lector = new Usuari();
            $lector->setId($_SESSION['usuari']->id);
            $favoritsLlibres = $lector->buscarFavoritsUsuari();
            $avatars = $lector->getAllAvatars();

            require_once 'view/panel_control/LectorPerfilView.php';
        }
    }


    /**
     * @author demateu
     * Renderitza el panell de control de l'escriptor
     * 
     * @return void
     */
    public function escriptorControl()
    {

        require_once 'view/panel_control/EscriptorPerfilView.php';
    }
}
