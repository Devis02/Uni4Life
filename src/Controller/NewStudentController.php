<?php

namespace Devis02\Uni4Life\Controller;
use Devis02\Uni4Life\Repository\StudentRepository;
use Devis02\Uni4Life\Model\Student;
class NewStudentController{
    private StudentRepository $repository;

    public function __construct(StudentRepository $repository) {
        $this->repository = $repository;
    }
    public function handle(){
        $newStudent = new Student(name: $_POST["Nome"],email: $_POST["Email"]);
        $newStudent->setPassword(password: $_POST["Senha"]);
        if($this->repository->VerifyUserByEmail($newStudent->getEmail())==false){
            $this->repository->insertNewUser(student: $newStudent);
            header(header: "Location: /login");
        } else{
            header("Location: /login");
        }
    }
}