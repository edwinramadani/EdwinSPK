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
		return $this->db->select('*')->from('tb_siswa')->join('tb_kelas', 'tb_siswa.kelas = tb_kelas.id_kelas')->get()->result_array();
	}

	public function one_siswa($nis)	{
		return $this->db->select('*')->from('tb_siswa')->join('tb_kelas', 'tb_siswa.kelas = tb_kelas.id_kelas')->where('tb_siswa.nis',$nis)->get()->result_array();
	}

	public function insertsiswa($data) {
		$this->db->replace('tb_siswa', $data);
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

	public function siswaperkls($id) {
		return $this->db->select('*')->from('tb_siswa')->join('tb_kelas', 'tb_siswa.kelas = tb_kelas.id_kelas')->where('kelas',$id)->get()->result_array();
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
	public function selectonebobotkriteria2($id, $kolom)	{
		return $this->db->select($kolom)->where('id_kriteria',$id)->get('tb_pembobotan_kriteria')->row();
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
		return $this->db->select("tb_siswa.nis,nama,kelas,id_nilai,krt1,krt2,krt3,krt4,krt5")->from("tb_siswa")->join("tb_nilai","tb_siswa.nis=tb_nilai.nis","left")->get()->result_array();
	}

	public function one_klasifikasi($nis) {
		return $this->db->select("nis,nama,kelas,foto")->from("tb_siswa")->where('nis',$nis)->get()->result_array();
	}

	public function all_bbkriteria() {
		return $this->db->get('tb_pembobotan_kriteria')->result_array();
	}

	public function getkone($id) {
		return $this->db->select('*')->where('kriteria',$id)->get('tb_kriteria')->result_array();
	}

	public function insertklasifikasi($data)  {
		$this->db->replace('tb_nilai', $data);
	}


	// Admin
	public function all_admin() {
		return $this->db->get('log_admin')->result_array();
	}

	public function insert_admin($data) {
		$this->db->replace('log_admin', $data);
	}

	public function one_admin($id) {
		return $this->db->select("*")->from("log_admin")->where('id_user',$id)->get()->row();
	}

	public function deleteadmin($id) {
		$this->db->where('id_user', $id)->delete('log_admin');
	}
	
}
?>