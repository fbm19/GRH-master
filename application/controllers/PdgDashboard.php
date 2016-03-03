<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class PdgDashboard extends CI_Controller {
     public function index()
{
    $this->load->view('Template/MenueHeader');
    $this->load->view('Template/Side_bar');
    $this->load->view('pages/Employee_Manag');

    $this->load->view('Template/Footer');

}

}

