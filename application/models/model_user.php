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

        $this->db->where('ID_PEG', $id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("user");
        
        return $this->db->get();
	}

	function addUser($data)
	{
		//untuk insert data ke table 
		$this->db->insert('user', $data);
	}

	function updateUser($data,$id)
	{
		//update produk berdasarkan id
		//update produk
        $this->db->where('ID_PEG',$id); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('user', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function deleteUser($id)
	{
		//delete produk berdasarkan id

        $this->db->where('ID_PEG', $id);
        $this->db->delete('user');
	}
}