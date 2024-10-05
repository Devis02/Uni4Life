<?php

namespace Devis02\Uni4Life\Repository;
use PDO;
class ContentRepository{
    private PDO $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
}