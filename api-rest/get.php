<?php
require_once '../config/DataBase.php';

/*
Consulta por categoria id: 
SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, c.nom_cat AS 'categoria', u.nom_i_cognoms AS 'autor' FROM llibre l, categoria c, usuari u WHERE l.id_categoria=2 AND l.id_categoria=c.id AND u.id=l.id_escriptor;

Consulta todos: 
SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, c.nom_cat AS 'categoria', u.nom_i_cognoms AS 'autor' FROM llibre l, categoria c, usuari u  WHERE l.id_categoria=c.id AND u.id=l.id_escriptor;

*/

$db=Database::conectar();


//Nomes rebrem peticions get
if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(isset($_GET['categoria'])){
        //Definim les variables
        $cat= $_GET['categoria'];
        $query_per_id= "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, c.nom_cat AS 'categoria', u.nom_i_cognoms AS 'autor' FROM llibre l, categoria c, usuari u WHERE l.id_categoria=? AND l.id_categoria=c.id AND u.id=l.id_escriptor";
        $query_per_tots= "SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, c.nom_cat AS 'categoria', u.nom_i_cognoms AS 'autor' FROM llibre l, categoria c, usuari u  WHERE l.id_categoria=c.id AND u.id=l.id_escriptor";
        $query;

        //Es filtra per tots els llibres
        if($cat == 0){
            $query=$db->query($query_per_tots);
            $query=$query->fetch_all(MYSQLI_ASSOC);
        //Fem filtratge per categoria
        }else{
            $query=$db->prepare($query_per_id);
            $query->bind_param('i', $cat); 
            $query->execute();

            $query=$query->get_result()->fetch_all(MYSQLI_ASSOC);           
        }
        
        header("Content-Type: application/json; charset=utf-8" );
        echo json_encode( $query );
        exit(); 
    }
}
