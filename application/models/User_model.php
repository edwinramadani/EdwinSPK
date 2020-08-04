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

	public function updatesiswa($data) {
		$this->db->replace('tb_siswa', $data);
	}

	public function deletesiswa($nis)	{
		$this->db->where('nis', $nis)->delete('tb_siswa');
	}

	// AKHIR SISWA

	// KELAS

	public function all_kelas()	{
		return $this->db->get('tb_kelas')->result_array();
	}

	public function lastid() {
		return $this->db->select('id_kelas')->order_by('id_kelas',"desc")->limit(1)->get('tb_kelas')->row();
	}

	public function selectonekelas($id)	{
		return $this->db->select('*')->from('tb_kelas')->where('id_kelas',$id)->get()->row();
	}

	public function insertkelas($data) {
		$this->db->insert('tb_kelas', $data);
	}

	public function updatekelas($data) {
		$this->db->replace('tb_kelas', $data);
	}

	public function deletekelas($id) {
		$this->db->where('id_kelas', $id)->delete('tb_kelas');
	}

	// AKHIR KELAS

	// PEMBOBOTAN KRITERIA

	public function lastidkrt()	{
		return $this->db->select('id_kriteria')->order_by('id_kriteria',"desc")->limit(1)->get('tb_pembobotan_kriteria')->row();
	}

	public function selectonebobotkriteria($id)	{
		return $this->db->select('*')->where('id_kriteria',$id)->get('tb_pembobotan_kriteria')->row();
	}

	public function all_pembobotan_kriteria()	{
		return $this->db->get('tb_pembobotan_kriteria')->result_array();
	}

	public function insertpembobotankriteria($data) {
		$this->db->insert('tb_pembobotan_kriteria', $data);
	}

	public function updatebobotkriteria($data) {
		$this->db->replace('tb_pembobotan_kriteria', $data);
	}

	public function deletebobotkriteria($id)	{
		$this->db->where('id_kriteria', $id)->delete('tb_pembobotan_kriteria');
	}

	// AKHIR PEMBOBOTAN KRITERIA

	// KRITERIA

	public function all_kriteria() {
		return $this->db->select("id_kriteria,nama_kriteria")->from("tb_pembobotan_kriteria")->get()->result_array();
	}

	public function one_kriteria($idkriteria) {
		return $this->db->select("*")->from("tb_kriteria")->where('kriteria',$idkriteria)->get()->result_array();
	}

	public function selectonekriteria($id)	{
		return $this->db->select('*')->where('id_list',$id)->get('tb_kriteria')->row();
	}

	public function insertkriteria($data) {
		$this->db->insert('tb_kriteria', $data);
	}

	public function updatekriteria($data) {
		$this->db->replace('tb_kriteria', $data);
	}

	public function deletekriteria($id)	{
		$this->db->where('id_list', $id)->delete('tb_kriteria');
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