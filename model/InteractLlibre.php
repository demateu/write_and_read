<?php

/**
 * model de interactLlibre
 */
class InteractLlibre{

    private $id_lector;
    private $id_llibre;
    private $id;
    private $llegit;
    private $puntuacio;
    private $critica;
    private $preferit;
    
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
     * Get the value of id_lector
     */ 
    public function getId_lector()
    {
        return $this->id_lector;
    }

    public function setId_lector($id_lector)
    {
        $this->id_lector = $this->db->real_escape_string($id_lector);

        return $this;
    }
	
	 public function getId_llibre()
    {
        //return $this->id;
        return $this->id_llibre;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId_llibre($id_llibre)
    {
        $this->id_llibre = $id_llibre;

        return $this;
    }

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
     * Get the value of llegit
     */ 
    public function getLlegit()
    {
        return $this->llegit;
    }

    /**
     * Set the value of llegit
     *
     * @return  self
     */ 
    public function setLlegit($llegit)
    {
        $this->llegit = $this->db->real_escape_string($llegit);

        return $this;
    }

    /**
     * Get the value of puntuacio
     */ 
    public function getPuntuacio()
    {
        return $this->puntuacio;
    }

    /**
     * Set the value of puntuacio
     *
     * @return  self
     */ 
    public function setPuntuacio($puntuacio)
    {
        $this->puntuacio = $this->db->real_escape_string($puntuacio);

        return $this;
    }

    /**
     * Get the value of critica
     */ 
    public function getCritica()
    {
        return $this->critica;
    }

    /**
     * Set the value of critica
     *
     * @return  self
     */ 
    public function setCritica($critica)
    {
        $this->critica = $this->db->real_escape_string($critica);

        return $this;
    }

    /**
     * Get the value of preferit
     */ 
    public function getPreferit()
    {
        return $this->preferit;
    }

    /**
     * Set the value of preferit
     *
     * @return  self
     */ 
    public function setPreferit($preferit)
    {
        $this->preferit = $this->db->real_escape_string($preferit);

        return $this;
    }

    /**
     * Get the value of data_alta
     */ 
    public function getData_alta()
    {
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
     * Get the value of cops_llegit
     */ 
    public function getCops_llegit()
    {
        return $this->cops_llegit;
    }

    /**
     * Set the value of cops_llegit
     *
     * @return  self
     */ 
    public function setCops_llegit($cops_llegit)
    {
        $this->cops_llegit = $this->db->real_escape_string($cops_llegit);

        return $this;
    }

    /**
     * Get the value of portada_url
     */ 
    public function getPortada_url()
    {
        return $this->portada_url;
    }

    /**
     * Set the value of portada_url
     *
     * @return  self
     */ 
    public function setPortada_url($portada_url)
    {
        $this->portada_url = $this->db->real_escape_string($portada_url);

        return $this;
    }

    /**
     * Get the value of id_categoria
     */ 
    public function getId_categoria()
    {
        return $this->id_categoria;
    }

    /**
     * Set the value of id_categoria
     *
     * @return  self
     */ 
    public function setId_categoria($id_categoria)
    {
        $this->id_categoria = $this->db->real_escape_string($id_categoria);

        return $this;
    }

    /**
     * Get the value of mitja_vots
     */ 
    public function getMitja_vots()
    {
        return $this->mitja_vots;
    }

    /**
     * Set the value of mitja_vots
     *
     * @return  self
     */ 
    public function setMitja_vots($mitja_vots)
    {
        $this->mitja_vots = $this->db->real_escape_string($mitja_vots);

        return $this;
    }

    /**
     * Get the value of cops_votat
     */ 
    public function getCops_votat()
    {
        return $this->cops_votat;
    }

    /**
     * Set the value of Cops_votat
     *
     * @return  self
     */ 
    public function setCops_votat($cops_votat)
    {
        $this->cops_votat = $this->db->real_escape_string($cops_votat);

        return $this;
    }
  

    /**
     ******************************************* METODOS
     */

    /**
     * guardamos el objeto en la BBDD
     * 
     * @return true si la consulta se hace correctamente
     */
    public function comenta(){
        //preparo la query -> un insert
		$sql="SELECT * from interactllibre where id_lector='{$this->getId_lector()}' and id_llibre='{$this->getId_llibre()}'";
			$resultat=$this->db->query($sql);
			if(mysqli_num_rows($resultat) > 0){
				$sql = "UPDATE interactllibre SET critica='{$this->getCritica()}' where id_lector='{$this->getId_lector()}' and id_llibre='{$this->getId_llibre()}'";
				$save = $this->db->query($sql);
			}else{
				$sql = "INSERT INTO interactllibre VALUES('{$this->getId_lector()}', '{$this->getId_llibre()}', NULL, 0, NULL, '{$this->getCritica()}', NULL)";
				$save = $this->db->query($sql);
			}
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }

/**
     * 
     * Busca llibre amb un id concret
     */
    public function buscarComentariPerId(){
        $interactLlibres = $this->db->query("SELECT inter.id_lector, inter.critica, usur.nickname, usur.avatar_id FROM interactllibre inter INNER JOIN usuari usur on usur.id=inter.id_lector WHERE inter.id_llibre='{$this->getId()}'");
        return $interactLlibres;
    }

    /**
     * test
     */
    public function getAllComentaris(){
        $interactLlibres = $this->db->query("SELECT * FROM interactllibre");
        return $interactLlibres;
    }


}