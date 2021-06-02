<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
        

	public function index(){   
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data_title['title'] = 'Dashboard Admin';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/admin/index',$data);
        $this->load->view('dashboard/footer/footer');
	}
}
