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
     * @var LlibreGateway $llibreGateway: Objecte que interactua amb la BD
     */
    private $llibreGateway;

    /**
     * Constructor de la classe
     * 
     * @param mysqli $db
     * @param String $peticioMetode
     * @param int $catId
     */
    public function __construct($db, $peticioMetode, $catId)
    {
        $this->db = $db;
        $this->peticioMetode = $peticioMetode;
        $this->catId = $catId;

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
                }else{
                    $resposta = $this->getAllLlibres();
                }
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
     * Fa la resposta amb codi 404 not found en casos de error de BD
     */
    private function notFoundResponse()
    {
        $resposta['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $resposta['body'] = null;
        return $resposta;
    }

}