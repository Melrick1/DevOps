<?php

class Database {
    private $host = HOST_DB;
    private $username = USER_DB;
    private $password = PASS_DB;
    private $dbname = NAME_DB;

    private $con;

    // Constructor method to initialize the connection
    public function __construct() {
        $this->connect();
    }

    // Method to establish the connection to the database
    private function connect() {
        // Create a new mysqli connection
        $this->con = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        // Check if there is an error with the connection
        if ($this->con->connect_error) {
            // If there's an error, stop the script and display the error message
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    // Getter method to access the connection
    public function getConnection() {
        return $this->con;
    }

    // Optionally, you can create a method to close the connection
    public function closeConnection() {
        $this->con->close();
    }
}
?>
