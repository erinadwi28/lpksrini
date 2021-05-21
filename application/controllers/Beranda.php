<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{   
        $data_title['title'] = 'Beranda';

        $this->load->view('beranda/header/header', $data_title);
        $this->load->view('beranda/beranda');
        $this->load->view('beranda/footer/footer');
	}
}
