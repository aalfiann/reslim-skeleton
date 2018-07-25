<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

    // GET example api to show all data role
    $app->get('/', function (Request $request, Response $response) {
        $body = $response->getBody();
        $response = $this->cache->withEtag($response, $this->etag.'-'.trim($_SERVER['REQUEST_URI'],'/'));
        $data = [
            'status' => 'success',
            'code' => '200',
            'welcome' => 'Hello World, here is the default index reSlim-skeleton',
            'author' => [
                'name' => 'M ABD AZIZ ALFIAN',
                'email' => 'aalfiann@gmail.com',
                'github' => 'https://github.com/aalfiann',
                'linkedin' => 'https://www.linkedin.com/in/azizalfian'
            ],
            'engine' => [
                'name' => 'reSlim-skeleton',
                'github' => 'https://github.com/aalfiann/reSlim-skeleton',
                'license' => 'https://github.com/aalfiann/reSlim-skeleton/blob/master/license.md'
            ]
        ];
        $body->write(json_encode($data,JSON_PRETTY_PRINT));
        return $response
                ->withStatus(200)
                ->withHeader('Content-Type','application/json; charset=utf-8')
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization, ETag')
                ->withHeader('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, OPTIONS')
                ->withHeader('Access-Control-Expose-Headers','ETag')
                ->withBody($body);
    });