<?php
class Home extends Controller{
	// Constructor
	public function __construct(){

	}

	public function index()
    {
        $arr_data['title'] = "View Staff";
        
        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the type and action
            $type = $_POST['type'] ?? '';
            $action = $_POST['action'] ?? '';
            
            // Process the form data
            $arr_data['message'] = $this->processForm($type, $action, $_POST);
        }
        $arr_data['staff'] = $this->logic("Viewstaff_model")->getAllDataModel();
        
        $this->display('template/header', $arr_data);
        $this->display('home/viewstaff', $arr_data);
        $this->display('template/footer');
    }

	public function obat()
    {
        $arr_data['title'] = "View Obat";
        
        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the type and action
            $type = $_POST['type'] ?? '';
            $action = $_POST['action'] ?? '';
            
            // Process the form data
            $arr_data['message'] = $this->processForm($type, $action, $_POST);
        }
        $arr_data['obat'] = $this->logic("Viewobat_model")->getAllDataModel();

        $this->display('template/header', $arr_data);
        $this->display('home/viewobat', $arr_data);
        $this->display('template/footer');
    }

    /*Add Staff & Obat : */
	public function add() {
        $arr_data['title'] = "View Add";
    
        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the type and action
            $type = $_POST['type'] ?? '';
            $action = $_POST['action'] ?? '';
    
            // Process the form data
            $arr_data['message'] = $this->processForm($type, $action, $_POST);
        }
    
        // Render views
        $this->display('template/header', $arr_data);
        $this->display('home/viewCRUD', $arr_data);
        $this->display('template/footer');
    }
    
    private function processForm($type, $action, $data) {
        // Validate form data based on type
        if ($type === 'Staff') {
            return $this->processStaffForm($action, $data);
        } elseif ($type === 'Obat') {
            return $this->processObatForm($action, $data);
        }
    
        return "Invalid type selected.";
    }
    
    private function processStaffForm($action, $data) {
        // Extract staff data
        $id = $data['id'] ?? '';
        $nama = $data['nama'] ?? '';
        $email = $data['email'] ?? '';
        $phoneNum = $data['phoneNum'] ?? '';
        $job = $data['job'] ?? '';
    
        // Handle based on action
        switch ($action) {
            case 'insert':
                return $this->insertStaff($nama, $email, $phoneNum, $job);
            case 'update':
                return $this->updateStaff($nama, $email, $phoneNum, $job);
            case 'delete':
                return $this->deleteStaff($id);
            default:
                return "Invalid action for Staff.";
        }
    }
    
    private function processObatForm($action, $data) {
        // Extract obat data
        $id = $data['id'] ?? '';
        $nama = $data['nama'] ?? '';
        $expire_date = $data['expire_date'] ?? '';
        $jenis = $data['jenis'] ?? '';
        $stock = $data['stock'] ?? '';
    
        // Handle based on action
        switch ($action) {
            case 'insert':
                return $this->insertObat($nama, $expire_date, $jenis, $stock);
            case 'update':
                return $this->updateObat($nama, $expire_date, $jenis, $stock);
            case 'delete':
                return $this->deleteObat($id);
            default:
                return "Invalid action for Obat.";
        }
    }
    
    private function insertStaff($nama, $email, $phoneNum, $job) {
        if ($nama && $email && $phoneNum && $job) {
            $model = $this->logic("ViewCRUD_Model");
            $success = $model->InsertStaffDataModel($nama, $email, $phoneNum, $job);
            return $success ? "Staff data successfully inserted!" : "Failed to insert staff data.";
        }
    
        return "Please fill out all fields for Staff.";
    }
    private function insertObat($nama, $expire_date, $jenis, $stock) {
        if ($nama && $expire_date && $jenis && $stock) {
            $model = $this->logic("ViewCRUD_model");
            $success = $model->InsertObatDataModel($nama, $expire_date, $jenis, $stock);
            return $success ? "Obat data successfully inserted!" : "Failed to insert obat data.";
        }
    
        return "Please fill out all fields for Obat.";
    }
    
    private function updateStaff($nama, $email, $phoneNum, $job) {
        if ($nama) {
            $model = $this->logic("ViewCRUD_Model");
            $success = $model->UpdateStaffDataModel($nama, $email, $phoneNum, $job);
            return $success ? "Staff data successfully updated!" : "Failed to update staff data.";
        }
    
        return "Please provide a name for updating staff.";
    }
    private function updateObat($nama, $expire_date, $jenis, $stock) {
        if ($nama) {
            $model = $this->logic("ViewCRUD_model");
            $success = $model->UpdateObatDataModel($nama, $expire_date, $jenis, $stock);
            return $success ? "Obat data successfully updated!" : "Failed to update obat data.";
        }
    
        return "Please provide a name for updating obat.";
    }

    private function deleteStaff($id) {
        if ($id) {
            $model = $this->logic("Viewstaff_Model");
            $success = $model->DeleteStaffDataModel($id);
            return $success ? "Staff data successfully deleted!" : "Failed to delete staff data.";
        }
    
        return "Please provide a name for deleting staff.";
    }
    private function deleteObat($id) {
        if ($id) {
            $model = $this->logic("Viewobat_model");
            $success = $model->DeleteObatDataModel($id);
            return $success ? "Obat data successfully deleted!" : "Failed to delete obat data.";
        }
    
        return "Please provide a name for deleting obat.";
    }    
}
