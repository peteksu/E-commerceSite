<?php
include "connect2.php";

$Username=$_POST["Username"];
$Email=$_POST["Email"];
$Password=$_POST["pw"];
$adress=$_POST["adress"];

    $save=$connection->prepare("INSERT INTO members SET
        Username=:Username,
        Email=:Email,
        adress=:adress,
        pw=:pw
        ");
    $insert=$save->execute(array(
        'Username' => $_POST['Username'],
        'Email' => $_POST['Email'],
        'adress' => $_POST['adress'],
        'pw' => $_POST['pw']
    ));

    if ($insert) {
        Header("Location:index.php?situation=ok");
    }else {
        Header("Location:sign_up.php?situation=no");
    }

?>