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

	// public function test()
	{
		/*	SELECT user_id, login FROM user
			ORDER BY user_id DESC */
		$this->db->select('user_id, login');
		$this->db->from('user');
		$this->db->order_by(['user_id DESC']);

		$q = $this->db->get();
		print_r($q->result());

		/* $this->db->insert('user', [
			'login' ==> 'Jenkins'
		]); */

		/* $this->db->where('['user_id' => 4]);
		$this->db->update('user', [
			'login' => 'Sammy'
		]); */
		
		/* $this->db->delete('user', ['user_id' => 3]); */

	// }
}
?>