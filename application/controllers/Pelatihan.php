<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelatihan extends CI_Controller {

	public function index(){   
        $data_title['title'] = 'Pelatihan';

        $this->load->view('beranda/header/header', $data_title);
        $this->load->view('beranda/pelatihan');
        $this->load->view('beranda/footer/footer');
	}

        public function detail(){   
        $data_title['title'] = 'Detail Pelatihan';

        $this->load->view('beranda/header/header', $data_title);
        $this->load->view('beranda/detail_pelatihan');
        $this->load->view('beranda/footer/footer');
	}
}
