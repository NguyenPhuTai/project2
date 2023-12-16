@extends('layouts.master')
@section('main')
@if(auth('cus')->check())		
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="UTF-8" />
		<meta name="theme-color" content="#f02b2b" /> 
		<meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">
		<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
		<link rel="canonical" href="https://pocomart.mysapo.net/account/login"/>
		<link rel="alternate" href="https://pocomart.mysapo.net" hreflang="vi" />
		<meta name='revisit-after' content='2 days' />
		<link rel="dns-prefetch" href="https://pocomart.mysapo.net">
		<link rel="dns-prefetch" href="//bizweb.dktcdn.net/">
		<link rel="dns-prefetch" href="//www.google-analytics.com/">
		<link rel="dns-prefetch" href="//www.googletagmanager.com/">

		<link rel="icon" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/favicon.png?1697597694844" type="image/x-icon" /><link rel="apple-touch-icon" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/favicon.png?1697597694844">
		<meta name="robots" content="noodp,index,follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">	
<meta name="description" content="">
		<title>Trang thông tin khách hàng		</title>
		<meta name="keywords" content="Đăng nhập tài khoản, pocomart, pocomart.mysapo.net"/>		
		<meta property="og:type" content="website">
<meta property="og:title" content="Đăng nhập tài khoản">
<meta property="og:image:alt" content="Đăng nhập tài khoản">
<meta property="og:image" content="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/logo.png?1697597694844">
<meta property="og:image:secure_url" content="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/logo.png?1697597694844">
<meta property="og:description" content="">
<meta property="og:url" content="https://pocomart.mysapo.net/account/login">
<meta property="og:site_name" content="pocomart">		<link rel="preload" as='style'  type="text/css" href="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/plugincss.css?1697597694844">
		<link href="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/plugincss.css?1697597694844" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as='style' href="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/main.scss.css?1697597694844">
<link rel="preload" as='style' href="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/header.scss.css?1697597694844">

<link href="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/main.scss.css?1697597694844" rel="stylesheet" type="text/css" media="all" />
<link href="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/header.scss.css?1697597694844" rel="stylesheet" type="text/css" media="all" />










<link rel="preload" as='style' type="text/css" href="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/account_oder_style.scss.css?1697597694844">
<link href="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/account_oder_style.scss.css?1697597694844" rel="stylesheet" type="text/css" media="all" />





		
		<script src="https://bizweb.dktcdn.net/assets/themes_support/bizweb-api.js" type="text/javascript"></script>
		<script src="https://bizweb.dktcdn.net/assets/themes_support/common.js" type="text/javascript"></script>   
		<script src="https://bizweb.dktcdn.net/assets/themes_support/customer.js" type="text/javascript"></script>
		
		<script>
	var Bizweb = Bizweb || {};
	Bizweb.store = 'pocomart.mysapo.net';
	Bizweb.id = 429689;
	Bizweb.theme = {"id":869367,"name":"poco mart - 1810","role":"main"};
	Bizweb.template = 'customers/login';
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
					
					<li><strong ><span>Trang khách hàng</span></strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section> 
<section class="signup page_customer_account">
	<div class="container">
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
				<div class="block-account">
					<h5 class="title-account">Trang tài khoản</h5>
					<p>Xin chào, <span style="color:#eb3e32;">{{auth('cus')->user()->name}}</span>&nbsp;!</p>
					<ul>
						<li>
							<a disabled="disabled" class="title-info active" href="{{ route('account.profile') }}">Thông tin tài khoản</a>
						</li>
						<li>
							<a class="title-info" href="">Đơn hàng của bạn</a>
						</li>
						<li>
							<a class="title-info" href="{{ route('account.charge_password') }}">Đổi mật khẩu</a>
						</li>
						<li>
							<a class="title-info" href="{{ route('account.address') }}">Sổ địa chỉ (0)</a>
						</li>
						<li>
                            <a href="{{ route('account.logout') }}" >Đăng xuất</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
				<h1 class="title-head margin-top-0">Đổi mật khẩu</h1>
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="page-login">
							<form method="post" action=""  accept-charset="UTF-8">
								@csrf
							
							
								<p>Để đảm bảo tính bảo mật bạn vui lòng đặt lại mật khẩu với ít nhất 8 kí tự</p>
							
							
							<div class="form-signup clearfix row">
								<fieldset class="form-group col-12">
									<label for="oldPass">Mật khẩu cũ <span class="error">*</span></label>
									<input type="password" name="OldPassword" id="OldPass" required class="form-control form-control-lg">
								</fieldset>
								<fieldset class="form-group col-12">
									<label for="changePass">Mật khẩu mới <span class="error">*</span></label>
									<input type="password" name="Password" id="changePass" required class="form-control form-control-lg">
								</fieldset>
								<fieldset class="form-group col-12">
									<label for="confirmPass">Xác nhận lại mật khẩu <span class="error">*</span></label>
									<input type="password" name="ConfirmPassword" id="confirmPass" required class="form-control form-control-lg">
								</fieldset>
							</div>
							<button class="button-default" type="submit" onclick="window.location.reload()"><i class="hoverButton"></i>Đặt lại mật khẩu</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>


<link rel="preload" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/wishlist-compare.js?1697597694844" as="script">
<script src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/wishlist-compare.js?1697597694844" type="text/javascript"></script>
		
<link rel="preload" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/main.js?1697597694844" as="script">
<script src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/main.js?1697597694844" type="text/javascript"></script>






		<link rel="preload" as="style" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/ajaxcart.scss.css?1697597694844"  type="text/css">
<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/api_bizweb.js?1697597694844"  type="text/javascript">
<link href="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/ajaxcart.scss.css?1697597694844" rel="stylesheet" type="text/css" media="all" />
<script src="//bizweb.dktcdn.net/100/429/689/themes/869367/assets/api_bizweb.js?1697597694844" type="text/javascript"></script>
<script type="text/javascript">



		<div class="backdrop__body-backdrop___1rvky"></div>


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
@else
    return redirect()->route('account.login');

@endif
@stop()