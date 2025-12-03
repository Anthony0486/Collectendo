<?php
session_start();
$url = parse_url($_SERVER['REQUEST_URI']);
// var_dump($url); 
$path = '';

if(isset($url['path'])){
    $path = $url['path'];
}else{
    $path = "/collectendo/";
}

include './View/view_header.php';

switch ($path) {
    case '/collectendo/home':
        include './View/view_home.php';
        break;
    case '/collectendo/console_category':
        include './View/view_console_category.php';
        break;
    case '/collectendo/switch2':
        include './View/view_switch2.php';
        break;
    default : 
        include './Controler/404.php';
        break;

}
include './View/view_footer.php';
?>


