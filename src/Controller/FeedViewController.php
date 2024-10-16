<?php
namespace Devis02\Uni4Life\Controller;
use Devis02\Uni4Life\Interface\ControllerInterface;
use Devis02\Uni4Life\Repository\PostRepository;
class FeedViewController implements ControllerInterface{
    private PostRepository $postRepository;
    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }
    public function handle(): void{
        $posts = $this->postRepository->getPostsFromDataBase();
        require_once __DIR__."/../../view/feed.php";
    }
}