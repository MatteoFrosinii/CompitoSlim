<?php

class OrdineDiPersona extends Ordine{
    public $pagamento;

    public function __construct($numeroOrdine, $data, $importoTotale, $pagamento) {
        parent::__construct($numeroOrdine, $data, $importoTotale);
        $this->$pagamento = $pagamento;
    }
}