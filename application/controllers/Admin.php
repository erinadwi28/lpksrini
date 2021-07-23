<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                if (!$this->session->userdata('email') && !$this->session->userdata('id_level') == 1) {
                redirect('auth');
                }
                $this->load->model('M_admin', 'm_admin');
        }

	public function index(){   
        if($this->session->userdata('id_level') =='1'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->m_admin->jumlah_member()->result();
        $data['voucher'] = $this->m_admin->jumlah_voucher()->result();
        $data['transaksi_masuk'] = $this->m_admin->jumlah_transaksi_masuk()->result();
        $data['transaksi_selesai'] = $this->m_admin->jumlah_transaksi_selesai()->result();
        $data['pelatihan'] = $this->m_admin->jumlah_program_pelatihan()->result();
        $data_title['title'] = 'Dashboard Admin';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/admin/index',$data);
        $this->load->view('dashboard/admin/dashboard',$data);
        $this->load->view('dashboard/footer/footer');
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // Profil Saya
        public function detail_profil_admin(){ 
		if($this->session->userdata('id_level') =='1'){
			$data['pengguna'] = $this->m_admin->pengguna();
			$data_title['title'] = 'Profil Saya';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/admin/index',$data);
			$this->load->view('dashboard/admin/detail_profil',$data);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}
	
        // Aksi ubah profil saya
	public function aksi_ubah_profil(){ 
		if($this->session->userdata('id_level') =='1'){
		$pengguna = $this->m_admin->pengguna(); 
            
                $data = [
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
			];

                $this->m_admin->update_profil($pengguna['id_pengguna'],$data);
                $this->session->set_flashdata('success', 'Data telah diubah');
                redirect('detail-profil-admin');
		}
	}

        // Upload foto profil saya
        public function upload_foto_profil(){
                if($this->session->userdata('id_level') =='1'){
                $id_pengguna = $this->session->userdata('id_pengguna');

                $config['upload_path']          = './assets/backend/images/admin/foto_profil/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['file_name']            = 'profil-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                if (!empty($_FILES['berkas']['name'])) {
                if ($this->upload->do_upload('berkas')) {

                $uploadData = $this->upload->data();

                //Compres Foto
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/backend/images/member/foto_profil/' . $uploadData['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '100%';
                // $config['width'] = 480;
                // $config['height'] = 640;

                $config['new_image'] = './assets/backend/images/member/foto_profil/' . $uploadData['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $item = $this->db->where('id_pengguna', $id_pengguna)->get('pengguna')->row();

                //replace foto lama 
                if ($item->foto_profil != "placeholder_profil.png") {
                    $target_file = './assets/backend/images/member/foto_profil/' . $item->foto_profil;
                    unlink($target_file);
                }

                $data['foto_profil'] = $uploadData['file_name'];

                $this->db->where('id_pengguna', $id_pengguna);
                $this->db->update('pengguna', $data);

                $this->session->set_flashdata('success', 'Foto profil telah diubah');
                redirect('detail-profil-admin');
                }
                }
        } else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
        }

        // List data member
        public function list_member(){   
        if($this->session->userdata('id_level') =='1'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->m_admin->get_member();

        $data_title['title'] = 'List Data Member';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/admin/index',$data);
        $this->load->view('dashboard/admin/list_member',$data);
        $this->load->view('dashboard/footer/footer');
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // Detail Member
        public function detail_member($id_pengguna){ 
		if($this->session->userdata('id_level') =='1'){
			$data['pengguna'] = $this->m_admin->pengguna();
			$data_title['title'] = 'Detail Data Member';
                        $data_member['member'] = $this->m_admin->get_detail_member($id_pengguna);


			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/admin/index',$data);
			$this->load->view('dashboard/admin/detail_member',$data_member);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}

        // Aksi ubah data member
        public function aksi_ubah_member($id_pengguna){   
        if($this->session->userdata('id_level') =='1'){
        
        if($this->input->is_ajax_request()==true){

                $nama=$this->input->post('nama', true);
                $no_hp=$this->input->post('no_hp', true);
                $alamat=$this->input->post('alamat', true);
                
               

                $this->m_admin->update_member($id_pengguna,$nama, $no_hp, $alamat);

                $msg = [
                        'sukses' => 'Data member telah diubah'
                ];
                echo json_encode($msg);
        } else {
                echo "tidak ada request";
        }
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // List data voucher
        public function list_voucher(){   
        if($this->session->userdata('id_level') =='1'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['voucher'] = $this->m_admin->get_voucher();

        $data_title['title'] = 'List Data Voucher';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/admin/index',$data);
        $this->load->view('dashboard/admin/list_voucher',$data);
        $this->load->view('dashboard/footer/footer');
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // Aksi tambah data voucher
        public function aksi_tambah_voucher(){   
        if($this->session->userdata('id_level') =='1'){
        
       if($this->input->is_ajax_request()==true){
                
                $data = array(
                        'kode_voucher' => $this->input->post('kode_voucher', true),
                        'jenis_voucher' => $this->input->post('jenis_voucher', true),
                        'total_voucher' => $this->input->post('total_voucher', true),
                        'tgl_dibuat' => date("Y-m-d H:i:s")
                );
                $this->m_admin->insert_voucher($data);

                $msg = [
                        'sukses' => 'Voucher telah ditambahkan'
                ];
                echo json_encode($msg);
        } else {
                echo "tidak ada request";
        }
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // Aksi ubah data voucher
        public function aksi_ubah_voucher(){   
        if($this->session->userdata('id_level') =='1'){
        
        if($this->input->is_ajax_request()==true){

                $id=$this->input->post('id_voucher', true);
                $kode_voucher=$this->input->post('kode_voucher', true);
                $jenis_voucher=$this->input->post('jenis_voucher', true);
                $total_voucher=$this->input->post('total_voucher', true);
                
                $this->m_admin->update_voucher($id,$kode_voucher, $jenis_voucher, $total_voucher);

                $msg = [
                        'sukses' => 'Voucher telah diubah'
                ];
                echo json_encode($msg);
        } else {
                echo "tidak ada request";
        }
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // Aksi soft delete data voucher
        public function aksi_hapus_voucher($id){   
        if($this->session->userdata('id_level') =='1'){
        
        if($this->input->is_ajax_request()==true){

                $this->m_admin->hapus_voucher($id);

                $msg = [
                        'sukses' => 'Voucher telah dihapus karena kadaluarsa'
                ];
                echo json_encode($msg);
        } else {
                echo "tidak ada request";
        }
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // List data transaksi masuk
        public function list_transaksi_masuk(){   
        if($this->session->userdata('id_level') =='1'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->m_admin->get_transaksi_masuk();

        $data_title['title'] = 'List Data Transaksi Masuk';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/admin/index',$data);
        $this->load->view('dashboard/admin/list_transaksi_masuk',$data);
        $this->load->view('dashboard/footer/footer');
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // Detail Transaksi Masuk
        public function detail_transaksi_masuk($id_transaksi){ 
		if($this->session->userdata('id_level') =='1'){
			$data['pengguna'] = $this->m_admin->pengguna();
			$data_title['title'] = 'Detail Transaksi Masuk';
                        $data_transaksi['transaksi'] = $this->m_admin->get_detail_transaksi($id_transaksi);

			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/admin/index',$data);
			$this->load->view('dashboard/admin/detail_transaksi_masuk',$data_transaksi);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}

        // Upload foto bukti pembayaran
        public function upload_bukti_pembayaran($id_transaksi){
                if($this->session->userdata('id_level') =='1'){

                $config['upload_path']          = './assets/backend/images/member/bukti_pembayaran/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['file_name']            = 'bukti_pembayaran-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                if (!empty($_FILES['berkas']['name'])) {
                if ($this->upload->do_upload('berkas')) {

                $uploadData = $this->upload->data();

                //Compres Foto
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/backend/images/member/bukti_pembayaran/' . $uploadData['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '100%';
                // $config['width'] = 480;
                // $config['height'] = 640;

                $config['new_image'] = './assets/backend/images/member/bukti_pembayaran/' . $uploadData['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $item = $this->db->where('id_transaksi', $id_transaksi)->get('transaksi')->row();

                //replace foto lama 
                if ($item->bukti_pembayaran != "placeholder.png") {
                        $target_file = './assets/backend/images/member/bukti_pembayaran/' . $item->bukti_pembayaran;
                        unlink($target_file);
                }

                $data['bukti_pembayaran'] = $uploadData['file_name'];

                $this->db->where('id_transaksi', $id_transaksi);
                $this->db->update('transaksi', $data);

                $url = $_SERVER['HTTP_REFERER'];
                $this->session->set_flashdata('success', 'Bukti Pembayaran Telah Diunggah');
                redirect($url);
                }
                }
        } else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
        }

        // Aksi ubah data voucher
        public function aksi_acc_transaksi($id_transaksi){   
        if($this->session->userdata('id_level') =='1'){
        
       if($this->input->is_ajax_request()==true){
                
                $tgl_aktif = date("Y-m-d H:i:s");

                $this->m_admin->acc_transaksi($id_transaksi,$tgl_aktif);

                $msg = [
                        'sukses' => 'Transaksi telah disetujui dan pelatihan sudah aktif'
                ];
                echo json_encode($msg);
                
        } else {
                echo "tidak ada request";
        }
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // List data transaksi selesai
        public function list_transaksi_selesai(){   
        if($this->session->userdata('id_level') =='1'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->m_admin->get_transaksi_selesai();

        $data_title['title'] = 'List Data Transaksi Selesai';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/admin/index',$data);
        $this->load->view('dashboard/admin/list_transaksi_selesai',$data);
        $this->load->view('dashboard/footer/footer');
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // Detail Transaksi Selesai
        public function detail_transaksi_selesai($id_transaksi){ 
		if($this->session->userdata('id_level') =='1'){
			$data['pengguna'] = $this->m_admin->pengguna();
			$data_title['title'] = 'Detail Transaksi Selesai';
                        $data_transaksi['transaksi'] = $this->m_admin->get_detail_transaksi($id_transaksi);

			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/admin/index',$data);
			$this->load->view('dashboard/admin/detail_transaksi_selesai',$data_transaksi);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}

        // List Pelatihan
        public function list_program_pelatihan(){   
        if($this->session->userdata('id_level') =='1'){
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelatihan'] = $this->m_admin->get_pelatihan();

        $data_title['title'] = 'List Data Program Pelatihan';

        $this->load->view('dashboard/header/header', $data_title);
        $this->load->view('dashboard/admin/index',$data);
        $this->load->view('dashboard/admin/list_pelatihan',$data);
        $this->load->view('dashboard/footer/footer');
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // Detail Program Pelatihan
        public function detail_pelatihan($id_pelatihan){ 
		if($this->session->userdata('id_level') =='1'){
			$data['pengguna'] = $this->m_admin->pengguna();
			$data_title['title'] = 'Detail Data Program Pelatihan';
                        $data_pelatihan['pelatihan'] = $this->m_admin->get_detail_pelatihan($id_pelatihan);


			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/admin/index',$data);
			$this->load->view('dashboard/admin/detail_program_pelatihan',$data_pelatihan);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}

        // Aksi ubah data pelatihan
        public function aksi_ubah_pelatihan($id_pelatihan){   
        if($this->session->userdata('id_level') =='1'){
        
        if($this->input->is_ajax_request()==true){

                $nama_pelatihan=$this->input->post('nama_pelatihan', true);
                $harga=$this->input->post('harga', true);
                $jumlah_kurikulum=$this->input->post('jumlah_kurikulum', true);
                $deskripsi=$this->input->post('deskripsi', true);

                $this->m_admin->update_pelatihan($id_pelatihan,$nama_pelatihan, $harga, $jumlah_kurikulum, $deskripsi);

                $msg = [
                        'sukses' => 'Data pelatihan telah diubah'
                ];
                echo json_encode($msg);
        } else {
                echo "tidak ada request";
        }
	
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        }
        }

        // Upload foto cover pelatihan
        public function upload_cover_pelatihan($id_pelatihan){
                if($this->session->userdata('id_level') =='1'){

                $config['upload_path']          = './assets/frontend/images/landing/courses/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['file_name']            = 'cover_pelatihan-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                if (!empty($_FILES['berkas']['name'])) {
                if ($this->upload->do_upload('berkas')) {

                $uploadData = $this->upload->data();

                //Compres Foto
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/frontend/images/landing/courses/' . $uploadData['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '100%';
                // $config['width'] = 480;
                // $config['height'] = 640;

                $config['new_image'] = './assets/frontend/images/landing/courses/' . $uploadData['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $item = $this->db->where('id_pelatihan', $id_pelatihan)->get('program_pelatihan')->row();

                //replace foto lama 
                if ($item->gambar_pelatihan != "placeholder.png") {
                        $target_file = './assets/frontend/images/landing/courses/' . $item->gambar_pelatihan;
                        unlink($target_file);
                }

                $data['gambar_pelatihan'] = $uploadData['file_name'];

                $this->db->where('id_pelatihan', $id_pelatihan);
                $this->db->update('program_pelatihan', $data);

                $url = $_SERVER['HTTP_REFERER'];
                $this->session->set_flashdata('success', 'Cover Pelatihan Telah Diunggah');
                redirect($url);
                }
                }
        } else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
        }
}