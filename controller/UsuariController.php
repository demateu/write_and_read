<?php

require_once 'model/Usuari.php';//veure si Usuari general serveix, sino separemo Escriptor/Lector

class UsuariController{

    //test
    public function index(){
        echo "Controlador Usuarios, Accion index";
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
        if(isset($_POST)){
            //instancio el objeto (el modelo usuario)
            $usuari = new Usuari(); 

            //setters para guardar los datos que llegan del form (registro/user)
            $usuari->setNickname($_POST['nickname']);
            $usuari->setNom_i_cognoms(($_POST['nom_i_cognoms']));
            $usuari->setDni($_POST['dni']);
            $usuari->setEmail($_POST['email']);
            $usuari->setData_alta($_POST['data_alta']);//private $data_alta;//definir un current date aqui, en el constructor o en el insert?
            $usuari->setAvatar_id($_POST['avatar_id']);
            $usuari->setPassword($_POST['password']);
            $usuari->setSubscrit($_POST['subscrit']);
            $usuari->setData_naixement($_POST['data_naixement']);
            $usuari->setId_tipususuari($_POST['id_tipusuari']);
            $usuari->setBiografia($_POST['biografia']);//nomes per escriptors

            //guardo todos estos datos en usuario
            $save = $usuari->save();

            var_dump($usuari);

            if($save){
                echo 'Enregistrar correctament';
            }else{
                echo 'Alguna cosa no ha anat bé amb el teu registre';
            }

        }
    }


}


