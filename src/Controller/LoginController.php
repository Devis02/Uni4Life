<?php

namespace Devis02\Uni4Life\Controller;
use Devis02\Uni4Life\Model\Student;
use Devis02\Uni4Life\Repository\StudentRepository;
use Devis02\Uni4Life\Interface\ControllerInterface;
class LoginController implements ControllerInterface{
    private StudentRepository $studentRepository;
    public function __construct(StudentRepository $studentRepository) {
        $this->studentRepository = $studentRepository;
    }
    public function handle(): void{
        $email = filter_input(type: INPUT_POST,var_name: "Email", filter: FILTER_VALIDATE_EMAIL);
        $password = filter_input(type: INPUT_POST,var_name: "Senha");
        $verificationStudent = $this->studentRepository->VerifyUserByEmail(email: $email);
        if($verificationStudent==null){
            $verificationStudent = new Student(id: null,name: "",email: "");
            $verificationStudent->setPassword(password: "");
        }
        if(password_verify(password: $password,hash: $verificationStudent->getPassword())){
            $_SESSION["Logado"]=true;
            header(header: "Location: /");
        } else{
            header(header: "Location: /login");
        }
    }
}