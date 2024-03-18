<?php

class Negozio implements JsonSerializable{
    public $nome;
    public $telefono;
    public $indirizzo;
    public $sitoInternet;
    public $partitaIva;
    public $listaOrdini = [];
    public $listaArticoli = [];

    /*
    public function __construct($nome, $telefono, $indirizzo, $sitoInternet, $partitaIva) {
        $this->$nome = $nome;
        $this->$telefono = $telefono;
        $this->$indirizzo = $indirizzo;
        $this->$sitoInternet = $sitoInternet;
        $this->$partitaIva = $partitaIva;
    }
    */

    public function __construct(){ }

    public function addOrdine($ordine){
        array_push($listaOrdini,$ordine);
    }

    public function addArticolo($ordine){
        array_push($listaArticoli,$ordine);
    }

    public function loadData(){
        $this->nome = "MediaWorld";
        $this->telefono = "123 456 7890";
        $this->indirizzo = "Bo chi se lo ricorda";
        $this->sitoInternet = "mediawolrd.it presumo";
        $this->partitaIva = "bo";
    }

    public function jsonSerialize(){
        $attrs = [];
        $class_vars = get_class_vars(get_class($this));
        foreach ($class_vars as $name => $value) {
            $attrs[$name]=$this->{$name};
        }
        return $attrs;
    }
}