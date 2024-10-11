<?php
return [
    'GET|/'=>Devis02\Uni4Life\Controller\FeedViewController::class,
    'GET|/login'=>Devis02\Uni4Life\Controller\LoginViewController::class,
    'POST|/login'=>Devis02\Uni4Life\Controller\LoginController::class,
    'GET|/cadastro'=>Devis02\Uni4Life\Controller\CadastroViewController::class,
    'POST|/cadastro'=>Devis02\Uni4Life\Controller\NewStudentController::class,
];