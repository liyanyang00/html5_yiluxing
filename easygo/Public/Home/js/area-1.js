function showLocation(brand , car , models) {
	
	var loc	= new Location();
	var title	= ['请选择品牌' , '请选择车系' , '请选择车型'];
	$.each(title , function(k , v) {
		title[k]	= '<option value="">'+v+'</option>';
	})
	
	$('#loc_brand').append(title[0]);
	$('#loc_car').append(title[1]);
	$('#loc_models').append(title[2]);
	
	$("#loc_brand,#loc_car,#loc_models").select2()
	$('#loc_brand').change(function() {
		$('#loc_car').empty();
		$('#loc_car').append(title[1]);
		loc.fillOption('loc_car' , '0,'+$('#loc_brand').val());
		$('#loc_car').change()
	})
	
	$('#loc_car').change(function() {
		$('#loc_models').empty();
		$('#loc_models').append(title[2]);
		loc.fillOption('loc_models' , '0,' + $('#loc_brand').val() + ',' + $('#loc_car').val());
	})
	
	$('#loc_models').change(function() {
		$('input[name=location_id]').val($(this).val());
	})
	
	if (brand) {
		loc.fillOption('loc_brand' , '0' , brand);
		
		if (car) {
			loc.fillOption('loc_car' , '0,'+brand , car);
			
			if (models) {
				loc.fillOption('loc_models' , '0,'+brand+','+car , models);
			}
		}
		
	} else {
		loc.fillOption('loc_brand' , '0');
	}
		
}

$(function(){
		showLocation();
		$('#btnval').click(function(){
			alert($('#loc_brand').val() + ' - ' + $('#loc_car').val() + ' - ' +  $('#loc_models').val()) 
		})
		$('#btntext').click(function(){
			alert($('#loc_brand').select2('data').text + ' - ' + $('#loc_car').select2('data').text + ' - ' +  $('#loc_models').select2('data').text) 
		})
	})