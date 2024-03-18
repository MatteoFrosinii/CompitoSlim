<?php

class Ordine extends OrdineModel{
    
    public function addArticoloVenduto($articolo){
        array_push($listaArticoliVenduti,$articolo);
    }
}