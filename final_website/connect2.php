

<?php

$servername="localhost";
$username="root";
$password="";

try{
    $connection=new PDO("mysql:host=$servername;dbname=clothes",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    echo "connection failed".$e->getMessage();
}

?>
