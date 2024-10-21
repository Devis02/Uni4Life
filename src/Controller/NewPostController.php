<?php 
namespace Devis02\Uni4Life\Controller;
use Devis02\Uni4Life\Interface\ControllerInterface;
use Devis02\Uni4Life\Repository\PostRepository;

class NewPostController implements ControllerInterface{
    public PostRepository $postRepository;
    public function __construct(PostRepository $postRepository) {
        $this->postRepository = $postRepository;
    }

    public function handle(){
        $author_id = $_SESSION['id'];
        $content = $_POST['post-content'];
        $this->postRepository->insertPostIntoDataBase(id: $author_id,content: $content);
        header('Location: /');

    }
}