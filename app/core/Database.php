<?php
class Database {
    private $host = HOST_DB;
    private $username = USER_DB;
    private $password = PASS_DB;
    private $dbname = NAME_DB;

    private $con;

    // Constructor method to initialize the connection
    public function __construct() {
        // Check database connection using the helper method
        $this->con = $this->db_connection($this->host, $this->username, $this->password, $this->dbname);
        if ($this->con === false) {
            // Handle the connection failure (optional, can log or send error)
            echo "Connection failed!";
        } else {
            // Connection successful (optional, can log success)
            echo "Connected successfully!";
        }
    }

    // Method to establish the connection to the database
    private function db_connection($srvr_nm, $usr_nm, $psswrd, $db_nm) {
        // Create a new mysqli connection
        $conn = new mysqli($srvr_nm, $usr_nm, $psswrd, $db_nm);

        // Check if there is an error with the connection
        if ($conn->connect_error) {
            return false; // Return false if connection fails
        }
        return $conn; // Return the connection object if successful
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
