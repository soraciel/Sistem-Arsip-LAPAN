<?php
	//File products_model.php
	class model_user extends CI_Model  {
		function __construct() { parent::__construct(); } 

	 function login($nip, $password)
 {
   $this -> db -> select( 'ID_PEG, NAMA_PEG, password, KET');
   $this -> db -> from('user');
   $this -> db -> where('ID_PEG', $nip);
   $this -> db -> where('PASSWORD', md5($password));
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

  function jumlah_user(){
    return $this->db->get("user")->num_rows();
  }

    function data_user($number,$offset){
    return $query = $this->db->get('user',$number,$offset)->result();   
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
		//if(!$this->db->insert('user', $data))
      //{return $error="error";}

    return $this->db->insert('user', $data);
    //else
   // return $this->db->insert('user', $data);



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

	  function search($search_input)
    {
        // $this->db->where("JUDUL",$search_input);
        // $query = $this->db->get('arsip');
        // return $query->result();
        $this->db->like("ID_PEG",$search_input);
        $this->db->or_like("NAMA_PEG",$search_input);
       return $this->db->get('user');
      // return $query->result();                             
    }        

}