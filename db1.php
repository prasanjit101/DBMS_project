<?php
$servername = "localhost";
$username = "prakash";
$password = "admin123";
$databaseName="ourdatabase";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

//execute sql commands on this connection
try{
$cmd="insert into student_details (rollno,name,password) values('CSB21009','Ramesh Jha','abc123')";
$conn->exec($cmd);
}
catch(PDOException $ee)
{
    echo $ee->getMessage();
}


try{
$cmd="insert into student_details (rollno,name,password) values (:rollno,:tname,:password)";
$templet=$conn->prepare($cmd);

$templet->bindValue(":rollno","CSB21011");
$templet->bindValue(":tname","MunMun Das");
$templet->bindValue(":password","admin123");
$templet->execute();


$templet->bindValue(":rollno","CSB21012");
$templet->bindValue(":tname","GunGun Das");
$templet->bindValue(":password","admin123");
$templet->execute();

$templet->bindValue(":rollno","CSB21013");
$templet->bindValue(":tname","Mahalxmi Uppadhay");
$templet->bindValue(":password","admin123");
$templet->execute();

}
catch(PDOException $ee)
{

}




try{
    $cmd="insert into student_details (rollno,name,password) values (:rollno,:tname,:password)";
    $templet=$conn->prepare($cmd);
    
    $templet->bindParam(":rollno",$vrollno);
    $templet->bindParam(":tname",$vname);
    $templet->bindParam(":password",$abc);

    $vrollno="CSM21010";
    $vname="Ramanujan Mahapatro";
    $abc="admin123";
    $templet->execute();


    $vrollno="CSM21011";
    $vname="Sherlock Holms";
    $abc="admin123";
    $templet->execute();


    $vrollno="CSM21012";
    $vname="Benedict Cumberbatch";
    $abc="admin123";
    $templet->execute();
    
    }
    catch(PDOException $ee)
    {
    
    }

try{
    $cmd="insert into student_details (rollno,name,password) values (:rollno,:tname,:password)";
    $templet=$conn->prepare($cmd);

    $templet->execute(array(":rollno"=>"SWS21001",":tname"=>"Swati Mishra",":password"=>"admin123"));
    $templet->execute([":rollno"=>"SWS21002",":tname"=>"Sahil Balgotra",":password"=>"admin123"]);

}
catch(PDOException $ee)
{

}


try{
    $cmd="select * from student_details ";
    $templet=$conn->prepare($cmd);

    $templet->execute();

    echo ("<br>".$templet->rowCount()."<br>");

    $rv=$templet->fetchAll(PDO::FETCH_ASSOC);
    print_r($rv);
    
    echo("<br>");
    $tv=[[":rollno"=>"SWS21002",":tname"=>"Sahil Balgotra",":password"=>"admin123"],[":rollno"=>"SWS21001",":tname"=>"Swati Mishra",":password"=>"admin123"]];
    print_r($tv);

}
catch(PDOException $ee)
{

}


try{
    echo("<br>");
    echo("<br>");
    $cmd="select name from student_details where name like :rollno";
    $templet=$conn->prepare($cmd);
    $templet->execute([":rollno"=>"_____ %"]);
    $rv=$templet->fetchAll(PDO::FETCH_ASSOC);
    var_dump($rv);    
}
catch(PDOException $ee)
{

}




?>