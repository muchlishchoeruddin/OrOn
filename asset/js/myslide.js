
$(document).ready(function() {
				
				$('img').click(function() {
					// remove
					$('body').find('.item-active').removeClass('item-active');
					// addclass
					target = $(this).data('target');
					$('.'+target).addClass('item-active');
					
					//remove
					$('body').find('.point').removeClass('point');
					//addClass 
					$(this).addClass('point');
				}); 

				num = 2;
				function dinamis(){ 
					
					// remove
					$('body').find('.item-active').removeClass('item-active');
					// addclass 
					$('.item-'+num).addClass('item-active');
					
					//remove
					$('body').find('.point').removeClass('point');
					//addClass 
					$('.img-'+num).addClass('point');

					num+=1;
					if (num > 3) {
						num = 1;
					}
				}
				
				setInterval(dinamis, 2000);

			});

