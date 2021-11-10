<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Upload extends CI_Controller {


	public function __construct()
	{
	  parent::__construct();
        if($this->session->userdata('status') != "logged")
        {   
            redirect(base_url().'auth?alert=belum_login');  
        } 
	  // $this->load->model('excel_import_model');
	  $this->datetime = date("Y-m-d H:i:s");
      $this->load->model('m_upload');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('upload');
	}

	public function upload()
	{
        $input = array();
		$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) 
        {

 
            $arr_file = explode('.', $_FILES['berkas_excel']['name']);
            $extension = end($arr_file);
         
            if('csv' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
         
            $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
             
            $sheetData = $spreadsheet->getActiveSheet()->toArray();
            $date1= "";
            for($i = 1;$i < count($sheetData);$i++)
            {
                // var_dump($sheetData[$i]['0']);
                
                if($sheetData[$i]['0'] != ""){
                    $date1 = $sheetData[$i]['0'];
                }
                
                if($sheetData[$i]['0'] == "" && $sheetData[$i]['1'] != ""){
                     // var_dump($date1);
                    array_push($input, array(
                            'Tanggal'=> $date1,
                            'UploadedBy'      => "dev",
                            'NoSP2D'  => $sheetData[$i]['1'],
                            'Jenis' => $sheetData[$i]['2'],
                            'SubUnit' => $sheetData[$i]['3'],
                            'Penerima' => $sheetData[$i]['4'],
                            'Keterangan' => $sheetData[$i]['5'],
                            'Bruto' => $sheetData[$i]['6'],
                            'Potongan' => $sheetData[$i]['7'],
                            'Netto' => $sheetData[$i]['8'],
                            'UploadedDate' => date("Y-m-d H:i:s")
                        ));
                    // $Tanggal = $sheetData[$i]['1'];
                    // $UploadedBy = "dev";
                    // $NoSP2D
                }
                else if($sheetData[$i]['1'] != "")
                {
                    array_push($input, array(
                            'Tanggal'=> $sheetData[$i]['0'],
                            'UploadedBy'      => "dev",
                            'NoSP2D'  => $sheetData[$i]['1'],
                            'Jenis' => $sheetData[$i]['2'],
                            'SubUnit' => $sheetData[$i]['3'],
                            'Penerima' => $sheetData[$i]['4'],
                            'Keterangan' => $sheetData[$i]['5'],
                            'Bruto' => $sheetData[$i]['6'],
                            'Potongan' => $sheetData[$i]['7'],
                            'Netto' => $sheetData[$i]['8'],
                            'UploadedDate' => date("Y-m-d H:i:s")
                        ));
                }

                
                // $nama = $sheetData[$i]['1'];
                // $kelas = $sheetData[$i]['2'];
                // $alamat = $sheetData[$i]['3'];
                // mysqli_query($koneksi,"insert into tb_siswa (id_siswa,nama,kelas,alamat) values ('','$nama','$kelas','$alamat')");
            }
            if(!empty($input)){
                        $result = $this->m_upload->save_batch($input);
                    //     if ($result > 0) {
                    //         $out['status'] = 'form';
                    //         $out['msg'] = show_succ_msg('Data Kategori Berhasil ditambahkan', '20px');
                    //     } else {
                    //         $out['status'] = 'form';
                    //         $out['msg'] = show_err_msg('Data Kategori Gagal ditambahkan', '20px');
                    //     }
                    }
            echo json_encode($result);
        }

    
	}
}