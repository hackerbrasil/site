<?php
//dependencias
require '../inc/autoload.php';
if(isDev() || isset($_GET['debug'])){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

//regras
$segment=segment();
$controller=$segment[1];
switch($controller){
    case '/':
    view("home");
    break;
    case 'baixarLinks':
    controller("baixarLinks");
    break;
    case 'feed':
    controller("feed");
    break;
    default:
    view('404');
    break;
}
