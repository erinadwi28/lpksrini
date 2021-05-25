<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{   
        $data_title['title'] = 'Berita';

        $this->load->view('beranda/header/header', $data_title);
        $this->load->view('beranda/berita');
        $this->load->view('beranda/footer/footer');
	}
}
