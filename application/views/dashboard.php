<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<title>Organization Of Nesas</title>
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
	<script type="text/javascript" src="<?php echo base_url('asset/js/myslide.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/js/myadmin.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/js/tanggota.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/js/eanggota.js')?>"></script>
</head>
<?php 
	$data['data'] = $data;
	$this->load->view($content,$data);
?>
</html>