<?php

$connection = new PDO("mysql:host=localhost;dbname=registration", "root", "12345678");


if (isset($_GET['id'])) {
    $stm = $connection->prepare("SELECT * FROM user WHERE user_id=?");
    $stm->execute([$_GET['id']]);
    $user = $stm->fetch(PDO::FETCH_ASSOC);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($user)) {
    $stm = $connection->prepare("UPDATE user SET fname=?, lname=?, address=?, country=?, gender=?, username=?, pass=?, dept=? WHERE user_id=?");
    $stm->execute([$_POST['fname'], $_POST['lname'], $_POST['address'], $_POST['country'], $_POST['gender'], $_POST['username'], $_POST['pass'], $_POST['dept'], $user['user_id']]);



    header("location:list.php");
}

?>






<form action="" method="post">

    <label for="fname">First Name:</label>
    <input type="text" name="fname" id="fname" value="<?= $user['fname'] ?>"> </br></br>


    <label for="lname">Last Name:</label>
    <input type="text" name="lname" id="lname" value="<?= $user['lname'] ?>"></br></br>

    <label for="address">Address:</label>
    <textarea name="address" value="<?= $user['address'] ?>" id="address" rows="5" cols="40"></textarea></br></br>

    <label for="country">Country:</label>
    <select id="country" name="country">
        <option value="" disabled selected>Select country</option>
        <option value="Egypt">Egypt</option>
        <option value="Canada">Canada</option>
        <option value="China">China</option>
        <option value="USA">USA</option>
    </select></br></br>

    <span>Gender:</span>
    <label>
        <input type="radio" name="gender" value="<?= $user['gender'] ?>" required> Male
    </label>
    <label>
        <input type="radio" name="gender" value="<?= $user['gender'] ?>" required> Female
    </label>
    </br></br>
    <!-- Select your Skills <br>
<label>
    <input type="checkbox" name="skills[]" value="HTML"> HTML
</label>
<label>
    <input type="checkbox" name="skills[]" value="CSS"> CSS
</label>
<label>
    <input type="checkbox" name="skills[]" value="PHP"> PHP
</label>
<label>
    <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript
</label>

<br><br> -->


    <label for="username">Username:</label>
    <input type="text" name="username" value="<?= $user['username'] ?>" id="username"> </br></br>


    <label for="pass">Password:</label>
    <input type="password" name="pass" value="<?= $user['pass'] ?>" id="pass"></br></br>

    <label for="dept">Department:</label>
    <input type="text" name="dept" value="OpenSource" readonly></br></br>



    <input type="submit" value="update">
    <input type="button" value="cancel">
</form>