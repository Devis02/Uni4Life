<?php

namespace Devis02\Uni4Life\Controller;

abstract class LoginController{
    public static function handle(){
        require_once __DIR__."/../../public/login.php";
    }
}