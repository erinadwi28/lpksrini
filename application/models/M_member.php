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
$this->db->select('id_testimoni, status');
$this->db->where('id_pengguna', $id);//
$this->db->from('testimoni');
$query = $this->db->get();
return $query->result();
	}
}