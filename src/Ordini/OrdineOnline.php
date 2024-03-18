<?php

class OrdineOnline extends Ordine{
    public $indirizzoIP;
    public $codiceDiAutorizzazione;

    public function __construct($numeroOrdine, $data, $importoTotale, $indirizzoIP, $codiceDiAutorizzazione) {
        parent::__construct($numeroOrdine, $data, $importoTotale);
        $this->$indirizzoIP = $indirizzoIP;
        $this->$codiceDiAutorizzazione = $codiceDiAutorizzazione;
    }
}