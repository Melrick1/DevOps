<?php
class Home extends Controller{
	// Constructor
	public function __construct(){

	}

	public function index()
    {
        $arr_data['title'] = "View Students";
        $arr_data['students'] = $this->logic("Viewstudents_model")->getAllDataModel();
        $this->display('template/header', $arr_data);
        $this->display('home/viewstudents', $arr_data);
        $this->display('template/footer');
    }
	public function operator()
    {
        $arr_data['title'] = "View Operator";
        $arr_data['operator'] = $this->logic("Viewoperator_model")->getAllDataModel();
        $this->display('template/header', $arr_data);
        $this->display('home/viewoperator', $arr_data);
        $this->display('template/footer');
    }
	public function history()
    {
        $arr_data['title'] = "View History";
        $arr_data['history'] = $this->logic("Viewhistory_model")->getAllDataModel();
        $this->display('template/header', $arr_data);
        $this->display('home/viewhistory', $arr_data);
        $this->display('template/footer');
    }
	public function classes()
    {
        $arr_data['title'] = "View Classes";
        $arr_data['classes'] = $this->logic("Viewclasses_model")->getAllDataModel();
        $this->display('template/header', $arr_data);
        $this->display('home/viewclasses', $arr_data);
        $this->display('template/footer');
    }
	public function attendance()
    {
        $arr_data['title'] = "View Classes";
        $arr_data['attendance'] = $this->logic("Viewattendance_model")->getAllDataModel();
        $this->display('template/header', $arr_data);
        $this->display('home/viewattendance', $arr_data);
        $this->display('template/footer');
    }
}
