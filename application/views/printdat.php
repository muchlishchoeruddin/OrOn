<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<title>Print Data</title>
	<link rel="shortcut icon" type="text/css" href="<?php echo base_url('asset/img/logo.ico')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/font-awesome-4.7.0/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?php echo BOWER;?>Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo DIST;?>css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo DIST;?>css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo BOWER;?>morris.js/morris.css">
	<link rel="stylesheet" href="<?php echo BOWER;?>jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href="<?php echo BOWER;?>bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="<?php echo BOWER;?>bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo PLUGIN;?>bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/mycss.css')?>">
	<script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/js/jquery.min.js')?>"></script>
	<script src="<?php echo BOWER;?>raphael/raphael.min.js"></script>
	<script src="<?php echo BOWER;?>/morris.js/morris.min.js"></script>
	<script src="<?php echo BOWER;?>jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<script src="<?php echo PLUGIN;?>jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo PLUGIN;?>jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo BOWER;?>jquery-knob/dist/jquery.knob.min.js"></script>
	<script src="<?php echo BOWER;?>moment/min/moment.min.js"></script>
	<script src="<?php echo BOWER;?>bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo BOWER;?>bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="<?php echo PLUGIN;?>bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="<?php echo BOWER;?>jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo BOWER;?>fastclick/lib/fastclick.js"></script>
	<script src="<?php echo DIST;?>js/adminlte.min.js"></script>
	<script src="<?php echo DIST;?>js/pages/dashboard.js"></script>
	<script src="<?php echo DIST;?>js/demo.js"></script>
</head>
<body>
<div class="wrapper" style="margin:20px">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h4 class="box-title">
				Print
			</h4>
		</div>
		<div class="box-body">
			<div class="form-group">
				<label>Organisasi</label><br>
				<input type="radio" name="organisasi" value="MPK"> MPK
				<input type="radio" name="organisasi" value="OSIS"> OSIS
				<input type="radio" name="organisasi" value="ROHIS"> ROHIS
				<div class="pull-right checkbx" style="margin-right: 1.5%">
				</div>	
			</div>
			<div class="form-group">
					<label>Absen</label><br>
			</div>
			<div class="printout">
				<table class="table table-stripped">
					<thead>
						<th>NO</th>
						<th>NIS</th>
						<th>NISN</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>Tanggal Lahir</th>
						<th>Tempat Lahir</th>
						<th>Alasan Masuk Organisasi</th>
						<th>Prinsip</th>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>