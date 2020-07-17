<?php 
	
/**
 * 
 */
class User_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	// DASBOARD
	public function jmlsiswa() {
		return $this->db->count_all('tb_siswa');
	}

	public function jmlkelas() {
		return $this->db->count_all('tb_kelas');
	}

	public function jmlkriteria() {
		return $this->db->count_all('tb_pembobotan_kriteria');
	}

	// SISWA

	public function all_siswa()	{
		return $this->db->get('tb_siswa')->result_array();
	}

	public function one_siswa($nis)	{
		return $this->db->select('*')->from('tb_siswa')->where('nis',$nis)->get()->result_array();
	}

	public function insertsiswa($data) {
		$this->db->insert('tb_siswa', $data);
	}

	// AKHIR SISWA

	// KELAS

	public function all_kelas()	{
		return $this->db->get('tb_kelas')->result_array();
	}

	public function insertkelas($data) {
		$this->db->insert('tb_kelas', $data);
	}

	// AKHIR KELAS

	// PEMBOBOTAN KRITERIA

	public function all_pembobotan_kriteria()	{
		return $this->db->get('tb_pembobotan_kriteria')->result_array();
	}

	public function insertpembobotankriteria($data) {
		$this->db->insert('tb_pembobotan_kriteria', $data);
	}

	// AKHIR PEMBOBOTAN KRITERIA

	// KRITERIA

	public function all_kriteria() {
		return $this->db->select("id_kriteria,nama_kriteria")->from("tb_pembobotan_kriteria")->get()->result_array();
	}

	public function one_kriteria($idkriteria) {
		return $this->db->select("*")->from("tb_kriteria")->where('kriteria',$idkriteria)->get()->result_array();
	}

	public function insertkriteria($data) {
		$this->db->insert('tb_kriteria', $data);
	}

	// AKHIR KRITERIA

	// KLASIFIKASI

	public function siswa() {
		return $this->db->select("nis,nama,kelas")->from("tb_siswa")->get()->result_array();
	}

	public function one_klasifikasi($nis) {
		return $this->db->select("nis,nama,kelas,foto")->from("tb_siswa")->where('nis',$nis)->get()->result_array();
	}

	// AKHIR KLASIFIKASI
















	public function data_alat_mining() {
		return $this->db->get('data_alat')->result_array();
	}

	public function fuzzy_kriteria() {
		return $this->db->get('fuzzytiapkriteria')->result_array();
	}

	public function moo_kriteria() {
		return $this->db->get('moo_kriteria')->result_array();
	}

	public function harga() {
		return $this->db->get('kriteriaharga')->result_array();
	}

	public function kecepatan() {
		return $this->db->get('kriteriakecepatan')->result_array();
	}

	public function listrik() {
		return $this->db->get('kriterialistrik')->result_array();
	}

	public function keuntungan() {
		return $this->db->get('kriteriakeuntungan')->result_array();
	}
	
}
?>