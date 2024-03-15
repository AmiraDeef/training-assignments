
<?php



session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['pass'];
    require_once 'Database.php';
    $db = new Database();
    $resultQuery = $db->get_data("user", "username ='{$email}'");
    $user = $resultQuery->fetch(PDO::FETCH_ASSOC);


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