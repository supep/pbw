<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	public function index()
	{
		$this->load->view('base/header');
		$this->load->view('isi/slider');
		$this->load->view('isi/fasilitas');
		$this->load->view('isi/about');
		$this->load->view('isi/testimoni');
		$this->load->view('isi/peluang');
		$this->load->view('isi/contact');
		$this->load->view('base/footer');
	}

	public function chat()
	{
		$this->load->view('chat');
	}

	public function mail()
	{
		$this->load->view('mail');
	}


	/*/ Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}*/

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */