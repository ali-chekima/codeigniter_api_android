<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all()
	{
		$query = $this->db->get('persone');
		return $query->result();
	}

	public function add($data){
		$this->db->insert('persone', $data);
	}

	public function delete($id){
		$this->db->where('nom', $id);
		$this->db->delete('persone');
	}

	public function edit($id, $data){
		$this->db->where('mot', $id);
		$this->db->update('persone', $data);
	}
}

/* End of file  */
/* Location: ./application/models/ */