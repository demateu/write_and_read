<?php

/**
 * veure després si creem una superclasse
 * per tenir en classes separades: escritor i lector
 * de moment ho poso tot junt
 * 
 * seran propiedades privadas porque solo podremos acceder a ellos mediante metodos
 * 
 * se usará para crear objetos
 * 
 * * tiene los getters y setters de cada propiedad
 * tiene metodos para interactuar con la BBDD en relacion a cada una de sus proiedades
 */
class Usuari{

    private $id;//PK autoincrement (pasar NULL)
    private $nickname;
    private $nom_i_cognoms;
    private $dni;
    private $email;
    private $data_alta;//definir un current date aqui, en el constructor o en el insert?
    private $avatar_id;//FK
    private $password;//aplicar encriptacion!
    private $subscrit;//boolean
    private $data_naixement;
    private $id_tipususuari; //FK
    private $biografia;//nomes per escriptors
    private $db;


    public function __construct()
    {
        $this->db = DataBase::conectar();
        $this->id = null;//probar
    }

    /**
     * Cambiaremos los getters
     * Añadiremos un escape para todos los datos que nos lleguen del formulario:
     * $this->db->real_escape_string(...)
     */

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        //return $this->id;
        return $this->db->real_escape_string($this->id);
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nickname
     */ 
    public function getNickname()
    {
        //return $this->nickname;
        return $this->db->real_escape_string($this->nickname);
    }

    /**
     * Set the value of nickname
     *
     * @return  self
     */ 
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get the value of nom_i_cognoms
     */ 
    public function getNom_i_cognoms()
    {
        //return $this->nom_i_cognoms;
        return $this->db->real_escape_string($this->nom_i_cognoms);
    }

    /**
     * Set the value of nom_i_cognoms
     *
     * @return  self
     */ 
    public function setNom_i_cognoms($nom_i_cognoms)
    {
        $this->nom_i_cognoms = $nom_i_cognoms;

        return $this;
    }

    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        //return $this->dni;
        return $this->db->real_escape_string($this->dni);
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        //return $this->email;
        return $this->db->real_escape_string($this->email);
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of data_alta
     */ 
    public function getData_alta()
    {
        //return $this->data_alta;
        return $this->db->real_escape_string($this->data_alta);
    }

    /**
     * Set the value of data_alta
     *
     * @return  self
     */ 
    public function setData_alta($data_alta)
    {
        $this->data_alta = $data_alta;

        return $this;
    }

    /**
     * Get the value of avatar_id
     */ 
    public function getAvatar_id()
    {
        //return $this->avatar_id;
        return $this->db->real_escape_string($this->avatar_id);
    }

    /**
     * Set the value of avatar_id
     *
     * @return  self
     */ 
    public function setAvatar_id($avatar_id)
    {
        $this->avatar_id = $avatar_id;

        return $this;
    }

    /**
     * Get the value of password
     * 
     * Encriptem la contrasenya
     */ 
    public function getPassword()
    {
        //return $this->password;
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of subscrit
     */ 
    public function getSubscrit()
    {
        //return $this->subscrit;
        return $this->db->real_escape_string($this->subscrit);
    }

    /**
     * Set the value of subscrit
     *
     * @return  self
     */ 
    public function setSubscrit($subscrit)
    {
        $this->subscrit = $subscrit;

        return $this;
    }

    /**
     * Get the value of data_naixement
     */ 
    public function getData_naixement()
    {
        //return $this->data_naixement;
        return $this->db->real_escape_string($this->data_naixement);
    }

    /**
     * Set the value of data_naixement
     *
     * @return  self
     */ 
    public function setData_naixement($data_naixement)
    {
        $this->data_naixement = $data_naixement;

        return $this;
    }

    /**
     * Get the value of id_tipususuari
     */ 
    public function getId_tipususuari()
    {
        //return $this->id_tipususuari;
        return $this->db->real_escape_string($this->tipususuari);
    }

    /**
     * Set the value of id_tipususuari
     *
     * @return  self
     */ 
    public function setId_tipususuari($id_tipususuari)
    {
        $this->id_tipususuari = $id_tipususuari;

        return $this;
    }

    /**
     * Get the value of biografia
     */ 
    public function getBiografia()
    {
        //return $this->biografia;
        return $this->db->real_escape_string($this->biografia);
    }

    /**
     * Set the value of biografia
     *
     * @return  self
     */ 
    public function setBiografia($biografia)
    {
        $this->biografia = $biografia;

        return $this;
    }
  

    /**
     ******************************************* METODOS
     */

    /**
     * guardamos el objeto en la BBDD
     * 
     * @return
     * true si la consulta se hace correctamente, sino false
     */
    public function save(){
        //preparo la query -> un insert
        //ver si CURDATE necesita estar entre comillas o no
        $sql = "INSERT INTO usuari VALUES({$this->getId()}, '{$this->getNickname()}',  '{$this->getNom_i_cognoms()}', '{$this->getDni()}', '{$this->getEmail()}', CURDATE(), {$this->getAvatar_id()}, '{$this->getPassword()}', '{$this->getSubscrit()}', '{$this->getEmail()}', '{$this->getData_naixement()}', {$this->getId_tipususuari()}, '{$this->getBiografia()}' )";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }



}

/*
id int AUTO_INCREMENT,
nickname varchar(20) NOT NULL,
nom_i_cognoms varchar(50) NOT NULL,
dni varchar(10) NOT NULL UNIQUE,
email varchar(20) NOT NULL UNIQUE,
data_alta date,  ->      CURDATE();
avatar_id int,
password varchar(100),
subscrit boolean,
data_naixement date,
id_tipusuari int,
biografia varchar(250),
PRIMARY KEY (id),
CONSTRAINT FK_Tipus_Usuari
FOREIGN KEY (id_tipusuari) REFERENCES tipusuari(id),
CONSTRAINT FK_Avatar
FOREIGN KEY (avatar_id) REFERENCES avatar(id)
*/