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
 * 
 * @author demateu
 */
class Usuari{

    private $id;//PK autoincrement (pasar NULL)
    private $nickname;
    private $nom_i_cognoms;
    private $dni;
    private $email;
    private $data_alta;//definir un current date aqui, en el constructor o en el insert?
    private $password;//aplicar encriptacion!
    private $subscrit;//boolean
    private $data_naixement;
    private $id_tipus_usuari; //FK
    private $biografia;//nomes per escriptors

    //s'ha d'afegir una propietat: llista de llibres publicats
    private $llibres_publicats; //array?
    //fotos dels avatars
    private $avatar_id;//FK
    private $avatar_url_imagen;//dada de la taula avatar
    
    private $db;

    public function __construct()
    {
        $this->db = DataBase::conectar();
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
        return $this->id;
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
        return $this->nickname;
    }

    /**
     * Set the value of nickname
     *
     * @return  self
     */ 
    public function setNickname($nickname)
    {
        $this->nickname = $this->db->real_escape_string($nickname);

        return $this;
    }

    /**
     * Get the value of nom_i_cognoms
     */ 
    public function getNom_i_cognoms()
    {
        //return $this->nom_i_cognoms;
        return $this->nom_i_cognoms;
    }

    /**
     * Set the value of nom_i_cognoms
     *
     * @return  self
     */ 
    public function setNom_i_cognoms($nom_i_cognoms)
    {
        $this->nom_i_cognoms = $this->db->real_escape_string($nom_i_cognoms);

        return $this;
    }

    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        //return $this->dni;
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $this->db->real_escape_string($dni);

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        //return $this->email;
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);

        return $this;
    }

    /**
     * Get the value of data_alta
     */ 
    public function getData_alta()
    {
        //return $this->data_alta;
        return $this->data_alta;
    }

    /**
     * Set the value of data_alta
     *
     * @return  self
     */ 
    public function setData_alta($data_alta)
    {
        $this->data_alta = $this->db->real_escape_string($data_alta);

        return $this;
    }

    /**
     * Get the value of avatar_id
     */ 
    public function getAvatar_id()
    {
        //return $this->avatar_id;
        return $this->avatar_id;
    }

    /**
     * Set the value of avatar_id
     *
     * @return  self
     */ 
    public function setAvatar_id($avatar_id)
    {
        $this->avatar_id = $this->db->real_escape_string($avatar_id);

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
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT, ['cost' => 4]);

        return $this;
    }

    /**
     * Get the value of subscrit
     */ 
    public function getSubscrit()
    {
        //return $this->subscrit;
        return $this->subscrit;
    }

    /**
     * Set the value of subscrit
     *
     * @return  self
     */ 
    public function setSubscrit($subscrit)
    {
        $this->subscrit = $this->db->real_escape_string($subscrit);

        return $this;
    }

    /**
     * Get the value of data_naixement
     */ 
    public function getData_naixement()
    {
        //return $this->data_naixement;
        return $this->data_naixement;
    }

    /**
     * Set the value of data_naixement
     *
     * @return  self
     */ 
    public function setData_naixement($data_naixement)
    {
        $this->data_naixement = $this->db->real_escape_string($data_naixement);

        return $this;
    }

    /**
     * Get the value of id_tipususuari
     */ 
    public function getId_tipus_usuari()
    {
        //return $this->id_tipususuari;
        return $this->id_tipus_usuari;
    }

    /**
     * Set the value of id_tipususuari
     *
     * @return  self
     */ 
    public function setId_tipus_usuari($id_tipus_usuari)
    {
        $this->id_tipus_usuari = $this->db->real_escape_string($id_tipus_usuari);

        return $this;
    }

    /**
     * Get the value of biografia
     */ 
    public function getBiografia()
    {
        //return $this->biografia;
        return $this->biografia;
    }

    /**
     * Set the value of biografia
     *
     * @return  self
     */ 
    public function setBiografia($biografia)
    {
        $this->biografia = $this->db->real_escape_string($biografia);

        return $this;
    }
  
    /**
     * Get the value of avatar_url_imagen
     */ 
    public function getAvatar_url_imagen()
    {
        return $this->avatar_url_imagen;
    }

    /**
     * Set the value of avatar_url_imagen
     *
     * @return  self
     */ 
    public function setAvatar_url_imagen($avatar_url_imagen)
    {
        $this->avatar_url_imagen = $this->db->real_escape_string($avatar_url_imagen);

        return $this;
    }
    
    


    /**
     * @author demateu
     * guardamos el objeto en la BBDD (INSERT)
     * 
     * @return true si la consulta se hace correctamente
     */
    public function save(){
        /**
         * OJO:
         * cambiar cuando el registro este hecho: subscrit (dependra de si paga o ni) i tipus_usuari
         */
        $sql = "INSERT INTO usuari (id, nickname, nom_i_cognoms, dni, email, data_alta, avatar_id, password, subscrit, data_naixement, id_tipus_usuari, biografia) 
        VALUES(NULL, '{$this->getNickname()}', '{$this->getNom_i_cognoms()}', '{$this->getDni()}', '{$this->getEmail()}', CURDATE(), 1, '{$this->getPassword()}', true, '{$this->getData_naixement()}', 2, '{$this->getBiografia()}' )";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }


    /**
     * TEST: retorna tots els usuaris de la BBDD
     */
    public function getAll(){
        $usuaris = $this->db->query("SELECT * FROM usuari");
        return $usuaris;
    }


    /**
     * @author demateu
     * Retorna tots els usuaris de tipus escriptor (2)
     * 
     * @return escriptors
     */
    public function getAllEscriptors(){
        $escriptors = $this->db->query("SELECT * FROM usuari WHERE id_tipus_usuari = 2");
        return $escriptors;        
    }


    /**
     * @author demateu
     * Retorna tots els usuaris de tipus lector (1)
     * 
     * @return lectors
     */
    public function getAllLectors(){
        $lectors = $this->db->query("SELECT * FROM usuari WHERE id_tipus_usuari = 1");
        return $lectors;        
    }


    /**
     * @author demateu
     * Busca informacio de l'escriptor amb un id concret
     */
    public function buscarUsuari(){
        $escriptor = $this->db->query("SELECT u.nickname, u.nom_i_cognoms, u.email, u.dni, u.data_alta, u.password, u.subscrit, u.data_naixement, u.id_tipus_usuari, u.biografia, 
        a.avatar_url_imagen, l.titol, l.portada_url, l.mitja_vots, l.cops_votat
		FROM usuari u JOIN llibre l ON l.id_escriptor=u.id JOIN avatar a ON u.avatar_id=a.id WHERE u.id={$this->getId()}");
        
        return $escriptor->fetch_object();
    }

    /**
     * @author demateu
     * treure tots els llibres de cada escriptor
     * Busca informacio de l'escriptor i dels llibres escrits per ell amb l'id de l'escriptor
     */
    public function buscarUsuariLlibres(){
        $escriptor = $this->db->query("SELECT u.nickname, u.nom_i_cognoms, u.email, u.dni, u.data_alta, u.password, u.subscrit, u.data_naixement, u.id_tipus_usuari, u.biografia, 
        a.avatar_url_imagen, l.titol, l.portada_url, l.mitja_vots, l.cops_votat
		FROM usuari u JOIN llibre l ON l.id_escriptor=u.id JOIN avatar a ON u.avatar_id=a.id WHERE u.id={$this->getId()}");
        //return $escriptor->fetch_object();

        //test
        return $escriptor;
    }    









}
