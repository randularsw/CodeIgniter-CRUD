<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Crudm');
	}

	public function index(){
		$this->load->view('crudv');
	}
	public function create(){
		$data=array(
			'username'=>$this->input->post('username'),
			'speed'=>$this->input->post('speed')
		);
		$this->Crudm->createm($data);
		redirect("Crud");
	}
}
