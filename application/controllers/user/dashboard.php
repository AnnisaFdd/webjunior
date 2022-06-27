<?php
/**
 * 
 */
class Dashboard extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if (!isset($this->session->userdata['level'])){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('auth');
		}
	}
	
	public function index ()
	{
		$data['mahasiswa'] = $this->model_user->all_mahasiswa();
		$this->load->view('template_user/header');
		$this->load->view('template_user//sidebar');
		$this->load->view('user/dashboard',$data);
		$this->load->view('template_user//footer');
	}

	public function detail($id)
	{
		$data['mahasiswa'] = $this->model_user->get_mahasiswa($id);
		$data['fakultas'] = $this->model_user->get_fakultas();
		$data['prodi'] = $this->model_user->get_prodi();
		$data['agama'] = $this->model_user->get_agama();
		$this->load->view('template_user/header');
		$this->load->view('template_user//sidebar');
		$this->load->view('user/detail',$data);
		$this->load->view('template_user//footer');
	}

}
