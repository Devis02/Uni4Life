<?php

namespace Devis02\Uni4Life\Model;

class Student{
    private ?int $id;
    private string $name;
    private ?string $password;
    private string $email;
    private string $profile_photo_path;

    public function __construct(?int $id, string $name,$email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    public function setPassword(string $password): void{
        $hashed = password_hash(password: $password, algo: PASSWORD_ARGON2ID);
        $this->password = $hashed;
    }

    public function setPasswordBasedInDB(string $password): void{
        $this->password = $password;
    }
    public function getName():string{
        return $this->name;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function getPassword():string{
        return $this->password; 
    }
    public function getId():int{
        return $this->id;
    }

    public function setProfilePhoto(string $path): void{
        $this->profile_photo_path = $path;
    }
}