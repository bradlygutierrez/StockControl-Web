<?php

function conn(){
    $hostName = "localhost";
    $userDB = "id19962183_stockcontroluser";
    $passwordDB = "wStockControl123#";
    $dbName = "id19962183_stockcontrol";

    $connect = mysqli_connect($hostName, $userDB, $passwordDB, $dbName);
    return $connect;
}
//BD connection

?>