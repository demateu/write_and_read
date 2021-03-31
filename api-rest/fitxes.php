require_once 'config/DataBase.php';

/*
Consulta por categoria id: 
SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, c.nom_cat AS 'categoria', u.nom_i_cognoms AS 'autor' FROM llibre l, categoria c, usuari u WHERE l.id_categoria=2 AND l.id_categoria=c.id AND u.id=l.id_escriptor;

Consulta todos: 
SELECT l.id, l.titol,l.portada_url, l.mitja_vots, l.cops_votat, c.nom_cat AS 'categoria', u.nom_i_cognoms AS 'autor' FROM llibre l, categoria c, usuari u  WHERE l.id_categoria=c.id AND u.id=l.id_escriptor;

*/

$db=Database::conectar();

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(isset($_GET['categoria'])){
        $cat= $_GET['categoria'];
        $db->query("")
    }
}
