<?php

class ArticoloVenduto {
    public $id;
    public $prezzoDiVendita;
    public $quantitaAcquistata;

    public function __construct($id, $prezzoDiVendita, $quantitaAcquistata){
        $this->$id = $id;
        $this->$prezzoDiVendita = $prezzoDiVendita;
        $this->$quantitaAcquistata = $quantitaAcquistata;
    }
    
    public function getPrezzoDiVendita()
    {
        return $this->prezzoDiVendita;
    }
}
