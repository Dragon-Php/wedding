var search_category = $('.search_category'),
	search_country = $('.search_country'),
	search_city = $('.search_city'),
	vendor_type = $('.searchcontent').attr('vendor-type');


search_category.change(function(){
	getVendors($(this).val(), search_country.val(), search_city.val());
});

search_country.change(function(){
	getVendors(search_category.val(), $(this).val(), '');
});

search_city.change(function(){
	getVendors(search_category.val(), search_country.val(), $(this).val());
});


function getVendors(category = '', country = '', city = ''){
	console.log(category, country, city);
	$.ajax({
		beforeSend: function() {
            $('.loader_search').show();
            $('.loader_search').html("<img src='https://loading.io/spinners/dual-ring/lg.dual-ring-loader.gif' />");
        },
        url : $('.searchcontent').attr('action'),
        type : 'POST',
        data : {category : category, country : country, city : city, vendor_type:vendor_type},
        success : function(response){
        	console.log(response);
        	$('.vendor_list').html(response);
        	$('.loader_search').hide();
        }
	});
}
