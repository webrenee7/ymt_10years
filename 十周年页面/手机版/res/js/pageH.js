// JavaScript Document
window.onload = window.onresize = function(){   
	var winH =$(window).height();
	var winW = $(window).width();
	var footH =  Math.ceil(winW*67/640+14);
	$('.page').height(winH-footH);
}