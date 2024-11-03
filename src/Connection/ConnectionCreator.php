<?php
namespace Devis02\Uni4Life\Connection;
use PDO;
abstract class ConnectionCreator {
    
    public static function criarConexao(): PDO{

        $pdo =  new PDO(dsn: $_ENV["DB"].":host=".$_ENV["DB_HOST"].";dbname=".$_ENV["DB_NAME"],username: $_ENV["DB_USER"],password: $_ENV["DB_PASSWORD"]);
        $pdo->setAttribute(attribute: PDO::ATTR_ERRMODE,value: PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(attribute: PDO::ATTR_DEFAULT_FETCH_MODE, value: PDO::FETCH_ASSOC);
        return $pdo;
        
    }
}