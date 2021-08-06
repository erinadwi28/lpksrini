<?php

class M_admin extends CI_Model {

        // Get data pengguna
        public function pengguna(){
        return $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        } 

        // Update data profil saya
        public function update_profil($id,$data){
        $this->db->where('id_pengguna', $id);
        $this->db->update('pengguna', $data); 
        } 

        // Count Member
        public function jumlah_member()
        {
        $this->db->select('id_pengguna, COUNT(id_pengguna) as jumlah_member');
        $this->db->from('pengguna');
        $this->db->where('id_level', 2);
        $this->db->where('status_aktif', 0);

        $hasil = $this->db->get();
        return $hasil;
        }

        // Count Voucher 
        public function jumlah_voucher()
        {
        $this->db->select('id_voucher, COUNT(id_voucher) as jumlah_voucher');
        $this->db->from('voucher');
        $this->db->where('status_aktif', 0);

        $hasil = $this->db->get();
        return $hasil;
        }

        // Count Transaksi Masuk
        public function jumlah_transaksi_masuk()
        {
        $this->db->select('id_transaksi, COUNT(id_transaksi) as jumlah_transaksi_masuk');
        $this->db->from('transaksi');
        $this->db->where('status', 'pengajuan');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
        }

        // Count Transaksi Selesai
        public function jumlah_transaksi_selesai()
        {
        $this->db->select('id_transaksi, COUNT(id_transaksi) as jumlah_transaksi_selesai');
        $this->db->from('transaksi');
        $this->db->where('status', 'aktif');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
        }

        // Count Program Pelatihan
        public function jumlah_program_pelatihan()
        {
        $this->db->select('id_pelatihan, COUNT(id_pelatihan) as jumlah_pelatihan');
        $this->db->from('program_pelatihan');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
        }

        // Count Jawaban Kuis
        public function jumlah_jawaban_kuis()
        {
        // sepertinya harus pake order by
        // $this->db->select('id_pelatihan, COUNT(id_pelatihan) as jumlah_pelatihan');
        // $this->db->from('program_pelatihan');
        // $this->db->where('status_delete', 0);

        // $hasil = $this->db->get();
        // return $hasil;
        }

        // Count Nilai
        // sepertinya harus pake order by

	// get member
	public function get_member()
	{
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('id_level', 2);
        $query = $this->db->get();
        return $query->result();
	}

	// get detail member
	public function get_detail_member($id_pengguna)
	{
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('id_level', 2);
        $this->db->where('id_pengguna', $id_pengguna);
        $query = $this->db->get();
        return $query->result();
	}

	// update member
	public function update_member($id_pengguna,$nama, $no_hp, $alamat){
        $query=$this->db->query("UPDATE pengguna SET nama='$nama',no_hp='$no_hp',alamat='$alamat' WHERE id_pengguna='$id_pengguna'");
        return $query;
        }
	// get voucher
	public function get_voucher()
	{
        $this->db->select('*');
        $this->db->from('voucher');
        $this->db->where('status_aktif', 0);
        $query = $this->db->get();
        return $query->result();
	}

         // aksi tambah data ke tabel voucher
	public function insert_voucher($data)
	{
		$this->db->insert('voucher', $data);
	}

	// update voucher
	public function update_voucher($id,$kode_voucher, $jenis_voucher, $total_voucher){
        $query=$this->db->query("UPDATE voucher SET kode_voucher='$kode_voucher',jenis_voucher='$jenis_voucher',total_voucher='$total_voucher' WHERE id_voucher='$id'");
        return $query;
        }

        // hapus voucher
	public function hapus_voucher($id){
        $query=$this->db->query("UPDATE voucher SET status_aktif=1 WHERE id_voucher='$id'");
        return $query;
        } 

        // get transaksi masuk, join tabel program pelatihan, tabel pengguna
	public function get_transaksi_masuk()
	{
        $this->db->select('transaksi.*, pengguna.nama, program_pelatihan.nama_pelatihan');
        $this->db->from('transaksi');
        $this->db->join('pengguna', 'transaksi.id_pengguna = pengguna.id_pengguna', 'INNER');
        $this->db->join('program_pelatihan', 'transaksi.id_pelatihan = program_pelatihan.id_pelatihan', 'INNER');
        $this->db->where('transaksi.status', 'pengajuan');
        $this->db->where('transaksi.status_delete', 0);
        $query = $this->db->get();
        return $query->result();
	}

        // get transaksi masuk, join tabel program pelatihan, tabel pengguna
	public function get_transaksi_selesai()
	{
        $this->db->select('transaksi.*, pengguna.nama, program_pelatihan.nama_pelatihan');
        $this->db->from('transaksi');
        $this->db->join('pengguna', 'transaksi.id_pengguna = pengguna.id_pengguna', 'INNER');
        $this->db->join('program_pelatihan', 'transaksi.id_pelatihan = program_pelatihan.id_pelatihan', 'INNER');
        $this->db->where('transaksi.status', 'aktif');
        $this->db->where('transaksi.status_delete', 0);
        $query = $this->db->get();
        return $query->result();
	}

        // get transaksi masuk, join tabel program pelatihan, tabel pengguna
	public function get_detail_transaksi($id_transaksi)
	{
        $this->db->select('transaksi.*, pengguna.nama, pengguna.email, program_pelatihan.nama_pelatihan');
        $this->db->from('transaksi');
        $this->db->join('pengguna', 'transaksi.id_pengguna = pengguna.id_pengguna', 'INNER');
        $this->db->join('program_pelatihan', 'transaksi.id_pelatihan = program_pelatihan.id_pelatihan', 'INNER');
        $this->db->where('transaksi.id_transaksi', $id_transaksi);
        $this->db->where('transaksi.status_delete', 0);
        $query = $this->db->get();
        return $query->result();
	}

        // update member
	public function acc_transaksi($id_transaksi,$tgl_aktif){
        $id_admin = $this->session->userdata('id_pengguna');
        $query=$this->db->query("UPDATE transaksi SET id_admin='$id_admin',tgl_aktif='$tgl_aktif', status='aktif' WHERE id_transaksi='$id_transaksi'");
        return $query;
        }

        // get member
	public function get_pelatihan()
	{
        $this->db->select('*');
        $this->db->from('program_pelatihan');
        $this->db->where('status_delete', 0);
        $query = $this->db->get();
        return $query->result();
	}

        // get detail pelatihan
	public function get_detail_pelatihan($id_pelatihan)
	{
        $this->db->select('*');
        $this->db->from('program_pelatihan');
        $this->db->where('status_delete', 0);
        $this->db->where('id_pelatihan', $id_pelatihan);
        $query = $this->db->get();
        return $query->result();
	}

        // update member
	public function update_pelatihan($id_pelatihan,$nama_pelatihan, $harga, $jumlah_kurikulum, $deskripsi){
        $query=$this->db->query("UPDATE program_pelatihan SET nama_pelatihan='$nama_pelatihan',harga='$harga',jumlah_kurikulum='$jumlah_kurikulum', deskripsi='$deskripsi' WHERE id_pelatihan='$id_pelatihan'");
        return $query;
        }

        // get detail kurikulum
	public function get_kurikulum($id_pelatihan)
	{
        $this->db->select('*');
        $this->db->from('kurikulum');
        $this->db->where('status_delete', 0);
        $this->db->where('id_pelatihan', $id_pelatihan);
        $query = $this->db->get();
        return $query->result();
	}

        // get detail kurikulum
	public function get_kurikulum_join($id_pelatihan)
	{
        $this->db->select('kurikulum.id_pelatihan, program_pelatihan.nama_pelatihan, program_pelatihan.jumlah_kurikulum');
        $this->db->from('kurikulum');
        $this->db->join('program_pelatihan', 'kurikulum.id_pelatihan = program_pelatihan.id_pelatihan', 'INNER');
        $this->db->where('kurikulum.status_delete', 0);
        $this->db->where('kurikulum.id_pelatihan', $id_pelatihan);
        $this->db->group_by('kurikulum.id_pelatihan');
        $query = $this->db->get();
        return $query->result();
	}

        // update kurikulum
	public function update_kurikulum($id,$unit_kompetensi, $elemen_kompetensi, $bobot){
        $query=$this->db->query("UPDATE kurikulum SET unit_kompetensi='$unit_kompetensi',elemen_kompetensi='$elemen_kompetensi',bobot='$bobot' WHERE id_kurikulum='$id'");
        return $query;
        }

    //get list data permohonan yang belum dibaca
//     public function get_permohonan_belum_dibaca($id_fo)
//     {
//         $this->db->select('permohonan_ptsp.*, layanan_ptsp.nama_layanan');
//         $this->db->from('permohonan_ptsp');
//         $this->db->join('layanan_ptsp', 'permohonan_ptsp.id_layanan = layanan_ptsp.id_layanan', 'INNER');
//         $this->db->where('permohonan_ptsp.id_fo', $id_fo);
//         $this->db->where('permohonan_ptsp.status_delete', 0);
//         $this->db->where('permohonan_ptsp.notif', 'Belum Dibaca');
//         $this->db->where("(permohonan_ptsp.status = 'Validasi Kemenag' 
//         OR permohonan_ptsp.status = 'Pending'
//         OR permohonan_ptsp.status = 'Selesai')", null, false);
//         $this->db->order_by('permohonan_ptsp.id_permohonan_ptsp', 'desc');

//         return $this->db->get();
//     }
}
