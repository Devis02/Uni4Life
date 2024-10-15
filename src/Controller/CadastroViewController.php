<?php

namespace Devis02\Uni4Life\Controller;
use Devis02\Uni4Life\Interface\ControllerInterface;
class CadastroViewController implements ControllerInterface{
    public function handle(): void{
        require_once __DIR__."/../../view/cadastro.php";

    }
}