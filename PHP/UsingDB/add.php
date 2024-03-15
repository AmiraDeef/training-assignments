<?php


$connection = new PDO("mysql:host=localhost;dbname=registration", "root", "12345678");
$stm = $connection->prepare("INSERT INTO user (fname, lname, address, country, gender, username, pass, dept) 
VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
$stm->execute([$_POST['fname'], $_POST['lname'], $_POST['address'], $_POST['country'], $_POST['gender'], $_POST['username'], $_POST['pass'], $_POST['dept']]);
header("location:list.php");
