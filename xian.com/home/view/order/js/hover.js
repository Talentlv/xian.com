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
	// $('.yf_index li a').click(function(){
	// 	// var index = $(this).index();
	// 	$(this).parent().addClass("active").siblings().removeClass("active");
	// })

	//商品详情页用户评价中 小图点击-大图出现
	$('.user-review-imgs img').click(function(){
		var src = $(this).attr('src');
		var index = $(this).index();
		$('.user-review-imgs img').removeClass('active');
		$('.user-review-imgs img').eq(index).addClass('active');
		$('.user-review-bigimg img').attr('src','src');
	})

	// 确认订单页 order
	$('.tab-card li').click(function() {
		var index = $(this).index();
		$('.tab-card li').removeClass('active');
		$(this).addClass('active');

		$('.card-content ul').removeClass('active');
		$('.card-content ul').eq(index).addClass('active').show();
	});

	// 索取电子发票
	$('.cart-body input[type="checkbox"]').click(function(){
		if ($(this).prop('checked')==true) {
			$('.cart-body .invoice-title').show();
		}else{
			$('.cart-body .invoice-title').hide();
		}
	});


	// 往textarea 动态写入内容 （jQurey）
	$('.card-content li').click(function() {
		var text = $(this).attr("title");
		console.log(text);
		$('#cart-demo-input').val(text);
	});

	// 打开修改地址
	$('.addr-change .modi-addr').click(function(){
		$('#SD_window').css({
			'display': 'block',
			'width': '880px',
			'top': '125px',
			'left': '320px'
		})
		$('#SD_overlay').css('display','block');
	})

	// 关闭修改地址
	$('#SD_close').click(function(){
		$('#SD_window').css('display','none');
		$('#SD_overlay').css('display','none');
	})

	//  日期选择器-->
	$('#flatpickr').flatpickr();	

	// 地区选择器
	$('#distpicker').distpicker({
		// 设置默认地区
		province:'广东省',
		city:'东莞市',
		district:'松山湖区'
	});

	// 分页导航
	$('.page-nav a').click(function(){
		$('.page-nav a').removeClass('active');
		$(this).addClass('active');
	});

	function LocalTime(s) {
			return s < 10 ? '0' + s : s;
		}
		
        var myDate = new Date();
        //获取当前年
        var year = myDate.getFullYear();
        //获取当前月
        var month = myDate.getMonth() + 1;
        //获取当前日
        var date = myDate.getDate();
                
        var now = year + '-' + LocalTime(month) + "-" + LocalTime(date);

        var str2 = now;
		var str4 = "不限时间";
		// var str3 = $('.cart-addr .addr-date label').text();
		$('#addr-date').text(str2+str4);

	// order
	$('.order-address-frm .save-address').click(function(){
		$('#SD_window').css('display','none');
		$('#SD_overlay').css('display','none');
		// var str1 = $('input[name="address_name"]').attr("value") + $('input[name="address_mobile"]').attr("value");
		// $('.cart-address .addr-name').val(str1);
		// $('.cart-address .addr-day').val() = $('input[name="meno-time-1"]').val() + $('select[name="meno-time-2"]').val();
		// $('.cart-address .addr-addr').val() = $('select[name="adddress_province"]').val() + $('select[name="adddress_city"]').val() + $('select[name="adddress_county"]').val()+$('input[name="address_address"]').val();
		// var a = $('.cart-address .addr-name').val();
		
		

		var str2 = $('input[name="memo-time-1"]').val();
		// var str3 = $('.cart-addr .addr-date label').text();
		var str4 = $('select[name="memo-time-2"]').val();
		$('#addr-date').text(str2+str4);
	})
})