<?php

class User extends CI_Controller
{
	public function_construct()
	{
		parent::_construct();
		$this->load->model('user_model');
	}

	public function get()
	{
		$data = $this->user_model->get(5);
		print_r($data);
	}

	public function insert()
	{
		$result = $this-.user_model->insert([
				'login' => 'Jethro'
			]);
		print_r($result);
	}

	public function update()
	{
			$result = $this->user_model->update([
				'login' => 'Peggy'
			]) 3);
			print_r($result);
	}

	public function delete()
	{
			$result = $this->user_model->delete(7);
	}
}

?>