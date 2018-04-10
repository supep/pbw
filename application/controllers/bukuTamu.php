<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuTamu extends CI_Controller {

	public function index()
	{
		$data = $this->load->model('dbModel');
		$dataChart = array();
		for($i=0 ; $i<=6; $i++)
		{
			$dataChart[$i] = $this->dbModel->getTotalData('guest_book', $i);
		}
		$dataChart = array('dataChart' => $dataChart);
		$data = $this->dbModel->getTable('guest_book');
       	$data = array('data' => $data);
		$this->load->view('base/header2');
		$this->load->view('isi/slider');
		$this->load->view('isi/chart', $dataChart);
		$this->load->view('isi/bukuTamu', $data);
		$this->load->view('base/footer');
	}
	public function add()
	{
		$this->load->model('dbModel');
		$data = array(
			'Name' => $this->input->post('name'),
			'Email' => $this->input->post('email'),
			'Message' => $this->input->post('message')
			);
		$data = $this->dbModel->insert('guest_book', $data);
		redirect(base_url() . "/bukuTamu",'refresh');
	}
	public function download()
	{
		$data = $this->load->model('dbModel');
		$data = $this->dbModel->getTable('guest_book');
       	$data = array('data' => $data);
		// Tambahkan table
		$this->load->view('download/bukuTamu.php', $data);
	}
}

/* End of file bukuTamu.php */
/* Location: ./application/controllers/bukuTamu.php */