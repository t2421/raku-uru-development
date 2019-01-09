<?php

$dispatcher= FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) {
    $router->get('/', 'index');
    $router->get('/top', 'top');
    $router->get('/item', 'itemIndex');
    $router->get('/item/{id:\d+}', 'itemDetail');
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$uri = remove_urlparam($uri);
$uri = rawurldecode($uri);
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);


switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo not_found();
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        http_response_code(405);
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        echo $handler($vars);
        break;
}
function index(){
    renderContents('welcome.html');
}
function itemDetail($vars){
    $item_id = $vars["id"];
    renderContents('item_detail.html');
}
function itemIndex(){
    renderContents('item_index.html');
}
function top(){
    renderContents('top.html');
}



function not_found()
{
    return 'Not Foundです';
}

function remove_urlparam($url){
    if (false !== $pos = strpos($url, '?')) {
        return substr($url, 0, $pos);
    }
    return $url;
}