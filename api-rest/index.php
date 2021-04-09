<?php 
/**
 * Front controller de l'api.
 * 
 * @author Ronny
 * @version 1.0
 */


require_once 'controller/LlibreControllerApi.php';
require_once '../config/DataBase.php';

/**
 * Respon a una peticio amb codi 404 not found
 */
function mostrarNotFound(){
    header("HTTP/1.1 404 Not Found");
}

/**
 * Respon a la peticio d'acord amb el param $cat 
 * 
 * @param $cat: id de la categoria pot ser null per aconseguir tots els llibres
 */
function ferPeticio($cat){
    $db=Database::conectar();
    $peticioMetode = $_SERVER["REQUEST_METHOD"];
    $controller = new LlibreControllerApi($db, $peticioMetode, $cat);
    $controller->processRequest();
}

//Declarem els headers de la peticio 
header("Access-Control-Allow-Origin: *");//en * ponia localhost (demateu)
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//Donem format als paràmetres rebuts
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY); // Agafa els parametres despres del ?
$uriFormatted = explode( '&', $uri );//Divideix a un array per cada parametre


//Si tenim unicament l'id de categoria filtrem per categoria
if(isset($_GET['categoria']) && count($uriFormatted) == 1){
    //convertir a int la variable
    $cat = (int)$_GET['categoria'];
    
    //Qualsevol peticio que no tingui la categoria valida [1-7] com parametre retornara un 404 Not found 
    if($cat > 0 && $cat < 8 ){
        ferPeticio($cat);
    }else{
        mostrarNotFound();
        exit();
    }
//Si la peticio no te cap parametre retornarem tots els llibres
}else if (empty($uri)) {

    ferPeticio(null);

//Si no cumpleix res d'abans sera not found 
}else{
    mostrarNotFound();
    exit();
}

