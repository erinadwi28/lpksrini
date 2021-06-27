<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
        
    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index(){   

        if ($this->session->userdata('email') && $this->session->userdata('id_level') == 1) {
            redirect('admin');
		} elseif ($this->session->userdata('email') && $this->session->userdata('id_level') == 2) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('kata_sandi', 'Kata Sandi', 'trim|required');

        if ($this->form_validation->run() == false) {
        $data_title['title'] = 'Masuk ke Akun Anda';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/masuk');
        $this->load->view('dashboard/footer/footer');
        } else {
            //validasi sukses
            $this->_login();
        }
	}

    private function _login()
    {
        $email = $this->input->post('email', true);
        $kata_sandi = $this->input->post('kata_sandi');

        $pengguna = $this->db->get_where('pengguna', ['email' => $email])->row_array();

        // pengguna ada
        if ($pengguna) {
            // pengguna aktif
            if ($pengguna['status_aktif'] == 1){
                // cek kata sandi
                if (password_verify($kata_sandi, $pengguna['kata_sandi'])){
                    $data = [
                    'email' => $pengguna['email'],
                    'id_level' => $pengguna['id_level'],
                    'id_pengguna' => $pengguna['id_pengguna'],
                    ];

                    $this->session->set_userdata($data);
                    if ($pengguna['id_level'] == 1) {
                        redirect('Admin');
                    } elseif ($pengguna['id_level'] == 2){
                        redirect('dashboard');
                    }
                        
                } else {
                    $this->session->set_flashdata('error', 'Kata Sandi salah');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('error', 'Email belum diaktivasi');
                redirect('auth');
            }
        } else {
            //gagal login
            $this->session->set_flashdata('error', 'Akun tidak terdaftar');
            redirect('auth');
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_level');

        $this->session->set_flashdata('success', 'Berhasil keluar dari akun Anda');
        redirect('auth');
    }

    public function daftar() {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pengguna.email]');
        $this->form_validation->set_rules('kata_sandi', 'Kata Sandi', 'trim|required');

        if ($this->form_validation->run() == false) {
            // $errors = validation_errors();
            // $this->session->set_flashdata('error', $errors);

            $data_title['title'] = 'Daftar Akun';

            $this->load->view('dashboard/header/header', $data_title);
            $this->load->view('dashboard/daftar');
            $this->load->view('dashboard/footer/footer');
        } else {
            $data_email = $this->input->post('email');

            $sql = $this->db->query("SELECT email FROM pengguna where email='$data_email'");
            $cek_email = $sql->num_rows();

            if ($cek_email > 0) {
                $this->session->set_flashdata('error', 'Email sudah terdaftar');
                redirect('auth/daftar');
            } else {
                $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto_profil' => 'placeholder_profil.png',
                'kata_sandi' => password_hash($this->input->post('kata_sandi'), PASSWORD_DEFAULT),
                'id_level'=> 2,
                'status_aktif' => 1,
                'dibuat' => date("Y-m-d H:i:s")
            ];

            $this->load->model('M_auth', 'm_auth');

            $this->m_auth->daftar_akun($data);
            $this->session->set_flashdata('success', 'Akun berhasil dibuat, silahkan masuk');
            redirect('auth');
            }
        }
        
    }
}
