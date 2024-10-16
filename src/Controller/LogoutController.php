<?php

namespace Devis02\Uni4Life\Controller;
use Devis02\Uni4Life\Interface\ControllerInterface;

class LogoutController implements ControllerInterface{
    public function handle(){
        session_destroy();
        header("Location:/login");
    }
}