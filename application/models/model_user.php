<?php
	//File products_model.php
	class model_user extends CI_Model  {
		function __construct() { parent::__construct(); } 

	 function login($nip, $password)
 {
   $this -> db -> select( 'ID_PEG, NAMA_PEG, password, KET');
   $this -> db -> from('user');
   $this -> db -> where('ID_PEG', $nip);
   $this -> db -> where('PASSWORD', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

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