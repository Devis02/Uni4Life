<?php

namespace Devis02\Uni4Life\Repository;
use PDO;
class PostRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function getPostsFromDataBase(): array{
        $stmt = $this->pdo->query("SELECT * FROM post JOIN student on post.author_id = student.id");
        $posts = $stmt->fetchAll();
        return $posts;
    }
}