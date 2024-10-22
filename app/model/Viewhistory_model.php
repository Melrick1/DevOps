<?php
class Viewhistory_model {
    private $db;

    public function __construct() {
        $this->db = new Database;

        if ($this->db == false) {
            echo "<script>console.log('Connection Failed.');</script>";
        } else {
            echo "<script>console.log('Connection Success.');</script>";
        }
    }

    public function getAllDataModel() {
        $result = $this->db->query("SELECT * FROM tbl_attendance_history;");
        $this->db->db_close();

        if ($result->num_rows > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return [];
        }

    }
}
