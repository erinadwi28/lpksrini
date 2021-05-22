<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{   
        $data_title['title'] = 'Profil Lembaga';

        $this->load->view('beranda/header/header', $data_title);
        $this->load->view('beranda/profil');
        $this->load->view('beranda/footer/footer');
	}
}
