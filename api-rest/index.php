<?php 
/**
 * per veure els errors
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
function ferPeticio($cat, $novetats, $valorats, $buscador, $idLector, $idLlibre){
    $db=Database::conectar();
    $peticioMetode = $_SERVER["REQUEST_METHOD"];
    $controller = new LlibreControllerApi($db, $peticioMetode, $cat, $novetats, $valorats, $buscador, $idLector, $idLlibre);
    $controller->processRequest();
}

//Declarem els headers de la peticio 
header("Access-Control-Allow-Origin: *");//en * ponia localhost (demateu)
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET, PUT, PATCH");
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
        ferPeticio($cat, null, null, null, null, null);
    }else{
        mostrarNotFound();
        exit();
    }

//Si la peticio te el parametre novetats
}else if(isset($_GET['novetats']) && count($uriFormatted) == 1){
    $novetats = filter_var($_GET['novetats'], FILTER_VALIDATE_BOOLEAN);
    if($novetats){
        ferPeticio(null,$novetats, null, null, null, null);
    }else{
        mostrarNotFound();
        exit();
    }
//Si la peticio te el parametre valorats     
}else if (isset($_GET['valorats']) && count($uriFormatted) == 1){
    $valorats = filter_var($_GET['valorats'], FILTER_VALIDATE_BOOLEAN);
    if($valorats){
        ferPeticio(null, null,$valorats, null, null, null);
    }else{
        mostrarNotFound();
        exit();
    }
    

//Si la peticio te el parametre buscador
}else if (isset($_GET['buscador']) && count($uriFormatted) == 1){
    $buscador = filter_var($_GET['buscador'], FILTER_VALIDATE_BOOLEAN);
    if($buscador){
        ferPeticio(null, null,null, $buscador,null, null);
    }else{
        mostrarNotFound();
        exit();
    }

//Si la peticio te els parametres per actualitzar
}else if (isset($_GET['idLector']) && isset($_GET['idLlibre']) ) {
    ferPeticio(null, null, null, null, $_GET['idLector'], $_GET['idLlibre']);

//Si la peticio no te cap parametre retornarem tots els llibres
}else if (empty($uri)) {

    ferPeticio(null, null,null, null, null, null);

//Si no cumpleix res d'abans sera not found 
}else{
    mostrarNotFound();
    exit();
}