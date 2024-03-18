<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;    

require __DIR__ . '/vendor/autoload.php';

function autoloader($class_name){

    $dirs = [
        '/',
        '/controllers',
        '/src',
        '/src/Articoli',
        '/src/Ordini',
        '/model',
        '/model/Articoli',
        '/model/Ordini'
    ];

    foreach ($dirs as $dir) {
        $file = __DIR__ . $dir . '/' . $class_name . '.php';
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
}   spl_autoload_register('autoloader');

$app = AppFactory::create();

$app->get('/negozio','ControllerNegozio:getAsJson');

$app->get('/articoli','ControllerArticoli:getAsJson');
$app->get('/articoli/{id}','ControllerArticoloPerId:getAsJson');

$app->get('/ordini','ControllerOrdini:getAsJson');
$app->get('/ordini/{id}','ControllerOrdiniPerId:getAsJson');
//$app->get('/articoli/{id}','ControllerArticoloPerId:getAsJson');
//$app->get('/articoli/{id}','ControllerArticoloPerId:getAsJson');

srand(275);

$app->run();
