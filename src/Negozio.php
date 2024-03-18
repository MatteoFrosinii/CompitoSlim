<?php

class Negozio implements JsonSerializable{
    public $nome;
    public $telefono;
    public $indirizzo;
    public $sitoInternet;
    public $partitaIva;
    public $listaArticoli = [];
    public $listaOrdini = [];

    /*
    public function __construct($nome, $telefono, $indirizzo, $sitoInternet, $partitaIva) {
        $this->$nome = $nome;
        $this->$telefono = $telefono;
        $this->$indirizzo = $indirizzo;
        $this->$sitoInternet = $sitoInternet;
        $this->$partitaIva = $partitaIva;
    }
    */

    public function __construct(){}

    public function addArticolo($ordine){
        array_push($listaArticoli,$ordine);
    }

    public function addOrdine($ordine){
        array_push($listaOrdini,$ordine);
    }

    public function loadData(){

        $datiNegozio = NegozioModel::getInstance()->makeData();
        
        $this->nome = $datiNegozio[0];
        $this->telefono = $datiNegozio[1];
        $this->indirizzo = $datiNegozio[2];
        $this->sitoInternet = $datiNegozio[3];
        $this->partitaIva = $datiNegozio[4];
        
        foreach (ArticoloModel::getInstance()->makeData() as $articolo) {
            array_push($this->listaArticoli, $articolo);
        }

        for ($i=0; $i < 5; $i++) { 
            array_push($this->listaOrdini, OrdineDiPersonaModel::getInstance()->makeData());
        }

        for ($i=0; $i < 5; $i++) { 
            array_push($this->listaOrdini, OrdineOnlineModel::getInstance()->makeData());
        }

    }

    public function jsonSerialize(){
        $attrs = [];
        $class_vars = get_class_vars(get_class($this));
        foreach ($class_vars as $name => $value) {
            $attrs[$name]=$this->{$name};
        }
        return $attrs;
    }

    public function getArticoli(){
        return $this->listaArticoli;
    }

    public function getArticoliPerId($idArticolo){
        //@var Articolo $articolo
        foreach ($this->listaArticoli as $articolo) {
            if (get_class($articolo) == 'Articolo'){
                if ($articolo->getId() == $idArticolo) {
                    return $articolo;
                }
            }
        }return null;
    }

    public function getListaOrdini(){
        return $this->listaOrdini;
    }

    public function getListaOrdiniPerId($idOrdine){
        foreach ($this->listaOrdini as $Ordine) {
            if ((get_class($Ordine) == 'OrdineDiPersona') || (get_class($Ordine) == 'OrdineOnline')){
                if ($Ordine->getNumeroOrdine() == $idOrdine) {
                    return $Ordine;
                }
            }
        }return null;
    }
}