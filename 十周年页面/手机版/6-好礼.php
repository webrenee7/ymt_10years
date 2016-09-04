<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<title>6-好礼</title>
<link href="res/css/style.css" type="text/css" rel="stylesheet" />
<script src="res/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="res/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="res/js/pageH.js" type="text/javascript"></script>
</head>

<body class="bg6">
	<div class="page page6">
    	<div class="p6_title"><img src="res/images/p6_title.png" /></div>
        <div class="p6_list">
        	<div class="p6_ship">
            	<div class="p6_box">
                	<div class="p6_box_content">
                    	<p><b>福利第一弹</b>&nbsp;&nbsp;|&nbsp;&nbsp;医脉通10周年有奖征文大赛</p>
                        <p>距离开始还有&nbsp;&nbsp;
                        	<span class="last_time">
		                        <span id="day1">8</span>天
                                <span id="hour1">08</span>时
                                <span id="minute1">08</span>分
                                <span id="second1">08</span>秒
                            </span>                                
                       </p>
                    </div>
                </div>
                <div class="p6_btn_box"><a href="#" class="join_btn no">立即参与</a></div>
            </div>
            <div class="p6_ship">
            	<div class="p6_box">
                	<div class="p6_box_content">
                    	<p><b>福利第二弹</b>&nbsp;&nbsp;|&nbsp;&nbsp;10万麦粒红包雨砸向你</p>
                        <p>距离开始还有&nbsp;&nbsp;
                        	<span class="last_time">
		                        <span id="day2">8</span>天
                                <span id="hour2">08</span>时
                                <span id="minute2">08</span>分
                                <span id="second2">08</span>秒
                            </span>                                
                       </p>
                    </div>
                </div>
                <div class="p6_btn_box"><a href="#" class="join_btn no">立即参与</a></div>
            </div>
            <div class="p6_ship">
            	<div class="p6_box">
                	<div class="p6_box_content">
                    	<p><b>福利第三弹</b>&nbsp;&nbsp;|&nbsp;&nbsp;麦粒商城8折疯狂兑</p>
                        <p>距离开始还有&nbsp;&nbsp;
                        	<span class="last_time">
		                        <span id="day3">8</span>天
                                <span id="hour3">08</span>时
                                <span id="minute3">08</span>分
                                <span id="second3">08</span>秒
                            </span>                                
                       </p>
                    </div>
                </div>
                <div class="p6_btn_box"><a href="#" class="join_btn no">立即参与</a></div>
            </div>
        </div>
    </div>
    <div class="foot clearfix">
    	<div class="foot_box"><img src="res/images/f_icon1.png" /></div>
        <div class="foot_box"><img src="res/images/f_icon2.png" /></div>
        <div class="foot_box"><img src="res/images/f_icon3.png" /></div>
        <div class="foot_box"><img src="res/images/f_icon4.png" /></div>
        <div class="foot_box"><img src="res/images/f_icon_w5.png" /></div>
    </div>
    <script>
		$('.p6_ship').each(function(i) {
            $(this).delay(i*500).animate({"opacity":"1"},1000);
        });
		
		//倒计时	
		var startTime1 = <?php echo strtotime('2016-7-4 00:00:00');?>;//开始时间	
		var startTime2 = <?php echo strtotime('2016-7-31 12:00');?>;//开始时间
		var startTime3 = <?php echo strtotime('2016-8-1 0:00:00');?>;//开始时间
		
		
		time1();
		time2();
		time3();
		function time1(){
			//判断当前时间
			var nowTime = <?php echo time(); ?> + 1;//当前时间
			if(nowTime<startTime2){				
				//计算出服务器和客户端的时间差。		
				var runtimes = 0;
				function GetRTime(){
					nowTime = nowTime + 1;
					var nMS = startTime1 - nowTime;
					if(nMS<0){
						clearInterval(play1);
						resetNum(1);
						$('.join_btn:first').removeClass("no").attr({"href":"http://group.medlive.cn/topic/93127"});
					}	
				    else{setDateNum(1,nMS);}
				   				
				}
				var play1 = setInterval(GetRTime,1000);		  
			}else{
				resetNum(1);
				$('.join_btn:first').removeClass("no").attr({"href":"http://group.medlive.cn/topic/93127"});		
			}
		}
		function time2(){
			//判断当前时间
			var nowTime = <?php echo time(); ?> + 1;//当前时间
			if(nowTime<startTime2){				
				//计算出服务器和客户端的时间差。		
				var runtimes = 0;
				function GetRTime(){
					nowTime = nowTime + 1;
					var nMS = startTime2 - nowTime;
					if(nMS<0){
						clearInterval(play2);
						resetNum(2);
						$('.join_btn:eq(1)').removeClass("no").attr({"href":"http://mlhb.medlive.cn/"});				
					}	
				    else{setDateNum(2,nMS);}
				}
				var play2 = setInterval(GetRTime,1000);		  
			}else{
				resetNum(2);
				$('.join_btn:eq(1)').removeClass("no").attr({"href":"http://mlhb.medlive.cn/"});;
			}
		}
		function time3(){
			//判断当前时间
			var nowTime = <?php echo time(); ?> + 1;//当前时间
			if(nowTime<startTime3){				
				//计算出服务器和客户端的时间差。		
				var runtimes = 0;
				function GetRTime(){
					nowTime = nowTime + 1;
					var nMS = startTime3 - nowTime;
				    if(nMS<0){
						clearInterval(play3);
						resetNum(3);
						$('.join_btn:last').removeClass("no").attr({"href":"http://gift.medlive.cn/gift/"});
					}	
				    else{setDateNum(3,nMS);}					
				}
				var play3 = setInterval(GetRTime,1000);			  
			}else{
				resetNum(3);
				$('.join_btn:last').removeClass("no").attr({"href":"http://gift.medlive.cn/gift/"});;
			}
		}
		function setDateNum(index,nMS){
			var nDay=Math.floor(nMS/(60*60) / 24); //Math.floor(nMS/(60*60) / 24) % 31
			var nH=Math.floor(nMS/(60*60)) % 24;//折合小时 var nH=Math.floor(nMS/(60*60) / 24)*24+Math.floor(nMS/(60*60)) % 24;
			var nM=Math.floor(nMS/(60)) % 60;//分
			var nS=Math.floor(nMS) % 60;//秒
			
			$('#day'+index).html(numToStr(Math.floor(nDay/10))+numToStr(Math.floor(nDay%10)));
			$('#hour'+index).html(numToStr(Math.floor(nH/10))+numToStr(Math.floor(nH%10)));
			$('#minute'+index).html(numToStr(Math.floor(nM/10))+numToStr(Math.floor(nM%10)));
			$('#second'+index).html(numToStr(Math.floor(nS/10))+numToStr(Math.floor(nS%10)));
			//runtimes++;	
		}
		function resetNum(i){
			$('#day'+i).html("00");
			$('#hour'+i).html("00");
			$('#minute'+i).html("00");
			$('#second'+i).html("00");	
		}
		function numToStr(num){
			var arr=new Array();
			arr[0]='0';
			arr[1]='1';
			arr[2]='2';
			arr[3]='3';
			arr[4]='4';
			arr[5]='5';
			arr[6]='6';
			arr[7]='7';
			arr[8]='8';
			arr[9]='9';
			if(arr[num]){
				return arr[num];
			}else{
				return arr[0];
			}
		}
	</script>
</body>
</html>
