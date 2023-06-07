$(document).ready(function() {
    var totalRecord = 0;
	var category = getCheckboxValues('category');
    var country = getCheckboxValues('country');
    var area = getCheckboxValues('area');
    var size = getCheckboxValues('size');
    var totalData = $("#totalRecords").val();
	var sorting = getCheckboxValues('sorting');
	$.ajax({
		type: 'POST',
		url : "load_products.php",
		dataType: "json",			
		data:{totalRecord:totalRecord, country:country, area:area, size:size, category:category, sorting:sorting},
		success: function (data) {
			$("#results").append(data.products);
			totalRecord++;
		}
	});	
    $(window).scroll(function() {
		scrollHeight = parseInt($(window).scrollTop() + $(window).height());		
        if(scrollHeight == $(document).height()){	
            if(totalRecord <= totalData){
                loading = true;
                $('.loader').show();                
				$.ajax({
					type: 'POST',
					url : "load_products.php",
					dataType: "json",			
					data:{totalRecord:totalRecord, country:country, area:area, size:size},
					success: function (data) {
						$("#results").append(data.products);
						$('.loader').hide();
						totalRecord++;
					}
				});
            }            
        }
    });
    function getCheckboxValues(checkboxClass){
        var values = new Array();
		$("."+checkboxClass+":checked").each(function() {
		   values.push($(this).val());
		});
        return values;
    }
    $('.sort_rang').change(function(){
        $("#search_form").submit();
        return false;
    });
	$(document).on('click', 'label', function() {
		if($('input:checkbox:checked')) {
			$('input:checkbox:checked', this).closest('label').addClass('active');
		}
	});	
});



