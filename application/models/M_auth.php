<?php

class M_auth extends CI_Model {

    //daftar akun
    public function daftar_akun($data){
        $this->db->insert('pengguna', $data);
        return $this->db->insert_id();
    }

    public function update_akun($id,$data){
        $this->db->where('id_pengguna', $id);
        $this->db->update('pengguna', $data);
    }
}