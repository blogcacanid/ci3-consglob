<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller{
    
    function __construct(){
        parent::__construct();

        $this->load->helper('form');
    }

    public function index(){
        $this->load->view('v_pegawai');
    }
   
}
