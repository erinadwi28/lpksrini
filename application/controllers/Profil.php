<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{   
        $data_title['title'] = 'Profil Lembaga';
        $data['pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' => $this->session->userdata('id_pengguna')])->row_array();

        $this->load->view('beranda/header/header', $data_title);
        $this->load->view('beranda/profil',$data);
        $this->load->view('beranda/footer/footer');
	}
}
