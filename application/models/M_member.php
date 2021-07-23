<?php

class M_member extends CI_Model {

    // aksi tambah data ke tabel transaksi
	public function insert_transaksi($data)
	{
		$this->db->insert('transaksi', $data);
	}

   // aksi tambah data ke tabel testimoni
	public function insert_testimoni($data)
	{
		$this->db->insert('testimoni', $data);
	}

	// get testimoni
	public function get_testimoni()
	{
		$id = $this->session->userdata('id_pengguna'); // dapatkan id user yg login
        $this->db->select('*');
        $this->db->from('testimoni');
        $this->db->where('id_pengguna', $id);//
        $query = $this->db->get();
        return $query->result();
	}

	// get transaksi
	public function get_data_transaksi($id)
	{
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('id_pelatihan', $id);
        $this->db->where('id_pengguna', $this->session->userdata('id_pengguna'));//
        $query = $this->db->get();
        return $query->result();
	}
	
	public function pengguna(){
        return $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
    } 

    public function update_profil($id,$data){
        $this->db->where('id_pengguna', $id);
        $this->db->update('pengguna', $data); 
    } 
    
    public function get_progres($id_pengguna){
        $query = $this->db->select('*')
        ->from('progres_belajar')
        ->where('progres_belajar.id_pengguna',$id_pengguna)
        ->join('transaksi','transaksi.id_pengguna = progres_belajar.id_pengguna')
        ->where('transaksi.status','aktif')
        ->get()->result();

        return $query;
    }
    
    public function get_pelatihan($id_pelatihan){
        return $this->db->get_where('program_pelatihan', ['id_pelatihan' => $id_pelatihan])->result();
    }
    
    public function get_kurikulum($id_pelatihan){
        return $this->db->get_where('kurikulum', ['id_pelatihan' => $id_pelatihan])->result();
    }
    
    public function get_kurikulum_by_id($id_kurikulum){
        return $this->db->get_where('kurikulum', ['id_kurikulum' => $id_kurikulum])->result();
    }

    public function get_materi($id_kurikulum){
        return $this->db->get_where('materi', ['id_kurikulum' => $id_kurikulum])->result();
    }

    public function get_kuis($id_kurikulum){
        return $this->db->get_where('kuis', ['id_kurikulum' => $id_kurikulum])->result();
    }

    public function get_sertifikat($id_pengguna){
        return $this->db->get_where('sertifikat', ['id_pengguna' => $id_pengguna ])->result();
    }
    
    public function upload_jawaban_kuis($data){
        $this->db->insert_batch('jawaban_kuis', $data); 
    }

    public function cek_kuis($id_pengguna,$id_kurikulum){
        $this->db->from('jawaban_kuis')->where(['id_pengguna' => $id_pengguna , 'id_kurikulum' => $id_kurikulum]);      
        return $this->db->count_all_results();
    }

    public function cek_nilai($id_pengguna){
        return $this->db->get_where('nilai', ['id_pengguna' => $id_pengguna])->result();
    }

    public function cek_pelatihan_aktif($id_pengguna){
        return $this->db->from('transaksi')->where(['id_pengguna' => $id_pengguna , 'status' => 'aktif'])->count_all_results();
    }

    public function cek_sertifikat($id_pengguna){
        return $this->db->from('sertifikat')->where(['id_pengguna' => $id_pengguna])->count_all_results();
    }
}