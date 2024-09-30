<?php
namespace Devis02\Uni4Life\Connection;
use PDO;
abstract class ConnectionCreator {
    
    public static function criarConexao(): PDO{
        return new PDO(dsn: "mysql:host=localhost;dbname=uni4life",username: "root",password: "Courtois!23");
    }
}