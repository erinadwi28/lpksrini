<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{   
        $data_title['title'] = 'Galeri';

        $this->load->view('beranda/header/header', $data_title);
        $this->load->view('beranda/galeri');
        $this->load->view('beranda/footer/footer');
	}
}
