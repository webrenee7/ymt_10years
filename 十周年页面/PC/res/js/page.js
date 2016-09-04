/**
 * Created by wangxingru on 2016/7/5.
 */

$(document).ready(function(){
	var winW = $(window).width();
    $('#page').fullpage({
        anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6'],
        menu: '#menu',
        verticalCentered:false
    });
	//p2
	$('.p2_line_whole_inner').width(winW);
	//p3
	//p3设置转盘内容初始角度
	$('.p3_cb').each(function(i) {
        $(this).css({
			"transform":"rotate("+45*(i)+"deg)",
			"-webkit-transform":"rotate("+45*(i)+"deg)",
			"-moz-transform":"rotate("+45*(i)+"deg)",
			"-ms-transform":"rotate("+45*(i)+"deg)",
			"-o-transform":"rotate("+45*(i)+"deg)"
			
		}).children('.p3_rotate_inner').children('a').css({
			"transform":"rotate("+45*(-i)+"deg)",
			"-webkit-transform":"rotate("+45*(-i)+"deg)",
			"-moz-transform":"rotate("+45*(-i)+"deg)",
			"-ms-transform":"rotate("+45*(-i)+"deg)",
			"-o-transform":"rotate("+45*(-i)+"deg)"
		});
    });
	//转盘事件
	var iDeg=0;
	function rotate(){
		iDeg++;
		if(iDeg==360){iDeg=0;}
		$('.p3_box').css({
			"transform":"rotate("+(iDeg)+"deg)",
			"-webkit-transform":"rotate("+(iDeg)+"deg)",
			"-moz-transform":"rotate("+(iDeg)+"deg)",
			"-ms-transform":"rotate("+(iDeg)+"deg)",
			"-o-transform":"rotate("+(iDeg)+"deg)"
		});
		$('.p3_circle_s,.p3_txt_one,.p3_pop_box').css({
			"transform":"rotate("+(-iDeg)+"deg)",
			"-webkit-transform":"rotate("+(-iDeg)+"deg)",
			"-moz-transform":"rotate("+(-iDeg)+"deg)",
			"-ms-transform":"rotate("+(-iDeg)+"deg)",
			"-o-transform":"rotate("+(-iDeg)+"deg)"
		});
	}
	var play = setInterval(rotate,100);
	//设置P3转盘的点击事件
	var isStop=false;
	$('.p3_box').hover(function(){;		
		clearInterval(play);
		iDeg==iDeg;		
	},function(){
		if($('.p3_cb').hasClass("on")){
		}else{play = setInterval(rotate,50);}	
	})	
	$('.p3_txt_one').hover(function(e){
		var index = $(this).index();			
		$('.p3_cb_box').children('.p3_cb').eq(index).addClass("on").siblings().removeClass("on");
		$('#p3_pop'+index).show().siblings(".p3_pop_box").hide();	
	},function(){
		var index = $(this).index();
		$('.p3_cb_box').children('.p3_cb').eq(index).removeClass("on");
		$('#p3_pop'+index).hide();
	})
	$('.p3_pop_box').hover(function(e){
		var index = $(this).attr("id").substring(6,7);	
		$('.p3_cb_box').children('.p3_cb').eq(index).addClass("on").siblings().removeClass("on");
		$(this).show().siblings(".p3_pop_box").hide();	
	},function(){
		var index = $(this).attr("id").substring(6,7);	
		$('.p3_cb_box').children('.p3_cb').eq(index).removeClass("on");
		$(this).hide();	
	})
	
	//p4展开全文判断
	$('.commit_info').each(function(i) {
		if($(this).height()>72){
			$(this).addClass("hei_72");
			$(this).append("<a href='javascript:void(0)' class='show_btn'>... 展开全文<img src='res/images/arrow_bottom.jpg' /></a>");
			$(this).append("<a href='javascript:void(0)' class='close_btn'>收起全文<img src='res/images/arrow_top.jpg' /></a>");
		}
	});
	$('.show_btn').click(function(){
			$(this).hide();
			$(this).parent('.commit_info').removeClass("hei_72").addClass("show_all").children('.close_btn').show();
		})
		$('.close_btn').click(function(){
			$(this).hide();
			$(this).parent('.commit_info').removeClass("show_all").addClass("hei_72").children('.show_btn').show();
		})
	//图片放大
		$('.user_com_img img').click(function(){			
			$('.shadow').show();
			$('.img_pop').show().children('img').attr("src",$(this).attr("src"));
			var imgW = $('.img_pop img').width();
			var imgH = $('.img_pop img').height();
			var winW = 980;
			var winH = 650;
			var winS = winW/winH;
			var imgS = imgW/imgH;
			if(winS<imgS){
				imgW=(imgW>winW)?winW:imgW;
				$('.img_pop img').width(imgW).height("auto");				
			}else{
				imgH=(imgH>winH)?winH:imgH;
				$('.img_pop img').height(imgH).width("auto");
			}
		});
		$('.shadow,.img_pop').click(function(){
			resetFn();	
		});
		function resetFn(){
			$('.shadow').hide();
			$('.img_pop').hide().children('img').attr("src","");
			$('.img_pop img').width("auto").height("auto");
		}
	//p5
	$(".p5_photo_box").slide({mainCell:".bd ul",autoPlay:true});
	var clickNum=0;
	$('#light_btn').click(function(){
		clickNum++;
		if(clickNum<2){
			$('.p5_shadow,.p5_light_box').addClass("on");
			setTimeout("$('.p5_add').css('visibility','visible')",400);
			setTimeout("$('.p5_add').css('visibility','hidden')",1500);
		}else{
			$('.p5_light_pop').show();
			$('#p5_pop_btn').click(function(){
				$(this).parent().hide();	
			});
		}
	});
})