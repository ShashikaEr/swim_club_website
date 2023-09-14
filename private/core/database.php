<?php

class Database
{

    //Establishing the database connection
    private $host = "localhost"; //Server
    private $db_name = "swimmingclub_database"; //DB name
    private $username = "root"; //Username
    private $password = ""; //Password
    public $conn;

    //Connecting with Database
    private function getConnection()
    {

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            //If the DB connectivity fail, stop the execution of the code with displaying the error message
            die("Unable to connect to the database: " . $exception->getMessage());
        }

        return $this->conn;

    }
    public function query($query)
    {
        $conn = $this->getConnection();
        $stmt = $conn->prepare($query);

       return $stmt;

    }

}

?>