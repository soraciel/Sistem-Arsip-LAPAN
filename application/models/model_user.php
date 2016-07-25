<?php
	//File products_model.php
	class model_user extends CI_Model  {
		function __construct() { parent::__construct(); } 

	function getAllUser() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
		$this->db->from("user");

		return $this->db->get();
	}

	function getUser($id)
	{
		//select produk berdasarkan id yang dimiliki
	}

	function addUser($data)
	{
		//untuk insert data ke table 
		$this->db->insert('user', $data);
	}

	function updateUser($id)
	{
		//update produk berdasarkan id
	}

	function deleteUser($id)
	{
		//delete produk berdasarkan id

        $this->db->where('ID_PEG', $id);
        $this->db->delete('user');
	}
}