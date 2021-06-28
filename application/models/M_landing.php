<?php

class M_landing extends CI_Model {

    public function get_data_program(){
        return $this->db->get('program_pelatihan')->result_array();
    }

    public function get_data_testimoni(){
        $query = $this->db->select('*')
            ->from('testimoni')
            ->join('pengguna','pengguna.id_pengguna = testimoni.id_pengguna')
            ->get()->result();

        return $query;
    }

    public function get_data_programID($id){
        return $this->db->get_where('program_pelatihan', ['id_pelatihan' => $id])->result();
    }

    public function get_data_partner(){
        return $this->db->get('partner_lkp')->result();
    }

    public function get_data_galeri(){
        return $this->db->get('galeri')->result();
    }
    
    public function get_data_berita(){
        return $this->db->get('berita')->result_array();
    }

    public function get_data_beritaID($id){
        if($id == NULL || $id == ""){
            return $this->db->get('berita')->result();
        }else{
            return $this->db->get_where('berita', ['id_berita' => $id])->result();
        }
    }

    public function jumlah_pengguna(){
        return $this->db->from('pengguna')->count_all_results();
    }

    public function jumlah_kurikulum(){
        return $this->db->from('kurikulum')->count_all_results();
    }

    public function jumlah_materi(){
        return $this->db->from('materi')->count_all_results();
    }
}