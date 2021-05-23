<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{   
        $data_title['title'] = 'Galery';

        $this->load->view('beranda/header/header', $data_title);
        $this->load->view('beranda/gallery');
        $this->load->view('beranda/footer/footer');
	}
}
