<?php
$data = implode(",", $_POST);
file_put_contents("data.txt",  $data . "\n", FILE_APPEND);
header("location: llist.php");
