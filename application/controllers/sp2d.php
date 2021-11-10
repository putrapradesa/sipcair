<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class sp2d extends CI_Controller {


	public function __construct()
	{
	  parent::__construct();
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
		$this->load->view('main');
	}

	public function cari()
    {
        $data = $this->input->post();
        $category = $data['category'];
        $odp = $data['odp'];
        $key = $data['key'];

        $result = $this->m_upload->getdata();

        $output = '';
        $index=1;

        foreach($result as $sp)
        {
            $output .= '<tr style="color:#fff;"><td width rowspan="5" style="background-color:#16a085;vertical-align:middle;text-align:center;">'.$index.'</td><td width colspan="5" style="background-color:#16a085;">'.$sp->Penerima.'</td></tr><tr style="font-style:italic;"><td width colspan="5"><span style = "float:left;width:5%;">Nama OPD</span><span style = "float:left;width:2%;">:</span><span style = "float:left;width:90%;">'.$sp->SubUnit.'</span></td></tr><tr style="font-style:italic;"><td width colspan="5"><span style = "float:left;width:5%;">Uraian</span><span style = "float:left;width:2%;">:</span><span style = "float:left;width:90%;">'.$sp->Keterangan.'</span></td></tr><tr><td class="center" rowspan="" style="font-weight:bold;background-color:#e6e6e6;">JENIS</td> <td width="" class="center" style="font-weight:bold;background-color:#e6e6e6;">NO SP2D</td><td width="" class="center" style="font-weight:bold;background-color:#e6e6e6;">TGL SP2D</td><td width="20%" class="center" style="font-weight:bold;background-color:#e6e6e6;">NAMA REKENING</td><td width="" class="center" style="font-weight:bold;background-color:#e6e6e6;">URAIAN</td></tr><tr>    <td class="center">'.$sp->Jenis.'</td><td width="" class="center"><span>'.$sp->NoSP2D.'</span></td><td width="" class="center"><span>'.$sp->Tanggal.'</span></td><td class="center"><span>'.$sp->Penerima.'</span></td><td width="" class="center"><span>'.$sp->Keterangan.'</span></td></tr>';
            $index++;
        }

        $table = '<table class="table table-striped table-bordered table-hover" id=""><tbody>'.$output.'</tbody></table>';


        echo json_encode($table);

    }



    
	
}