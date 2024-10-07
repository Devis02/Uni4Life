<?php

namespace Devis02\Uni4Life\Repository;
use PDO;
use Devis02\Uni4Life\Model\Student;
class StudentRepository{
    private PDO $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function insertNewUser(Student $student): bool{
        $stmt = $this->pdo->prepare(query: "INSERT INTO student(name,password,email) VALUES(?,?,?)");
        $stmt->bindValue(param: 1,value: $student->getName());
        $stmt->bindValue(param: 2, value: $student->getPassword());
        $stmt->bindValue(param:3, value:$student->getEmail());
        return $stmt->execute();
    }

    public function VerifyUserByEmail(string $email): ?Student{
        $stmt=$this->pdo->prepare(query: "SELECT * FROM student WHERE email=?;");
        $stmt->bindValue(param:1,value: $email);;
        $stmt->execute();
        $studentData = $stmt->fetch();
        
        if($studentData==false){
            return null;
        } else{
            return $this->hydrateStudent(studentData: $studentData);
        }
    }

    public function hydrateStudent(array $studentData):Student{
        $student = new Student($studentData["id"],name: $studentData["name"],email: $studentData["email"]);
        $student->setPasswordBasedInDB(password: $studentData["password"]);
        return $student;
    }

}