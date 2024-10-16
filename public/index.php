<?php
require_once __DIR__.'/../vendor/autoload.php';
use Devis02\Uni4Life\Connection\ConnectionCreator;
use Devis02\Uni4Life\Repository\StudentRepository;
$pdo = ConnectionCreator::criarConexao();
$repository = new StudentRepository($pdo);
$routes = require_once __DIR__.'/../config/routes.php';
$pathInfo = $_SERVER["REQUEST_URI"];
$httpMethod = $_SERVER["REQUEST_METHOD"];
$key = "$httpMethod|$pathInfo";

session_start();

if(!isset($_SESSION["Logado"]) && $pathInfo!="/login" && $pathInfo!="/cadastro") {
    header(header: "Location:/login");
}
if(array_key_exists(key: $key,array: $routes)){
    $controllerClass = $routes["$httpMethod|$pathInfo"];
    $controller = new $controllerClass($repository);
    
}

$controller->handle();
