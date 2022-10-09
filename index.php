<?php 

require __DIR__ . "/inc/bootstrap.php";
require PROJECT_ROOT_PATH . "/Controller/Api/ProductController.php";
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );


if ((isset($uri[3]) && $uri[3] != 'list') |!isset($uri[4]) || $uri[4] !== 'products') {
    header("HTTP/1.1 404 Not Found");
    echo 'exsit <br>';
    exit();}

$list = new ProductController();

$list->actionList()

?>