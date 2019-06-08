<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crudm extends CI_Model {

	public function __construct(){
        $this->load->database();
    }
    public function createm($data){
        $this->db->insert('raceusers',$data);
    }
    public function readm(){
        $query=$this->db->get('raceusers');
        return $query->result();
    }
}
