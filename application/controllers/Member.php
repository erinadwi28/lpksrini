<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                if (!$this->session->userdata('email') && !$this->session->userdata('level') == 2) {
                redirect('auth');
                }
        }

	public function index(){ 
                
        if($this->session->userdata('level') =='2'){
        
       $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data_title['title'] = 'Dashboard';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/member/index',$data);
        $this->load->view('dashboard/member/dashboard');
        $this->load->view('dashboard/footer/footer');
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
}
}
