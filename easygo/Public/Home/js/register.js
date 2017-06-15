$("#repwd").blur(function(){	
	if($("#pwd").val() == $("#repwd").val() && $("#pwd").length!=0){	
		$("#zhuce").removeAttr("disabled");
		$("#check3").css("display","none");
	}
	else{	
		$("#check3").css("display","inline");
	}
})
$("#telephone").blur(function(){	
	if($("#telephone").val()=="" || $("#telephone").val().length!=11){	
		$("#check1").css("display",'inline');
	}
	else{	
		$("#check1").css("display","none");
	}
})
$("#name").blur(function(){	
	if($("#name").val()==""){	
		$("#check2").css("display","inline");
	}
	else{	
		$("#check2").css("display","none");
	}
})
$("#zhuce").click(function(){	
	if($("#check1").css('display')=="none" && $("#check2").css('display')=="none" && $("#check3").css('display')=="none"){	
	$("#zhuce").attr({"type":"submit"});
	}
})
