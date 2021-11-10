<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload extends CI_Model {

	public function __construct() {
		parent::__construct();
		// $this->table = 'user_info';
	}

	public function save_batch($data){
        $this->db->insert_batch('sp2d', $data);

        return $this->db->affected_rows();
    }

    public function cari($category, $opd, $keyword)
    {
    	// $query = '';
    	// if($keyword == ""){

    	// 	$query = $this->db->query("SELECT * FROM sp2d WHERE SubUnit LIKE '%".$opd."%' ORDER BY UploadedDate DESC");
    	// }else {
    	// 	$query = $this->db->query("SELECT * FROM sp2d WHERE SubUnit LIKE '%".$opd."%' AND ".$category." LIKE '%".$keyword."%' ORDER BY UploadedDate DESC");
    	// }

    	// // var_dump($query);
    	// return $query->result();

    	$query = "SELECT * FROM sp2d ";
    	if($opd != ""){

    		$query .= "WHERE SubUnit LIKE '%".$opd."%' ";
    	}

    	if($category != "" AND $keyword != "")
    	{
    		$query .= "AND ".$category." LIKE '%".$keyword."%' ";
    	}


    	$query .= "ORDER BY UploadedDate DESC";

    	// var_dump($query);
    	return $this->db->query($query)->result();

    }

    function getdata()
    {   
        return $this->db->query('SELECT * FROM sp2d ORDER BY UploadedDate DESC')->result();  
    }
}