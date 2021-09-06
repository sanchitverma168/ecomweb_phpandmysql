<?php

class Connection
{
    private $host = "localhost";
    private $db_name = "webmobile";
    private $username = "root";
    private $password = "";
    private $conn;

    protected function connect()
    {
        $this->conn = null;

        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name) or die();
        if (!$this->conn) {
            exit();
        }
        return $this->conn;
    }
}
