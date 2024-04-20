<?php
class DB
{
    public $db;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "testmvc";
    public function __construct()
    {
        $this->db = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
        mysqli_set_charset($this->db, "utf8");
    }
}
