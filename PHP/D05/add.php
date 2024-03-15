<?php
session_start();

// for validation
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = val_string($_POST["fname"]);

    $lname = val_string($_POST["lname"]);
    $address = val_string($_POST["address"]);
    $country = val_string($_POST["country"]);
    $gender = val_string($_POST["gender"]);
    $username = email($_POST["username"]);
    $pass = val_string($_POST["pass"]);
    $dept = val_string($_POST["dept"]);
    $img = $_FILES["img"]["name"];

    if (strlen($fname) < 2) {
        $errors["fname"] = "firstname invalid";
    }

    if (strlen($lname) < 2) {
        $errors["lname"] = "lastname invalid";
    }
    if (strlen($address) < 2) {
        $errors["address"] = "address invalid";
    }
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email doesn't exist";
    }

    if (empty($errors)) {
        $target_file = "imgs/" . basename($img);

        if (!move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            $errors["image"] = "Error uploading image!";
        }
    }
}

if (count($errors) > 0) {
    $_SESSION["errors"] = $errors;
    header("location:registeration.php");
    exit;
}
$_SESSION['fname'] = $fname;
$_SESSION['email'] = $username;
require_once 'Database.php';
$data = [
    'fname' => $fname,
    'lname' => $lname,
    'address' => $address,
    'country' => $country,
    'gender' => $gender,
    'username' => $username,
    'pass' => $pass,
    'dept' => $dept,
    'img' => $img

];
$db = new Database();
$db->insert_data("user", $data);


header("location:list.php");

function val_string($value, $min = 3, $max = INF)
{
    $value = trim($value);
    $value = htmlspecialchars($value);
    if (strlen($value) < $min) {
        return false;
    }
    if (strlen($value) > $max) {
        return false;
    }
    return $value;
}

function email($value)
{
    return filter_var($value, FILTER_VALIDATE_EMAIL);
}
