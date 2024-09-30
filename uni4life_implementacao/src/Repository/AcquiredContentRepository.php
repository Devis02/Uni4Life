<?php

namespace Devis02\Uni4Life\Repository;
use PDO;
class AcquiredContentRepository{
    private PDO $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
}