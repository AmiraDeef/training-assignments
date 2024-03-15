<?php
class Database
{
    //$connection = new PDO("mysql:host=localhost;dbname=registration", "root", "12345678");

    private $connection = "";
    private $host = "localhost";
    private $dbname = "registration";
    private $username = "root";
    private $password = "12345678";
    function __construct()
    {

        $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    }
    function get_data($table, $condition = 1)
    {

        return  $this->connection->query("SELECT * FROM $table WHERE $condition");
    }
    function delete_data($table, $condition)
    {
        return $this->connection->query("delete from $table where $condition");
    }
    function insert_data($table, $data)
    {
        $cols = [];
        $vals = [];
        foreach ($data as $col => $val) {
            $cols[] = $col;
            $vals[] = (is_string($val) ? "'$val'" : $val);
        }

        $colToString = implode(",", $cols);
        $valToString = implode(",", $vals);

        return $this->connection->query("insert into $table ($colToString) values ($valToString)");
    }
    function update_data($table, $col, $condition = 1)
    {
        return $this->connection->query("update $table  set $col where $condition");
    }
}
