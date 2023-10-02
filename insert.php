<?php


/*




3- insert 3 rows in customer table using pdo and html form
*/


try{

$pdo =new PDO("mysql:host=localhost;dbname=task8",'root','');
echo "connection success";


// ($_POST);
//query

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$age=$_POST['age'];




$pdo->query("insert into customer (fname,lname,email,address,age)
values('$fname','$lname','$email','$address','$age')");

 
header("Location:list_customer.php");

}








catch (PDOException $e)
{


    echo $e ;
}
 

?>