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

    	// $this->db->like($category, $keyword, 'both');
     //    $this->db->order_by('UploadedDate', 'ASC');
     //    $this->db->limit(10);
     //    return $this->db->get('sp2d')->result();
        return $$this->db->query("SELECT * FROM sp2d WHERE Penerima LIKE '%".$category."%' AND SubUnit LIKE '%".$opd."%' AND Keterangan LIKE '%".$keyword."%' ORDER BY UploadedDate DESC")->result();


    }

    function getdata()
    {   
        return $this->db->query('SELECT * FROM sp2d ORDER BY UploadedDate DESC')->result();  
    }
}