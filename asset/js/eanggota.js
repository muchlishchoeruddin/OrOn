// function jsedit(vor_id,vnis,vnisn,vnfront,vnback,vtmp_lahir,vtgl_lahir,vjk,vagama,vkls,valamat,vamo,vprinsip){
// 		var or=vor_id;
// 		var nis=vnis;
// 		var nisn=vnisn;
// 		var nama_depan=vnfront;
// 		var nama_belakang=vnback;
// 		var tmp_lahir=vtmp_lahir;
// 		var tgl_lahir=vtgl_lahir;
// 		var jk=vjk;
// 		var agama=vagama;
// 		var kelas=vkls;
// 		var alamat=valamat;
// 		var amo=vamo;
// 		var prinsip=vprinsip;

// 		return true;
// }
$(document).ready(function(){
			var dashboard = $('.Adashboard');
			var mpk = $('.Adanggota1');
			var osis = $('.Adanggota2');
			var rohis = $('.Adanggota3');
			var dokumentasi = $('.Adokumentasi');
			var addmember = $('.Atanggota');
			var editmember = $('.Aeanggota');
			function tampil(vdashboard,vmpk,vosis,vrohis,vdokumentasi,vaddmember,veditmember){
				dashboard.css('display',vdashboard);
				mpk.css('display',vmpk);
				osis.css('display',vosis);
				rohis.css('display',vrohis);
				dokumentasi.css('display',vdokumentasi);
				addmember.css('display',vaddmember);
				editmember.css('display',veditmember);
			return false;
			}
			$(document).ready(function(){
			$('.editmember').click(function(){
				$(window).scrollTop(0);
				tampil('none','none','none','none','none','none','block');
				$('.Aeanggota input,.Aeanggota textarea, .Aeanggota select,button').removeAttr('disabled');
				// alert('sfd');

				data = $(this).attr('data-id');
				$.ajax({
					url : 'http://localhost/OrON/API/users',
					type : 'post',
					dataType : 'json',
					data : { id : data },
					success : function(response)
					{
						$('.orselect').val(response.or_id).attr('disabled');
						$('input[name="nis"]').val(response.nis);
						$('input[name="nisn"]').val(response.nisn);
						$('input[name="nama_depan"]').val(response.nama_depan);
						$('input[name="nama_belakang"]').val(response.nama_belakang);
						$('input[name="tmp_lahir"]').val(response.tmp_lahir);
						$('input[name="tgl_lahir"]').val(response.tgl_lahir);
						$('select[name="gender"]').val(response.jk).attr('disabled');
						$('input[name="agama"]').val(response.agama);
						$('input[name="kls"]').val(response.kelas);
						$('textarea[name="alamat"]').val(response.alamat);
						$('input[name="amo"]').val(response.alasan_masuk_or);
						$('input[name="prinsip"]').val(response.prinsip);
					}
				});				
				$('.Aeanggota input[name="nis"]').attr('disabled','');


			});
			$('.hapusjs').click(function(){
				var r=confirm('Apakah anda yakin?');
				if(r==true){
					datahap = $(this).attr('data-id');
					$.ajax({
						url : 'http://localhost/OrON/API/delete',
						type : 'post',
						// dataType : 'json',
						data : { id : datahap },
						success : function()
						{
							alert('Data Berhasil dihapus');
							window.location="http://localhost/OrON/Admin/"
						}
					});
				}
			});
		});

			// $('.editmember').click(function(event){
			// 	var or=vor_id;
			// 	var nis=vnis;
			// 	var nisn=vnisn;
			// 	var nama_depan=vnfront;
			// 	var nama_belakang=vnback;
			// 	var tmp_lahir=vtmp_lahir;
			// 	var tgl_lahir=vtgl_lahir;
			// 	var jk=vjk;
			// 	var agama=vagama;
			// 	var kelas=vkls;
			// 	var alamat=valamat;
			// 	var amo=vamo;
			// 	var prinsip=vprinsip;
			// 	alert(or+nis+nisn+nama_depan+nama_belakang+tmp_lahir);
			// });
});	
