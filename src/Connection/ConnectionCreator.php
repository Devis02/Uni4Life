<?php
namespace Devis02\Uni4Life\Connection;
use PDO;
abstract class ConnectionCreator {
    
    public static function criarConexao(): PDO{
        $pdo =  new PDO(dsn: "mysql:host=localhost;dbname=uni4life",username: "root",password: "Courtois!23");
        $pdo->setAttribute(attribute: PDO::ATTR_ERRMODE,value: PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(attribute: PDO::ATTR_DEFAULT_FETCH_MODE, value: PDO::FETCH_ASSOC);
        return $pdo;
    }
}