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
      $this->db->set('email', $nip);
      $this->db->insert('log_user');
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function getPassword($id){


  $this->db->where('ID',$id);
  $this->db->select('password');
  $this->db->from('user');
  

  $query = $this->db->get();

  //echo hai;
  return  $query->row()->password;
 }

	function getAllUser() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
		$this->db->from("user");

		return $this->db->get();
	}

	function getUser($id)
	{
		

        $this->db->where('ID', $id); 
        $this->db->select("*");
        $this->db->from("user");
        
        return $this->db->get();
	}

	function addUser($data)
	{
		//untuk insert data ke table 
		if(!$this->db->insert('user', $data))
      {return $error="error";}
 
    //else
   // return $this->db->insert('user', $data);



	}

	function updateUser($data,$id)
	{
		//update produk berdasarkan id
		//update produk
        $this->db->where('ID',$id); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('user', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function deleteUser($id)
	{
		//delete produk berdasarkan id

        $this->db->where('ID', $id);
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