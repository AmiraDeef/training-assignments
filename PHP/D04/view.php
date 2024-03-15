<ul>
    <?php

    session_start();
    require_once 'Database.php';
    $db = new Database();

    if (!isset($_SESSION['email'])) {
        header("location:login.php");
        exit;
    }


    $stm = $db->get_data("user", "user_id={$_GET['id']}");

    $result = $stm->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        foreach ($result as $key => $value) {
            echo "<li><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</li>";
        }
    } else {
        echo "<li>No user found for the given user_id</li>";
    }
    ?>
</ul>