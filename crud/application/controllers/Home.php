<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_Mahasiswa');
	}

	public function index()
	{
		// $this->load->view('Home')
		$queryAllMahasiswa = $this->M_Mahasiswa->getDataMahasiswa();
		$DATA = array('queryAllMhs' => $queryAllMahasiswa);
		$this->load->view('home', $DATA);
	}

	public function createTable() 
	{
		$this->load->view('createTable');
	}

	public function editTable($nim)
	{
		$queryMahasiswaDetail = $this->M_Mahasiswa->getDataMahasiswaDetail($nim);
		$DATA = array('queryMhsDetail' => $queryMahasiswaDetail);
		$this->load->view('editTable', $DATA);
	}

	public function fungsiTambah()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jurusan = $this->input->post('jurusan');

		$ArrInsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'alamat' => $alamat,
			'jurusan' => $jurusan
		);

		$this->M_Mahasiswa->insertDataMahasiswa($ArrInsert);
		redirect(base_url(''));

	}

	public function fungsiEdit()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jurusan = $this->input->post('jurusan');

		$ArrUpdate = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jurusan' => $jurusan
		);

		$this->M_Mahasiswa->updateDataMahasiswa($nim, $ArrUpdate);
		redirect(base_url(''));

	}

	public function fungsiDelete($nim)
	{
		$this->M_Mahasiswa->deleteDataMahasiswa($nim);
		redirect(base_url(''));
	}
}
