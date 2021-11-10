

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
        <div class="container-fluid">
            <h2 class="text-center display-4">Pencarian Data</h2>
            <br>
            <form action="POST" id="form-cari-sp2d">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Pilih ODP</label>
                                    <select class="select2" name="odp" id="odp" style="width: 100%;">
                                        <option>Text only</option>
                                        <option>Images</option>
                                        <option>Video</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Pilih Kategori Pencarian</label>
                                    <select class="select2" name="category" id="category" style="width: 100%;" required>
                                        <option value = "Penerima">Nama Rekening</option>
                                        <option value = "Keterangan">Uraian</option>
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
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" name="key" class="form-control form-control-lg" placeholder="Kata Kunci">
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

    $('#form-cari-sp2d').submit(function(e) {
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('sp2d/cari'); ?>',
            data: data
        })
        .done(function(data) {
        	$('#ajax_table').html(jQuery.parseJSON(data));
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
