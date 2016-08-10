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

    function insert_arsip($NO_SURAT,$JUDUL,$TANGGAL,$JENIS_ARSIP,$ISI_NAME,$Keterangan)
    {        
        $data = array(
            'NO_SURAT' => $NO_SURAT,
            'JUDUL' => $JUDUL,
            'TANGGAL' => $TANGGAL,
            'ID_JENIS_ARSIP' => $JENIS_ARSIP,
            'ISI' => $ISI_NAME,
            'Keterangan' => $Keterangan
            );
        $this->db->insert('arsip', $data);
    }

    function view_arsip()
    {
        $this->db->order_by('ID_ARSIP', 'DESC');
        $query = $this->db->get('arsip');
        return $query->result();
    }

    function view_arsip_user()
    {   
        $this->db->where('ID_JENIS_ARSIP !=', '8');
        $this->db->order_by('ID_ARSIP', 'DESC');
        $query = $this->db->get('arsip');
        return $query->result();
    }

    function edit_arsip($ID_ARSIP)
    {
        $this->db->where("id_arsip",$ID_ARSIP);
        $query = $this->db->get('arsip');
        return $query->result();
    }

    function editing_arsip($ID_ARSIP,$NO_SURAT,$JUDUL,$TANGGAL,$JENIS_ARSIP,$ISI_NAME,$Keterangan)
    {   
        if($ISI_NAME=="kosong")
        {
            $data = array(
                'NO_SURAT' => $NO_SURAT,
                'JUDUL' => $JUDUL,
                'TANGGAL' => $TANGGAL,
                'ID_JENIS_ARSIP' => $JENIS_ARSIP,
                'Keterangan'=>$Keterangan
                // 'ISI' => $ISI                        
                );
        }
        else
        {
            $data = array(
                'NO_SURAT' => $NO_SURAT,
                'JUDUL' => $JUDUL,
                'TANGGAL' => $TANGGAL,
                'ID_JENIS_ARSIP' => $JENIS_ARSIP,
                'ISI' => $ISI_NAME,
                'Keterangan' => $Keterangan                           
                );
        }

        // $data = array(
        //         'NO_SURAT' => $NO_SURAT,
        //         'JUDUL' => $JUDUL,
        //         'TANGGAL' => $TANGGAL,
        //         'ID_JENIS_ARSIP' => $JENIS_ARSIP,
        //         'ISI' => $ISI_NAME                               
        //         );

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
        $this->db->or_like("Keterangan",$search_input);
        $query = $this->db->get('arsip');
        return $query->result();                             
    }

    function search_user($search_input)
    {
        // $this->db->where("JUDUL",$search_input);
        // $query = $this->db->get('arsip');
        // return $query->result();
        $this->db->like("JUDUL",$search_input);
        $this->db->or_like("no_surat",$search_input);
        $this->db->or_like("Keterangan",$search_input);
        $this->db->where('ID_JENIS_ARSIP !=', '8');
        $query = $this->db->get('arsip');
        return $query->result();                             
    }

    function filter_date($date1 , $date2){
       // $this->db->where('sell_date BETWEEN "'. date('Y-m-d', strtotime($date1)). '" and "'. date('Y-m-d', strtotime($date2)).'"');
        $this->db->where('TANGGAL >=', $date1);
        $this->db->where('TANGGAL <=', $date2);
        $query =  $this->db->get('arsip');
        return $query->result();   

    }  

    function filter_date_user($date1 , $date2){
       // $this->db->where('sell_date BETWEEN "'. date('Y-m-d', strtotime($date1)). '" and "'. date('Y-m-d', strtotime($date2)).'"');
        $this->db->where('TANGGAL >=', $date1);
        $this->db->where('TANGGAL <=', $date2);
        $this->db->where('ID_JENIS_ARSIP !=', '8');
        $query =  $this->db->get('arsip');
        return $query->result();   
    }      

 }
  