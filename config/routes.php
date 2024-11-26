<?php
return [
    'GET|/'=>Devis02\Uni4Life\Controller\FeedViewController::class,
    'POST|/'=>Devis02\Uni4Life\Controller\NewPostController::class,
    'GET|/login'=>Devis02\Uni4Life\Controller\LoginViewController::class,
    'POST|/login'=>Devis02\Uni4Life\Controller\LoginController::class,
    'GET|/cadastro'=>Devis02\Uni4Life\Controller\CadastroViewController::class,
    'POST|/cadastro'=>Devis02\Uni4Life\Controller\NewStudentController::class,
    'GET|/logout'=>Devis02\Uni4Life\Controller\LogoutController::class,
    'GET|/saldo'=>Devis02\Uni4Life\Controller\SaldoViewController::class,
    'GET|/perfil'=>Devis02\Uni4Life\Controller\PerfilViewController::class,
];