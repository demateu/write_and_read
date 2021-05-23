<?php

/**
 * model de Llibre
 */
class Llibre
{

    private $id;
    private $id_escriptor;
    private $titol;
    private $descripcio_curta;
    private $sinopsis;
    private $contingut_url;
    private $data_alta;
    private $cops_llegit;
    private $portada_url;
    private $id_categoria;
    private $mitja_vots;
    private $cops_votat;

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
     * Get the value of id_escriptor
     */
    public function getId_escriptor()
    {
        return $this->id_escriptor;
    }

    /**
     * Set the value of id_escriptor
     *
     * @return  self
     */
    public function setId_escriptor($id_escriptor)
    {
        $this->id_escriptor = $this->db->real_escape_string($id_escriptor);

        return $this;
    }

    /**
     * Get the value of titol
     */
    public function getTitol()
    {
        return $this->titol;
    }

    /**
     * Set the value of titol
     *
     * @return  self
     */
    public function setTitol($titol)
    {
        $this->titol = $this->db->real_escape_string($titol);

        return $this;
    }

    /**
     * Get the value of descripcio_curta
     */
    public function getDescripcio_curta()
    {
        return $this->descripcio_curta;
    }

    /**
     * Set the value of descripcio_curta
     *
     * @return  self
     */
    public function setDescripcio_curta($descripcio_curta)
    {
        $this->descripcio_curta = $this->db->real_escape_string($descripcio_curta);

        return $this;
    }

    /**
     * Get the value of sinopsis
     */
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * Set the value of sinopsis
     *
     * @return  self
     */
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $this->db->real_escape_string($sinopsis);

        return $this;
    }

    /**
     * Get the value of contingut_url
     */
    public function getContingut_url()
    {
        return $this->contingut_url;
    }

    /**
     * Set the value of contingut_url
     *
     * @return  self
     */
    public function setContingut_url($contingut_url)
    {
        $this->contingut_url = $this->db->real_escape_string($contingut_url);

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
     * @author demateu
     * Enregistra un nou llibre desde la pàgina de control de l'escriptor
     * 
     * INSERT INTO llibre VALUES
     * (null, 2, "Donetes", "Es desenvolupa en un ambient de realisme en l'Amèrica de la Guerra de la Secessió",
     * "A través de cada personatge pots anar coneixent les experiències i dificultats que han d'anar suportant per avançar en les seves vides i en la seva maduresa.", 
     * 'llibre_prova', CURDATE(), null, 'faded-4696601_640',3, null, null);
     * 
     * @return true si es fa l'insert amb èxit
     */
    public function save()
    {
        /**
         * s'ha de canviar que guardi aquest format:
         * /write_and_read/assets/img/cover_books/bible-530340_640.jpeg
         * enviarho aixi desde el controller
         */
        $sql = "INSERT INTO llibre VALUES (NULL, {$this->getId_escriptor()}, '{$this->getTitol()}', '{$this->getDescripcio_curta()}', '{$this->getSinopsis()}', '{$this->getContingut_url()}', CURDATE(), 0, '{$this->getPortada_url()}', {$this->getId_categoria()}, NULL, NULL)";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    /**
     * buscarà a la BBDD la informacio necessaria per mostrar la fitxa de llibre
     * 
     * @param id de llibre
     * 
     * @return object llibre o false
     */
    public function buscarPorId($id)
    {
        $result = false;

        $sql = "SELECT * FROM llibre WHERE id = '$id' ";
        $llibre = $this->db->query($sql);

        if ($llibre && $llibre->num_rows === 1) {
            $result = $llibre;
        }

        return $result;
    }

    /**
     * 
     * Busca un llibre pel seu id
     * 
     * @return object llibre o false
     */
    public function buscarLlibrePerId()
    {
        $llibre = $this->db->query("SELECT t1.id, t1.titol, t1.portada_url, t1.mitja_vots, t1.cops_votat, t1.cops_llegit, t2.nom_i_cognoms, t1.data_alta, t3.nom_cat, t1.sinopsis, t1.contingut_url
		FROM llibre t1 INNER JOIN usuari t2 ON t1.id_escriptor=t2.id INNER JOIN categoria t3 ON t1.id_categoria=t3.id WHERE t1.id={$this->getId()} ");
        return $llibre->fetch_object();
    }



    /**
     * test
     */
    public function getAll()
    {
        $llibres = $this->db->query("SELECT * FROM llibre");
        return $llibres;
    }

    /**
     * @author Ronny
     * 
     * Busca tots els llibres per categoria id
     * 
     * @return Object $llibresCat Llibres de una categoria especifica.
     */
    public function getLlibresPerCategoria()
    {
        $llibresCat = $this->db->query("SELECT l.id, l.titol, l.portada_url, l.sinopsis, l.mitja_vots, l.contingut_url, c.nom_cat, c.descripcio_cat FROM llibre l JOIN categoria c ON l.id_categoria=c.id WHERE l.id_categoria={$this->getId_categoria()}");

        return $llibresCat;
    }

    /**
     * Filtra els llibre que coincideixen amb la cadena ingresada pel usuari.
     */
    public function getLlibresPerString($string)
    {
        $llibreString = "SELECT * FROM llibre WHERE titol LIKE CONCAT('%', '$string', '%')";     
        $llibreString = $this->db->query($llibreString);
        
        return $llibreString;
    }
}