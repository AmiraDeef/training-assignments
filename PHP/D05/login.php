<html>

<head>
    <title>login</title>
</head>

<body>
    <form action="loginController.php" method="post">

        <label>email:</label>
        <input type="email" name="email" required><br><br>



        <label>Password:</label>
        <input type="password" name="pass" required><br><br>

        <input type="submit" value="Submit">

    </form>
    <?php
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>
</body>

</html>