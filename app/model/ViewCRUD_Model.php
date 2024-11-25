<?php
class ViewCRUD_Model {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Insert Obat Data
    public function InsertObatDataModel($nama, $expire_date, $jenis, $stock) {
        $query = "INSERT INTO tbl_obat (Nama, Expire_Date, Jenis, Stock) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bind_param("sssi", $nama, $expire_date, $jenis, $stock);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    // Insert Staff Data
    public function InsertStaffDataModel($nama, $email, $phone_num, $job) {
        $query = "INSERT INTO tbl_staff (Nama, Email, Phone_Num, Job) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bind_param("ssss", $nama, $email, $phone_num, $job);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    // Update Obat Data
    public function UpdateObatDataModel($nama, $expire_date, $jenis, $stock) {
        $query = "UPDATE tbl_obat SET Expire_Date = ?, Jenis = ?, Stock = ? WHERE Nama = ?";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bind_param("ssis", $expire_date, $jenis, $stock, $nama);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    // Update Staff Data
    public function UpdateStaffDataModel($nama, $email, $phone_num, $job) {
        $query = "UPDATE tbl_staff SET Email = ?, Phone_Num = ?, Job = ? WHERE Nama = ?";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bind_param("ssss", $email, $phone_num, $job, $nama);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}
?>
