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
                $data['jumlah_pengguna'] = $this->m_landing->jumlah_pengguna();
                $data['jumlah_kurikulum'] = $this->m_landing->jumlah_kurikulum();
                $data['jumlah_materi'] = $this->m_landing->jumlah_materi();
                $data['semua_testimoni'] = $this->m_landing->get_data_testimoni();
                
                $this->load->view('beranda/header/header', $data_title);
                $this->load->view('beranda/beranda', $data);
                $this->load->view('beranda/footer/footer');
	}

        public function program_pelatihan(){   
                $data = $this->m_landing->get_data_program();
                echo json_encode($data);
	}

        // public function semua_testimoni(){   
        //         $data = $this->m_landing->get_data_testimoni();
        //         echo json_encode($data);
	// }

}
