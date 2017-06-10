

$("#username").blur(function(){	
	if($("#username").val() == ""){	
		$("span:eq(1)").css("display","inline");
		$("#modal-491897").attr("disabled",true);
	}
	else{	
		$("span:eq(1)").css("display","none");
		$("#modal-491897").attr("disabled",false);
	}
})
$("#name").blur(function(){	
	if($(this).val() == ""){	
		$("span:eq(2)").css("display","inline");
		$("#modal-491897").attr("disabled",true);
	}
	else{	
		$("span:eq(2)").css("display","none");
		$("#modal-491897").attr("disabled",false);
	}
})
$("#telephone").blur(function(){	
	if($(this).val() == ""){	
		$("span:eq(4)").css("display","inline");
		$("#modal-491897").attr("disabled",true);
	}
	else{	
		$("span:eq(4)").css("display","none");
		$("#modal-491897").attr("disabled",false);
	}
})
$("#password").blur(function(){	
	if($(this).val() == ""){	
		$("span:eq(5)").css("display","inline");
		$("#modal-491897").attr("disabled",true);
	}
	else{	
		$("span:eq(5)").css("display","none");
		$("#modal-491897").attr("disabled",false);
	}
})
	$("#repwd").blur(function(){	
	if($(this).val() == "" || $(this).val()!=$("#password").val()){	
		$("span:eq(6)").css("display","inline");
		$("#modal-491897").attr("disabled",true);
	}
	else{	
		$("span:eq(6)").css("display","none");
		$("#modal-491897").attr("disabled",false);
	}
})
