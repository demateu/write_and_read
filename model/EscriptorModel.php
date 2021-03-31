<?php

require_once 'model/UsuariModel.php';
class EscriptorModel extends UsuariModel{

    private $autobiografia;

    
    /**
     * Constructor que hereda de la SuperClase UsuariModel
     */
    public function __construct(){
        parent::__construct();
    }    

}
