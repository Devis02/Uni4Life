<?php

class Content{
    private ?int $id;
    private string $title;
    private int $author_id;
    private string $path;

    public function getId(): int{
        return $this->id;
    }

    public function getAuthorId(): string{
        return $this->author_id;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function setTitle(string $title): void{
        $this->title = $title;
    }
}