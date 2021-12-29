<?php
$rootpath=$_SERVER["DOCUMENT_ROOT"];
require_once $rootpath."/ourproject1/DBhandler/DatabaseConnection.php";


class DBStudentDetails
{    
    public function getId($rollno,$password)
    {
     //connect with the DB and return the id 
     //column from the student_details table where the rollno and password is a match

      $id="-1";
      $dbo=new DatabaseConnection();
      $cmd="select id from student_details where rollno=:rollno and password=:password";
      $templet=$dbo->conn->prepare($cmd);

      $templet->execute([":rollno"=>$rollno,":password"=>$password]);

      if($templet->rowCount()>0)
      {        
      $rtable=$templet->fetchAll(PDO::FETCH_ASSOC);
      $id=$rtable[0]['id'];
      }

      return $id;
    }
}


?>