<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('email') && !$this->session->userdata('id_level') == 2) {
		    redirect('auth');
		}
                $this->load->model('M_landing', 'm_landing');

        $this->load->model('M_member', 'm_member');
	}

	public function index(){ 
		if($this->session->userdata('id_level') =='2'){
			$data['pengguna'] = $this->m_member->pengguna();
            $cek_pelatihan['cek_pelatihan'] = $this->m_member->cek_pelatihan_aktif($data['pengguna']['id_pengguna']);
            $cek_sertifikat['cek_sertifikat'] = $this->m_member->cek_sertifikat($data['pengguna']['id_pengguna']);
            $progres['progres'] = $this->m_member->get_progres($data['pengguna']['id_pengguna']);

			$data_title['title'] = 'Dashboard';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/member/index',$data);
			$this->load->view('dashboard/member/dashboard',$cek_pelatihan+$cek_sertifikat+$data+$progres);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}
	
	public function detail_profil(){ 
		if($this->session->userdata('id_level') =='2'){
			$data['pengguna'] = $this->m_member->pengguna();
			$data_title['title'] = 'Profil';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/member/index',$data);
			$this->load->view('dashboard/member/detail_profil',$data);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}
	
	public function aksi_ubah_profil(){ 
		if($this->session->userdata('id_level') =='2'){
			$pengguna = $this->m_member->pengguna(); 
            
            $data = [
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
			];

            $this->m_member->update_profil($pengguna['id_pengguna'],$data);
            $this->session->set_flashdata('success', 'disimpan');
            redirect('detail-profil');
		}
	}

        public function upload_foto_profil(){
                if($this->session->userdata('id_level') =='2'){
                $id_pengguna = $this->session->userdata('id_pengguna');

                $config['upload_path']          = './assets/backend/images/member/foto_profil/';
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
                redirect('detail-profil');
                }
                }
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
        $data['transaksi'] = $this->m_member->get_data_transaksi($id);

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
			$data['pengguna'] = $this->m_member->pengguna();
            $cek_pelatihan['cek_pelatihan'] = $this->m_member->cek_pelatihan_aktif($data['pengguna']['id_pengguna']);
			$data_title['title'] = 'Pelatihan Aktif';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/member/index',$data);
			$this->load->view('dashboard/member/pelatihan_aktif',$cek_pelatihan);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}

	public function kurikulum($id_pelatihan){ 
		if($this->session->userdata('id_level') =='2'){
			$data['pengguna'] = $this->m_member->pengguna();
            $pelatihan['pelatihan'] = $this->m_member->get_pelatihan($id_pelatihan);
            $kurikulum['kurikulum'] = $this->m_member->get_kurikulum($id_pelatihan);
            $nilai['nilai'] = $this->m_member->cek_nilai($data['pengguna']['id_pengguna']);

			$data_title['title'] = 'Materi Kurikulum';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/member/index',$data);
			$this->load->view('dashboard/member/kurikulum',$kurikulum+$pelatihan+$nilai);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}

	public function kelas($id_kurikulum){ 	
		if($this->session->userdata('id_level') =='2'){
			$data['pengguna'] = $this->m_member->pengguna();
            $kurikulum['kurikulum'] = $this->m_member->get_kurikulum_by_id($id_kurikulum);
            $materi['materi'] = $this->m_member->get_materi($id_kurikulum);
            $kuis['kuis'] = $this->m_member->get_kuis($id_kurikulum);
            $cek_kuis['cek'] = $this->m_member->cek_kuis($data['pengguna']['id_pengguna'],$id_kurikulum);

			$data_title['title'] = 'Kelas';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/member/index',$data);
			$this->load->view('dashboard/member/kelas',$materi+$kurikulum+$kuis+$data+$cek_kuis);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}

    public function aksi_upload_jawaban(){ 	
		if($this->session->userdata('id_level') =='2'){
            $id_pengguna = $this->input->post('id_pengguna');
            $id_kurikulum = $this->input->post('id_kurikulum'); 
            $jumlah_soal = $this->input->post('jumlah_soal');  
            
            for($i=1; $i<=$jumlah_soal; $i++){
                $row = [];
                $row['id_pengguna'] = $id_pengguna;
                $row['id_kurikulum'] = $id_kurikulum;
                $row['id_kuis'] = $this->input->post('id_kuis_'.$i);
                $row['jawaban'] = $this->input->post('jawaban_'.$i);
                $data[] = $row;
            }

            $this->m_member->upload_jawaban_kuis($data);
            $this->session->set_flashdata('success', 'disimpan');
            redirect('member/kelas/' . $id_kurikulum);
        }
	}

	public function sertifikat(){ 	
		if($this->session->userdata('id_level') =='2'){
			$data['pengguna'] = $this->m_member->pengguna();
            $sertifikat['sertifikat'] = $this->m_member->get_sertifikat($data['pengguna']['id_pengguna']);
			$data_title['title'] = 'Cetak Sertifikat';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/member/index',$data);
			$this->load->view('dashboard/member/sertifikat',$sertifikat);
			$this->load->view('dashboard/footer/footer');	
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}
	
	public function testimoni(){ 
		if($this->session->userdata('id_level') =='2'){
			$data['pengguna'] = $this->m_member->pengguna();
                        // $data['testimoni'] =  $this->db->get_where('testimoni', ['id_pengguna' => $this->session->userdata('id_pengguna')])->row_array();
                        $data['testimoni'] = $this->m_member->get_testimoni();
                        
			$data_title['title'] = 'Testimoni';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/member/index',$data);
			$this->load->view('dashboard/member/testimoni',$data);
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}

    public function ajax_list_pelatihan_aktif(){
		if($this->session->userdata('id_level') =='2'){

            $pengguna = $this->m_member->pengguna();
            $progres = $this->m_member->get_progres($pengguna["id_pengguna"]);

            $data = [];
            $no = 0;
            foreach ($progres as $listx) {
                $pelatihan = $this->m_member->get_pelatihan($listx->id_pelatihan);
                foreach ($pelatihan as $list) {
                    $no++;
                    $row = [];
                    $row['No'] = $no;
                    $row['Pelatihan'] = $list->nama_pelatihan;
                    $row['Jumlah Kurikulum'] = $list->jumlah_kurikulum;
                    if($listx->progres_kurikulum == $listx->jumlah_kurikulum){
                        $row['Status'] = 'Selesai';
                    }else{
                        $row['Status'] = 'Belum Selesai';
                    }
                    $row['Aksi'] = $list->id_pelatihan;
                    $data[] = $row;
                }
            }

            $output = [ "data" => $data ];
            echo json_encode($output);
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
		redirect('testimoni');

                // $msg = [
                //         'sukses' => 'Terimakasih atas kesediaan Anda untuk mengisi testimoni yaa'
                // ];
                // echo json_encode($msg);
        
        
        } else{
                echo "Anda tidak berhak mengakses halaman ini";
        } 
        }
}
