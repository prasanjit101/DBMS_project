<?php

session_start();

if (isset($_SESSION["id"]))
{
    $t1=$_SESSION["id"];

    echo "the value retrived is ".$t1;
}
else{
    echo "the value is not set";
}


?>