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
        $qry = "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, u.nom_i_cognoms AS 'autor', l.id_escriptor FROM llibre l, categoria c, usuari u  WHERE l.id_categoria=c.id AND u.id=l.id_escriptor";
        
        try{
            $qry=$this->db->query($qry);
            $result=$qry->fetch_all(MYSQLI_ASSOC);
            return $result; //resposta
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
        $qry = "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, u.nom_i_cognoms AS 'autor', l.id_escriptor  FROM llibre l, categoria c, usuari u WHERE l.id_categoria=? AND l.id_categoria=c.id AND u.id=l.id_escriptor";
        
        try{
            $qry = $this->db->prepare($qry);
            $qry->bind_param('i', $id); //i -> integer
            $qry->execute();
            $result=$qry->get_result()->fetch_all(MYSQLI_ASSOC);
            
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
    public function getNovetats(){
        $qry="SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, l.id_escriptor, l.data_alta, u.nom_i_cognoms AS 'autor' FROM llibre l
        JOIN (SELECT MAX(data_alta) AS maxdate FROM llibre GROUP BY data_alta ORDER BY data_alta DESC LIMIT 5) n ON l.data_alta IN (n.maxdate)
        JOIN usuari u ON l.id_escriptor = u.id LIMIT 8";
        try{
            $qry=$this->db->query($qry);
            $result=$qry->fetch_all(MYSQLI_ASSOC);
            return $result;
        }catch (Exception $e){
            exit($e->getMessage());
        }
    }

    /**
    * Retorna els llibres amb la valoracio mes alta del cataleg
    *
    * @return array $result: Resultat de la query 
    * @throws Exception $e
    */
    public function getMesValorats(){
        $qry = "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, l.id_escriptor, l.data_alta, u.nom_i_cognoms AS 'autor' FROM llibre l
        JOIN (SELECT mitja_vots AS maxpunt FROM llibre WHERE mitja_vots > 3 ORDER BY mitja_vots DESC) v ON l.mitja_vots IN (v.maxpunt)
        JOIN usuari u ON l.id_escriptor = u.id GROUP BY l.id";

        try{
            $qry=$this->db->query($qry);
            $result=$qry->fetch_all(MYSQLI_ASSOC);
            return $result;
        }catch (Exception $e){
            exit($e->getMessage());
        }
    }

}