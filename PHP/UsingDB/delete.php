<?php

$connection = new PDO("mysql:host=localhost;dbname=registration", "root", "12345678");
$stm = $connection->prepare("delete  FROM user WHERE user_id=?");
$stm->execute([$_GET['id']]);
header("location:list.php");
