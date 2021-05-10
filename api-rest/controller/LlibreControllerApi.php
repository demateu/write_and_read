<?php 

require_once 'gateway/LlibreGateway.php';

/**
 * Class controller dels llibres
 * 
 * @author Ronny
 * @version 1.0
 */
class LlibreControllerApi{
    /**
     * @var mysqli $db:Objecte de conexió a la BD 
     */
    private $db;

    /**
     * @var string $peticioMetode: Metode de la peticio
     */
    private $peticioMetode;

    /**
     * @var int $catId: Id de la categoria del llibre
     */
    private $catId;

    /**
     * @var boolean $novetats: Boolean per aconseguir els llibres mes nous
     */
    private $novetats;

    /**
     * @var boolean $valorats: Boolean per aconseguir els llibres mes valorats
     */
    private $valorats;

    /**
     * @var int $idLector: Id del lector a actualitzar
     */
    private $idLector;

    /**
     * @var int $idLlibre: Id del llibre a actualitzar
     */
    private $idLlibre;

     /**
     * @var LlibreGateway $llibreGateway: Objecte que interactua amb la BD
     */
    private $llibreGateway;

    /**
     * Constructor de la classe
     * 
     * @param mysqli $db
     * @param String $peticioMetode
     * @param int $catId
     * @param boolean $novetats
     * @param boolean $valorats
     * @param int $idLector
     * @param int $idLlibre
     */
    public function __construct($db, $peticioMetode, $catId, $novetats, $valorats, $idLector, $idLlibre)
    {
        $this->db = $db;
        $this->peticioMetode = $peticioMetode;
        $this->catId = $catId;
        $this->novetats = $novetats;
        $this->valorats = $valorats;
        $this->idLector = $idLector;
        $this->idLlibre = $idLlibre;

        $this->llibreGateway = new LlibreGateway($db);
    }

    /**
     * Prepara la resposta de la peticio si es GET 
     */
    public function processRequest(){
        switch($this->peticioMetode) {
            case 'GET':
                if ($this->catId){
                    $resposta = $this->getByCat($this->catId);
                }else if($this->novetats){
                    
                    $resposta = $this->getMesNous();
                }else if($this->valorats){
                    $resposta = $this->getMesPuntuats();
                }else{
                   
                    $resposta = $this->getAllLlibres();
                }
                break;
            case 'PATCH':
                $resposta = $this->actualitzarLlegit($this->idLector, $this->idLlibre);
                break;
            default:
                $resposta = $this -> notFoundResponse();
                break;
        }
        header($resposta['status_code_header']);
        if ($resposta['body']) {
            echo $resposta['body'];
        }
    }

    /**
     * Dona la resposta per retornar tots els llibres de la BD
     * 
     * @return json $resposta: Resposta de la peticio en format Json
     */
    private function getAllLlibres(){
        $result = $this->llibreGateway->getAll();
        $resposta['status_code_header'] = 'HTTP/1.1 200 OK';
        $resposta['body'] = json_encode($result);
        return $resposta;
    }

    /**
     * Dona la resposta per retornar llibres per una categoria
     * 
     * @param int $id : Id de la categoria 
     * @return json $response: Resposta de la peticio en format Json 
     */
    private function getByCat($id){
        $result = $this->llibreGateway->find($id);
        if(! $result){
            return $this->notFoundResponse();
        }
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    /**
     * Dona la resposta per retornar llibres per novetats
     * 
     * @return json $response: Resposta de la peticio en format Json 
     */
    private function getMesNous(){
        $result = $this->llibreGateway->getNovetats();
        $resposta['status_code_header'] = 'HTTP/1.1 200 OK';
        $resposta['body'] = json_encode($result);
        return $resposta;
    }

    /**
     * Dona la resposta per retornar llibres per puntuacio mes alta
     * 
     * @return json $response: Resposta de la peticio en format Json 
     */
    private function getMesPuntuats(){
        $result = $this->llibreGateway->getMesValorats();
        $resposta['status_code_header'] = 'HTTP/1.1 200 OK';
        $resposta['body'] = json_encode($result);
        return $resposta;
    }

    /**
     * Dona la resposta per retornar llibres per una categoria
     * 
     * @param int $idLector : Id del Lector
     * @param int $idLlibre : Id del llibre
     * @return json $resposta : Torna el header d'estatus 
     */
    private function actualitzarLlegit($idLector, $idLlibre){
        $interaccio=$this->llibreGateway->getIdInteraccio($idLector, $idLlibre);
        if($interaccio->llegit == '0'){
            $this->llibreGateway->updateLlegit($idLector, $idLlibre);
            $this->llibreGateway->updateCopsLlegit($idLlibre);
            $resposta['status_code_header'] = 'HTTP/1.1 204 SUCCESS';
            return $resposta;
        }elseif ($interaccio == null){
            $this->llibreGateway->crearInteractLllibre($idLector, $idLlibre);
            $this->llibreGateway->updateCopsLlegit($idLlibre);
            $resposta['status_code_header'] = 'HTTP/1.1 204 CREATED';
            return $resposta;
        }elseif ($interaccio->llegit == '1'){
            $resposta['status_code_header'] = 'HTTP/1.1 204 NO UPDATED';
            return $resposta;
        }
    }


    /**
     * Fa la resposta amb codi 404 not found en casos de error de BD
     */
    private function notFoundResponse()
    {
        $resposta['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $resposta['body'] = null;
        return $resposta;
    }

}