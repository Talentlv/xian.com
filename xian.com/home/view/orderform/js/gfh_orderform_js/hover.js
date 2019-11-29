$(function() {
	// 头部菜单hover
	$('.menu > a').hover(function(){
		var index = $(this).index();
		if( index >=1 && index <=2 ){
			$('.list .footer-wrap').hide().eq(index-1).show();
			$('.list').show();
		}
	},function(){
		$('.list').hide()
		$('.list').mouseover(function(){$('.list').show()})
		$('.list').mouseout(function(){$('.list').hide()})
	});

	//mycenter 头像hover
	$('.mycenter').hover(function(){
		$('.mycenter-select').css('display','inline-block');
	},function(){
		var timer = null;
		timer = setTimeout(function(){$('.mycenter-select').css('display','none')},500);// 设定一个鼠标悬停过后'.mycenter-select'隐藏的时延
		$('.mycenter-select').mouseover(function(){clearTimeout(timer);$('.mycenter-select').css('display','inline-block');});
		$('.mycenter-select').mouseout(function(){clearTimeout(timer);$('.mycenter-select').css('display','none');});
	})

	//快捷选花 hover
	$('.guide-item').hover(function(){
		var index = $(this).index();
		$('.guide-item .choose-box').eq(index-1).show();
	},function(){
		$('.guide-item .choose-box').hide();
	})

	//快捷选花 click
	$('.yf_index li a').click(function(){
		// var index = $(this).index();
		$(this).parent().addClass("active").siblings().removeClass("active");
	})

	//商品详情页用户评价中 小图点击-大图出现
	$('.user-review-imgs img').click(function(){
		var src = $(this).attr('src');
		var index = $(this).index();
		$('.user-review-imgs img').removeClass('active');
		$('.user-review-imgs img').eq(index).addClass('active');
		$('.user-review-bigimg img').attr('src','src');
	})
})