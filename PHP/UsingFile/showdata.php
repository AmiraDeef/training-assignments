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




    </tr>



    <?php

    $data_arr = file("data.txt");

    foreach ($data_arr as $user) {
        $user_data = explode(",", $user);
        echo '<tr style="text-align:center ; border: 1px solid blue;">';
        foreach ($user_data as $data) {
            echo "<td>" . $data . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>