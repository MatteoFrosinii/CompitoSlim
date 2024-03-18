<?php

abstract class Ordine{
    public $numeroOrdine;
    public $data;
    public $importoTotale;
    public $listaArticoliVenduti = [];

    public function __construct($numeroOrdine, $data, $importoTotale) {
        $this->$numeroOrdine = $numeroOrdine;
        $this->$data = $data;
        $this->$importoTotale = $importoTotale;
    }

    public function addArticoloVenduto($articolo){
        array_push($listaArticoliVenduti,$articolo);
    }
}