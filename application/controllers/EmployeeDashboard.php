<?php defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeDashboard extends CI_Controller {

    public function index(){
        $this->load->view('Template/MenueHeader');
        $this->load->view('Template/Side_bar_Empl');
       // $this->load->view('pages/Employee_Manag');
        $this->load->view('pages/HolidaysPosts');
      //  $this->load->view('pages/AbsenceConsult');
        $this->load->view('Template/Footer');


    }


    public function EmployeeMang(){
        $this->load->view('pages/HolidaysPosts');

    }




}