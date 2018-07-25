<?php 
/** 
 * Configuration App
 *
 * @var $config['displayErrorDetails'] to display error details on slim
 * @var $config['addContentLengthHeader'] should be set to false. This will allows the web server to set the Content-Length header which makes Slim behave more predictably
 * @var $config['httpVersion'] The protocol version used by the Response object. Default is '1.1'. 
 * @var $config['responseChunkSize'] Size of each chunk read from the Response body when sending to the browser. Default is 4096
 * @var $config['outputBuffering'] If false, then no output buffering is enabled. If 'append' or 'prepend', then any echo or print statements are captured and are either appended or prepended to the Response returned from the route callable. Default is 'append'
 * @var $config['determineRouteBeforeAppMiddleware'] When true, the route is calculated before any middleware is executed. This means that you can inspect route parameters in middleware if you need to. Default is false.
 * 
 */
$config['displayErrorDetails']                  = true;
$config['addContentLengthHeader']               = false;
$config['httpVersion']                          = '1.1';
$config['responseChunkSize']                    = 4096;
$config['outputBuffering']                      = 'append';
$config['determineRouteBeforeAppMiddleware']    = false;

/**
 * Configuration Router Cache
 * 
 * @var $config['router']['enableCache'] If set to true, this will make your router performance faster. If you in development mode, just set to false. The exist file cache will automatically deleted from server.
 * @var $config['router']['folderCache'] To set the folder of router cache. Don't leave this blank.  
 * @var $config['router']['fileCache'] To set the filename of router cache. Don't leave this blank.
 * 
 */
$config['router']['enableCache']    = false;
$config['router']['folderCache']    = 'cache-router';
$config['router']['fileCache']      = 'routes.cache.php';

// Configuration reSlim
$config['reslim']['timezone'] = 'Asia/Jakarta';