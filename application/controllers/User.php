<?php 

/**
 * 
 */
class User extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('User_model','user');
		$this->load->library('upload');
	}

	public function out() {
		if (empty($this->session->userdata('level'))) {
            redirect('app/logout');
        }
	}

	public function index() {
		$this->out();
		$data = array(
			'judul' => 'Dasboard',
			'konten' => 'user/dasboard',
			'jmlsiswa' => $this->user->jmlsiswa(),
			'jmlkelas' => $this->user->jmlkelas(),
			'jmlkriteria' => $this->user->jmlkriteria()
		);
		$this->load->view('v_index', $data);
	}

	// Data Siswa

	public function data_siswa() {
		$this->out();
		$data = array(
			'judul' => 'Data Siswa',
			'konten' => 'user/data_siswa',
			'button' => 'Tambah Siswa',
			'url' => base_url('User/tambah_data_siswa'),
			'kriteria'=> $this->user->all_pembobotan_kriteria(),
			'siswa' => $this->user->all_siswa()
		);
		$this->load->view('v_index', $data);
	}

	public function tambah_data_siswa() {
		$this->out();
		$data = array(
			'judul' => 'Tambah Siswa',
			'konten' => 'user/tambah_data_siswa',
			'button' => 'Simpan',
			'action' => base_url('User/action_tambah_data_siswa'),
			'kelas' => $this->user->all_kelas(),

		);
		$this->load->view('v_index', $data);
	}

	public function action_tambah_data_siswa() {
		$this->out();

		$this->form_validation->set_rules('nis', 'Nis', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jeniskelamin', 'Jeniskelamin', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('ayahwali', 'ayahwali', 'required');
		$this->form_validation->set_rules('namaibu', 'namaibu', 'required');
		$this->form_validation->set_rules('thmasuk', 'thmasuk', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('telp', 'telp', 'required');

		if ($this->form_validation->run() == FALSE) {
            $this->data_siswa();
        } else {
            $config['upload_path'] = './assets/fotoprofile/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	        $config['encrypt_name'] = TRUE; //encrypt file name 

	        $this->upload->initialize($config);
	        $this->upload->do_upload('foto');
	        $data = $this->upload->data();
			$data = array(
				'nis' => $this->input->post('nis'),
				'nama' => $this->input->post('nama'),
				'kelas' => $this->input->post('kelas'),
				'alamat' => $this->input->post('alamat'),
				'tempat_lahir' => $this->input->post('tempatlahir'),
				'tanggal_lahir' => $this->input->post('tahun').'-'.$this->input->post('bulan').'-'.$this->input->post('tanggal'),
				'jenis_kelamin' => $this->input->post('jeniskelamin'),
				'agama' => $this->input->post('agama'),
				'ayah_wali' => $this->input->post('ayahwali'),
				'ibu' => $this->input->post('namaibu'),
				'tahun_masuk' => $this->input->post('thmasuk'),
				'email' => $this->input->post('email'),
				'telp' => $this->input->post('telp'),
				'foto' => $data['file_name']
			);
			$insert = $this->user->insertsiswa($data);
			$this->data_siswa();
        }
        
		
	}

	public function edit_data_siswa() {
		$this->out();
		$data = array(
			'judul' => 'Edit Siswa',
			'konten' => 'user/tambah_data_siswa',
			'button' => 'Edit',
			'action' => base_url('User/action_edit_data_siswa'),
			'siswa' => $this->user->one_siswa($this->uri->segment(3)),
			'kelas' => $this->user->all_kelas(),
		);
		$this->load->view('v_index', $data);
	}

	public function action_edit_data_siswa() {
		$this->out();

		$data = array(
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempatlahir'),
			'tanggal_lahir' => $this->input->post('tahun').'-'.$this->input->post('bulan').'-'.$this->input->post('tanggal'),
			'jenis_kelamin' => $this->input->post('jeniskelamin'),
			'agama' => $this->input->post('agama'),
			'ayah_wali' => $this->input->post('ayahwali'),
			'ibu' => $this->input->post('namaibu'),
			'tahun_masuk' => $this->input->post('thmasuk'),
			'email' => $this->input->post('email'),
			'telp' => $this->input->post('telp')
		);
		$insert = $this->user->updatesiswa($data);
		$this->data_siswa();
	}

	public function detail_data_siswa() {
		$this->out();

		$data = array(
			'judul' => 'Detail Siswa',
			'konten' => 'user/detail_data_siswa',
			'detail' => $this->user->one_siswa($this->uri->segment(3))
		);
		$this->load->view('v_index', $data);
	}

	public function hapus_data_siswa() {
		$this->out();
		$nis = $this->uri->segment(3);
		$delete = $this->user->deletesiswa($nis);
		$this->data_siswa();
	}

	// Akhir Data siswa

	// Data kelas
	public function data_kelas() {
		$this->out();
		$data = array(
			'judul' => 'Data Kelas',
			'konten' => 'user/data_kelas',
			'kelas' => $this->user->all_kelas()
		);
		$this->load->view('v_index', $data);
	}

	public function tambah_data_kelas() {
		$this->out();
		$lastid = $this->user->lastid();
		if ($lastid == "") {
			$kls = "kls";
			$num = "1";
		} else {
			$kls = substr($lastid->id_kelas,0,3);
			$num = substr($lastid->id_kelas,3)+1;
		}
		

		$data = array(
			'judul' => 'Tambah Kelas',
			'konten' => 'user/tambah_data_kelas',
			'button' => 'Simpan',
			'action' => base_url('User/action_tambah_data_kelas'),
			'new_id' => $kls.$num
		);
		$this->load->view('v_index', $data);
	}

	public function action_tambah_data_kelas() {
		$this->out();
		$data = array(
			'id_kelas' => $this->input->post('idkelas'),
			'nama_kelas' => $this->input->post('namakelas'),
		);

		$insert = $this->user->insertkelas($data);
		$this->data_kelas();
	}

	public function edit_data_kelas() {
		$this->out();
		$id = $this->uri->segment(3);
		$data = array(
			'judul' => 'Edit Kelas',
			'konten' => 'user/tambah_data_kelas',
			'button' => 'Edit',
			'action' => base_url('User/action_edit_data_kelas'),
			'kelas' => $this->user->selectonekelas($id)
		);
		$this->load->view('v_index', $data);
	}

	public function action_edit_data_kelas() {
		$this->out();
		$data = array(
			'id_kelas' => $this->input->post('idkelas'),
			'nama_kelas' => $this->input->post('namakelas'),
		);

		$update = $this->user->updatekelas($data);
		$this->data_kelas();
	}

	public function hapus_data_kelas() {
		$this->out();
		$id = $this->uri->segment(3);
		$delete = $this->user->deletekelas($id);
		$this->data_kelas();
	}

	public function lihat_siswa() {
		$this->out();
		$data = array(
			'judul' => 'Data Siswa per kelas',
			'konten' => 'user/data_siswa',
			'button' => 'Kembali',
			'url' => base_url('User/data_kelas'),
			'siswa' =>  $this->user->siswaperkls($this->uri->segment(3)),
			'ket' => 'lihat'
		);
		$this->load->view('v_index', $data);
	}

	// Akhir data kelas

	// Pembobotan kriteria

	public function pembobotan_kriteria() {
		$this->out();
		$data = array(
			'judul' => 'Pembobotan Kriteria',
			'konten' => 'user/pembobotan_kriteria',
			'pembobotankriteria' => $this->user->all_pembobotan_kriteria()
		);
		$this->load->view('v_index', $data);
	}

	public function tambah_pembobotan_kriteria() {
		$this->out();
		$lastidkrt = $this->user->lastidkrt();
		if ($lastidkrt == "") {
			$krt = "krt";
			$numkrt = "1";
		} else {
			$krt = substr($lastidkrt->id_kriteria,0,3);
			$numkrt = substr($lastidkrt->id_kriteria,3)+1;
		}
		
		$data = array(
			'judul' => 'Tambah Pembobotan Kriteria',
			'konten' => 'user/tambah_pembobotan_kriteria',
			'button' => 'Simpan',
			'action' => base_url('User/action_tambah_pembobotan_kriteria'),
			'new_id' => $krt.$numkrt
		);
		$this->load->view('v_index', $data);
	}

	public function action_tambah_pembobotan_kriteria() {
		$this->out();
		$data = array(
			'id_kriteria' => $this->input->post('idkriteria'),
			'nama_kriteria' => $this->input->post('namakriteria'),
			'bobot' => $this->input->post('bobot')
		);

		$insert = $this->user->insertpembobotankriteria($data);
		$this->pembobotan_kriteria();
	}

	public function edit_pembobotan_kriteria() {
		$this->out();
		$id = $this->uri->segment(3);
		$data = array(
			'judul' => 'Edit Pembobotan Kriteria',
			'konten' => 'user/tambah_pembobotan_kriteria',
			'button' => 'Edit',
			'action' => base_url('User/action_edit_pembobotan_kriteria'),
			'kriteria' => $this->user->selectonebobotkriteria($id)
		);

		$this->load->view('v_index', $data);
	}

	public function action_edit_pembobotan_kriteria() {
		$this->out();
		$data = array(
			'id_kriteria' => $this->input->post('idkriteria'),
			'nama_kriteria' => $this->input->post('namakriteria'),
			'bobot' => $this->input->post('bobot')
		);

		$update = $this->user->updatebobotkriteria($data);
		$this->pembobotan_kriteria();
	}

	public function hapus_pembobotan_kriteria() {
		$this->out();
		$id = $this->uri->segment(3);
		$delete = $this->user->deletebobotkriteria($id);
		$this->pembobotan_kriteria();
	}

	// Akhir pembobotan kriteria

	// Data kriteria

	public function data_kriteria() {
		$this->out();
		if ($this->session->userdata('idkriteria')) {
			$this->session->unset_userdata('idkriteria');
		}
		$data = array(
			'judul' => 'Data Kriteria',
			'konten' => 'user/data_kriteria',
			'kriteria' => $this->user->all_kriteria(),
		);
		$this->load->view('v_index', $data);
	}

	public function input_data_kriteria() {
		$this->out();
		if ($this->session->userdata('idkriteria')=="") {
			$this->session->set_userdata('idkriteria', $this->uri->segment(3));
		}
		$data = array(
			'judul' => 'Input Data Kriteria',
			'konten' => 'user/input_data_kriteria',
			'kriteria' => $this->user->one_kriteria($this->session->userdata('idkriteria'))
		);
		$this->load->view('v_index', $data);
	}

	public function tambah_data_kriteria() {
		$this->out();
		$data = array(
			'judul' => 'Tambah Kriteria',
			'konten' => 'user/tambah_data_kriteria',
			'button' => 'Simpan',
			'action' => base_url('User/action_tambah_data_kriteria'),
			'idkriteria' => $this->session->userdata('idkriteria')
		);
		$this->load->view('v_index', $data);
	}

	public function action_tambah_data_kriteria() {
		$this->out();
		$data = array(
			'kriteria' => $this->input->post('kriteria'),
			'list' => $this->input->post('list'),
			'keterangan' => $this->input->post('ket'),
			'nilai' => $this->input->post('nilai')
		);
		$insert = $this->user->insertkriteria($data);
		$this->input_data_kriteria();
	}

	public function edit_data_kriteria() {
		$this->out();
		$id = $this->uri->segment(3);
		$data = array(
			'judul' => 'Edit Kriteria',
			'konten' => 'user/tambah_data_kriteria',
			'button' => 'Edit',
			'action' => base_url('User/action_edit_data_kriteria'),
			'kriteria' => $this->user->selectonekriteria($id)
		);
		$this->load->view('v_index', $data);
	}

	public function action_edit_data_kriteria() {
		$this->out();
		$data = array(
			'id_list' => $this->input->post('idlist'),
			'kriteria' => $this->input->post('kriteria'),
			'list' => $this->input->post('list'),
			'keterangan' => $this->input->post('ket'),
			'nilai' => $this->input->post('nilai')
		);
		$insert = $this->user->updatekriteria($data);
		$this->input_data_kriteria();
	}

	public function hapus_data_kriteria() {
		$this->out();
		$id = $this->uri->segment(3);
		$delete = $this->user->deletekriteria($id);
		$this->input_data_kriteria();
	}

	// Akhir data kriteria

	// Data Klasifikasi

	public function data_klasifikasi() {
		$this->out();
		$data = array(
			'judul' => 'Data Nilai',
			'konten' => 'user/data_klasifikasi',
			'krt1'	=> $this->user->selectonebobotkriteria('krt1'),
			'krt2'	=> $this->user->selectonebobotkriteria('krt2'),
			'krt3'	=> $this->user->selectonebobotkriteria('krt3'),
			'krt4'	=> $this->user->selectonebobotkriteria('krt4'),
			'krt5'	=> $this->user->selectonebobotkriteria('krt5'),
			'siswa' => $this->user->siswa()
		);
		$this->load->view('v_index', $data);
	}

	public function edit_klasifikasi() {
		$this->out();
		$data = array(
			'judul' => 'Data Nilai',
			'konten' => 'user/tambah_data_klasifikasi',
			'button' => 'Proses',
			'onesiswa' => $this->user->one_klasifikasi($this->uri->segment(3)),
			'bbkriteria' => $this->user->all_bbkriteria(),
			'idnilai' => $this->uri->segment(4),
			'action' => base_url('User/action_edit_klasifikasi')
		);

		$this->load->view('v_index', $data);
	}

	public function action_edit_klasifikasi() {
		$data = array(
			'id_nilai' => $this->input->post('idnilai'),
			'nis' => $this->input->post('nis'),
			'krt1' => $this->input->post('krt1'),
			'krt2' => $this->input->post('krt2'),
			'krt3' => $this->input->post('krt3'),
			'krt4' => $this->input->post('krt4'),
			'krt5' => $this->input->post('krt5')
		);
		
		$insert = $this->user->insertklasifikasi($data);
		$this->data_klasifikasi();		
	}

	public function getlist() {
		$id = $this->input->post('id');

		$krt = $this->user->getkone($id);

        echo json_encode($krt);
	}

	// Akhir data klasifikasi

	// Hasil analisa

	public function hasil_analisa()	{
		$this->out();
		$data = array(
			'judul' => 'Hasil Analisa',
			'konten' => 'user/hasil_analisa',
			'krt1'	=> $this->user->selectonebobotkriteria('krt1'),
			'krt2'	=> $this->user->selectonebobotkriteria('krt2'),
			'krt3'	=> $this->user->selectonebobotkriteria('krt3'),
			'krt4'	=> $this->user->selectonebobotkriteria('krt4'),
			'krt5'	=> $this->user->selectonebobotkriteria('krt5'),
			'siswa' => $this->user->siswa()
		);
		$this->load->view('v_index', $data);
	}

	// Akhir analisa

	// Data administrasi

	public function data_administrator() {
		$this->out();
		$data = array(
			'judul' => 'Data Administrator',
			'konten' => 'user/data_administrator',
			'admin' =>   $this->user->all_admin()
		);
		$this->load->view('v_index', $data);
	}

	public function tambah_data_administrator() {
		$this->out();
		$data = array(
			'judul' => 'Tambah Data Administrator',
			'konten' => 'user/tambah_data_administrator',
			'form' => 'user/act_tambah_data_administrator',
			'button' => 'Simpan'
		);
		$this->load->view('v_index', $data);
	}

	public function act_tambah_data_administrator() {
		$this->out();
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');

		if ($this->form_validation->run() == FALSE) {
            $this->data_administrator();
        } else {
            $data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'nama_admin' => $this->input->post('nama'),
				'alamat_admin' => $this->input->post('alamat'),
				'telp_admin' => $this->input->post('telp'),
				'level' => $this->input->post('level')
			);

			$this->user->insert_admin($data);
			$this->session->set_flashdata('msg', 'Tambah data berhasil');
    		redirect('user/data_administrator');
        }
	}

	public function edit_data_administrator() {
		$this->out();
		$data = array(
			'judul' => 'Edit Data Administrator',
			'konten' => 'user/tambah_data_administrator',
			'form' => 'user/act_edit_data_administrator',
			'button' => 'Edit',
			'admin' => $this->user->one_admin($this->uri->segment(3))
		);
		$this->load->view('v_index', $data);
	}

	public function act_edit_data_administrator() {
		$this->out();
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');

		if ($this->form_validation->run() == FALSE) {
            $this->data_administrator();
        } else {
            $data = array(
            	'id_user' => $this->input->post('id'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'nama_admin' => $this->input->post('nama'),
				'alamat_admin' => $this->input->post('alamat'),
				'telp_admin' => $this->input->post('telp'),
				'level' => $this->input->post('level')
			);

			$this->user->insert_admin($data);
			$this->session->set_flashdata('msg', 'Tambah data berhasil');
    		redirect('user/data_administrator');
        }
	}

	public function hapus_data_administrator() {
		$this->out();
		$id = $this->uri->segment(3);
		$delete = $this->user->deleteadmin($id);
		$this->data_administrator();
	}

	// Akhir administrasi
}
?>