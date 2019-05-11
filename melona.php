<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="./melona.css" rel="stylesheet">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

		<!--slick-->
		<script type="text/javascript" src="./slick-1.8.1-m/slick/slick.js"></script>
		<link rel="stylesheet" type="text/css" href="./slick-1.8.1-m/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="./slick-1.8.1-m/slick/slick-theme.css">
		
		<!--aos-->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		
		<script>
			$(document).ready(function(){
				$('.slider_parents').slick({					
  					centerMode:true,
    				slidesToShow: 1,
    				slidesToScroll: 1,
    				dots: true,
    				infinite: true,
    				autoplay: true,
  					autoplaySpeed: 4000,
    				cssEase: 'linear',
    				variableWidth: true,
    				variableHeight: true,
  				});
			});

			$(window).scroll(function(){
				if($(window).scrollTop() > 785){
					$('.menu2').slideDown('0');
				}
				else if($(window).scrollTop() < 785){
					$('.menu2').slideUp('0');
				}
			});

			$(document).ready(function(){
				$('.catalog_gnb li p').click(function(){
					$('.catalog_gnb li p').removeClass("active");
					$(this).addClass("active");
				});
				$('.catalog_gnb01').click(function(){
					$('.image').animate({left: '360px'});
				});
				$('.catalog_gnb02').click(function(){
					$('.image').animate({left: '486px'});
				});
				$('.catalog_gnb03').click(function(){
					$('.image').animate({left: '675px'});
				});

			});

			$(document).ready(function(){
				AOS.init({
					duration: 1200,
				});
			});

			$(document).ready(function(){
				$(window).scroll(function(){
					if($(this).scrollTop() > 200){
						$('.top_scroll').fadeIn();
					}
					else{
						$('.top_scroll').fadeOut();
					}
				});
				$('.top_scroll').click(function(){
					$('html, body').animate({scrollTop: 0}, 1000);
					return false;
				});
			});

		</script>
		<style>
			/*button*/
			.slick-dots li button:before{
				content: '';
				background: url("./images/dots.png");
				background-repeat: no-repeat;
				opacity: 1;
				position: absolute;
				top: 20px;
				left: 5px;
			}

			.slick-dots li.slick-active button:before{
				background: url("./images/dots_on.png");
				background-repeat: no-repeat;
				opacity: 1;
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<!--s: top-->
			<div class="top">
				<h1 class="mini_logo">
					<img src="./images/logo_mini.png">
				</h1>
				<ul class="top_menu">
					<li><a href="#"><p>JOIN</p></a></li>
					<li><a href="#"><p>LOGIN</p></a></li>
					<li><a href="#"><p>MY PAGE</p></a></li>
					<li><a href="#"><p>FAVORITE</p></a></li>
					<li><a href="#"><p>CART</p></a></li>
					<li>
						<img src="./images/btn_menu.png">
						<ul class="mini_menu" >
							<img src="./images/arrow_subnav.png">
							<li><a href="#"><p>자주 묻는 질문</p></a></li>
							<li><a href="#"><p>메일 수신 요청</p></a></li>
							<li><a href="#"><p>문의하기</p></a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!--e: top-->

			<!--s: logo-->
			<div class="logo">
				<h1><img src="./images/logo.png"></h1>
			</div>
			<!--e: logo-->

			<!--s: slider-->
			<div class="slider">
				<div class="slider_parents">
					<div class="slider_son">
						<img src="./images/cname_20190109101151.png">
					</div>
					<div class="slider_son">
						<img src="./images/cname_20181219152815.jpg">
					</div>
					<div class="slider_son">
						<img src="./images/cname_20181031120841.jpg">
					</div>
				</div>
			</div>
			<!--e: slider-->

			<!--s: menu-->
			<div class="menu">
				<div class="sub_menu">
					<ul class="gnb">
						<li id="underline"><a href="#"><p>NEWS & STORE BLOG</p></a></li>
						<li id="underline"><a href="#"><p>STORE LIST</p></a></li>
						<li id="underline"><a href="#"><p>CHARACTER</p></a></li>
						<li id="underline"><a href="#"><p>PLAZA PASS</p></a></li>
					</ul>
					<ul class="sns_set">
						<li><a href="#"><p><img src="./images/ico_fb.png"></p></a></li>
						<li><a href="#"><p><img src="./images/ico_tw.png"></p></a></li>
						<li><a href="#"><p><img src="./images/ico_in.png"></p></a></li>
					</ul>
				</div>
			</div>
			<!--e: menu-->

			<!--s: menu2-->
			<div class="menu2">
				<div class="sub_menu2">
					<h1>
						<img src="./images/logo.png">
					</h1>
					<ul class="gnb2">
						<li id="underline2"><a href="#"><p>NEWS & STORE BLOG</p></a></li>
						<li id="underline2"><a href="#"><p>STORE LIST</p></a></li>
						<li id="underline2"><a href="#"><p>CHARACTER</p></a></li>
						<li id="underline2"><a href="#"><p>PLAZA PASS</p></a></li>
					</ul>
					<ul class="sns_set2">
						<li><a href="#"><p><img src="./images/ico_fb.png"></p></a></li>
						<li><a href="#"><p><img src="./images/ico_tw.png"></p></a></li>
						<li><a href="#"><p><img src="./images/ico_in.png"></p></a></li>
					</ul>
				</div>
			</div>
			<!--e: menu2-->
			
			<!--s: contents-->
			<div class="contents">
				<h1 class="contents_logo">CONTENTS</h1>
				<div class="little_contents">
					<ul>
						<li>
							<a href="#">
								<img src="./images/cname_20171101170951.jpg">
								<div class="text-box">
									<p class="title">케어베어 진단</p>
									<p class="txt">당신에게 딱 맞는 케어베어를 찾아드립니다!</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/btt_bunner_1706.jpg">
								<div class="text-box">
									<p class="title">Beauty Tips</p>
									<p class="txt">'美'에 관한 고민들을 전문가들이 답해줍니다</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/ip_logo.jpg">
								<div class="text-box">
									<p class="title">in private</p>
									<p class="txt">귀여움과 즐거움을 플러스 시킨 <br> 라이프 스타일 브랜드</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!--e: contents-->

			<!--s: catalog-->
			<div class="catalog">
				<div class="catalog_menu">
					<ul class="catalog_gnb">
						<li>
							<label for="tab-1" class="catalog_gnb01">
								<p class="catalog_gnb_p active">
									<a>
										ALL
									</a>
								</p>
							</label>
						</li>
						<li>
							<label for="tab-2" class="catalog_gnb02">
								<p class="catalog_gnb_p active">
									<a>
										NEWS
									</a>
								</p>
							</label>
						</li>
						<li>
							<label for="tab-3" class="catalog_gnb03">
								<p class="catalog_gnb_p active">
									<a>
										STORE BLOG
									</a>
								</p>
							</label>
						</li>
					</ul>
					<span class="image"><img src="./images/arrow01.png"></span>
				</div>				

				<div class="catalog_gallery">
					<div class="gallery">
						<input id="tab-1" name="tab" type="radio" class="tab-input" checked>
						<div class="tab-item">
							<ul class="idk" id="idk01">
								<li>
									<a href="#">
										<img src="./images/idk01/20190123150755_app_onl_0123_th.jpg">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk01/cname_20190130211539.jpg">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk01/cname_20190130210759.jpg">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk01/app_yhl_181206.jpg">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk01/cname_20190130201137.jpg">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk01/20190123201139_app.jpg">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk01/app_odw_0124_th.jpg">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk01/app_pk4_0123.jpg">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk01/cname_20190121135511.jpg">
									</a>
								</li>
							</ul>
							<h1 id="idk1_more">
								<div id="more1" onclick="location.href='http://blog.naver.com/'">
								<div id="more2" onclick="window.open('http://blog.naver.com')">
									<a>MORE</a>
								</div>
							</h1>
						</div>
					</div>

					<div class="gallery">
						<input id="tab-2" name="tab" type="radio" class="tab-input">
						<div class="tab-item">
							<ul class="idk" id="idk02">
								<li>
									<a href="#">
										<div class="idk_new">
											<p>
												NEW
											</p>
										</div>
										<img src="./images/idk02/20190123201139_app.jpg">
										<p class="idk_topics">
											BEAUTY TIPS
										</p>
										<p class="idk_title">
											8/17(금) MELONA에서 인기 화장품이 "Cat's ISSUE"와 협업!
										</p>
										<p class="idk_date">
											2018.08.17
										</p>
									</a>
								</li>								
								<li>
									<a href="#">
										<div class="idk_new">
											<p>
												NEW
											</p>
										</div>
										<img src="./images/idk02/20190123150755_app_onl_0123_th.jpg">
										<p class="idk_topics">
											BEAUTY TIPS
										</p>
										<p class="idk_title">
											8/17(FRI) ettusais x PEANUTS x in private 파우치 선물
										</p>
										<p class="idk_date">
											2018.08.17
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk02/cname_20190121135511.jpg">
										<p class="idk_topics">
											NEW IN
										</p>
										<p class="idk_title">
											도리토스 와사비 어렌지 레시피♪
										</p>
										<p class="idk_date">
											2018.08.10
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk02/20190118134359_app.jpg">
										<p class="idk_title">
											【칸사이 4개 지점 한정 이벤트】HARIBO를 구매후<br>
											슬롯머신에 도전해보자!
										</p>
										<p class="idk_date">
											2018.08.09
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk02/cname_20190123121349.jpg">
										<p class="idk_topics">
											NEW IN
										</p>
										<p class="idk_title">
											"하바네로 칠리" 칩스!
										</p>
										<p class="idk_date">
											2018.08.09
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/idk02/20190110145611_app.jpg">
										<p class="idk_topics">
											NEW IN
										</p>
										<p class="idk_title">
											한국에서 온 맛있는 아몬드♪
										</p>
										<p class="idk_date">
											2018.08.07
										</p>
									</a>
								</li>
							</ul>
							<h1 id="idk2_more">
								<div id="more2" onclick="window.open('http://blog.naver.com')">
									<a>MORE</a>
								</div>
							</h1>
						</div>
					</div>

					<div class="gallery">
						<input id="tab-3" name="tab" type="radio" class="tab-input">
						<div class="tab-item">
							<ul class="idk" id="idk03">
								<li>
									<a href="#">
										<div class="idk_new">
											<p>
												NEW
											</p>
										</div>
										<img src="./images/cname_20180817195638.jpg">
										<p class="idk_topics">
											MELONA 서울 신촌점
										</p>
										<p class="idk_title">
											8/22(수) 눈썹 연장 무료 시착 이벤트 D.UP
										</p>
										<p class="idk_date">
											2018.08.17
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="idk_new">
											<p>
												NEW
											</p>
										</div>
										<img src="./images/cname_20180817194812.jpg">
										<p class="idk_topics">
											MELONA 경기도 의정부점
										</p>
										<p class="idk_title">
											여름 추천 H2COCO MELONWATER 시음회 개체
										</p>
										<p class="idk_date">
											2018.08.17
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="idk_new">
											<p>
												NEW
											</p>
										</div>
										<img src="./images/cname_20180817171346.jpg">
										<p class="idk_topics">
											MELONA 서울 코엑스점
										</p>
										<p class="idk_title">
											먹을 수 있는 개구리?! 사실은 달고 맛있는 풋사과 맛~♪
										</p>
										<p class="idk_date">
											2018.08.17
										</p>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="idk_new">
											<p>
												NEW
											</p>
										</div>
										<img src="./images/cname_20180817170246.jpg">
										<p class="idk_topics">
											MELONA 서울 명동점
										</p>
										<p class="idk_title">
											MELONA 명동점으로부터 '이번달 선물 안내'
										</p>
										<p class="idk_date">
											2018.08.17
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="idk_new">
											<p>
												NEW
											</p>
										</div>
										<img src="./images/cname_20180807191940.jpg">
										<p class="idk_topics">
											MELONA 대구 
										</p>
										<p class="idk_title">
											오리지널 패키지 레르 드 사봉을 만들어보자
										</p>
										<p class="idk_date">
											2018.08.07
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="idk_new">
											<p>
												NEW
											</p>
										</div>
										<img src="./images/cname_20180816195745.jpg">
										<p class="idk_topics">
											MELONA 
										</p>
										<p class="idk_title">
											다이어트 드링크 'BONOLAT' 시음회 알림
										</p>
										<p class="idk_date">
											2018.08.16
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="idk_new">
											<p>
												NEW
											</p>
										</div>
										<img src="./images/pk4_0817_3.jpg">
										<p class="idk_topics">
											MELONA 부산 서면점
										</p>
										<p class="idk_title">
											8/17(금) 기간 한정 이벤트 'BAGGUPOP UP SHOP' 알림
										</p>
										<p class="idk_date">
											2018.08.16
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="idk_new">
											<p>
												NEW
											</p>
										</div>
										<img src="./images/cname_20180809203704.jpg">
										<p class="idk_topics">
											MELONA 서울 압구정점
										</p>
										<p class="idk_title">
											악세사리 브랜드 'JUNO' 기간한정판매
										</p>
										<p class="idk_date">
											2018.08.15
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/yhl_180810_ec.jpg">
										<p class="idk_topics">
											MELONA 서울 압구정점
										</p>
										<p class="idk_title">
											8/11(토)~9/9(일) MELONA 압구정점에서 캠페인을 개최
										</p>
										<p class="idk_date">
											2018.08.15
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/cname_20180809193142.jpg">
										<p class="idk_topics">
											MELONA 서울 압구정점
										</p>
										<p class="idk_title">
											물로 쉽게 만들수 있는 소스라임 체험 이벤트 실시!
										</p>
										<p class="idk_date">
											2018.08.11
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/cname_20180810205915.jpg">
										<p class="idk_topics">
											MELONA 서울 압구정점
										</p>
										<p class="idk_title">
											신제품 도리토스 와사비 시식회 가자!
										</p>
										<p class="idk_date">
											2018.08.10
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/cname_20180810201833.jpg">
										<p class="idk_topics">
											MELONA 서울 압구정점
										</p>
										<p class="idk_title">
											8/11(토) HARIBO 캔디케밥 만들기!
										</p>
										<p class="idk_date">
											2018.08.10
										</p>
									</a>
								</li>
							</ul>
							<h1 id="idk3_more">
								<div id="more3" onclick="window.open('http://www.naver.com')">
									<a>MORE</a>
								</div>
							</h1>							
						</div>
					</div>

				</div>
				<div class="image_up" >
					<h1>MELONA ONLINE STORE</h1>
					<ul class="list">
						<li class="product">
							<img src="./images/image_up/20180725101229_hb.jpg">
							<p>Health & Beauty</p>
						</li>
						<li class="product">
							<img src="./images/image_up/20180816154353_make.jpg">
							<p>Makeup</p>
						</li>
						<li class="product">
							<img src="./images/image_up/20180816154406_fashion.jpg">
							<p>Fashion</p>
						</li>
						<li class="product">
							<img src="./images/image_up/20180816154418_home.jpg">
							<p>Home</p>
						</li>
						<li class="product">
							<img src="./images/image_up/20180816154435_food.jpg">
							<p>Sweet & Driink</p>
						</li>
						<li class="product">
							<img src="./images/image_up/20180816154455_chara.jpg">
							<p>haracter & Toy</p>
						</li>
						<li class="product">
							<img src="./images/image_up/20180816154514_stationery.jpg">
							<p>Stationery</p>
						</li>
						<li class="product">
							<img src="./images/image_up/20180510101422_new.jpg">
							<p>New</p>
						</li>
						<li class="product">
							<img src="./images/image_up/limited.jpg">
							<p>New</p>
						</li>
					</ul>
				</div>
			</div>
			<!--e: catalog-->

			<!--s: aos-->
			<div class="character">
				<div class="character_main">
					<h1>CHARACTER</h1>
					<div class="character_animation">
						<div class="suzy" data-aos="fade-up">
							<img src="./images/character/chara-suzy01.png">
						</div>
						<div class="suzy02" data-aos="fade-up" data-aos-delay="600">
							<img src="./images/character/chara-suzy02.png">
						</div>
						<div class="suzy_heart01" data-aos="fade-left" data-aos-delay="600">
							<img src="./images/character/chara-suzy-heart02.png">
						</div>
						<div class="suzy03" data-aos="fade-up" data-aos-delay="1200">
							<img src="./images/character/chara-suzy03.png">
						</div>
						<div class="suzy_heart02" data-aos="fade-right" data-aos-delay="1200">
							<img src="./images/character/chara-suzy-heart01.png">
						</div>
						<div class="suzy04" data-aos="fade-up" data-aos-delay="1800">
							<img src="./images/character/chara-suzy04.png">
						</div>
						<div class="suzy05" data-aos="fade-up" data-aos-delay="2400">
							<img src="./images/character/chara-suzy05.png">
						</div>
						<div class="suzy_logo" data-aos="zoom-in-up" data-aos-delay="3000">
							<img src="./images/character/chara-suzy-logo.png">
						</div>
					</div>
				</div>

				<div class="character_introduce">
					<ul class="introduce">
						<li>
							<a href="#">
								<img src="./images/character/bp_180810_th.jpg">
								<p class="char_topics">
									BARBAPAPA
								</p>
								<p class="char_title">
									Cafe Barbapapa 명동점에서 케이크 세트가 등장
								</p>
								<p class="char_date">
									2018.08.10
								</p>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/character/wl_1806730_th.jpg">
								<p class="char_topics">
									Wally
								</p>
								<p class="char_title">
									종로점에서 '탄생 30주년 기념 윌리를 찾아라! 展' 개최!
								</p>
								<p class="char_date">
									2018.07.30
								</p>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/character/bp_180628_th.jpg">
								<p class="char_topics">
									BARBAPAPA
								</p>
								<p class="char_title">
									ceci 8월호 'MILKFED 특집' 여름 네일 세트와 바바파파 파우치가 나온다♪
								</p>
								<p class="char_date">
									2018.06.29
								</p>
							</a>
						</li>
					</ul>
				</div>

				<div class="footer" >
					<div class="footer_blue">
						<div class="footer_green">
							<div class="footer_brand">
								<h1>
									<img src="./images/melonapng.png">
								</h1>
								<ul class="footer_brand_cat">
									<li>
										<a href="#">
											<p>STORE LIST</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>MELONA BGM</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>TOPICS&STORE BLOG</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>GIFT CART</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>MELONA PASS</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>MAIL MAGAZINE</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>CHARACTER</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>WRAPPING</p>
										</a>
									</li>
								</ul>
								<div class="footer_sns">
									<p>
										FOLLOW US
									</p>
									<ul>
										<li>
											<a href="#">
												<img src="./images/ico_fb02.png">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/ico_tw02.png">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="./images/ico_tw02.png">
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="footer_cmn">
								<ul class="footer_cmn_one" >
									<h1>
										ONLINE STORE
									</h1>
									<li>
										<a href="#">
											<p>Health &  Beauty</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>Make-up</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>Fashion</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>HOME</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>Sweets & Drink</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>Character & Toy</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>Stationery</p>
										</a>
									</li>
								</ul>
								<ul class="footer_cmn_two" >
									<h1>
										쇼핑 가이드
									</h1>
									<li>
										<a href="#">
											<p>MELONA PASS 회원</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>회원 발급 방법</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>주문 방법</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>결제 방법</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>배송·배송료</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>교환·반품</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>자주 묻는 질문</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div>
					<a class="top_scroll">
						<img src="./images/btn_pagetop.png">
					</a>
				</div>
			</div>
			<!--e: aos-->
		</div>
	</body>
</html>