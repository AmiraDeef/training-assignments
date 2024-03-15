<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $skills = $_POST['skills'];
    $dept = $_POST['dept'];

    if ($gender == 'male') {
        echo "Thanks Mr. " . $fname . "<br>";
    } elseif ($gender == 'female') {
        echo "Thanks Mrs. " . $fname . "<br>";
    } else {
        echo "Thanks " . $fname . "<br>";
    }

    echo "Name: " . $fname . " " . $lname . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Country: " . $country . "<br>";


    if (!empty($skills)) {
        echo "Skills: " . implode(', ', $skills) . "<br>";
    } else {
        echo "No skills selected.<br>";
    }

    echo "Department: " . $dept . "<br>";
}
