<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ControllerArticoli extends Controller{
    
    public function getAsJson(Request $request, Response $response, $args){
        $negozio = new Negozio();
        $negozio->loadData();
        $response->getBody()->write(json_encode($negozio->getArticoli()));
        return parent::getJson($request, $response, $args);
    }
}