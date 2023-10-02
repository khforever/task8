<?php


//  1-create database using pdo




try{

$pdo =new PDO("mysql:host=localhost;",'root','');


$pdo-> exec("CREATE DATABASE task8 ");

echo "connection success";




}



 




catch (PDOException $e)
{


    echo $e ;
}


?>