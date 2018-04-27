$(document).ready(function(){
	$('.printosis').click(function(){
		var wrapper = $('#table-osis').html();
		// alert('ass');
		var body = $('body').html();

		$('body').html(wrapper);

		$('.td-hidden').removeAttr('hidden');
		$('.td-show').attr('hidden','');

		if (!window.print()) {
			$('body').html(body);
		}

	}); 
	$('.printrohis').click(function(){
		var wrapper = $('#table-rohis').html();
		// alert('ass');
		var body = $('body').html();

		$('body').html(wrapper);

		$('.td-hidden').removeAttr('hidden');
		$('.td-show').attr('hidden','');

		if (!window.print()) {
			$('body').html(body);
		}

	}); 
	$('.printmpk').click(function(){
		var wrapper = $('#table-mpk').html();
		// alert('ass');
		var body = $('body').html();

		$('body').html(wrapper);

		$('.td-hidden').removeAttr('hidden');
		$('.td-show').attr('hidden','');

		if (!window.print()) {
			$('body').html(body);
		}

	}); 
});