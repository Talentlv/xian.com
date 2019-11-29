$(function () {
	$('.goods_other_pic ul li img').click(function(){
		$(this).parent().addClass("active").siblings().removeClass("active");

		var src = $(this).attr('src');
		$('.goods_big_pig img').attr('src',src);
	})
})