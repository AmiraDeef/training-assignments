<?php

session_start();


?>


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
        <th>image</th>
        <th>actions</th>




    </tr>

    <?php




    if (!isset($_SESSION['email']) or !isset($_SESSION['fname'])) {
        header("location:login.php");
        exit;
    }


    require_once "Database.php";
    $db = new Database();
    $stm = $db->get_data("user");
    $users = $stm->fetchAll(PDO::FETCH_ASSOC);
    foreach ($users as $row) {
        echo "<tr>";
        echo "<td>" . ($row['fname']) . "</td>";
        echo "<td>" . ($row['lname']) . "</td>";
        echo "<td>" . ($row['address']) . "</td>";
        echo "<td>" . ($row['country']) . "</td>";
        echo "<td>" . ($row['gender']) . "</td>";
        echo "<td>" . ($row['username']) . "</td>";
        echo "<td>" . ($row['pass']) . "</td>";
        echo "<td>" . ($row['dept']) . "</td>";
        echo "<td>" . ($row['img']) . "</td>";
        echo "<td><a href='view.php?id={$row['user_id']}'>View</a> | <a href='edit.php?id={$row['user_id']}'>Edit</a> | <a href='delete.php?id={$row['user_id']}'>Delete</a></td>";
        echo "</tr>";
    }

    ?>
</table>
<div>

    <h2>
        <a href="registeration.php">Add user</a>
    </h2>


</div>