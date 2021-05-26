<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelatihan extends CI_Controller {

        function __construct(){
                parent::__construct();
                $this->load->model('M_landing', 'm_landing');
        }

	public function index(){   
                $data_title['title'] = 'Pelatihan';

                $this->load->view('beranda/header/header', $data_title);
                $this->load->view('beranda/pelatihan');
                $this->load->view('beranda/footer/footer');
	}

        public function detail($id){   
                $data_title['title'] = 'Detail Pelatihan';

                $data_detail['detail_pelatihan'] = $this->m_landing->get_data_programID($id);

                $this->load->view('beranda/header/header', $data_title);
                $this->load->view('beranda/detail_pelatihan', $data_detail);
                $this->load->view('beranda/footer/footer');
	}
}
