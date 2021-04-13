<?php

require_once 'model/Usuari.php';

class Avatar{

    private $id;
    private $avatar_url_imagen;

    private $db;

    public function __construct()
    {
        $this->db = DataBase::conectar();
    }    


    /**
     * Get the value of id
     */ 
    public function getId()
    {
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
        $this->avatar_url_imagen = $avatar_url_imagen;

        return $this;
    }

    /**
     * TEST
     * metodo que convierte en String el objeto
     */
    public function toString(){

        return $this->avatar_url_imagen;//devuelve NULL
    }


    /**
     * ES OK -> FUNCIONA
     * @author demateu
     * 
     * @return avatar_url
     */
    public function getAvatarUrlPerId(){
        $sql = "SELECT avatar_url_imagen FROM avatar WHERE id={$this->getId()}";
        $avatar_url = $this->db->query($sql);

        return $avatar_url->fetch_object();//ES OK EM RETORNA LA URL CORRECTA SEGONS L'ID
    }

  



}




?>