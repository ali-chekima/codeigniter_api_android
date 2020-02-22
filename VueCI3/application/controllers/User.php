<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
		header("Access-Control-Allow-Headers: X-Requested-With");
		parent::__construct();

		$this->load->model('User_Model','user');
	}

	/*public function index()
	{
		$this->load->view('user');
	}*/

	public function get_all(){
		echo json_encode($this->user->get_all());
	}

	public function add(){
		$this->user->add($this->get_post());
	}

	public function delete($id){
		$this->user->delete($id);
	}

	public function edit($id){
		$this->user->edit($id, $this->get_post());
	}

	private function get_post(){
		return json_decode(file_get_contents("php://input"));
	}
}
