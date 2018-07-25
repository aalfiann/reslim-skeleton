<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// POST api to append new log
$app->post('/logs/data/append', function (Request $request, Response $response) {
    $datapost = $request->getParsedBody();    
    $this->logger->addInfo('{"code":'.json_encode($datapost['Code']).',"message":'.json_encode($datapost['Message']).'}',['created_by'=> $datapost['Name'],'email' => $datapost['Email'],'IP'=>$this->visitorip]);
    $body = $response->getBody();
    $body->write('{"status":"success",message":"Log successfuly created!"}');
    return $response
                ->withStatus(200)
                ->withHeader('Content-Type','application/json; charset=utf-8')
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization, ETag')
                ->withHeader('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, OPTIONS')
                ->withHeader('Access-Control-Expose-Headers','ETag')
                ->withBody($body);
});