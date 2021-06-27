<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                if (!$this->session->userdata('email') && !$this->session->userdata('id_level') == 2) {
                redirect('auth');
                }
                $this->load->model('M_landing', 'm_landing');
                $this->load->model('M_member', 'm_member');
        }

	public function index(){ 
                
        if($this->session->userdata('id_level') =='2'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data_title['title'] = 'Dashboard';
        
        $data['testimoni'] =  $this->db->get_where('testimoni', ['id_pengguna' => $this->session->userdata('id_pengguna')])->row_array();;

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/member/index',$data);
        $this->load->view('dashboard/member/dashboard');
        $this->load->view('dashboard/footer/footer');
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        public function katalog(){ 
                
        if($this->session->userdata('id_level') =='2'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data_title['title'] = 'Katalog';

       
        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/member/index',$data);
        $this->load->view('dashboard/member/katalog');
        $this->load->view('dashboard/footer/footer');
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        public function detail_katalog($id){ 
                
        if($this->session->userdata('id_level') =='2'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data_title['title'] = 'Detail Pelatihan';

        $data['detail_pelatihan'] = $this->m_landing->get_data_programID($id);

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/member/index',$data);
        $this->load->view('dashboard/member/detail_katalog',$data);
        $this->load->view('dashboard/footer/footer');
        
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        } 
        }

        public function beli(){ 
                
        if($this->session->userdata('id_level') =='2'){
        
        if($this->input->is_ajax_request()==true){
                
                $data = array(
                        'id_pelatihan' => $this->input->post('id_pelatihan', true),
                        'id_pengguna' => $this->input->post('id_pengguna', true),
                        'tgl_transaksi' => date("Y-m-d H:i:s"),
                        'harga' => $this->input->post('harga', true),
                        'diskon' => $this->input->post('diskon', true),
                        'total' => $this->input->post('total', true),
                );
                $this->m_member->insert_transaksi($data);

                $msg = [
                        'sukses' => 'pembelian sukses, silahkan melakukan transfer dan klik tombol konfirmasi pembayaran'
                ];
                echo json_encode($msg);
        }
        
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        } 
        }

        public function pelatihan_aktif(){ 
                
        if($this->session->userdata('id_level') =='2'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data_title['title'] = 'Pelatihan Aktif';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/member/index',$data);
        $this->load->view('dashboard/member/pelatihan_aktif');
        $this->load->view('dashboard/footer/footer');
        
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        public function kurikulum(){ 
                
        if($this->session->userdata('id_level') =='2'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data_title['title'] = 'Materi Kurikulum';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/member/index',$data);
        $this->load->view('dashboard/member/kurikulum');
        $this->load->view('dashboard/footer/footer');
        
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        public function kelas(){ 
                
        if($this->session->userdata('id_level') =='2'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data_title['title'] = 'Kelas';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/member/index',$data);
        $this->load->view('dashboard/member/kelas');
        $this->load->view('dashboard/footer/footer');
        
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        public function sertifikat(){ 
                
        if($this->session->userdata('id_level') =='2'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data_title['title'] = 'Cetak Sertifikat';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/member/index',$data);
        $this->load->view('dashboard/member/sertifikat');
        $this->load->view('dashboard/footer/footer');
        
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }
        
        public function testimoni(){ 
                
        if($this->session->userdata('id_level') =='2'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data_title['title'] = 'Testimoni';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/member/index',$data);
        $this->load->view('dashboard/member/testimoni',$data);
        $this->load->view('dashboard/footer/footer');
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        public function tambah_testimoni(){ 
                
        if($this->session->userdata('id_level') =='2'){
        
                
                $data = array(
                        'id_pengguna' => $this->input->post('id_pengguna', true),
                        'tgl_post' => date("Y-m-d H:i:s"),
                        'isi' => $this->input->post('isi', true),
                        'status' => 1,
                );
                $this->m_member->insert_testimoni($data);
                $this->session->set_flashdata('success', 'Terimakasih atas kesediaan Anda untuk mengisi testimoni yaa');
		redirect('dashboard');

                // $msg = [
                //         'sukses' => 'Terimakasih atas kesediaan Anda untuk mengisi testimoni yaa'
                // ];
                // echo json_encode($msg);
        
        
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        } 
        }
}
