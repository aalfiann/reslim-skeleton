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
            'welcome' => 'Hello World, here is the default index reSlim',
            'concept' => 'reSlim is using authentication by token. So You have to register and login to get generated new token.',
            'author' => [
                'name' => 'M ABD AZIZ ALFIAN',
                'email' => 'aalfiann@gmail.com',
                'github' => 'https://github.com/aalfiann',
                'linkedin' => 'https://www.linkedin.com/in/azizalfian'
            ],
            'engine' => [
                'name' => 'reSlim',
                'version' => RESLIM_VERSION,
                'github' => 'https://github.com/aalfiann/reSlim',
                'license' => 'https://github.com/aalfiann/reSlim/blob/master/license.md',
                'documentation' => 'Documentation is available on Github Wiki.'
            ],
            'extensions' => [
                'module' => 'https://github.com/aalfiann/reSlim-modules',
                'template' => 'https://github.com/aalfiann/reSlim-ui-boilerplate'
            ]
        ];
        $body->write(json_encode($data));
        return $response
                ->withStatus(200)
                ->withHeader('Content-Type','application/json; charset=utf-8')
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization, ETag')
                ->withHeader('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, OPTIONS')
                ->withHeader('Access-Control-Expose-Headers','ETag')
                ->withBody($body);
    });