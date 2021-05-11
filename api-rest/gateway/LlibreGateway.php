<?php

/**
 * Class gateway de llibre, Interactua amb la BD
 * 
 * @author Ronny
 * @version 1.0
 */
class LlibreGateway
{
    /**
     * @var mysqli $db:Objecte de conexió a la BD 
     */
    private $db = null;

    /**
     * Constructor de la classe
     * 
     * @param mysqli $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Retorna tots els llibres què disposa la Bd
     * 
     * @return array $result: Resultat de la query 
     * @throws Exception $e
     */
    public function getAll()
    {
        $qry = "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, u.nom_i_cognoms AS 'autor', l.id_escriptor FROM llibre l, categoria c, usuari u  WHERE l.id_categoria=c.id AND u.id=l.id_escriptor";

        try {
            $qry = $this->db->query($qry);
            $result = $qry->fetch_all(MYSQLI_ASSOC);
            return $result;
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * Retorna tots els llibres que coincideixen amb la categoria
     * 
     * @param Int $id: Identificador de la categoria [1-7]
     * @return array $result: Resultat de la query 
     * @throws Exception $e
     */
    public function find($id)
    {
        $qry = "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, u.nom_i_cognoms AS 'autor', l.id_escriptor  FROM llibre l, categoria c, usuari u WHERE l.id_categoria=? AND l.id_categoria=c.id AND u.id=l.id_escriptor";

        try {
            $qry = $this->db->prepare($qry);
            $qry->bind_param('i', $id);
            $qry->execute();
            $result = $qry->get_result()->fetch_all(MYSQLI_ASSOC);

            return $result;
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * Retorna els llibres mes nous del cataleg
     *
     * @return array $result: Resultat de la query 
     * @throws Exception $e
     */
    public function getNovetats()
    {
        $qry = "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, l.id_escriptor, l.data_alta, u.nom_i_cognoms AS 'autor' FROM llibre l
        JOIN (SELECT MAX(data_alta) AS maxdate FROM llibre GROUP BY data_alta ORDER BY data_alta DESC LIMIT 5) n ON l.data_alta IN (n.maxdate)
        JOIN usuari u ON l.id_escriptor = u.id LIMIT 8";
        try {
            $qry = $this->db->query($qry);
            $result = $qry->fetch_all(MYSQLI_ASSOC);
            return $result;
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * Retorna els llibres amb la valoracio mes alta del cataleg
     *
     * @return array $result: Resultat de la query 
     * @throws Exception $e
     */
    public function getMesValorats()
    {
        $qry = "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, l.id_escriptor, l.data_alta, u.nom_i_cognoms AS 'autor' FROM llibre l
        JOIN (SELECT mitja_vots AS maxpunt FROM llibre WHERE mitja_vots > 3 ORDER BY mitja_vots DESC) v ON l.mitja_vots IN (v.maxpunt)
        JOIN usuari u ON l.id_escriptor = u.id GROUP BY l.id";

        try {
            $qry = $this->db->query($qry);
            $result = $qry->fetch_all(MYSQLI_ASSOC);
            return $result;
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * Retorna l'Id de la interaccio amb el llibre entre l'usuari
     * 
     * @param int $idLector
     * @param int $idLlibre
     * @return Object $result: Objecte amb l'id i el camp llegit
     * @throws Exception $e
     */
    public function getIdInteraccio($idLector, $idLlibre)
    {
        $qry = "SELECT id, llegit FROM interactllibre WHERE id_lector=? AND id_llibre=? LIMIT 1";

        try {
            $qry = $this->db->prepare($qry);
            $qry->bind_param('ii', $idLector, $idLlibre);
            $qry->execute();
            $result = $qry->get_result()->fetch_object();

            return $result;
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * Actualitza el camp llegit com true del idLector i idLlibre que coincideix
     * 
     * @param int $idLector
     * @param int $idLlibre
     * @throws Exception $e
     */
    public function updateLlegit($idLector, $idLlibre)
    {
        try {
            $qry = "UPDATE interactllibre SET llegit = 1 WHERE id_lector=? AND id_llibre=?";
            $qry = $this->db->prepare($qry);
            $qry->bind_param('ii', $idLector, $idLlibre);
            $qry->execute();
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * Actualitza el contador de cops_llegit per un valor mes 
     * 
     * @param int $idLlibre
     * @throws Exception $e
     */
    public function updateCopsLlegit($idLlibre)
    {
        try {
            $qry = "UPDATE llibre SET cops_llegit = cops_llegit + 1 WHERE id=?";
            $qry = $this->db->prepare($qry);
            $qry->bind_param('i',  $idLlibre);
            $qry->execute();
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * Crea un nou registre de interactLlibre 
     * 
     * @param int $idLector
     * @param int $idLlibre
     * @throws Exception $e
     */
    public function crearInteractLllibre($idLector, $idLlibre)
    {
        try {
            $qry = "INSERT INTO interactLlibre VALUES (?, ?, null, 1, null, null, 0)";
            $qry = $this->db->prepare($qry);
            $qry->bind_param('ii', $idLector, $idLlibre);
            $qry->execute();
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }
}
