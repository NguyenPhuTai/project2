@extends('layouts.master')
@section('main')		
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
					
					<li>
						<a  href="/account" ><span >Tài khoản</span></a>
						<span class="mr_lr">&nbsp;/&nbsp;</span>
					</li>

					<li><strong><span >Địa chỉ khách hàng</span></strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section> 

<div class="op_address"></div>
<section class="address">
	<div class="container page_address margin-bottom-20">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
				<div class="block-account">
					<h5 class="title-account">Trang tài khoản</h5>
					<p>Xin chào, <span style="color:#eb3e32;">{{auth('cus')->user()->name}}</span>&nbsp;!</p>
					<ul>
						<li>
							<a class="title-info" href="{{ route('account.profile') }}">Thông tin tài khoản</a>
						</li>
						<li>
							<a class="title-info" href="/account/orders">Đơn hàng của bạn</a>
						</li>
						<li>
							<a class="title-info" href="{{ route('account.charge_password') }}">Đổi mật khẩu</a>
						</li>
						<li>
							<a disabled="disabled" class="title-info active" href="{{ route('account.address') }}">Sổ địa chỉ (0)</a>
						</li>
						<li>
							<a class="title-info" href="{{ route('account.logout') }}">Đăng xuất</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-lg-9">

				<h1 class="title-head">Địa chỉ của bạn</h1>
				<p class="btn-row">
					<button class="btn-edit-addr btn btn-primarys btn-more" type="button" onclick="Bizweb.CustomerAddress.toggleNewForm(); return false;" >Thêm địa chỉ</button> 							
				</p>
				<div id="add_address" class="form-list modal_address modal">
					<div class="btn-close closed_pop"><i class="fa fa-times"></i></div>
					<h2 class="title_pop">
						Thêm địa chỉ mới
					</h2>
					<form method="post" action="{{ route('account.address') }}" accept-charset="UTF-8">
                    @csrf
					<div class="pop_bottom">
						<div class="form_address">
							<div class="field">
								<fieldset class="form-group">
									<input type="text" name="name" class="form-control" data-validation-error-msg= "Không được để trống" data-validation="required" value="" autocapitalize="words">
									<label>Họ tên</label>
								</fieldset>
								<p class="error-msg"></p>
							</div>
							<div class="field">
								<fieldset class="form-group">
									<input type="number" class="form-control" id="Phone" pattern="\d+" name="phone" maxlength="12" value="">
									<label>Số điện thoại</label>
								</fieldset>
							</div>
							<div class="field">
								<fieldset class="form-group">
									<input type="text" class="form-control" name="address" value="" >
									<label>Địa chỉ</label>
								</fieldset>
							</div>
							<div class="field">
								<fieldset class="form-group">
									<input type="hidden" class="form-control" name="id_khachhang" value="{{auth('cus')->user()->id}}" >
								</fieldset>
							</div>
						</div>
						<div class="checkbox">
							<label class="c-input c-checkbox" style="padding-left: 20px;">
								<input type="checkbox" id="address_default_address_" name="IsDefault" value="true">
								<span class="c-indicator">Đặt là địa chỉ mặc định?</span> 
							</label>
						</div>	
						<div class="btn-row">
							<button class="btn btn-lg btn-dark-address btn-outline article-readmore btn-close" type="button"  onclick="Bizweb.CustomerAddress.toggleNewForm(); return false;"><span>Hủy</span></button>
							<button class="btn btn-lg btn-primarys btn-submit" id="addnew" type="submit"><span>Thêm địa chỉ</span></button>	
						</div>
					</div>
					</form>
				</div>
				
				<div class="row total_address">
                    @foreach($data as $d)
					<div id="view_address_{{$d-> id}}" class="customer_address col-xs-12 col-lg-12 col-md-12 col-xl-12">
						<div class="address_info" style="border-top: 1px #ebebeb solid;padding-top: 16px;margin-top: 20px;">
							<div class="address-group">
								<div class="address form-signup">
									<p><strong>Họ tên: </strong>{{$d-> name}}
										
									</p>
									<p>
										<strong>Địa chỉ: </strong>
										
										{{$d-> address}}
										
									</p>
									
									<p><strong>Số điện thoại:</strong>{{$d-> phone}}</p>
							
								</div>
							</div>
							<div id="tool_address_{{$d-> id}}" class="btn-address">
								<p class="btn-row">

									<button class="btn-edit-addr btn btn-primarys btn-edit" type="button" data-form="edit_address_{{$d-> id}}" aria-controls="edit_address_{{$d-> id}}">
										Chỉnh sửa địa chỉ
									</button>

                                    <button class="btn btn-dark-address btn-edit-addr btn-delete" type="button" onclick="Bizweb.CustomerAddress.destroy({{$d-> id}});return false">
                                        <form action="{{ route('account.delete_address') }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <input type="hidden" name="id" value="{{$d-> id}}">
                                            <button class="btn btn-dark-address btn-edit-addr btn-delete" type="submit">xóa</button>
                                            
                                        </form>
                                    </button>
								</p>
							</div>
						</div>
					</div>
                    <div id="edit_address_{{$d-> id}}" class="form-list modal_address modal modal_edit_address">
						<div class="btn-close closed_pop"><i class="fa fa-times"></i></div>
						<h2 class="title_pop">
							Chỉnh sửa địa chỉ
						</h2>
						<form method="post" action="{{ route('account.update_address') }}" accept-charset="UTF-8">
                            @csrf
                            <div class="pop_bottom">
                                <div class="form_address">
                                    <input type="hidden" name="id" value="{{$d-> id}}">
                                    <div class="field">
                                        <fieldset class="form-group">
                                            <input type="text" name="name" class="form-control" required value="{{$d-> name}}" autocapitalize="words">
                                            <label>Họ tên</label>
                                        </fieldset>
                                        <p class="error-msg"></p>
                                    </div>
                                    <div class="field">
                                        <fieldset class="form-group">
                                            <input type="number"  pattern="\d+" class="form-control" id="Phone" name="phone" maxlength="10" value="{{$d-> phone}}">
                                            <label>Số điện thoại</label>
                                        </fieldset>	
                                    </div>
                                    <div class="field">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" name="address" value="{{$d-> address}}" >
                                            <label>Địa chỉ</label>
                                        </fieldset>
                                    </div>

                                </div>
                                <div class="checkbox hidden ">
                                    <label class="c-input c-checkbox" style="padding-left: 20px;">
                                        <input type="checkbox" name="IsDefault" value="true">
                                        <span class="c-indicator">Đặt là địa chỉ mặc định?</span> 
                                    </label>
                                </div>	
                                <div class="btn-row">	
                                    <button class="btn btn-dark-address btn-fix-addr btn-close" type="button" data-form="edit_address_25339046">
                                        Hủy
                                    </button>										
                                    <button class="btn btn-primarys btn-submit" type="submit" ><span>Cập nhật địa chỉ</span></button>																	

                                </div>
                            </div>
						</form>
					</div>	
                    
                    @endforeach
			    </div>
		</div>
	</div>		
</section>

<script>$.validate({});</script>
<script type="text/javascript" charset="utf-8">

	//JS address with json

	(function (window) {
		var allProvince = [];
		var allDistrict = [];
		var allWard = [];
		var loadedData = false;

		function setProvince(zone, province) {
			$province = $("select[data-address-type='province'][data-address-zone='" + zone + "']");
			if (!$province) {
				return;
			}
			var list = ['<option value="" hidden>---</option>'];
			for (var i = 0; i < allProvince.length; i++) {
				var p = allProvince[i];
				if (p.name == province) {
					list.push("<option value='" + p.name + "' selected>" + p.name + "</option>");
					continue;
				}
				list.push("<option value='" + p.name + "'>" + p.name + "</option>");
			}

			$province.html(list.join(''));
		};

		function setDistrict(zone, province, district) {
			var $district = $("select[data-address-type='district'][data-address-zone='" + zone + "']");
			if (!$district) {
				return;
			}
			if (!province) {
				$district.val('');
				$district.attr('disabled', 'disabled');
				$district.html('');
				return;
			}
			var provinceObj = allProvince.find(function(p) { return p.name == province; });
			var districts = allDistrict.filter(function (d) { return d.province_id == provinceObj.id; });
			var list = ['<option value="" hidden>---</option>'];
			for (var i = 0; i < districts.length; i++) {
				var d = districts[i];
				if (d.name == district) {
					list.push("<option value='" + d.name + "' selected>" + d.name + "</option>");
					continue;
				}
				list.push("<option value='" + d.name + "'>" + d.name + "</option>");
			}
			$district.removeAttr('disabled');
			$district.html(list.join(''));
		};

		function setWard(zone, district, ward) {
			var $ward = $("select[data-address-type='ward'][data-address-zone='" + zone + "']");
			if (!$ward) {
				return;
			}
			if (!district) {
				$ward.val('');
				$ward.attr('disabled', 'disabled');
				$ward.html('');
				return;
			}
			var list = ['<option value="" hidden>---</option>'];
			var districtObj = allDistrict.find(function(d) { return d.name == district; });
			var wards = allWard.filter(function (w) { return w.district_id == districtObj.id; });
			for (var i = 0; i < wards.length; i++) {
				var w = wards[i];
				if (w.name == ward) {
					list.push("<option value='" + w.name + "' selected>" + w.name + "</option>");
					continue;
				}
				list.push("<option value='" + w.name+ "'>" + w.name + "</option>");
			}
			$ward.removeAttr('disabled');
			$ward.html(list.join(''));
		};


		function loadData() {
			if (loadedData) {
				return {
					then: function (f) {
						return f();
					}
				};
			}
			return fetch('/checkout/addresses.json')
				.then(function (rs) { return rs.json(); })
				.then(function (rs) {
				allProvince = rs.provinces;
				allDistrict = rs.districts;
				allWard = rs.wards;
				loadedData = true;
			});
		};

		function Address() {

		}

		function triggerChange(zone, type) {
			$('select[data-address-type="' + type + '"][data-address-zone="' + zone + '"]').trigger('address:change');
		}

		Address.prototype.bind = function () {
			$('body')
				.on('change', 'select[data-address-type]', function (e) {
				var type = e.target.getAttribute('data-address-type');
				var zone = e.target.getAttribute('data-address-zone');
				if (type === 'province') {
					triggerChange(zone, 'province');
					setDistrict(zone, e.target.value, undefined);
					triggerChange(zone, 'district');
					setWard(zone, '', undefined);
					triggerChange(zone, 'ward');
				} else if (type === 'district') {
					triggerChange(zone, 'district');
					setWard(zone, e.target.value, undefined);
					triggerChange(zone, 'ward');
				}
			})
			return this;
		};

		Address.prototype.refresh = function (callback) {
			var zones = {};
			$('[data-address-zone]').each(function () {
				var $this = $(this);
				var type = $this.data('address-type');
				if (!type) {
					return;
				}
				var zoneName = $this.data('address-zone');
				var zone = zones[zoneName] || (zones[zoneName] = {});
				zone[type] = $this.val() || $this.attr('value');
			});
			var zoneNames = Object.keys(zones);
			if (zoneNames.length == 0) {
				return;
			}
			loadData().then(function () {
				zoneNames.forEach(function (zoneName) {
					var zone = zones[zoneName];
					setProvince(zoneName, zone.province);
					triggerChange(zoneName, 'province');
					setDistrict(zoneName, zone.province, zone.district);
					triggerChange(zoneName, 'district');
					setWard(zoneName, zone.district, zone.ward);
					triggerChange(zoneName, 'ward');
				});
				if (callback) {
					callback();
				}
			});
		};

		window.Address = new Address();

	})(window)


	//Page address

	new Bizweb.CountrySelector('address_country_new');
	

							   $(document).ready(function() {

		var elements = $("input, select, textarea");
		for (var i = 0; i < elements.length; i++) {
			elements[i].oninvalid = function(e) {
				e.target.setCustomValidity("");
				if (!e.target.validity.valid) {
					e.target.setCustomValidity(e.target.getAttribute("requiredmsg"));
				}
			};
			elements[i].oninput = function(e) {
				e.target.setCustomValidity("");
			};
		}
		$('.mySelect2').each(function(){
			var old = $(this).attr('data-default');			  
			$(this).val(old);
			$(this).change();
		})

		$('.btn-close').on('click', function(e){
			e.preventDefault();
			$('.op_address').removeClass('opened');
			$('.modal_address').hide();
			$('html').removeClass('no-scroll');
			$('.not-vn').removeClass('hidden');
			Address.bind().refresh();
			$('.mySelect2').each(function(){
				var old = $(this).attr('data-default');			  
				$(this).val(old);
				$(this).change();
			})
			setTimeout( function() {
				$('input').prop('selected', false);
			}, 500)
			$('.form-group input').each(function(){
				if($(this).val() != ""){
					$(this).addClass("has-content");
				}else{
					$(this).removeClass("has-content");
				}
			})
		});
		$('.btn-fix-addr').click(function(e){
			$(this).parents('.collapse').removeClass('in').hide();
		})
	})

	$('fieldset').click(function(){
		$(this).find('input').focus();
	});

	$(document).on('click', '.btn-more', function(e) {
		$('.op_address').toggleClass('opened');
		$('#add_address').show();
		$('html').toggleClass('no-scroll');
		$('.mySelect1').each(function(){
			var old = $(this).attr('data-default');			  
			$(this).val(old);
			$(this).change();
		})
		if($("#customer_address select[name='Country'] option:selected").val() != 'Vietnam'){
			$('.not-vn').addClass('hidden');
		}else {
			$('.not-vn').removeClass('hidden');
		}

		Address.bind().refresh();
		$('.form-group input').each(function(){
			if($(this).val() != ""){
				$(this).addClass("has-content");
			}else{
				$(this).removeClass("has-content");
			}
		})
	});
	if ($( window ).width() > 768) {
		$(function(){
			setInterval(function() {
				if($('.modal_address').find("select[name='Country'] option:selected").val() != 'Vietnam') {
					if ($(".modal_address input[name='FullName']").val() === '') {
						if ($('.help-block.form-error').length) {
							$('.modal_address').css("height","515px");
						}else {
							$('.modal_address').css("height","495px");
						}
					}else {
						$('.modal_address').css("height","495px");
					}
				} else if ($('.modal_address').find("select[name='Country'] option:selected").val() === 'Vietnam') {
					if ($(".modal_address input[name='FullName']").val() !== '') {
						$('.modal_address').css("height","545px");
					}else {
						if ($('.help-block.form-error').length) {
							$('.modal_address').css("height","575px");
						}else {
							$('.modal_address').css("height","545px");
						}
					}
				}else {
					$('.modal_address').css("height","545px");
				}
				
				
				
				if($('.modal_edit_address').find("select[name='Country'] option:selected").val() != 'Vietnam') {
					if ($(".modal_edit_address input[name='FullName']").val() === '') {
						if ($('.help-block.form-error').length) {
							$('.modal_edit_address').css("height","515px");
						}else {
							$('.modal_edit_address').css("height","495px");
						}
					}else {
						$('.modal_edit_address').css("height","495px");
					}
				} else if ($('.modal_edit_address').find("select[name='Country'] option:selected").val() === 'Vietnam') {
					if ($(".modal_edit_address input[name='FullName']").val() !== '') {
						$('.modal_edit_address').css("height","545px");
					}else {
						if ($('.help-block.form-error').length) {
							$('.modal_edit_address').css("height","575px");
						}else {
							$('.modal_edit_address').css("height","545px");
						}
					}
				}else {
					$('.modal_edit_address').css("height","545px");
				}
				
			}, 500);
		})
	}

	$(function(){    
		$("select[name='Country']").change(function(){
			if( $(this).val() != 'Vietnam'){
				$('.not-vn').addClass('hidden');
			}else {
				$('.not-vn').removeClass('hidden');
			}
		}); 
	});


	$(document).on('click', '.btn-edit', function(e) {
		$('.op_address').toggleClass('opened');
		var ctr = $(this).attr('aria-controls');			
		$('#'+ctr).show();
		$('html').toggleClass('no-scroll');
		Address.bind().refresh();
		var idform = $(this).data('form');
		$('.mySelect2').each(function(){
			var old = $(this).attr('data-default');			  
			$(this).val(old);
			$(this).change();
		})
		if( $('#'+idform).find("select[name='Country']").data('default') != 'Vietnam'){
			$('.not-vn').addClass('hidden');
		}else {
			$('.not-vn').removeClass('hidden');
		}
		$('#'+idform).each(function() {
			var thisform = $(this);
			$(thisform).find('.province').each(function(){
				if($(thisform).find('.province').data('default') != ""){
					$(thisform).find('.province').addClass("has-content");
				}else{
					$(thisform).find('.province').removeClass("has-content");
				}
			})
			$(thisform).find('.district').each(function(){
				if($(thisform).find('.district').data('default') != ""){
					$(thisform).find('.district').addClass("has-content");
				}else{
					$(thisform).find('.district').removeClass("has-content");
				}
			})
			$(thisform).find('.ward').each(function(){
				if($(thisform).find('.ward').data('default') != ""){
					$(thisform).find('.ward').addClass("has-content");
				}else{
					$(thisform).find('.ward').removeClass("has-content");
				}
			})
		});
	});

	
	
	$(window).on('load', function(){
		setTimeout(function(){
			$('.form-group input').each(function(){
				if($(this).val() != ""){
					$(this).addClass("has-content");
				}else{
					$(this).removeClass("has-content");
				}
			})
			$('.form-group select').each(function(){
				$('.form-group .add').val("Vietnam");
				if($(this).val() != ""){
					$(this).addClass("has-content");
				}else{
					$(this).removeClass("has-content");
				}
			})
			$(".form-group input,.form-group select").focusout(function(){
				if($(this).val() != ""){
					$(this).addClass("has-content");
				}else{
					$(this).removeClass("has-content");
				}
			})
		},500);
		return false;
	});



</script>
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


@stop()