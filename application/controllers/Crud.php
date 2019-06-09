<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Crudm');
	}

	public function index(){
		$result['data']=$this->Crudm->readm();
		$this->load->view('crudv',$result);
	}
	public function create(){
		$data=array(
			'username'=>$this->input->post('username'),
			'speed'=>$this->input->post('speed')
		);
		$this->Crudm->createm($data);
		redirect("Crud");
	}
	public function update(){
		$data=array(
			'username'=>$this->input->post('username'),
			'speed'=>$this->input->post('speed')
		);
		$this->Crudm->updatem($data,$this->input->post('uid'));
		redirect("Crud");
	}
	public function delete(){
		$this->Crudm->deletem($this->input->post('uid'));
		redirect("Crud");
	}
}
