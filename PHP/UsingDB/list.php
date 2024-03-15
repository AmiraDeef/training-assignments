<style>
    th,
    td {
        border: 1px solid blue;
    }
</style>


<table style="text-align:center ; border: 1px solid blue;">
    <tr style="text-align:center ; border: 1px solid blue;">
        <th>Frist Name</th>
        <th>Last Name</th>
        <th>address</th>
        <th>country</th>
        <th>Gender</th>
        <th>username</th>
        <th>password</th>
        <th>Department</th>
        <th>actions</th>




    </tr>

    <?php


    $connection = new PDO("mysql:host=localhost;dbname=registration", "root", "12345678");
    $stm = $connection->prepare("SELECT * FROM user");
    $stm->execute();
    $results = $stm->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['fname']) . "</td>";
        echo "<td>" . htmlspecialchars($row['lname']) . "</td>";
        echo "<td>" . htmlspecialchars($row['address']) . "</td>";
        echo "<td>" . htmlspecialchars($row['country']) . "</td>";
        echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
        echo "<td>" . htmlspecialchars($row['username']) . "</td>";
        echo "<td>" . htmlspecialchars($row['pass']) . "</td>";
        echo "<td>" . htmlspecialchars($row['dept']) . "</td>";
        echo "<td><a href='view.php?id={$row['user_id']}'>View</a> | <a href='edit.php?id={$row['user_id']}'>Edit</a> | <a href='delete.php?id={$row['user_id']}'>Delete</a></td>";
        echo "</tr>";
    }

    ?>
</table>
<div>

    <h1>
        <a href="registeration.php">Add user</a>
    </h1>


</div>