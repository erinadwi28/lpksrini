<?php

class M_auth extends CI_Model {

    //daftar akun
    public function daftar_akun($data)
    {
        return $this->db->insert('pengguna', $data);
    }
}