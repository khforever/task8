<?php

try {
    //connection
    $pdo = new pdo("mysql:host=localhost;dbname=task8", "root", "");
    //query

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $pdo->query("UPDATE customer
    SET fname ='$fname', lname ='$lname', email='$email',address='$address'
    WHERE id= '$id'");

    // $data = $pdo->prepare("UPDATE students
    //  SET fname =?, lname =?, email=?,address=?
    //  WHERE id= ?");
    // $data->execute([$fname, $lname, $email, $address, $id]);

    header("Location:list_customer.php");

} catch (PDOException $e) {
    echo $e;
}

$pdo = null;
