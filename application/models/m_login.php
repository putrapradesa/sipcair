<?php  
 
class m_login extends CI_Model
{    
    function cek_login($table, $where)
    {   
        return $this->db->get_where($table,$where);  
    } 


    function insert($data)
    {   
        $this->db->insert('auth', $data);

        return $this->db->affected_rows();  
    }
 
} 
 
?> 