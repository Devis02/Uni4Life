<?php
namespace Devis02\Uni4Life\Controller;
use Devis02\Uni4Life\Interface\ControllerInterface;
class FeedViewController implements ControllerInterface{

    public function handle(){
        require_once __DIR__."/../../view/feed.php";
    }
}