<?php

namespace Devis02\Uni4Life\Controller;

abstract class CadastroController{
    public static function handle(): void{
        require_once __DIR__."/../../public/view/cadastro.php";
    }
}