<?php

/*
(2)

create table Employee with:
id integer
fname text
lname text
email text
address text
age int

*/



try{

$pdo =new PDO("mysql:host=localhost;dbname=task8",'root','');
echo "connection success";



$pdo -> query( "CREATE TABLE customer
 (id int not null auto_increment primary key ,
 fname varchar (20),
 lname varchar (50),
 email varchar (100),
 address varchar (200),
 age int (20)
 )");
 

}








catch (PDOException $e)
{


    echo $e ;
}
 

?>