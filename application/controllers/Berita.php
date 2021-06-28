<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

        function __construct(){
                parent::__construct();
                $this->load->model('M_landing', 'm_landing');
        }

	public function index(){   
                $data_title['title'] = 'Berita';
                $data['pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' => $this->session->userdata('id_pengguna')])->row_array();
                $this->load->view('beranda/header/header', $data_title);
                $this->load->view('beranda/berita', $data);
                $this->load->view('beranda/footer/footer');
	}

        public function detail($id){   
                $data_title['title'] = 'Detail Berita';

                $data_detail['detail_berita'] = $this->m_landing->get_data_beritaID($id);
                $data_detail['all_detail_berita'] = $this->m_landing->get_data_beritaID("");
                $data['pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' => $this->session->userdata('id_pengguna')])->row_array();
                $this->load->view('beranda/header/header', $data_title);
                $this->load->view('beranda/detail_berita', $data_detail+$data);
                $this->load->view('beranda/footer/footer');
        }

        public function get_berita(){   
                $data = $this->m_landing->get_data_berita();
                echo json_encode($data);
	}
}
