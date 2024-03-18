<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

abstract class Controller{

    function getJson(Request $request, Response $response, $args) {
        return $response->withHeader("Content-Type", "application/json")->withStatus(200);
    }
}
