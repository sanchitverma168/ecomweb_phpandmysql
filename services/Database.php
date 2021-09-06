<?php
require_once "Connection.php";
class Database extends Connection
{

    public function __construct()
    {
    }
    public function query($sql)
    {
        return mysqli_query($this->connect(), $sql);
    }
}
