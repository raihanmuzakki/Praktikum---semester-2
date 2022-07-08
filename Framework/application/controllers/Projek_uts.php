<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Projek_uts extends CI_Controller
{
    public function index(){
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('projek_uts/Projek UTS');
        $this->load->view('layout/footer');

    }
}