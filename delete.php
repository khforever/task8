<?php


//connection

try {
    $id = $_GET['id'];
    $pdo = new pdo("mysql:host=localhost;dbname=task8", "root", "");
    //query
    $pdo->query("delete from customer where id='$id'");
    header("Location:list_customer.php");
} catch (PDOException $e) {
    echo $e;
}

//close
$pdo = null;
