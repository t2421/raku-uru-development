<?php
require_once __DIR__.'/data/top_data.php';
require_once __DIR__.'/data/mail_data.php';
require_once __DIR__.'/data/item_detail_data.php';

$dispatcher= FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) {
    $router->get('/', 'index');
    $router->get('/top', 'top');
    $router->get('/item', 'itemIndex');
    $router->get('/item/{id:\d+}', 'itemDetail');
    $router->get('/mail/{type}', 'mailPage');
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
    global $item_detail_data;
    $item_id = $vars["id"];
    renderContents('item_detail.html',$item_detail_data);
}
function itemIndex(){
    renderContents('item_index.html');
}
function top(){
    global $top_data;
    renderContents('top.html',$top_data);
}

function mailPage($vars){
    global $mail_data;
    
    renderMail('mail_complete.html',$mail_data);
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