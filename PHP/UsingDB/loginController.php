
<?php



session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['pass'];

    $connection = new PDO("mysql:host=localhost;dbname=registration", "root", "12345678");
    $stm = $connection->prepare("SELECT * FROM user WHERE username = ?");
    $stm->execute([$email]);
    $user = $stm->fetch(PDO::FETCH_ASSOC);

    if ($user && $password == $user['pass']) {
        $_SESSION['email'] = $email;
        header("location:list.php");
        exit;
    } else {
        $_SESSION['error'] = "Incorrect email or password!";
        header("location:login.php");
        exit;
    }
}

?>