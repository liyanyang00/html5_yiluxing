$(document).ready(function() {
    /*页头下拉菜单*/
    $("li").hover(function() {
        $(this).children('#children').css('display', 'block');
    }, function() {
        $(this).children('#children').css('display', 'none');
    });

    $("#select1 dd").click(function() {
        $(this).addClass("selected").siblings().removeClass("selected");
        if ($(this).hasClass("select-all")) {
            $("#selectA").remove();
        } else {
            var copyThisA = $(this).clone();
            if ($("#selectA").length > 0) {
                $("#selectA a").html($(this).text());
            } else {
                $(".select-result dl").append(copyThisA.attr("id", "selectA"));
            }
        }
    });

    $("#select2 dd").click(function() {
        $(this).addClass("selected").siblings().removeClass("selected");
        if ($(this).hasClass("select-all")) {
            $("#selectB").remove();
        } else {
            var copyThisB = $(this).clone();
            if ($("#selectB").length > 0) {
                $("#selectB a").html($(this).text());
            } else {
                $(".select-result dl").append(copyThisB.attr("id", "selectB"));
            }
        }
    });

    $("#select3 dd").click(function() {
        $(this).addClass("selected").siblings().removeClass("selected");
        if ($(this).hasClass("select-all")) {
            $("#selectC").remove();
        } else {
            var copyThisC = $(this).clone();
            if ($("#selectC").length > 0) {
                $("#selectC a").html($(this).text());
            } else {
                $(".select-result dl").append(copyThisC.attr("id", "selectC"));
            }
        }
    });

    $("#select4 dd").click(function() {
        $(this).addClass("selected").siblings().removeClass("selected");
        if ($(this).hasClass("select-all")) {
            $("#selectD").remove();
        } else {
            var copyThisD = $(this).clone();
            if ($("#selectD").length > 0) {
                $("#selectD a").html($(this).text());
            } else {
                $(".select-result dl").append(copyThisD.attr("id", "selectD"));
            }
        }
    });

    $("#selectA").live("click",
    function() {
        $(this).remove();
        $("#select1 .select-all").addClass("selected").siblings().removeClass("selected");
    });

    $("#selectB").live("click",
    function() {
        $(this).remove();
        $("#select2 .select-all").addClass("selected").siblings().removeClass("selected");
    });

    $("#selectC").live("click",
    function() {
        $(this).remove();
        $("#select3 .select-all").addClass("selected").siblings().removeClass("selected");
    });

    $("#selectD").live("click",
    function() {
        $(this).remove();
        $("#select4 .select-all").addClass("selected").siblings().removeClass("selected");
    });

    $(".select dd").live("click",
        function() {
            if ($(".select-result dd").length >0) {
                $(".select-no").hide();
            } else {
                $(".select-no").show();
            }
        });
});
/****************加载显示更多，收起筛选条件***************/
function fang(){ 
    $("#er").css("display", "block"); 
    $("#but").css("display", "none"); 
    $("#but1").css("display", "block"); 
};

function shou() { 
    $("#er").css("display", "none"); 
    $("#but").css("display", "block"); 
    $("#but1").css("display", "none"); 
};