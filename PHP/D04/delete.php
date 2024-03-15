<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location:login.php");
    exit;
}
require_once 'Database.php';

$db = new Database();
$db->delete_data("user", "user_id='{$_GET['id']}'");


header("location:list.php");
