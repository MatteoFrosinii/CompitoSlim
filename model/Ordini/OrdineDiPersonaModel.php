<?php

class OrdineDiPersonaModel extends OrdineModel{

    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    private function __construct() {}
    
    public function makeData(){
        return new OrdineDiPersona($this->makeNumeroOrdine(), $this->makeDataData(), $this->makeImportoTotale(), $this->getP());
    }

    public function getP(){
        if (rand(0,1) == 1) {
            return "carta";
        }return "soldi";
    }

    public function addArticoloVenduto($articolo){
        array_push($listaArticoliVenduti,$articolo);
    }
}
