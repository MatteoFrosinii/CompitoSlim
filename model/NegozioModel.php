<?php

class NegozioModel extends Model{

    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    private function __construct() {}
    
    public function makeData(){
        return $datiNegozio = ["MediaWorld",
                        "123 456 7890",
                        "Bo chi se lo ricorda",
                        "mediawolrd.it presumo",
                        "bo",];
    }
}
