<?php

function conn(){
    $hostName = "localhost";
    $userDB = "root";
    $passwordDB = "";
    $dbName = "stockcontrolweb";

    $connect = mysqli_connect($hostName, $userDB, $passwordDB, $dbName);
    return $connect;
}

?>