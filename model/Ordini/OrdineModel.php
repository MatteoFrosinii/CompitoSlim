<?php

class OrdineModel extends Model{

    public $numeroOrdine;
    public $data;
    public $importoTotale;
    public $listaArticoliVenduti = [];

    public function __construct($numeroOrdine, $data, $importoTotale) {
        $this->$numeroOrdine = $numeroOrdine;
        $this->$data = $data;    
        $this->$importoTotale = $importoTotale;
    }

    public function makeNumeroOrdine(){
        return rand(100_000,999_999);
    }

    public function makeDataData(){
        return rand(1,29)."/".rand(1,12)."/".rand(2000,2024);
    }

    public function makeImportoTotale(){
        
        $importoTot = 0;

        $this->listaArticoliVenduti[0] = new ArticoloVenduto(983607,119,2);
        $this->listaArticoliVenduti[1] = new ArticoloVenduto(983607,119,2);
        $this->listaArticoliVenduti[2] = new ArticoloVenduto(983607,119,2);

        //@var ArticoloVenduto $articolo
        foreach ($this->listaArticoliVenduti as $articolo) {
            if (get_class($articolo) == 'ArticoloVenduto')
                $importoTot += $articolo->getPrezzoDiVendita();
        }

        if (rand(0,1) == 1)
            $importoTot -= 20;

        return $importoTot;
    }

    public function getNumeroOrdine(){
        return $this->numeroOrdine;
    }
}