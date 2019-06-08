<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crudm extends CI_Model {

	public function __construct(){
        $this->load->database();
    }
    function createm($username,$speed){
        $data=array(
            'username'=>$username,
            'speed'=>$speed
        );
        $this->db->insert('raceusers',$data);
    }
}
