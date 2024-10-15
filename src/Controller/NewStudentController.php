<?php

namespace Devis02\Uni4Life\Controller;
use Devis02\Uni4Life\Repository\StudentRepository;
use Devis02\Uni4Life\Model\Student;
use Devis02\Uni4Life\Interface\ControllerInterface;
class NewStudentController implements ControllerInterface{
    private StudentRepository $repository;

    public function __construct(StudentRepository $repository) {
        $this->repository = $repository;
    }
    public function handle(): void{
        $email = filter_input(type: INPUT_POST,var_name: "Email", filter: FILTER_VALIDATE_EMAIL);
        $newStudent = new Student(id: null,name: $_POST["Nome"],email: $email);
        $newStudent->setPassword(password: $_POST["Senha"]);
        if($this->repository->VerifyUserByEmail(email: $newStudent->getEmail())==false){
            $this->repository->insertNewUser(student: $newStudent);
            header(header: "Location: /login");
        } else{
            header(header: "Location: /login");
        }
    }
}