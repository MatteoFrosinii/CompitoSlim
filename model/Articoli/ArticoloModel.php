<?php

class ArticoloModel extends Model{

    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    private function __construct() {}
    
    public function makeData(){
        $nomeArticoli = [
        "Iphone 14",
        "Iphone 13",
        "Iphone 12",
        "Iphone 11",
        "Iphone X",
        "Pixel 6",
        "Pixel 5",
        "Pixel 4"];

        $listaArticoli = [];

        for ($i=0; $i < sizeof($nomeArticoli); $i++) { 
            array_push($listaArticoli, new Articolo(rand(100_000,999_999), $nomeArticoli[$i], "Telefono", rand(100,1000)));
        }

        return $listaArticoli;
    }
}
