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
                    'level'     => $data->level,
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

        redirect('auth');
    }

    public function tambah_pengguna(){
        $data['menu'] = 'tambah';
        $data['ses_level'] = $this->session->userdata('level');

        $this->load->view('tambah_pengguna', $data);
    }

    public function tambah()
    {
        $data = $this->input->post();

        // var_dump($data);

        $username = $data['username'];
        $password = $data['password'];
        $nama = $data['nama'];
        $level = $data['level'];

        // $input = array();

        $input = array(
            'Username'=> $username,
            'Password'      => sha1($password),
            'level'  => $level,
                            'Nama' =>  $nama,
        );

        $this->load->model('m_login');

        $result = $this->m_login->insert($input);

        echo json_encode($result);
    }
}

?>