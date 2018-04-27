$(document).ready(function(){

var dashboard = $('.Adashboard');
var mpk = $('.Adanggota1');
var osis = $('.Adanggota2');
var rohis = $('.Adanggota3');
var dokumentasi = $('.Adokumentasi');
var addmember = $('.Atanggota');
var editmember = $('.Aeanggota');

dashboard.css('display','block');
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
	$('.sidebar-menu li').eq(1).click(function(){
		$(this).addClass('active');
		if($('.sidebar-menu li').eq(2).find('menu-open')){			
			$('.sidebar-menu li').eq(2).removeClass('menu-open');
			$('.sidebar-menu li').eq(2).removeClass('active');	
		}else{
			$('.sidebar-menu li').eq(2).removeClass('active');	
		}
		$('.sidebar-menu li').eq(6).removeClass('active');
		tampil('block','none','none','none','none','none','none');
	});
	$('.sidebar-menu li').eq(2).click(function(){ 

		// if ($('.sidebar-menu li').eq(3).find('active')){
		// 	tampil('none','block','none','none','none');
		// }else if($('.sidebar-menu li').eq(4).find('active')){
		// 	tampil('none','none','block','none','none');
		// }else if($('.sidebar-menu li').eq(5).find('active')){
		// 	tampil('none','none','none','block','none');
		// }



		$('.sidebar-menu li').eq(6).removeClass('active');
		$(this).addClass('active');
		$('.sidebar-menu li').eq(1).removeClass('active');

		$('.sidebar-menu li').eq(3).click(function(){
			$('#dk').find('li[data-active="true"]').attr('data-active', false);
			$(this).attr('data-active', true);

			$(this).addClass('active');
			$('.sidebar-menu li').eq(4).removeClass('active');
			$('.sidebar-menu li').eq(5).removeClass('active');
			tampil('none','block','none','none','none','none','none');
		});
		$('.sidebar-menu li').eq(4).click(function(){
			$('#dk').find('li[data-active="true"]').attr('data-active', false);
			$(this).attr('data-active', true);

			$(this).addClass('active');
			$('.sidebar-menu li').eq(3).removeClass('active');
			$('.sidebar-menu li').eq(5).removeClass('active');			
			tampil('none','none','block','none','none','none','none');
		});
		$('.sidebar-menu li').eq(5).click(function(){
			$('#dk').find('li[data-active="true"]').attr('data-active', false);
			$(this).attr('data-active', true);

			$(this).addClass('active');
			$('.sidebar-menu li').eq(3).removeClass('active');
			$('.sidebar-menu li').eq(4).removeClass('active');
			tampil('none','none','none','block','none','none','none');
		});
	}); 
	$('#dk').click(function(){
		var targetActive = $(this).find('li[data-active="true"]').data('target'); 
		
		if (targetActive == 1) {
			$(this).addClass('active');
			$('.sidebar-menu li').eq(4).removeClass('active');
			$('.sidebar-menu li').eq(5).removeClass('active');
			tampil('none','block','none','none','none','none','none');
		}
		else if (targetActive == 2) {
			$(this).addClass('active');
			$('.sidebar-menu li').eq(3).removeClass('active');
			$('.sidebar-menu li').eq(5).removeClass('active');			
			tampil('none','none','block','none','none','none','none');
		}
		else if (targetActive == 3) {
			$(this).addClass('active');
			$('.sidebar-menu li').eq(3).removeClass('active');
			$('.sidebar-menu li').eq(4).removeClass('active');
			tampil('none','none','none','block','none','none','none');
		}

	});

	$('.sidebar-menu li').eq(6).click(function(){
		$(this).addClass('active');
		$('.sidebar-menu li').eq(1).removeClass('active');
		if($('.sidebar-menu li').eq(2).find('menu-open')){			
			$('.sidebar-menu li').eq(2).removeClass('menu-open');
			$('.sidebar-menu li').eq(2).removeClass('active');	
		}else{
			$('.sidebar-menu li').eq(2).removeClass('active');	
		}
		tampil('none','none','none','none','block','none','none');
	});
	$('.addmember').click(function(){
		tampil('none','none','none','none','none','block','none');
	});

});