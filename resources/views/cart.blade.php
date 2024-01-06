@extends('layouts.master')
@section('main')

<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="UTF-8" />
		<meta name="theme-color" content="#f02b2b" /> 
		<meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">
		<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
		<link rel="canonical" href="https://pocomart.mysapo.net/cart"/>
		<link rel="alternate" href="https://pocomart.mysapo.net" hreflang="vi" />
		<meta name='revisit-after' content='2 days' />
		<link rel="dns-prefetch" href="https://pocomart.mysapo.net">
		<link rel="dns-prefetch" href="//bizweb.dktcdn.net/">
		<link rel="dns-prefetch" href="//www.google-analytics.com/">
		<link rel="dns-prefetch" href="//www.googletagmanager.com/">

		<link rel="icon" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/favicon.png?1697597694844" type="image/x-icon" /><link rel="apple-touch-icon" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/favicon.png?1697597694844">
		<meta name="robots" content="follow, noindex">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">	
<meta name="description" content="">
		<title>Giỏ hàng		</title>
		<meta name="keywords" content="Giỏ hàng, pocomart, pocomart.mysapo.net"/>		
		<meta property="og:type" content="website">
<meta property="og:title" content="Giỏ hàng">
<meta property="og:image:alt" content="Giỏ hàng">
<meta property="og:image" content="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/logo.png?1697597694844">
<meta property="og:image:secure_url" content="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/logo.png?1697597694844">
<meta property="og:description" content="">
<meta property="og:url" content="https://pocomart.mysapo.net/cart">
<meta property="og:site_name" content="pocomart">		<link rel="preload" as='style'  type="text/css" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/plugincss.css?1697597694844">
		<link href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/plugincss.css?1697597694844" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as='style' href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/main.scss.css?1697597694844">
<link rel="preload" as='style' href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/header.scss.css?1697597694844">

<link href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/main.scss.css?1697597694844" rel="stylesheet" type="text/css" media="all" />
<link href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/header.scss.css?1697597694844" rel="stylesheet" type="text/css" media="all" />














		
		<script>
	var Bizweb = Bizweb || {};
	Bizweb.store = 'pocomart.mysapo.net';
	Bizweb.id = 429689;
	Bizweb.theme = {"id":869367,"name":"poco mart - 1810","role":"main"};
	Bizweb.template = 'cart';
	if(!Bizweb.fbEventId)  Bizweb.fbEventId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
	var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
				return v.toString(16);
			});		
</script>
<script>
	(function () {
		function asyncLoad() {
			var urls = [];
			for (var i = 0; i < urls.length; i++) {
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.src = urls[i];
				var x = document.getElementsByTagName('script')[0];
				x.parentNode.insertBefore(s, x);
			}
		};
		window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
	})();
</script>


<script>
	window.BizwebAnalytics = window.BizwebAnalytics || {};
	window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
	window.BizwebAnalytics.meta.currency = 'VND';
	window.BizwebAnalytics.tracking_url = '/s';

	var meta = {};
	
	
	for (var attr in meta) {
	window.BizwebAnalytics.meta[attr] = meta[attr];
	}
</script>

	
		<script src="/dist/js/stats.min.js?v=8177d93"></script>
	












		
<script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": 
        [
            {
                "@type": "ListItem",
                "position": 1,
                "item": 
                {
                  "@id": "https://pocomart.mysapo.net",
                  "name": "Trang chủ"
                }
            },
      
        
      
      
      
      
      {
                "@type": "ListItem",
                "position": 2,
                "item": 
                {
                  "@id": "https://pocomart.mysapo.net/cart",
                  "name": "Giỏ hàng"
                }
            }
      
    
        ]
        }
</script>



		
	</head>
	<body>  
		<script src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/jquery.js?1697597694844" type="text/javascript"></script>
		<script rel="preload" src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/ajaxsubmit.js?1697597694844" type="text/javascript"></script>
		<script rel="preload" src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/notify.js?1697597694844" type="text/javascript"></script>
		<script src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/swiper.js?1697597694844" type="text/javascript"></script>
		<script>
			$(document).ready(function ($) {
				awe_lazyloadImage();
			});
			function awe_lazyloadImage() {
				var ll = new LazyLoad({
					elements_selector: ".lazyload",
					load_delay: 500,
					threshold: 5
				});
			} window.awe_lazyloadImage=awe_lazyloadImage;
		</script>
		
		<div class="main-index">
			<section class="bread-crumb">
	<div class="container">
		<div class="row">
			<div class="col-12 a-left">
				<ul class="breadcrumb" >					
					<li class="home">
						<a  href="/" ><span >Trang chủ</span></a>						
						<span class="mr_lr">&nbsp;/&nbsp;</span>
					</li>
					
					<li><strong ><span>Giỏ hàng</span></strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section> 
<section class="main-cart-page main-container col1-layout">
	<div class="main container cartpcstyle">
		<div class="wrap_background_aside margin-bottom-40">
			<div class="header-cart">
				<div class="title-block-page">
					<h1 class="title_cart">
						<span>Giỏ hàng của bạn</span>
					</h1>
				</div>
			</div>
			<div class="cart-page d-xl-block d-none">
				<div class="drawer__inner">
					<div class="CartPageContainer">
 
<form action="/cart" method="post" novalidate="" class="cart ajaxcart cartpage">
	<div class="cart-header-info">
		<div>Thông tin sản phẩm</div><div>Đơn giá</div><div>Số lượng</div><div>Thành tiền</div>
	</div>
	<div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
        @foreach($cart as $d)
		<div class="ajaxcart__row">
			<div class="ajaxcart__product cart_product" data-line="1">
				<a href="{{route('home.product',$d->id_products)}}" class="ajaxcart__product-image cart_image" title="{{$d->pro->name}}">
                    <img src="/uploads/product/{{$d->pro->image}}" alt="{{$d->pro->name}}">
                </a>
				<div class="grid__item cart_info">
					<div class="ajaxcart__product-name-wrapper cart_name">
						<a href="{{route('home.product',$d->id_products)}}" title="{{$d->pro->name}}">{{$d->pro->name}}</a>
						<a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="{{route('cart.delete',$d->id)}}" data-line="1">Xóa</a>
						
					</div>
					<div class="grid">
						<div class="grid__item one-half text-right cart_prices">
							<span class="cart-price">{{number_format($d->pro->sale_price)}}đ</span>
						</div>
					</div>
					<div class="grid">
						<div class="grid__item one-half cart_select">
							<div class="ajaxcart__qty input-group-btn">
								<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="" data-qty="2" data-line="1" aria-label="-">
									-
								</button>
								<input type="text" name="updates[]" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="{{$d->quantity}}" min="1" data-id="" data-line="1" aria-label="quantity" pattern="[1-9]*">
								<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="" data-line="1" data-qty="4" aria-label="+">
									+							
								</button>
							</div>
						</div>
					</div>
					<div class="grid">
						<div class="grid__item one-half text-right cart_prices">
							<span class="cart-price">{{number_format($d->price)}}đ</span>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach

		
	</div>
	<div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
		<div class="row">
			<div class="col-lg-4 col-12 offset-md-8 offset-lg-8 offset-xl-8">
				<div class="ajaxcart__subtotal">
					<div class="cart__subtotal">
						<div class="cart__col-6">Tổng tiền:</div>
						<div class="text-right cart__totle"><span class="total-price">{{number_format($total_price)}}đ</span></div>
					</div>
				</div>
				<div class="cart__btn-proceed-checkout-dt">
                <button onclick="location.href='{{route('order.index')}}'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
					
				</div>
			</div>
		</div>
	</div>
</form>

</div>

				</div>
			</div>
			<div class="cart-mobile-page d-block d-xl-none">
				<div class="CartMobileContainer">
				</div>
			</div>
		</div>
	</div>
</section>
		</div>
		<script>

	$(document).ready(function(){

		var preLoadLoadGif = $('<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>');
		var searchID = -1;
		var currReqObj = null;

		var $resultsBox = $('<div class="results-box"><div class="search-results"></div><div class="history"></div></div>').appendTo('.theme-search, .theme-searchs');

		$('.theme-search-smart .theme-header-search-form input[type="text"]').bind('keyup change', function(e){
			//$('.results-box .search-results').html('');
			if($(this).val().length > 0 && $(this).val() != $(this).data('oldval')) {
				$(this).data('oldval', $(this).val());
				if(currReqObj != null) currReqObj.abort();
				clearTimeout(searchID);
				var $form = $(this).closest('form');
				var term = $form.find('input[name="query"]').val();
				var linkURL = $form.attr('action') + '?query=' + term;
				$resultsBox.find('.search-results').html('<div class="theme-loading"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>');

				searchID = setTimeout(function(){
					currReqObj = $.ajax({
						url: $form.attr('action'),
						async: false,
						data: {
							type: 'product',
							view: 'json',
							q: term
						},
						dataType: 'json',
						success: function(data){
							currReqObj = null;

							if(data.results_total == 0) {
								$resultsBox.find('.search-results').html('<div class="note">Không có kết quả tìm kiếm</div>');
							} else {
								$resultsBox.find('.search-results').empty();
								$.each(data.results, function(index, item){
									var xshow = 'wholesale';
									if(!(item.title.toLowerCase().indexOf(xshow) > -1)) {
										var $row = $('<a class="clearfix"></a>').attr('href', item.url).attr('title', item.title);
										$row.append('<div class="img"><img src="' + item.thumb + '" /></div>');
										$row.append('<div class="d-title">'+item.title+'</div>');
										$row.append('<div class="d-title d-price">'+item.price+'</div>');
										$resultsBox.find('.search-results').append($row);
									}
								});
								var countll = $('.search-results a').length;
								if(countll < 8) {
									$resultsBox.find('.search-results').append('<a href="' + linkURL + '" class="note" title="Xem tất cả">Xem tất cả <span class="allcount"></span></a>');
									$('.allcount').html("("+countll+")");
								}else {
									$resultsBox.find('.search-results').append('<a href="' + linkURL + '" class="note" title="Xem nhiều hơn">Xem nhiều hơn</a>');
								}
								
							}
						}
					});
				}, 500);
			}  else if ($(this).val().length <= 1) {
				//$resultsBox.find('.search-results').empty();
			}
		}).attr('autocomplete', 'off').data('oldval', '').bind('focusin', function(){
			$resultsBox.fadeIn(200);
		}).bind('click', function(e){
			e.stopPropagation();
		});
		$('body').bind('click', function(){
			$resultsBox.hide();
		});
		$('.theme-search-form').on('submit', function(e){
			e.preventDefault();
			var term = '*' + $(this).find('input[name="query"]').val() + '*';
			var linkURL = $(this).attr('action') + '?query=' + term ;
			window.location = linkURL;

		});

	});



</script>
		
		












					<script>
						$('#mc-form').ajaxChimp({
							language: 'en',
							callback: mailChimpResponse,
							url: '//gmail.us2.list-manage.com/subscribe/post?u=ef7f65e3be67e30ff1c4bd591&id=a7430e9bc5'
						});
						function mailChimpResponse(resp) {
							if (resp.result === 'success') {
								if(resp.msg == 'Thank you for subscribing!'){
									$('.mailchimp-success').html('Cảm ơn bạn đã đăng ký!').fadeIn(900);
								}else{
									$('.mailchimp-success').html('' + resp.msg).fadeIn(900);
								}
								$('.mailchimp-error').fadeOut(100);
							} else if (resp.result === 'error') {
								if(resp.msg == '0 - Please enter a value'){
									$('.mailchimp-error').html('Vui lòng nhập email').fadeIn(900);
								}else if(resp.msg == '0 - An email address must contain a single @'){
									$('.mailchimp-error').html('Địa chỉ email phải chứa ký tự @').fadeIn(900);
								}else if(resp.msg == 'This email cannot be added to this list. Please enter a different email address.'){
									$('.mailchimp-error').html('Email này không thể được thêm vào danh sách này. Vui lòng nhập một địa chỉ email khác.').fadeIn(900);
								}else if(resp.msg.includes('0 - The domain portion of the email address is invalid')){
									$('.mailchimp-error').html('Phần tên miền của địa chỉ email không hợp lệ').fadeIn(900);
								}else if(resp.msg.includes('0 - The username portion of the email address is empty')){
									$('.mailchimp-error').html('Phần tên người dùng của địa chỉ email trống').fadeIn(900);
								}else if(resp.msg == 'Thank you for subscribing!'){
									$('.mailchimp-error').html('Cảm ơn bạn đã đăng ký!').fadeIn(900);
									$('.mailchimp-error').fadeOut(4000);
								}else{
									$('.mailchimp-error').html('' + resp.msg).fadeIn(900);
								}
								$('.mailchimp-error').fadeOut(4000);
							}
						}
					</script>
					
<link rel="preload" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/wishlist-compare.js?1697597694844" as="script">
<script src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/wishlist-compare.js?1697597694844" type="text/javascript"></script>
		
<link rel="preload" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/main.js?1697597694844" as="script">
<script src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/main.js?1697597694844" type="text/javascript"></script>






		<link rel="preload" as="style" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/ajaxcart.scss.css?1697597694844"  type="text/css">
<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/api_bizweb.js?1697597694844"  type="text/javascript">
<link href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/ajaxcart.scss.css?1697597694844" rel="stylesheet" type="text/css" media="all" />
<script src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/api_bizweb.js?1697597694844" type="text/javascript"></script>



		<link rel="preload" as='style' type="text/css" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/animate.scss.css?1697597694844">
		<link href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/animate.scss.css?1697597694844" rel="stylesheet" type="text/css" media="all" />
		<script type='text/javascript'>
			var font = 'myCss';  
			if (!document.getElementById(font))
			{
				var headx  = document.getElementsByClassName('footer')[0];
				var font_link  = document.createElement('link');
				font_link.id   = font;
				font_link.rel  = 'stylesheet';
				font_link.type = 'text/css';
				font_link.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css';
				font_link.media = 'all';
				headx.appendChild(font_link);
			}
		</script>
		<div style="visibility:hidden; position: absolute; z-index: -1; bottom: 0; left: 0;">
	<svg xmlns="http://www.w3.org/2000/svg">
		<symbol id="nexticon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/></svg>
		</symbol>
		<symbol id="previcon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"/></svg>
		</symbol>
	</svg>
</div>

	</body>
</html>
@stop()