<?php
session_start();

if(isset($_SESSION["studentid"]))
{
    echo "Welcome valid user";
}
else{
    echo "you are not a valid user";
}

?>