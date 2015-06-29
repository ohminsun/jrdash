<?php
class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('home/inc/header_view');
		$this->load->view('home/home_view');
		$this->load->view('home/inc/footer_view');
		echo "Home Page";
	}

	public function test()
	{
		$this->db->order_by(['user_id DESC']);
		$q = $this->db->get('user');
		print_r($q->result());
	}
}
?>