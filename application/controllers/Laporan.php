<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$data['laporan'] = $this->Mlaporan->get_data();
		$this->load->view('Layout/navbar');
		$this->load->model('Mlaporan');
		$this->load->view('v_laporan', $data);
	}
}
