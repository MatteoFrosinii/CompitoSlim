<?php

class Articolo {

    public $id;
    public $nome;
    public $descrizione;
    public $prezzoDiListino;
    
    public function __construct($id, $nome, $descrizione, $prezzoDiListino){
        $this->$id = $id;
        $this->$nome = $nome;
        $this->$descrizione = $descrizione;
        $this->$prezzoDiListino = $prezzoDiListino;
    }

}