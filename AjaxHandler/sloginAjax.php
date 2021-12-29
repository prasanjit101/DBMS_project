
<?php
$rootpath=$_SERVER["DOCUMENT_ROOT"];
require_once $rootpath."/ourproject1/DBhandler/DBStudentDetails.php";
$dbo=new DBStudentDetails();

$action=$_POST["action"];

if($action=="loginHandler")
{
    //username: trimmedUn, pwd: trimmedPw, action: "loginHandler" 
    $un=$_POST["username"];
    $pwd=$_POST["pwd"];
    $status="";
    $id=$dbo->getId($un,$pwd);

    if($id==-1)
    {
        $status="ERROR";
        session_start();
        session_destroy();
    }
    else{
        session_start();
        $_SESSION["studentid"]=$id;
        $status="OK";
    }
    $rv=array("status"=>$status);

    echo json_encode($rv);
    exit;
}

if($action=="otherHandler")
{

}

?>
