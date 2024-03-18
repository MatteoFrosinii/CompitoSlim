<?php

class OrdineOnlineModel extends OrdineModel{

    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    private function __construct() {}
    
    public function makeData(){
        return new OrdineOnline($this->makeNumeroOrdine(), $this->makeDataData(), $this->makeImportoTotale(), rand(1,255).".".rand(1,255).".".rand(1,255).".".rand(1,255).".", rand(100_000,999_999));
    }

    public function addArticoloVenduto($articolo){
        array_push($listaArticoliVenduti,$articolo);
    }
}
