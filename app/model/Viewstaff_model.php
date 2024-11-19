<?php
class Viewstaff_model {
    private $db;

    public function __construct() {
        $this->db = new Database();

        if ($this->db == false) {
            echo "<script>console.log('Connection Failed.');</script>";
        } else {
            echo "<script>console.log('Connection Success.');</script>";
        }
    }

    public function getAllDataModel() {
        // Get the connection and run the query
        $connection = $this->db->getConnection();
        $result = $connection->query("SELECT * FROM tbl_staff;");

        $this->db->closeConnection(); // Close the connection after query

        if ($result->num_rows > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    // Delete Staff Data
    public function DeleteStaffDataModel($id) {
        $query = "DELETE FROM tbl_staff WHERE ID_Staff = ?";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bind_param("s", $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}
?>
