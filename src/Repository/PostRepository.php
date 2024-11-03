<?php

namespace Devis02\Uni4Life\Repository;
use PDO;
class PostRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function getPostsFromDataBase(): array{
        $stmt = $this->pdo->query("SELECT * FROM post JOIN student on post.author_id = student.id ORDER BY post.id DESC" );
        $posts = $stmt->fetchAll();
        return $posts;
    }

    public function insertPostIntoDataBase(int $id,string $content):bool{
        $stmt = $this->pdo->prepare(query: "INSERT INTO post (author_id,content,publish_date) VALUES(?,?,?);");
        $stmt->bindValue(param: 1,value: $id);
        $stmt->bindValue(param:2,value: $content);
        $stmt->bindValue(3,date("Y/m/d"));
        return $stmt->execute();
    }
}