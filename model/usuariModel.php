<?php

require_once 'config/DataBase.php';

/**
 * Classe superclasse de la qual heretaran: EscriptorModel i LectorModel
 */
class UsuariModel{
    
    //PK -> id autoincrement que se crea en la BBDD
    private $nickname;
    private $nom_i_cognoms;
    private $dni;
    private $email;
    private $data_alta;
    private $imagen_avatar_url;//FK
    private $password;
    private $subscrito;
    private $data_naixement;
    private $id_tipo_user;//FK

    /**
     * Constructor que crea ja la conexió a la BBDD
     */
    public $db;
    public function __construct(){
        $this->db = DataBase::conectar();
    }

}


?>