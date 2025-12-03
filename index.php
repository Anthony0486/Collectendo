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

include __DIR__ . '/View/view_header.php';


switch ($path) {
    case '/collectendo/home':
        include __DIR__ . '/Controler/controler_comingSoon.php';
        include __DIR__ . '/View/view_home.php';
        break;
    case '/collectendo/console_category':
        include __DIR__ . '/View/view_console_category.php';
        break;
    case '/collectendo/switch2':
        include include __DIR__ . '/View/view_switch2.php';
        include __DIR__ . '/Model/model_igdb_ComingSoon.php';
        break;
    default : 
        include include __DIR__ . '/Controler/controler_404.php';
        break;

}
include __DIR__ . '/View/view_footer.php';
?>


