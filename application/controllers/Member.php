<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('email') && !$this->session->userdata('id_level') == 2) {
		    redirect('auth');
		}
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

	public function katalog(){ 
		if($this->session->userdata('id_level') =='2'){
			$data['pengguna'] = $this->m_member->pengguna();
			$data_title['title'] = 'Katalog';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/member/index',$data);
			$this->load->view('dashboard/member/katalog');
			$this->load->view('dashboard/footer/footer');
		} else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}

	public function detail_katalog(){ 
		if($this->session->userdata('id_level') =='2'){
			$data['pengguna'] = $this->m_member->pengguna();
			$data_title['title'] = 'Pelatihan Aktif';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/member/index',$data);
			$this->load->view('dashboard/member/detail_katalog');
			$this->load->view('dashboard/footer/footer');
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
			$data_title['title'] = 'Testimoni';
			$this->load->view('dashboard/header/header', $data_title);
			$this->load->view('dashboard/member/index',$data);
			$this->load->view('dashboard/member/testimoni');
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
}
