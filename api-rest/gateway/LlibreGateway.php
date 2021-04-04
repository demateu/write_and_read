<?php

/**
 * Class gateway de llibre, Interactua amb la BD
 * 
 * @author Ronny
 * @version 1.0
 */
class LlibreGateway{
    /**
     * @var mysqli $db:Objecte de conexió a la BD 
     */
    private $db = null;

    /**
     * Constructor de la classe
     * 
     * @param mysqli $db
     */
    public function __construct($db){
        $this->db = $db;
    }

    /**
     * Retorna tots els llibres què disposa la Bd
     * 
     * @return array $result: Resultat de la query 
     * @throws Exception $e
     */
    public function getAll(){
        $qry = "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, c.nom_cat AS 'categoria', u.nom_i_cognoms AS 'autor' FROM llibre l, categoria c, usuari u  WHERE l.id_categoria=c.id AND u.id=l.id_escriptor";
        
        try{
            $qry=$this->db->query($qry);
            $result=$qry->fetch_all(MYSQLI_ASSOC);
            return $result;
        }catch (Exception $e){
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
    public function find($id){
        $qry = "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, c.nom_cat AS 'categoria', u.nom_i_cognoms AS 'autor' FROM llibre l, categoria c, usuari u WHERE l.id_categoria=? AND l.id_categoria=c.id AND u.id=l.id_escriptor";
        
        try{
            $qry = $this->db->prepare($qry);
            $qry->bind_param('i', $id);
            $qry->execute();
            $result=$qry->get_result()->fetch_all(MYSQLI_ASSOC);

            return $result;
        } catch (Exception $e) {
            exit($e->getMessage());
        }    

    }

}