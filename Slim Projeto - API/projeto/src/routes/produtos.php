<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function($app){
    $app->group('/api/v1', function($app){
        $app->get('/produtos', function($request, $response){
            return $response->withJson(['nome' => 'Moto G']);
        });
    });
};
