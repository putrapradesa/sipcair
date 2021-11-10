<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }

    public function aksi()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() != false)
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $where = array(
                'Username'  => $username,
                'Password'  => sha1($password),
            );

            $this->load->model('m_login');

            $cek = $this->m_login->cek_login('auth',$where)->num_rows();

            if($cek > 0)
            {
                $data = $this->m_login->cek_login('auth',$where)->row();

                $data_session = array(
                    'id'        => $data->Id,
                    'username'  => $data->Username,
                    'nama'      => $data->Nama,
                    'level'     => $data->Level,
                    'status'    => 'logged'
                );

                $this->session->set_userdata($data_session);
                
                redirect(base_url().'Welcome');

                // $this->load->view()

            }else{
                redirect(base_url().'login?alert=gagal');
            }
        }else
        {
            $this->load->view('login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();

        redirect('login');
    }
}

?>