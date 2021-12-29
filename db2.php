<?php
$rootpath=$_SERVER["DOCUMENT_ROOT"];
require_once $rootpath."/ourproject1/DBhandler/DBStudentDetails.php";

$dbo=new DBStudentDetails();

$rv=$dbo->getId("CSB21013","eweeeew");
echo($rv)
?>