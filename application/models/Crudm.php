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
    public function updatem($data,$uid){
        $this->db->where('userid', $uid);
        $this->db->update('raceusers', $data);
    }
    public function deletem($uid){
        $this->db->where('userid',$uid);
        $this->db->delete('raceusers');
    }
}
