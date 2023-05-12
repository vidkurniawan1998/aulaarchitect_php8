<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_list extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('main');
	}

	public function index()
	{
		$data = $this->main->data_front();
		$data['page'] = $this->db->where(array('type'=>'price_list', 'id_language'=>$data['id_language']))->get('pages')->row();
		$this->template->front('daftar_harga', $data);
	}
}
