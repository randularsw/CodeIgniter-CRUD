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
		echo $this->input->post{'username'};
		$this->Crudm->createm($this->input->post{'username'},$this->input->post{'speed'});
		redirect("Crud");
	}
}
