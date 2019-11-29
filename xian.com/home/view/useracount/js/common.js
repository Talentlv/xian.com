$(function () {

	//dialog
	$('a[res=dialog]').click(function(){
		var url = $(this).data('url') ? $(this).data('url') : $(this).attr('href');
		var width = $(this).data('width') ? $(this).data('width') : 500;
		showWindow($(this).text(), url, width);
		return false;
	});

	//confirm
	$('a[res=confirm]').click(function(){
		var url = $(this).data('url') ? $(this).data('url') : $(this).attr('href');
		var width = $(this).data('width') ? $(this).data('width') : 500;
		var title = $(this).attr('title') ? $(this).attr('title') : $(this).text();
		showConfirm( '确信要 "' + title + '" 吗？', function(){
			window.location.href = url;
		});
		return false;
	});

	//ajax
	$('a[res=ajax]').click(function(){
		var _this = this;
		var method = $(_this).data('method') && $(_this).data('method').toLowerCase() =='post' ? 'post' : 'get';
		var url = $(_this).data('url') ? $(_this).data('url') : $(_this).attr('href');
		var option = {};
		if( $(_this).data('option') ){
			try{
				option = eval("(" + $(_this).data('option') + ")");
			}
			catch(e){}
		}
		var title = $(this).attr('title') ? $(this).attr('title') : $(this).text();
		showConfirm( '确信要 "' + title + '" 吗？', function(){
			$.ajax({
				url		: url,
				cache	: true,
				type	: method,
				data 	: option,
				dataType: 'json',
				error	: function( event, xhr ) {
					app.tools.info( xhr.responseText );
				},
				success: function(result) {
					if( result.status ){
						location.reload();
					}
					else{
						app.tools.info( result.msg );
					}
				}
			});
		});
		return false;
	});

	//锁层
	$(".autofixed").each(function (i, o) {
		var inside = false;
		var top = $(o).offset().top;
		var height = $(o).height();
		var fixed = false;
		var scrolled = false;
		
		$(o).css('width', $(o).width());
		$(o).css('top','0px');
		$(o).css('overflow','hidden');
		
		if ($(o).attr("fixed")) {
				fixed = $($(o).attr("fixed"));
		}else if ($(o).attr("scrolled")) {
				scrolled = $($(o).attr("scrolled"));
		}


		$(window).scroll(function () {
			if( $(o).is(":hidden") ) return;
			
			var position = $(window).scrollTop();
			if (position >= top) {
				if (!inside) {
						$(o).addClass("fixed");
						inside = true;
				}
				if (fixed) {
						$(o).height(function (i, h) {
								var h2 = fixed.offset().top + fixed.height();
								return h2 - position < $(window).height() ? h2 - position : $(window).height();
						});
				}else if (scrolled) {
						var h2 = scrolled.offset().top + scrolled.height();
						if( h2 - position < $(window).height() ){
								$(o).removeClass("fixed");
								inside = false;
						}
				}
			}else if (position < top) {
				$(o).removeClass("fixed");
					if (fixed) {
						//$(o).height(height);
						$(o).height('');
					}
					inside = false;
				}
			});
		});
	//锚点
	$("a[anchor]").click(function () {
		$('html,body').stop()
		$('html,body').animate({scrollTop:  $($(this).attr("anchor")).offset().top - 100}, 1000);
	});

	/**************************************************图片懒加载**************************************************/
	lazy.init({
  	offset: 200,//离可视区域多少像素的图片可以被加载
　	throttle: 1 //图片延时多少毫秒加载
	}); 

	/**************************************************好花顾问**************************************************/
	// hover  
  $('.cservice-avator').hover(function () {
		$('.cservice-box').css('display','block')
    $('.cservice-box').animate({'right':'308px'},400)
	})

  // 关闭按钮
  $('.cservice-box-close').click(function(e){
    e.stopPropagation();
    $('.cservice-box').fadeOut(400,function(){
      $('.cservice-box').css({'right':'278px'})
    })
  })
  //倒计时15秒出现弹出框
  if($('.cservice-box').css('display')=='none'){
    setTimeout(function(){
      $('.cservice-box').css('display','block')
      $('.cservice-box').animate({'right':'308px'},400)
    },15000)
  }

	/**************************************************index.html**************************************************/
	// header：我的头像hover
	$('.icon-me').hover(function () {
		$('.h-me-select').css('display','inline-block')
	}, function () {
		var timer = null
		timer = setTimeout(function(){$('.h-me-select').css('display','none')},500)
		$(".h-me-select").mouseover(function(){clearTimeout(timer);$('.h-me-select').css('display','inline-block')})
		$(".h-me-select").mouseout(function(){clearTimeout(timer);$('.h-me-select').css('display','none')})
	})

	$('.h-right > a').hover(function(){
		var index = $(this).index();
		if( index >=1 && index <=3 ){
			$('.h-list .wrap').hide().eq(index-1).show();
			$('.h-list').show();
		}
	},function(){
		$('.h-list').hide()
		$('.h-list').mouseover(function(){$('.h-list').show()})
		$('.h-list').mouseout(function(){$('.h-list').hide()})
	});

	// banner
	if($.fn.slideshow){
		$(function ($) {
			$(".slider").slideshow({
				width: 'auto',
				height: 467,
				delay: 5000, //多少毫秒切换
				// transition: ['bar', 'Rain', 'square', 'squareRandom', 'explode','fade', 'fountain']
				transition: 'fade'
			});
		});
	}

	// 商品hover
	$('.goods-info').hover(function(){
		$(this).prev().addClass('trigger-hover')
	},function(){
		$(this).prev().removeClass('trigger-hover')
	});


	$('.select-bar li').hover(function(){
		if( $(this).find('a').length>0 )
			return;
		$(this).addClass('active').siblings().removeClass('active');
		$(this).parent().parent().parent().find('.select-info .infos').hide().eq( $(this).index() ).show();
	},function(){
		//$(this).prev().removeClass('trigger-hover')
	});



	/**************************************************list.html**************************************************/
	//list：商品列表hover
	var timer = null,current=null
	$('.choose-flow-item').hover(function(){
		current = $(this)
		clearTimeout(timer);
		$('.choose-flow-box').hide()

		var top =  $(this).height() + 12 + 'px',
				bgc =  $(this).css('background-color')
				width =  $(this).width() + 'px',
				left = parseInt( $(this).position().left) + 'px';
				
		$(this).children('.choose-flow-box').css({
			'display':'block',
			'background-color':bgc,
			'width': 248,//width,
			'top':top,
			'left':left
		})
		$(this).children('.choose-flow-box').find('a').css('color',$(this).find('.choose-t2').css('color'))

	},function(){
		timer = setTimeout(function(){$('.choose-flow-box').hide()},500)
		$(this).children(".choose-flow-box").mouseover(function(){clearTimeout(timer);$(this).show();})
		$(this).children(".choose-flow-box").mouseout(function(){clearTimeout(timer);$(this).hide();})
	})

/*
	//已由模板实现
	// list 筛选选中取消
	$('.choose-flow-box > a').on('click',function(){
		current.find('.choose-t2').html('')
		current.find('.choose-t2').append($(this).text()+'<i class="choose-btn"> ✕</i>')
		//ajax

	})

	$(document).on('click','.choose-btn',function(){
		if($(this).text().indexOf('✕') > -1){
			current.find('.choose-t2').html('全部 <i class="choose-btn"> ∨</i>')
			// ajax


		}
	})
*/

	/**************************************************flowerStorys.html**************************************************/
	// article-m-slider
	if($.fn.slideshow){
		$(function ($) {
			$(".slider-hy").slideshow({
				width: 344,
				height: 240,
				delay: 5000, //多少毫秒切换
				transition: 'fade'
			},function(i){
				var obj = $(this).find('div').eq(i);
				$('.slider-img1 a').attr('href', obj.data('url') );
				$('.slider-img1 img').attr('src', obj.data('img') );
			});
		});
	}

	/**************************************************shopcar.html**************************************************/
/*

 	var reduce=$('.reduce'),price=$('.price'),add=$('.add'),totalnum=$('totalnum').text(),allcheck=$('#allcheck'),trcheck=$('tbody>tr>td>.checkbox')
	// 数量只能输入大于1
	price.blur(function(){
		if(Number($(this).val())<1){
			$(this).val(1)
		}
	})
	
	// 数量加
	// 总数
	var totals = [],cellTotal,sum=0;
	add.click(function(e){
		if(Number($(this).prev().val())<99){
			$(this).prev().val(Number($(this).prev().val())+1)

		}
	})
	// 数量减
	reduce.click(function(){
		if(Number($(this).next().val())>1){
			$(this).next().val(Number($(this).next().val())-1)
		}
	})
	

	// 子选
	$(".checkbox").change(function(){

		if($(".checkbox:checked").length==$(".checkbox").length){
				$("#allcheck").prop("checked",true);
		}else{
			$("#allcheck").prop("checked",false);
		}
		$("#goodsnum").text($(".checkbox:checked").length)
	});

	// 全选
	$('#allcheck').on('click',function(){
		var inputs = $("input[type='checkbox']");
		
		if(this.checked){
			$(inputs).prop("checked",true)
			$('.totalPrice').text(sum)
		}else{
			$(inputs).prop("checked",false)
		}
		$("#goodsnum").text($(".checkbox:checked").length)
	})


	// 移除
	$('.remove').on('click',function(){
		$(this).parent().remove()
	})


*/


	//表单
	$('input[pattern]').change(function(){
		var regExp = eval( $(this).attr('pattern') );
		if( regExp.test( $(this).val() ) ){
			$(this).css({borderColor:''});
		}
		else{ 
			$(this).css({borderColor:'#ff2f2f'});
		}
	});

	//favorite
	if( $('a[res="favorite"]')[0] ){
		$('a[res="favorite"]').click(function(){
			var _this = this;
			app.login.exec(function(){
				if( !$(_this).hasClass('favorited') ){ 
					app.article.favorite.add( $(_this).attr('aid'), function(result){
						if( result.status ){
							$(_this).addClass('favorited').find('span').text('已收藏');
						}
					});
				}
				else{  
					app.article.favorite.remove( $(_this).attr('aid'), function(result){
						if( result.status ){
							$(_this).removeClass('favorited').find('span').text('收藏');
						}
					});
				}
			});
		});
		
		//注册登录后过程
		app.login.register(function(){
			var aids = [];
			$('a[res="favorite"]').each(function(i){
				aids.push( $(this).attr('aid') );
			});
			app.article.favorite.checks(aids.join(','), function(result){
				$(result.aids).each(function(i,v){
					$('a[res="favorite"][aid='+v+']').addClass('favorited').find('span').text('已收藏');
				});
			});
		});
	}

	/*******评论*******/
	//评论图
	$(document).on('click', '.bbs-goods-img img', function(){
		if( $(this).hasClass('active') ){
			$(this).removeClass("active").parent().parent().find('.bbs-goods-bigimg').hide();
		}
		else{
			//$('.bbs-img-preivew').hide();
			$(this).siblings().removeClass("active");
			$(this).addClass("active");
			var src = $(this).attr("src");
			$(this).parent().parent().find('.bbs-goods-bigimg').html('<img src="' + src + '" />').show();
		}
	}); 

	//评论上传
	$(document).on('change', '.bbs-up-item input', function(){
		if( !/\.(jpg|png|jpeg|gif)$/i.test($(this).val()) ) {
			app.tools.error('请选择图像文件！');
			$(this).val("");
			return false;
		}
		var url = app.tools.file2url(this.files[0]);
		var li = $(this).parent();
		var span = li.find('span');
		var ul = li.parent();
		li.addClass('selected');
		if(url)
			span.css({'background-image': 'url('+url+')'});
		if( ul.children().length<5 )
			ul.append('<li class="bbs-up-item"><span><i></i></span><input name="f[]" accept="image/*" type="file" /></li>');
	});
	$(document).on('click', '.bbs-up-item span', function(){
		if( $(this).parent().parent().children().length==5 && !$(this).parent().parent().last().hasClass('selected') )
			$(this).parent().parent().append('<li class="bbs-up-item"><span><i></i></span><input name="f[]" accept="image/*" type="file" /></li>');
		$(this).parent().remove();
	});
	$(document).on('change', '.bbs-con-textarea textarea', function(){
		$(this).css({'background-image': 'none'});
	});

	$(document).on('mousemove', '.bbs-con-star .star', function(){
		var pos = $(this).offset();
		var x =event.pageX - pos.left;
		var star = Math.ceil(x / (83 / 5)) * 20 + '%';
		$(this).find('span').width(star);
	}).on('mouseout', '.bbs-con-star .star', function(){
		$(this).find('span').width('');
	}).on('click', '.bbs-con-star .star', function(){
		var pos = $(this).offset();
		var x =event.pageX - pos.left;
		var star = Math.ceil(x / (83 / 5));
		$(this).find('span').attr('class', 'star-score star-'+star);
		$(this).parent().find('input').val( star );
	});
	$(document).on('click', '.bbs-submit', function(){
		var form = $(this).parent().parent().parent();
		app.login.exec(function(){
			app.article.comment.post( form, function(result){
				app.tools.info(result.msg, function(){
					if( result.status ) location.reload();
				});
			}, function( msg ){
				app.tools.error(msg);
			});
		});
	});
	$(document).on('click', '.order-bbs-submit', function(){
		var form = $(this).parent().parent().parent();
		app.login.exec(function(){
			app.shop.order.comment( form, function(result){
				app.tools.info(result.msg, function(){
					if( result.status ) location.reload();
				});
			}, function( msg ){
				app.tools.error(msg);
			});
		});
	});


/**************************************************serveice.html**************************************************/
$('.khzx-menu dl').on('click',function(){
	$('.khzx-menu dl').removeClass('active')
	$(this).addClass('active')
})
	
/**************************************************why.html**************************************************/
if($.fn.slideshow){
	$(function ($) {
		$(".why-slider1").slideshow({
			width: 1200,
			height: 470,
			delay: 5000, //多少毫秒切换
			transition: 'fade'
		})
	});
}


	app.login.ajax = function(){ 
		showWindow('您尚未登录', '/member/login/index', 'auto', 300);
	}

	//加载会员
	app.login.check(function(result){
		if( result.status ){
			$('.login').html('<a href="'+app.root+'/member/index/" title="'+result.aliasname+'"><i class="i"></i>会员中心</a>');
		}
		else{ 
			$('.login').html('<a href="javascript:;" onclick="login();"><i class="i"></i>登录/注册</a>');
		}
	});

	//加载购物
	app.shop.cart.read(function(result){
		$('.icon-scar-num').html( result.data.num );
	});


});


function openChat(){
	if( typeof(doyoo)!='undefined' ){
		doyoo.util.openChat('g=10080395');
	}
	return false;
}

function openQQ(){
	if( typeof(doyoo)!='undefined' ){
		doyoo.util.openChat('g=10080395');
	}
	return false;
}

function formVerify( form ){
	var status = true;
	$(form).find('input[pattern]:enabled,select[pattern]:enabled,textarea[pattern]:enabled').each(function(){
		if( !app.tools.regx( $(this).val(), $(this).attr('pattern') ) ){
			status = false;
			$(this).css({borderColor:'#ff2f2f'});
		}
	});
	return status;
}

function login( callback ){
	callback = callback ? callback : function(){location.reload();};
	app.login.ajaxcall = callback;
	showWindow('您尚未登录', '/member/login/index', 'auto', 300);
}

function  showCartTip( obj ){ 
	var cartHtml = '<div class="cart_tip_bd">';
	cartHtml	+= '<div class="head clearfix"><a class="J_Close close-btn" href="javascript:;" onclick="$(\'.cart_tip_bd\').remove();">关闭</a><span class="arrow_right"></span></div>';
	cartHtml	+= '<div class="module-cart-body"><div class="module-cart-box">';
	cartHtml	+= '<p class="mac-mb10"><span class="mac-success-txt module-cart-icons"><em></em>已将商品添加到购物车</span></p>';
	cartHtml	+= '<p><a class="mac-go-cart module-cart-icons" href="/shop/cart/">去购物车结算</a><a class="J_Close close-txt" href="javascript:" onclick="$(\'.cart_tip_bd\').remove();">继续购买</a></p>';
	cartHtml	+= '</div></div></div>';

	$(cartHtml).appendTo( $('body') ).css({
		top: $(obj).offset().top-80,
		left: $(obj).offset().left+10
	}).show().find('.mac-go-cart').attr('href', app.root+'/shop/cart/');
}