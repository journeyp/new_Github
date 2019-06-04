<!doctype html>
<html>
	<head>
		<title>삼양식품</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="./images/samyang/favicon.ico">
		<link rel="icon" href="./images/samyang/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no">
		<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
		<link href="./samyang.css" rel="stylesheet">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<!--bxslider-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  		<script type="text/javascript">
  			$(document).ready(function(){
  				/*bxslider*/
  				$('.banner_slide').bxSlider({
  					auto: true,
  					mode: 'fade',
  					pager: true,
  					captions: true, 
  					pagerCustom: '.banner_pager',
  					nextSelector: '#slider-next',
  					prevSelector: '#slider-prev',
  					nextText: '<img src="./images/samyang/btn_slide_next.png" height="78" width="78"/>',
  					prevText: '<img src="./images/samyang/btn_slide_prev.png" height="78" width="78"/>',
  				});
  				$('#idk01').bxSlider({
  					auto: false,
  					pager: true,
  					captions: true, 
  					controls: false,
  					slideWidth: 228,
        			maxSlides: 7,
        			moveSlides: 1,
        			pagerCustom: '.product_pager01',
  				});
  				$('#idk02').bxSlider({
  					auto: false,
  					pager: true,
  					captions: true, 
  					controls: false,
  					slideWidth: 228,
        			maxSlides: 7,
        			moveSlides: 1,
        			pagerCustom: '.product_pager02',
  				});
  				$('#idk03').bxSlider({
  					auto: false,
  					pager: true,
  					captions: true, 
  					controls: false,
  					slideWidth: 228,
        			maxSlides: 7,
        			moveSlides: 1,
        			pagerCustom: '.product_pager03',
  				});
  				$('#idk04').bxSlider({
  					auto: false,
  					pager: true,
  					captions: true, 
  					controls: false,
  					slideWidth: 228,
        			maxSlides: 7,
        			moveSlides: 1,
        			pagerCustom: '.product_pager04',
  				});
  				$('.product_single_inner').bxSlider({
  					auto: true,
  					pager: true,
  					captions: true, 
  					controls: false,
  					pagerCustom: '.product_single_pager',
  				});
  				$('.community_event_slider').bxSlider({
  					auto: true,
  					pager: true,
  					captions: true, 
  					controls: false,
  					pagerCustom: '.community_pager',
  				});
  				/*product_gnb*/
  				$('.product_gnb01 > p').click(function(){
  					$('.product_gnb01 > p > a > img').css({marginTop: '-80px'});
  					$('.product_gnb02 > p > a > img').css({marginTop: '0'});
  					$('.product_gnb03 > p > a > img').css({marginTop: '0'});
  					$('.product_gnb04 > p > a > img').css({marginTop: '0'});
  				});
  				$('.product_gnb02 > p').click(function(){
  					$('.product_gnb01 > p > a > img').css({marginTop: '0'});
  					$('.product_gnb02 > p > a > img').css({marginTop: '-80px'});
  					$('.product_gnb03 > p > a > img').css({marginTop: '0'});
  					$('.product_gnb04 > p > a > img').css({marginTop: '0'});
  				});
  				$('.product_gnb03 > p').click(function(){
  					$('.product_gnb01 > p > a > img').css({marginTop: '0'});
  					$('.product_gnb02 > p > a > img').css({marginTop: '0'});
  					$('.product_gnb03 > p > a > img').css({marginTop: '-80px'});
  					$('.product_gnb04 > p > a > img').css({marginTop: '0'});
  				});
  				$('.product_gnb04 > p').click(function(){
  					$('.product_gnb01 > p > a > img').css({marginTop: '0'});
  					$('.product_gnb02 > p > a > img').css({marginTop: '0'});
  					$('.product_gnb03 > p > a > img').css({marginTop: '0'});
  					$('.product_gnb04 > p > a > img').css({marginTop: '-80px'});
  				});
  				$('.product_gnb li p').click(function(){
  					$('.product_gnb li p').removeClass("active");
  					$(this).addClass("active");
  				});
  			});

  			/*sns_post_open*/
  			function samyangsns(){
				var samyang=document.getElementById("community_sns_open");
				if(samyang.style.display=='none'){
					samyang.style.display='block';
				}
				else{
					samyang.style.display='none';
				}
			}

			/*footer_link_open*/
			function samyangfooter(){
				var samyangfooter=document.getElementById("footer_link_source");
				if(samyangfooter.style.display=='none'){
					samyangfooter.style.display='block';
				}
				else{
					samyangfooter.style.display='none';
				}
			}

			/*layer_popup_youtube*/
			$(function(){
				var embed=$('.layer_popup_inner').html();
				$('.layer_button').on('click', function(){
					var path=$(this).attr('href');
					$('.layer_popup_inner').html(embed);
					$(path).show();
					$('.popup_mask').show();
				})
				$('.layer_popup_close').on('click', function(){
					$(this).parents('#layer_popup').hide();
					$('.popup_mask').hide();
					$('.layer_popup_inner').empty();
				})
				$('.popup_mask').on('click', function(){
					$(this).hide();
					$('#layer_popup').hide();
					$('.layer_popup_inner').empty();
				});
			});
			
			/*quick_menu*/
			$(window).scroll(function(){
				var scrollTop=$(document).scrollTop();
				if(scrollTop < 320){
					scrollTop=320;
				}
				$(".quick_menu").stop();
				$(".quick_menu").animate({"top":scrollTop + 320});
			});

			$(function(){ 
			    $('.quick_top').click(function(){ 
			        $('html, body').animate({scrollTop: 0}, 500); 
			    });
			});
  		</script>
  		<style>
  			/*bxslider*/
			.bx-wrapper {
				box-shadow: 0 0 0px #ccc;
				border: 0px solid #fff;
				background: transparent;
			}
			#slider-prev{
				position: absolute;
				top: 247px;
				left: 50%;
				margin-left: -650px;
			}
			#slider-next{
				position: absolute;
				top: 247px;
				right: 50%;
				margin-right: -650px;
			}
			/*slider_pager*/
			.banner_pager{
				position: absolute;
				bottom: 85px;
				width: 100%;
				text-align: center;
			}
			.banner_pager > a{
				display: inline-block;
				width: 12px;
				height: 12px;
				background: url("./images/samyang/ico_slide_control.png");
			}
			.banner_pager > a.active{
				width: 26px;
				height: 12px;
				background: url("./images/samyang/ico_slide_control2_on.png");
			}
			#product_pager{
				position: absolute;
				bottom: 0px;
				width: 100%;
				text-align: center;
			}
			#product_pager > a{
				display: inline-block;
				width: 12px;
				height: 12px;
				background: url("./images/samyang/ico_slide_control.png");
			}
			#product_pager > a.active{
				width: 26px;
				height: 12px;
				background: url("./images/samyang/ico_slide_control2_on.png");
			}
			.product_single_pager{
				position: absolute;
				top: 40px;
				right: 20px;
			}
			.product_single_pager > a{
				display: inline-block;
				width: 12px;
				height: 12px;
				background: url("./images/samyang/ico_slide_control.png");
			}
			.product_single_pager > a.active{
				width: 12px;
				height: 12px;
				background: url("./images/samyang/ico_slide_control_on.png");
			}
			.community_pager{
				position: absolute;
				top: 40px;
				right: 40px;
			}
			.community_pager > a{
				display: inline-block;
				width: 14px;
				height: 14px;
				background: url("./images/samyang/ico_slide2_control.png");
				margin-right: 3px;
			}
			.community_pager > a.active{
				width: 14px;
				height: 14px;
				background: url("./images/samyang/ico_slide2_control_on.png");
			}
  		</style>
	</head>
	<body>
		<div id="wrap">
			<!--s: layer_popup-->
			<div id="layer_popup">
				<div class="layer_popup">
					<div class="layer_popup_inner">
						<iframe width="907" height="573" src="https://www.youtube.com/embed/3n8Dtth6jGg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<a class="layer_popup_close">
						<img src="./images/samyang/btn_close.png">
					</a>
				</div>
			</div>
			<div class="popup_mask"></div>
			<!--e: layer_popup-->
			<!--s: header-->
			<div id="header">
				<!--s: quick_menu-->
				<div class="quick_menu">
					<div class="quick_menu_inner">
						<ul>
							<li>
								<a href="#">홍보관</a>
							</li>
							<li>
								<a href="#">역사관</a>
							</li>
							<li>
								<a href="#">문의하기</a>
							</li>
						</ul>
						<div class="quick_top">
							<a></a>
						</div>
					</div>
				</div>
				<!--e: quick_menu-->
				<!--s: header_top-->
				<div class="header_top">
					<div class="header_top_main">
						<p>
							행복과 사랑이 넘치는 
							<strong>삼양식품</strong>
							입니다
						</p>
						<div class="header_top_menu">
							<ul class="header_top_sns">
								<li>
									<a href="#">
										<img src="./images/samyang/ico_sns_blog.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/samyang/ico_sns_insta.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/samyang/ico_sns_twitter.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/samyang/ico_sns_facebook.png">
									</a>
								</li>
							</ul>
							<ul class="header_top_link">
								<li>
									<a href="#" id="header_link1">
										<img src="./images/samyang/gnb_shop.gif">
									</a>
								</li>
								<li>
									<a href="#">IR</a>
								</li>
								<li>
									<a href="#">인재채용</a>
								</li>
								<li>
									<a href="#">KOR</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!--e: header_top-->
				<!--s: header_bottom-->
				<div class="header_bottom">
					<h1>
						<a href="#">
							<img src="./images/samyang/logo.png">
						</a>
					</h1>
					<ul class="header_bottom_menu">
						<li class="header_bottom_sub_menu">
							<a href="#">브랜드</a>
							<div class="header_bottom_mini_menu">
								<ul>
									<li>
										<a href="#">삼양라면</a>
									</li>
									<li>
										<a href="#">불닭볶음면</a>
									</li>
									<li>
										<a href="#">짜짜로니</a>
									</li>
									<li>
										<a href="#">별뽀빠이</a>
									</li>
									<li>
										<a href="#">삼양유기농우유</a>
									</li>
									<li>
										<a href="#">제품 전체보기</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="header_bottom_sub_menu">
							<a href="#">삼양패밀리</a>
							<div class="header_bottom_mini_menu">
								<ul>
									<li>
										<a href="#">삼양목장</a>
									</li>
									<li>
										<a href="#">호면당</a>
									</li>
									<li>
										<a href="#">삼양냉동</a>
									</li>
									<li>
										<a href="#">삼양제주우유</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="header_bottom_sub_menu">
							<a href="#">홍보관</a>
							<div class="header_bottom_mini_menu">
								<ul>
									<li>
										<a href="#">보도자료</a>
									</li>
									<li>
										<a href="#">홍보영상</a>
									</li>
									<li>
										<a href="#">광고영상</a>
									</li>
									<li>
										<a href="#">호치와 친구들</a>
									</li>
									<li>
										<a href="#">삼양역사관</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="header_bottom_sub_menu">
							<a href="#">커뮤니티</a>
							<div class="header_bottom_mini_menu">
								<ul>
									<li>
										<a href="#">공지사항</a>
									</li>
									<li>
										<a href="#">이벤트</a>
									</li>
									<li>
										<a href="#">FAQ</a>
									</li>
									<li>
										<a href="#">고객문의</a>
									</li>
									<li>
										<a href="#">삼양 사연</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="header_bottom_sub_menu">
							<a href="#">회사소개</a>
							<div class="header_bottom_mini_menu">
								<ul>
									<li>
										<a href="#">삼양식품</a>
									</li>
									<li>
										<a href="#">계열사</a>
									</li>
									<li>
										<a href="#">공장</a>
									</li>
									<li>
										<a href="#">사회공헌</a>
									</li>
									<li>
										<a href="#">오시는길</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<!--e: header_bottom-->
			</div>
			<!--e: header-->
			<!--s: contents-->
			<div id="contents">
				<!--s: banner-->
				<div class="banner">
					<ul class="banner_slide">
						<li>
							<a href="#"></a>
						</li>
						<li>
							<a href="#"></a>
						</li>
						<li>
							<a href="#"></a>
						</li>
						<li>
							<a href="#"></a>
						</li>
						<li>
							<a href="#"></a>
						</li>
						<li>
							<a href="#"></a>
						</li>
					</ul>
					<p class="banner_prevnext">
						<span id="slider-prev"></span>
						<span id="slider-next"></span>
					</p>
					<div class="banner_pager" >
						<a data-slide-index="0" href="#"></a>
						<a data-slide-index="1" href="#"></a>
						<a data-slide-index="2" href="#"></a>
						<a data-slide-index="3" href="#"></a>
						<a data-slide-index="4" href="#"></a>
						<a data-slide-index="5" href="#"></a>
					</div>
				</div>
				<!--e: banner-->
				<!--s: product-->
				<div class="product">
					<div class="product_main">
						<h3>
							삼양 제품소개
							<span>Delicious Together!</span>
						</h3>
						<p>
							다양한 제품을<br>
							한곳에서 즐기세요!
						</p>
						<div class="product_menu">
							<ul class="product_gnb">
								<li>
									<label for="tab-1" class="product_gnb01">
										<p class="product_gnb_p active">
											라면류
											<a>
												<img src="./images/samyang/product_tab1.png">
											</a>
										</p>
									</label>
								</li>
								<li>
									<label for="tab-2" class="product_gnb02">
										<p class="product_gnb_p active">
											스낵류
											<a>
												<img src="./images/samyang/product_tab2.png">
											</a>
										</p>
									</label>
								</li>
								<li>
									<label for="tab-3" class="product_gnb03">
										<p class="product_gnb_p active">
											유제품류
											<a>
												<img src="./images/samyang/product_tab3.png">
											</a>
										</p>
									</label>
								</li>
								<li>
									<label for="tab-4" class="product_gnb04">
										<p class="product_gnb_p active">
											장/소스류
											<a>
												<img src="./images/samyang/product_tab4.png">
											</a>
										</p>
									</label>
								</li>
							</ul>
						</div>
						<!--s: idk01-->
						<div class="product_list">
							<div class="product_list_set">
								<input id="tab-1" name="tab" type="radio" class="tab-input" checked>
								<div class="tab-item">
									<ul class="idk" id="idk01">
										<li>
											<a href="#">
												<img src="./images/samyang/20190429085903701042.png">
												청정완도 미역이 듬뿍
												<strong>미역새콤비빔면</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190321141855884001.png">
												가장 작지만 가장 화끈한 매운맛
												<strong>핵불닭볶음면 mini</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190304095254522237.png">
												쫄깃! 바삭! 매콤!
												<strong>튀김쫄면</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190128103052757208.png">
												매콤바삭한 튀김이 가득!
												<strong>튀김칼국수</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20160830115314101005.png">
												초강력 화끈한 매운맛!
												<strong>불닭볶음면</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20180913135237967037.png">
												진한 햄맛이 느껴지는 원조의 맛
												<strong>삼양라면</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20171016135938827562.png">
												시원한 해물맛이 느껴지는
												<strong>나가사끼짬뽕</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20171016140606521564.png">
												라면보다 더 맛있는라면
												<strong>맛있는 라면</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20181214171009729182.png">
												풍부해진 짜장의 맛
												<strong>짜짜로니</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20181031094039940078.png">
												매콤한 해물맛의 볶음라면
												<strong>간짬뽕</strong>
											</a>
										</li>
									</ul>
									<div class="product_pager01" id="product_pager">
										<a data-slide-index="0" href="#"></a>
										<a data-slide-index="1" href="#"></a>
										<a data-slide-index="2" href="#"></a>
										<a data-slide-index="3" href="#"></a>
									</div>
								</div>
							</div>
							<!--e: idk01-->
							<!--s: idk02-->
							<div class="product_list_set">
								<input id="tab-2" name="tab" type="radio" class="tab-input">
								<div class="tab-item">
									<ul class="idk" id="idk02">
										<li>
											<a href="#">
												<img src="./images/samyang/20190425111936533031.png">
												핵불닭소스와 함께 즐기는
												<strong>훈제란</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190425111359612027.png">
												핵불닭소스와 함께 즐기는
												<strong>반숙란</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190404090904964039.png">
												더 강렬한 매운맛!
												<strong>핵불닭떡볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190313104103224004.png">
												벗어날 수 없는 단짠의 매력
												<strong>프렌즈짱</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190118145631325203.png">
												불닭과 짜장으로 매콤달콤하게!
												<strong>짜장불닭라볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190118142514140199.png">
												불닭과 진한 크림으로 부드럽게!
												<strong>까르보불닭라볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190118142000884195.png">
												오리지널 불닭으로 더 화끈하게!
												<strong>불닭라볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20181023093037781067.png">
												매콤한 불닭과 부드러운 크림의 조화
												<strong>까르보 불닭떡볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20181023092404449063.png">
												간편하게 즐기는 화끈한 매운맛 떡볶이
												<strong>불닭떡볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20180827085229516016.png">
												부드럽고 달콤한 초코 카라멜 맛 스낵
												<strong>프렌즈밥</strong>
											</a>
										</li>
									</ul>
									<div class="product_pager02" id="product_pager">
										<a data-slide-index="0" href="#"></a>
										<a data-slide-index="1" href="#"></a>
										<a data-slide-index="2" href="#"></a>
										<a data-slide-index="3" href="#"></a>
									</div>
								</div>
							</div>
							<!--e: idk02-->
							<!--s: idk03-->
							<div class="product_list_set">
								<input id="tab-3" name="tab" type="radio" class="tab-input">
								<div class="tab-item">
									<ul class="idk" id="idk03">
										<li>
											<a href="#">
												<img src="./images/samyang/20181206180446326172.png">
												핵불닭소스와 함께 즐기는
												<strong>훈제란</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20181206180208893168.png">
												핵불닭소스와 함께 즐기는
												<strong>반숙란</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20160903155804322005.png">
												더 강렬한 매운맛!
												<strong>핵불닭떡볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190424142947367015.png">
												벗어날 수 없는 단짠의 매력
												<strong>프렌즈짱</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20181121170741534117.png">
												불닭과 짜장으로 매콤달콤하게!
												<strong>짜장불닭라볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20181121170134517113.png">
												불닭과 진한 크림으로 부드럽게!
												<strong>까르보불닭라볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20180605105016093135.png">
												오리지널 불닭으로 더 화끈하게!
												<strong>불닭라볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20160903173521570037.png">
												매콤한 불닭과 부드러운 크림의 조화
												<strong>까르보 불닭떡볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20160903172749645029.png">
												간편하게 즐기는 화끈한 매운맛 떡볶이
												<strong>불닭떡볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20160903171049782025.png">
												부드럽고 달콤한 초코 카라멜 맛 스낵
												<strong>프렌즈밥</strong>
											</a>
										</li>
									</ul>
									<div class="product_pager03" id="product_pager">
										<a data-slide-index="0" href="#"></a>
										<a data-slide-index="1" href="#"></a>
										<a data-slide-index="2" href="#"></a>
										<a data-slide-index="3" href="#"></a>
									</div>
								</div>
							</div>
							<!--e: idk03-->
							<!--s: idk04-->
							<div class="product_list_set">
								<input id="tab-4" name="tab" type="radio" class="tab-input">
								<div class="tab-item">
									<ul class="idk" id="idk04">
										<li>
											<a href="#">
												<img src="./images/samyang/20190401172510740029.png">
												핵불닭소스와 함께 즐기는
												<strong>훈제란</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190401171428851021.png">
												핵불닭소스와 함께 즐기는
												<strong>반숙란</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20190516131800669058.png">
												더 강렬한 매운맛!
												<strong>핵불닭떡볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20170607180427183102.png">
												벗어날 수 없는 단짠의 매력
												<strong>프렌즈짱</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20160906105615292037.png">
												불닭과 짜장으로 매콤달콤하게!
												<strong>짜장불닭라볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20170607180453584104.png">
												불닭과 진한 크림으로 부드럽게!
												<strong>까르보불닭라볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20170607180752667106.png">
												오리지널 불닭으로 더 화끈하게!
												<strong>불닭라볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20170607180835770108.png">
												매콤한 불닭과 부드러운 크림의 조화
												<strong>까르보 불닭떡볶이</strong>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/samyang/20160906104042307021.png">
												간편하게 즐기는 화끈한 매운맛 떡볶이
												<strong>불닭떡볶이</strong>
											</a>
										</li>
									</ul>
									<div class="product_pager04" id="product_pager">
										<a data-slide-index="0" href="#"></a>
										<a data-slide-index="1" href="#"></a>
										<a data-slide-index="2" href="#"></a>
									</div>
								</div>
							</div>
							<!--e: idk04-->
						</div>
						<!--s: product_single-->
						<div class="product_single">
							<ul class="product_single_inner">
								<li>
									<a href="#">
										<img src="./images/samyang/20190429085903701042.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/samyang/20190321141855884001.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/samyang/20190304095254522237.png">
									</a>
								</li>
							</ul>
							<div class="product_single_pager" >
								<a data-slide-index="0" href="#"></a>
								<a data-slide-index="1" href="#"></a>
								<a data-slide-index="2" href="#"></a>
							</div>
						</div>
						<!--e: product_single-->
					</div>
				</div>
				<!--e: product-->
				<!--s: farm-->
				<div class="farm">
					<div class="farm_inner">
						<h3>
							삼양 패밀리
							<span>삼양식품의 관계·계열사를 소개합니다.</span>
						</h3>
						<div class="farm_set">
							<div class="farm_set01">
								<div class="farm_set011">
									<div class="farm_title" style="color: #fff; font-size: 28px;">대관령 삼양 목장</div>
									<p>
										600만평의 광할한 대지<br>
										푸르른 대관령 무공해 천연 목장
									</p>
									<a href="#">
										<img src="./images/samyang/btn_more_fam01.png">
									</a>
								</div>
							</div>
							<div class="farm_set02">
								<div class="farm_set021">
									<div class="farm_title">삼양 냉동</div>
									<p>
										맛에 간편함을 더하다
									</p>
									<a href="#">
										<img src="./images/samyang/btn_more_fam02.png">
									</a>
								</div>
							</div>
							<div class="farm_set03">
								<div class="farm_set031">
									<div class="farm_title">호면당</div>
									<p>
										품격있는<br>
										프리미엄 누들 하우스
									</p>
									<a href="#">
										<img src="./images/samyang/btn_more_fam03.png">
									</a>
								</div>
								<div class="farm_set032">
									<div class="farm_title">삼양 제주 우유</div>
									<p>
										자연에 가장 가까운 맛!
									</p>
									<a href="#">
										<img style="margin-top: 42px;" src="./images/samyang/btn_more_fam04.png">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--e: farm-->
				<!--s: community-->
				<div class="community">
					<div class="community_inner">
						<h3>
							삼양 커뮤니티
							<span>삼양식품은 여러분과 함께 맛있는 세상을 만들어갑니다.</span>
						</h3>
						<ul class="community_sns_set">
							<li>
								<a href="#">
									<img src="./images/samyang/ico_facebook.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/samyang/ico_insta.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/samyang/ico_blog.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/samyang/ico_twitter.png">
								</a>
							</li>
						</ul>
						<div class="community_box">
							<div class="community_box01">
								<div class="community_sns">
									<div class="community_sns_inner">
										<div>
											<img src="./images/samyang/ico_facebook.png">
										</div>
										<p>
											<a href="#">
												#EVENT 여러분..♥ 중독성 강한 미역새콤비빔면 영상 좀 보세요~ 영상보고 친구 태그..
											</a>
										</p>
										<span>2019.06.03</span>
									</div>
									<ul class="community_sns_open" id="community_sns_open">
										<li>
											<div>
												<img src="./images/samyang/ico_facebook.png">
											</div>
											<p>
												<a href="#">
													가장 중요한 금은? 퇴근이 얼마 남지 않은 바로 지금! 🔥불금맞이🔥 삼양지기가 준비한..
												</a>
											</p>
											<span>2019.05.31</span>
										</li>
										<li>
											<div>
												<img src="./images/samyang/ico_facebook.png">
											</div>
											<p>
												<a href="#">
													행복은 멀리 있는 것이 아니야.. 이따 퇴근 후 먹을 열무비빔면에 있는것!! ๑❤‿❤๑..
												</a>
											</p>
											<span>2019.05.30</span>
										</li>
									</ul>
									<a href="javascript:samyangsns();" class="community_sns_click">
										<img src="./images/samyang/btn_more_sns.gif">
									</a>
								</div>
								<div class="community_event">
									<div class="community_event_inner">
										<ul class="community_event_slider">
											<li>
												<a href="#">
													<img src="./images/samyang/20190520144241590070.jpg">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="./images/samyang/20190320152848071009.jpg">
												</a>
											</li>
										</ul>
										<div class="community_pager" >
											<a data-slide-index="0" href="#"></a>
											<a data-slide-index="1" href="#"></a>
										</div>
									</div>
								</div>
							</div>
							<div class="community_box02">
								<div class="community_video">
									<a href="#layer_popup" class="layer_button">
										<img src="./images/samyang/main_video_thumb2.jpg">
									</a>
								</div>
								<div class="community_story">
									<div class="community_title">삼양 사연</div>
									<p>
										삼양식품과 함께한<br>
										여러분의 다양한 사연을 기다립니다.
									</p>
									<a href="#">
										<img src="./images/samyang/btn_more_comm01.png">
									</a>
								</div>
							</div>
							<div class="community_box03">
								<div class="community_recipe">
									<div class="community_title">맛있는 나눔</div>
									<p>모두가 행복한 맛있는 세상</p>
									<a href="#">
										<img src="./images/samyang/btn_more_comm03.png">
									</a>
								</div>
								<div class="community_notice">
									<div class="community_title" style="color: #333;">공지사항</div>
									<p>삼양식품 원주공장 견학 프로그램을 진행합니다.</p>
									<span>2019.04.26</span>
									<a href="#">
										<img src="./images/samyang/btn_notice.png">
									</a>
								</div>
								<div class="community_shop">
									<div class="community_title">삼양 맛샵 오픈</div>
									<p>삼양식품의 다양한 제품을 만나보세요.</p>
									<a href="#">
										<img src="./images/samyang/btn_more_comm02.png">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--e: community-->	
			</div>
			<!--e: contents-->
			<!--s: footer-->
			<div id="footer">
				<div class="footer">
					<p class="footer_logo">
						<img src="./images/samyang/logo2.png">
					</p>
					<div class="footer_left">
						<ul>
							<li>
								<a href="#">회사소개</a>
							</li>
							<li>
								<a href="#">고객지원</a>
							</li>
							<li>
								<a href="#">IR</a>
							</li>
							<li>
								<a href="#">인재채용</a>
							</li>
							<li>
								<a href="#">찾아오시는 길</a>
							</li>
							<li>
								<a href="#">개인정보처리방침</a>
							</li>
						</ul>
						<div class="address">
							서울특별시 성북구 오패산로3길 104(하월곡동)
							<span>Tel. 02-940-3000</span>
							<span>Tel. 02-942-4350</span><br>
							※ 고객지원센터: 080-940-3333(무료상담전화)<br>
							상담시간(평일) 오전9시-오후6시[점심시간: 오후12시-1시]
						</div>
						<p>Copyright © 2016 Samyangfoods. All rights reserved.</p>
					</div>
					<div class="footer_right">
						<ul class="footer_sns">
							<li>
								<a href="#">
									<img src="./images/samyang/ico_sns_blog2.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/samyang/ico_sns_insta2.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/samyang/ico_sns_twitter2.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/samyang/ico_sns_facebook2.png">
								</a>
							</li>
						</ul>
						<div class="footer_link">
							<a href="javascript:samyangfooter();" class="footer_link_button">Family Site</a>
							<ul class="footer_link_source" id="footer_link_source">
								<li>
									<a href="">삼양맛샵</a>
								</li>
								<li>
									<a href="">삼양목장</a>
								</li>
								<li>
									<a href="">호면당</a>
								</li>
								<li>
									<a href="">삼양냉동</a>
								</li>
								<li>
									<a href="">제주우유</a>
								</li>
							</ul>
							<p>
								<img src="./images/samyang/award_2017.jpg">
							</p>
						</div>
					</div>
				</div>
			</div>
			<!--e: footer-->
		</div>
	</body>
</html>