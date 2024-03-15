<ul>
    <?php

    $connection = new PDO("mysql:host=localhost;dbname=registration", "root", "12345678");
    $stm = $connection->prepare("SELECT * FROM user WHERE user_id=?");
    $stm->execute([$_GET['id']]);
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