<?php

class arsip_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
      
      function jenis_arsip()
    {        
        $query = $this->db->get('jenis_arsip');
        return $query->result();
    }

    function insert_arsip($NO_SURAT,$JUDUL,$TANGGAL,$JENIS_ARSIP,$ISI,$ISI_NAME)
    {        
        $data = array(
            'NO_SURAT' => $NO_SURAT,
            'JUDUL' => $JUDUL,
            'TANGGAL' => $TANGGAL,
            'ID_JENIS_ARSIP' => $JENIS_ARSIP,
            'ISI' => $ISI_NAME
            );
        $this->db->insert('arsip', $data);
    }

    function view_arsip()
    {
        $query = $this->db->get('arsip');
        return $query->result();
    }

    function edit_arsip($ID_ARSIP)
    {
        $this->db->where("id_arsip",$ID_ARSIP);
        $query = $this->db->get('arsip');
        return $query->result();
    }

    function editing_arsip($ID_ARSIP,$NO_SURAT,$JUDUL,$TANGGAL,$JENIS_ARSIP,$ISI,$ISI_NAME)
    {
        $data = array(
            'NO_SURAT' => $NO_SURAT,
            'JUDUL' => $JUDUL,
            'TANGGAL' => $TANGGAL,
            'ID_JENIS_ARSIP' => $JENIS_ARSIP,
            'ISI' => $ISI
            // 'ISI_NAME' => $ISI_NAME,            
            );

        $this->db->where("ID_ARSIP",$ID_ARSIP);
        $this->db->update('arsip', $data);
    }

    function delete_arsip($ID_ARSIP)
    {
         $files = glob(base_url().'uploads/'.'5113100037.jpg'); // get all file names
        foreach($files as $file){ // iterate files
        if(is_file($file))
            unlink($file); // delete file
        //echo $file.'file deleted';
    }   
        // $this->db->where("ID_ARSIP",$ID_ARSIP);
        // $this->db->delete('arsip');
    }

    function download_arsip($ID_ARSIP)
    {        
        return $this->db->
        select('*')->
        from('arsip')->
        where("id_arsip",$ID_ARSIP)->
        get()->row_array();
    }


    function filter_arsip($jenis_arsip){
        $this->db->where("ID_JENIS_ARSIP",$jenis_arsip);
        $query = $this->db->get('arsip');
        return $query->result();
 }
    function search($search_input)
    {
        // $this->db->where("JUDUL",$search_input);
        // $query = $this->db->get('arsip');
        // return $query->result();

        $sql=$this->db->query('SELECT * FROM arsip where judul like %(".$search_input.")% or no_surat like %(".$search_input.")%');
        return $sql->result();
    }
        
    function search1($table_name, $column_name,$criteria = null, $id = null)
    {
        $this->db->select($column_name);
        $this->db->from($table_name);
     
        if (!is_null($id)){
            $this->db->where('id', $id);
        }
     
        $this->db->order_by('id', 'desc');
     
        return $this->db->get()->result();

    }


 ?>    