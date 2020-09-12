<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlaporan extends CI_Model {
	public function get_data(){
		return $this->db->get('laporan')->result_array();
	}
}?>
