<?php
session_start();
$errors = [];
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}
function displayError($field)
{
    global $errors;
    if (isset($errors[$field])) {
        echo "<span style='color:red;'>{$errors[$field]}</span>";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>

    <form action="add.php" method="post" enctype="multipart/form-data">

        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname"></br>
        <?php displayError('fname'); ?> </br></br>


        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname"></br>
        <?php displayError('lname'); ?></br></br>


        <label for="address">Address:</label>
        <textarea name="address" id="address" rows="5" cols="40"></textarea></br>
        <?php displayError('address'); ?></br></br>

        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="" disabled selected>Select country</option>
            <option value="Egypt">Egypt</option>
            <option value="Canada">Canada</option>
            <option value="China">China</option>
            <option value="USA">USA</option>
        </select>
        </br></br>


        <span>Gender:</span>
        <label>
            <input type="radio" name="gender" value="male" required> Male
        </label>
        <label>
            <input type="radio" name="gender" value="female" required> Female
        </label>

        </br></br>



        <label for="username">Username:</label>
        <input type="email" name="username" id="username"> </br>
        <?php displayError('email'); ?></br></br>


        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass"></br></br>

        <label for="dept">Department:</label>
        <input type="text" name="dept" value="OpenSource" readonly></br></br>
        <label>choose your image:</label>
        <input type="file" name="img" required><br><br>


        <input type="submit" value="Submit">
        <input type="button" value="cancel">
    </form>

</body>

</html>