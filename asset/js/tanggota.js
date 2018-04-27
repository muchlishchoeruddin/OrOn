$(document).ready(function(){
	$('.orselect').change(function(){
		if($(this).val() != "none"){
			$('.Atanggota input,.Atanggota textarea, .Atanggota select,button').removeAttr('disabled');
		}else{			
			$('.Atanggota input,.Atanggota textarea, .Atanggota select,button').attr('disabled','');
			$(this).removeAttr('disabled');
		}
	});
	$('.Atanggota tsubmit').click(function(){
		alert('sadasd');
	});

	// $('#form').submit(function(event){
	// 	event.preventDefault();

	// 	var data=$('#form').serialize();
	// 	$.ajax({
	// 		type:"POST",
	// 		url:"<?php echo base_url('Admin/tambah')?>",
	// 		data: data,
	// 		success: function() {
	// 			$('.')
	// 		}
	// 	});
	// 	// var orselect = $('.orselect').val();
	// 	// var nis = $('input[name="nis"]').val();
	// 	// var nisn = $('input[name="nisn"]').val();
	// 	// var nm_depan = $('input[name="nama_depan"]').val();
	// 	// var nm_belakang = $('input[name="nama_belakang"]').val();
	// 	// var tmp_lahir = $('input[name="tmp_lahir"]').val();
	// 	// var tgl_lahir = $('input[name="tgl_lahir"]').val();
	// 	// var gender = $('select[name="gender"]').val();
	// 	// var kelas = $('input[name="kls"]').val();
	// 	// var alamat = $('textarea[name="alamat"]').val();
	// 	// var amo = $('input[name="amo"]').val();
	// 	// var prinsip = $('input[name="prinsip"]').val();

	// })

});