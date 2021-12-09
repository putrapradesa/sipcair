

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIP CAIR | Sistem Informasi Pencairan Sp2d</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
</head>
<body>
	<!-- <nav class="page-header navbar navbar-fixed-top navbar-dark">
		<div class="page-logo">
			&nbsp&nbsp<a href="<?php echo base_url(); ?>">
			<img src="<?php echo base_url(); ?>/assets/images/PapuaBarat2.png" alt="logo" class="logo-default" style="width: 5%; text-align: center;"/>
			</a>
			&nbsp&nbsp<h7 style="color:#FFFFFF;">SIP CAIR (Sistem Informasi Pencairan Sp2d)</h7>
		</div>
		<a href="javascript:;">
		</a>

	</nav> -->

  <nav class="page-header navbar navbar-expand-md navbar-light navbar-dark">
    <div class="page-logo">
			&nbsp&nbsp<a href="<?php echo base_url(); ?>">
			<img src="<?php echo base_url(); ?>/assets/images/PapuaBarat2.png" alt="logo" class="logo-default" style="width: 5%; text-align: center;"/>
			</a>
			&nbsp&nbsp<h7 style="color:#FFFFFF;">SIP CAIR (Sistem Informasi Pencairan Sp2d)</h7>
		</div>


      <ul class="navbar-nav navbar-expand ml-auto">
      	<li ><span><a href="<?php echo base_url();?>upload" style="color:#FFFFFF;">Upload</a></span></li>&nbsp&nbsp&nbsp
      </ul>

  </nav>
	<br/>
	<section class="content">
        <div id="load" style="width: 100%; height: 100%; position: fixed; text-indent: 100%; background: #e0e0e0 url('<?php echo base_url().'assets/img/loading.gif'?>') no-repeat center; z-index: 1; opacity: 0.4; background-size: 8%;">Loading...</div>
        <div class="container-fluid">
            <h2 class="text-center display-4">Pencarian Data</h2>
            <br>
            <form action="POST" id="form-cari-sp2d">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Pilih OPD</label>
                                    <select class="select2" name="odp" id="odp" style="width: 100%;" required>
                                    	<option value = ""></option>
                                        <option value = "BADAN KEPEGAWAIAN DAERAH">BADAN KEPEGAWAIAN DAERAH</option>
                                        <option value = "BADAN KESATUAN BANGSA DAN POLITIK">BADAN KESATUAN BANGSA DAN POLITIK</option>
                                        <option value = "BADAN PENANGGULANGAN BENCANA DAERAH">BADAN PENANGGULANGAN BENCANA DAERAH</option>
                                        <option value = "BADAN PENDAPATAN DAERAH">BADAN PENDAPATAN DAERAH</option>
                                        <option value = "BADAN PENELITIAN DAN PENGEMBANGAN DAERAH">BADAN PENELITIAN DAN PENGEMBANGAN DAERAH</option>
                                        <option value = "BADAN PENGELOLA KEUANGAN DAN ASET DAERAH">BADAN PENGELOLA KEUANGAN DAN ASET DAERAH</option>
                                        <option value = "BADAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH">BADAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH</option>
                                        <option value = "BADAN PENGHUBUNG DAERAH">BADAN PENGHUBUNG DAERAH</option>
                                        <option value = "BADAN PERENCANAAN PEMBANGUNAN DAERAH">BADAN PERENCANAAN PEMBANGUNAN DAERAH</option>
                                        <option value = "BIRO ADMINISTRASI PELAKSANAAN OTONOMI KHUSUS">BIRO ADMINISTRASI PELAKSANAAN OTONOMI KHUSUS</option>
                                        <option value = "BIRO ADMINISTRASI PEMBANGUNAN">BIRO ADMINISTRASI PEMBANGUNAN</option>
                                        <option value = "BIRO ADMINISTRASI PIMPINAN">BIRO ADMINISTRASI PIMPINAN</option>
                                        <option value = "BIRO HUKUM">BIRO HUKUM</option>
                                        <option value = "BIRO KESEJAHTERAAN RAKYAT">BIRO KESEJAHTERAAN RAKYAT</option>
                                        <option value = "BIRO ORGANISASI">BIRO ORGANISASI</option>
                                        <option value = "BIRO PEMERINTAHAN DAN OTONOMI DAERAH">BIRO PEMERINTAHAN DAN OTONOMI DAERAH</option>
                                        <option value = "BIRO PENGADAAN BARANG DAN JASA">BIRO PENGADAAN BARANG DAN JASA</option>
                                        <option value = "BIRO PEREKONOMIAN">BIRO PEREKONOMIAN</option>
                                        <option value = "BIRO UMUM">BIRO UMUM</option>
                                        <option value = "DINAS ADMINISTRASI KEPENDUDUKAN, PENCATATAN SIPIL, PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA">DINAS ADMINISTRASI KEPENDUDUKAN, PENCATATAN SIPIL, PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA</option>
                                        <option value = "DINAS ENERGI DAN SUMBER DAYA MINERAL">DINAS ENERGI DAN SUMBER DAYA MINERAL</option>
                                        <option value = "DINAS KEARSIPAN DAN PERPUSTAKAAN">DINAS KEARSIPAN DAN PERPUSTAKAAN</option>
                                        <option value = "DINAS KEBUDAYAAN DAN PARIWISATA">DINAS KEBUDAYAAN DAN PARIWISATA</option>
                                        <option value = "DINAS KEHUTANAN">DINAS KEHUTANAN</option>
                                        <option value = "DINAS KELAUTAN DAN PERIKANAN">DINAS KELAUTAN DAN PERIKANAN</option>
                                        <option value = "DINAS KESEHATAN">DINAS KESEHATAN</option>
                                        <option value = "DINAS KETAHANAN PANGAN">DINAS KETAHANAN PANGAN</option>
                                        <option value = "DINAS KOMUNIKASI INFORMATIKA, PERSANDIAN DAN STATISTIK">DINAS KOMUNIKASI INFORMATIKA, PERSANDIAN DAN STATISTIK</option>
                                        <option value = "DINAS KOPERASI, USAHA KECIL DAN MENENGAH">DINAS KOPERASI, USAHA KECIL DAN MENENGAH</option>
                                        <option value = "DINAS LINGKUNGAN HIDUP DAN PERTANAHAN">DINAS LINGKUNGAN HIDUP DAN PERTANAHAN</option>
                                        <option value = "DINAS PEKERJAAN UMUM DAN PERUMAHAN RAKYAT">DINAS PEKERJAAN UMUM DAN PERUMAHAN RAKYAT</option>
                                        <option value = "DINAS PEMBERDAYAAN MASYARAKAT DAN KAMPUNG">DINAS PEMBERDAYAAN MASYARAKAT DAN KAMPUNG</option>
                                        <option value = "DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK">DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK</option>
                                        <option value = "DINAS PEMUDA DAN OLAHRAGA">DINAS PEMUDA DAN OLAHRAGA</option>
                                        <option value = "DINAS PENANAMAN MODAL DAN PELAYANAN PERIJINAN TERPADU">DINAS PENANAMAN MODAL DAN PELAYANAN PERIJINAN TERPADU</option>
                                        <option value = "DINAS PENDIDIKAN">DINAS PENDIDIKAN</option>
                                        <option value = "DINAS PERHUBUNGAN">DINAS PERHUBUNGAN</option>
                                        <option value = "DINAS PERINDUSTRIAN DAN PERDAGANGAN">DINAS PERINDUSTRIAN DAN PERDAGANGAN</option>
                                        <option value = "DINAS PETERNAKAN DAN KESEHATAN HEWAN">DINAS PETERNAKAN DAN KESEHATAN HEWAN</option>
                                        <option value = "DINAS SOSIAL">DINAS SOSIAL</option>
                                        <option value = "DINAS TANAMAN PANGAN DAN HORTIKULTURA DAN PERKEBUNAN">DINAS TANAMAN PANGAN DAN HORTIKULTURA DAN PERKEBUNAN</option>
                                        <option value = "DINAS TRANSMIGRASI DAN TENAGA KERJA">DINAS TRANSMIGRASI DAN TENAGA KERJA</option>
                                        <option value = "INSPEKTORAT">INSPEKTORAT</option>
                                        <option value = "SATUAN POLISI PAMONGPRAJA">SATUAN POLISI PAMONGPRAJA</option>
                                        <option value = "SEKRETARIAT DAERAH">SEKRETARIAT DAERAH</option>
                                        <option value = "SEKRETARIAT DEWAN PERWAKILAN RAKYAT PROVINSI PAPUA BARAT">SEKRETARIAT DEWAN PERWAKILAN RAKYAT PROVINSI PAPUA BARAT</option>
                                        <option value = "SEKRETARIAT MAJELIS RAKYAT PAPUA PROVINSI PAPUA BARAT">SEKRETARIAT MAJELIS RAKYAT PAPUA PROVINSI PAPUA BARAT</option>
                                        <option value = "UPT SAMSAT KABUPATEN FAKFAK">UPT SAMSAT KABUPATEN FAKFAK</option>
                                        <option value = "UPT SAMSAT KABUPATEN KAIMANA">UPT SAMSAT KABUPATEN KAIMANA</option>
                                        <option value = "UPT SAMSAT KABUPATEN MANOKWARI">UPT SAMSAT KABUPATEN MANOKWARI</option>
                                        <option value = "UPT SAMSAT KABUPATEN RAJA AMPAT">UPT SAMSAT KABUPATEN RAJA AMPAT</option>
                                        <option value = "UPT SAMSAT KABUPATEN SORONG">UPT SAMSAT KABUPATEN SORONG</option>
                                        <option value = "UPT SAMSAT KABUPATEN SORONG SELATAN">UPT SAMSAT KABUPATEN SORONG SELATAN</option>
                                        <option value = "UPT SAMSAT KABUPATEN TELUK BINTUNI">UPT SAMSAT KABUPATEN TELUK BINTUNI</option>
                                        <option value = "UPT SAMSAT KABUPATEN TELUK WONDAMA">UPT SAMSAT KABUPATEN TELUK WONDAMA</option>
                                        <option value = "UPT SAMSAT KOTA SORONG">UPT SAMSAT KOTA SORONG</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Pilih Kategori Pencarian</label>
                                    <select class="select2" name="category" id="category" style="width: 100%;" required>
                                    	<option value = ""></option>
                                        <option value = "Penerima">Nama Rekening</option>
                                        <option value = "Keterangan">Uraian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <select class="select2" name="tahun" id="year" style="width: 100%;" required>
                                        <option value = ""></option>
                                         <?php foreach($year as $l) { ?>
                                            <option value="<?php echo $l; ?>"><?php echo $l; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-3">
                                <div class="form-group">
                                    <label>Order By:</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>Title</option>
                                        <option>Date</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <input type="search" name="key" class="form-control form-control-lg" placeholder="Kata Kunci" required>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div> -->
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" name="key" class="form-control form-control-lg" placeholder="Kata Kunci" required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div  class="table-responsive" id="ajax_table"></div>
    </section>
</body>

<footer class="main-footer">
    <strong>Copyright &copy; 2021 SIP CAIR</a>.</strong> All rights reserved.
</footer>


<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<script>
    $(function () {
      $('.select2').select2()
    });

    $(document).ready(function(){ 
        $("#load").fadeOut();

         $('#form-cari-sp2d').submit(function(e) {
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('sp2d/cari'); ?>',
            data: data
        })
        .done(function(data) {
        	var data = jQuery.parseJSON(data)
        	if(data.status == 500)
        	{
        		alert("Jika Kategori Pencarian dipilih maka kata kunci dipilih begitu sebaliknya")
        	}else
        	{
        		$('#ajax_table').html(data.data);
        	}
            
            // var out = jQuery.parseJSON(data);

            // tampilKategori();
            // if (out.status == 'form') {
            //     document.getElementById("form-tambah-kategori").reset();
            //     if(document.getElementById('inputmany') != null){
            //         document.getElementById('inputmany').remove();
            //     }
            //     // $('#tambah-pt').modal('hide');
            //     // console.log(out.msg);
            //     $('.form-msg').html(out.msg);
            //     effect_msg_form();
            // } else {
            //     document.getElementById("form-tambah-kategori").reset();
            //     if(document.getElementById('inputmany') != null){
            //         document.getElementById('inputmany').remove();
            //     }
                
            //     // $('#tambah-bagian').modal('hide');
            //     $('.msg').html(out.msg);
                
            //     effect_msg();
            // }
        })
        
        e.preventDefault();
        });
    })

   

//     $(document).ready(function(){ 
// 	  $('#form-cari-sp2d').on('submit', function(event){
// 	    // data = new FormData(this);
// 	    // console.log(data);
// 	    event.preventDefault();

// 	    var data = $(this).serialize();

// 	    // console.log(data)

// 	    $.ajax({

// 	      url:'<?php echo base_url('sp2d/cari'); ?>',

// 	      method:"POST",

// 	      data:data,

// 	      contentType:false,

// 	      cache:false,

// 	      processData:false,

// 	      success:function(data){
// 	      	// console.log(data)

// 	      	// $('#ajax_table').html(msg);
// 	        // if(data > 0){
// 	        //   alert("Data Berhasil diupload");
// 	        // }else{
// 	        //   alert("Data Gagal diupload");
// 	        // }
	        

// 	      }

// 	    })

// 	  })
// })
</script>
</html>
