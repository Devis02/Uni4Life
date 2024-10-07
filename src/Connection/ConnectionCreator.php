<?php
namespace Devis02\Uni4Life\Connection;
use PDO;
abstract class ConnectionCreator {
    
    public static function criarConexao(): PDO{
        $pdo =  new PDO(dsn: "mysql:host=localhost;dbname=uni4life",username: "root",password: "Courtois!23");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}