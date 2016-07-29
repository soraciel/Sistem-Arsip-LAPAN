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
        $this->db->where("ID_ARSIP",$ID_ARSIP);
        $this->db->delete('arsip');
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
        $this->db->like("JUDUL",$search_input);
        $this->db->or_like("no_surat",$search_input);
        $query = $this->db->get('arsip');
        return $query->result();                             
    }        

 }
  