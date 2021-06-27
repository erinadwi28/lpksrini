<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
        
        function __construct(){
            parent::__construct();
            $this->load->model('M_landing', 'm_landing');
        }

	public function index(){   
                $data_title['title'] = 'Beranda';

                $data['detail_partner'] = $this->m_landing->get_data_partner();

                $this->load->view('beranda/header/header', $data_title);
                $this->load->view('beranda/beranda', $data);
                $this->load->view('beranda/footer/footer');
	}

        public function program_pelatihan(){   
                $data = $this->m_landing->get_data_program();
                echo json_encode($data);
	}

}
