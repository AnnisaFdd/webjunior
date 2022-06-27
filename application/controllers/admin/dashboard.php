<?php
/**
 * 
 */
class Dashboard extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if (!isset($this->session->userdata['levels'])){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('auth');
		}
	}
	
	public function index ()
	{
		$data['mahasiswa'] = $this->model_user->all_mahasiswa();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('template_admin/footer');
	}

	public function edit($id)
	{
		$data['mahasiswa'] = $this->model_user->get_mahasiswa($id);
		$data['fakultas'] = $this->model_user->get_fakultas();
		$data['prodi'] = $this->model_user->get_prodi();
		$data['agama'] = $this->model_user->get_agama();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/edit', $data);
			$this->load->view('template_admin/footer');
	}

	public function update(){
		$id = $this->input->post('id_mahasiswa');
		$nim_mhs = $this->input->post('nim');
		$nama = $this->input->post('nama_mahasiswa');
		$alamat = $this->input->post('alamat');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$gender = $this->input->post('gender');
		$agama = $this->input->post('agama');
		$fakultas= $this->input->post('fakultas');
		$prodi = $this->input->post('prodi');
	
		$data = array(
			'nim' => $nim_mhs,
			'nama_mahasiswa' => $nama,
			'alamat' => $alamat,
			'tanggal_lahir' => $tanggal_lahir,
			'gender' => $gender,
			'id_agama' => $agama,
			'id_fakultas' => $fakultas,
			'id_prodi' => $prodi,
			
		);

		$where = array(
			'id_mahasiswa' => $id, 
		);
		$this->model_user->update($where,$data,'mahasiswa');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert dismissible fade show" role="alert">Data Mahasiswa Berhasil di Update<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/dashboard');

	}

	public function hapus($id)
	{
		$where = array('id_mahasiswa'=>$id);
		$this->model_user->hapus($where);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert dismissible fade show" role="alert">Data Mahasiswa Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/dashboard');
	}

	public function tambah(){
		$data['fakultas'] = $this->model_user->get_fakultas();
		$data['prodi'] = $this->model_user->get_prodi();
		$data['agama'] = $this->model_user->get_agama();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar',$data);
		$this->load->view('admin/tambah',$data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_aksi(){

		$this->form_validation->set_rules('nim', 'nim','required');

		if($this->form_validation->run()== FALSE){
			$this->tambah();
		}else{
			$nim_mhs = $this->input->post('nim');
			$nama = $this->input->post('nama_mahasiswa');
			$alamat = $this->input->post('alamat');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$gender = $this->input->post('gender');
			$agama = $this->input->post('agama');
			$fakultas= $this->input->post('fakultas');
			$prodi = $this->input->post('prodi');

			$data = array(
				'nim' => $nim_mhs,
				'nama_mahasiswa' => $nama,
				'alamat' => $alamat,
				'tanggal_lahir' => $tanggal_lahir,
				'gender' => $gender,
				'id_agama' => $agama,
				'id_fakultas' => $fakultas,
				'id_prodi' => $prodi,
			
			);
			$this->model_user->tambah_data($data,'mahasiswa');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert dismissible fade show" role="alert">Data Mahasiswa Berhasil ditambahkan<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/dashboard');
		}
	}
}
?>