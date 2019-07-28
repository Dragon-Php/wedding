var review = $('.review input'),
	rate = 0,
	rate_colors = [
					'rgb(203, 32, 45)',
					'rgb(203, 32, 45)',
					'rgb(255, 120, 0)',
					'rgb(255, 120, 0)',
					'rgb(255, 186, 0)',
					'rgb(255, 186, 0)',
					'rgb(154, 205, 50)',
					'rgb(154, 205, 50)',
					'rgb(91, 168, 41)',
					'rgb(91, 168, 41)'
				];
$(document).ready(function(){
	$('input[name=vendor]').css('border-color', '#ced4da');
	review.hover(function(){
		var rate = $(this).attr('data-value');
		if(typeof rate != 'undefined'){
			fill_rate(rate);
		}		
	});

	$('input[name=vendor]').keyup(function(){
		$('input[name=vendor_id]').val('');
		key = $(this).val();
		if(key != ''){
			$.ajax({
				url : $('.vendor_rate_list').attr('data-url'),
				type : 'POST',
				data : {key:key},
				success : function(result){
					if(result != 'no'){
						$('.vendor_content_list').html(result);
					} else {
						$('input[name=vendor]').css('border-color', 'red');
					}
				}
			})
			$('.vendor_rate_list').show();
		} else {
			$('input[name=vendor]').css('border-color', '#ced4da');
			$('.vendor_rate_list').hide();
		}
	});

	$('.photos-button').click(function(){
		$('input[name="photo"]').click();
	})

});

$(document).on('click', '.ven_filter', function(){
	$('input[name=vendor]').val($('.ven_filter p').html());
	$('input[name=vendor_id]').val($('.ven_filter p').attr('data-id'));
	$('.vendor_rate_list').hide();

})


function fill_rate(rate){
	for(i = 10; i > 0; i--){
		if(i <= rate){
			$('.review_'+i).css('background-color', rate_colors[i-1]);
			$('.rate_me').text(rate/2);
		} else {
			$('.review_'+i).css('background-color', '#fff');

		}
	}
	$('input[name=rate]').val(rate/2);
}