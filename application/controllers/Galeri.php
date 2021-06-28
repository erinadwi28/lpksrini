<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

        function __construct(){
                parent::__construct();
                $this->load->model('M_landing', 'm_landing');
        }

	public function index(){   
                $data_title['title'] = 'Galeri';

                $data['detail_galeri'] = $this->m_landing->get_data_galeri();
                $data['pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' => $this->session->userdata('id_pengguna')])->row_array();

                $this->load->view('beranda/header/header', $data_title);
                $this->load->view('beranda/galeri', $data);
                $this->load->view('beranda/footer/footer');
	}

}
