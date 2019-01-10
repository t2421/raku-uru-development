<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/data/common_data.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader);
$filter = new Twig_SimpleFilter('numberformat', function ($number) {
	return number_format($number);
});
$twig->addFilter($filter);

function render($html,$data=array()){
    global $twig;
    echo $twig->render($html,$data);
}

function renderContents($html,$data=array()){
    global $twig;
    global $common_data;
    
    $common = $twig->render("layout.html",$common_data);
    $contents = $twig->render($html,$data);
    $header_custom = $twig->render("header_custom.html",$data);
    $body_custom = $twig->render("body_custom.html",$data);
    $out = str_replace("<[-- MAIN_CONTENTS --]>",$contents,$common);
    $out = str_replace("<[-- HEADER_CUSTOM_CONTENTS --]>",$header_custom,$out);
    $out = str_replace("<[-- BODY_CUSTOM_CONTENTS --]>",$body_custom,$out);
    echo $out;
}


function renderMail($html,$data=array()){
    global $twig;
    
    $common = $twig->render("mail_layout.html");
    $contents = $twig->render($html,$data);
    $out = str_replace("<[-- MAIN_CONTENTS --]>",$contents,$common);
    echo $out;
}