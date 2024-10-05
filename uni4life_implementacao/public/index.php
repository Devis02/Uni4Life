<?php
require_once __DIR__.'/../vendor/autoload.php';
use Devis02\Uni4Life\Connection\ConnectionCreator;
use Devis02\Uni4Life\Controller\LoginController;
$pdo = ConnectionCreator::criarConexao();

LoginController::handle();

