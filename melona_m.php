<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="./melona_m.css" rel="stylesheet">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

		<!--slick-->
		<script type="text/javascript" src="./slick-1.8.1-m/slick/slick.js"></script>
		<link rel="stylesheet" type="text/css" href="./slick-1.8.1-m/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="./slick-1.8.1-m/slick/slick-theme.css">

		<script>
			$(document).ready(function(){
				$("#menu_img").click(function(){
					$("#none_menu").toggle("slide");
				});

				$("#close_x").click(function(){
					$("#none_menu").hide("slide");
				});
			});

			$(document).ready(function(){
				$('.slider_parents').slick({
    				infinite: true,
    				cssEase: 'linear',
					dots: true,
					autoplay: true,
  					autoplaySpeed: 4000,
  				});
  				
  				$('.char').slick({
    				infinite: true,
    				cssEase: 'linear',					
					dots: true,
					autoplay: true,
  					autoplaySpeed: 4000,
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
			<!--s: header-->
			<div class="header">
				<h1 class="logo">
					<img src="./images/melonapng.png">
				</h1>
				<p class="menu">
					<img id="menu_img" onclick="myFunction()" src="./images/mobile/ico_menu (2).png">
				</p>
				<p class="cart">
					<img src="./images/mobile/hd_cart (3).png">
				</p>
				<div id="none_menu">
					<ul>
						<li>
							<a href="#">TOP</a>
						</li>
						<li>
							<a href="#">ONLINE STORE</a>
						</li>
						<li>
							<a href="#">MY PAGE</a>
						</li>
						<li>
							<a href="#">STORE LIST</a>
						</li>
						<li>
							<a href="#">NEWS & STORE BLOG</a>
						</li>
						<li>
							<a href="#">PLAZA PASS</a>
						</li>
						<li>
							<a href="#">CHARACTER</a>
						</li>
						<li>
							<a href="#">GIFT CARD</a>
						</li>
						<li>
							<a href="#">WRAPPING</a>
						</li>
						<li>
							<a href="#">APP</a>
						</li>
					</ul>
					<p class="close">
						<img id="close_x" onclick="myFunction2()" src="./images/mobile/btn_close.png">
					</p>
				</div>
			</div>
			<!--e: header-->

			<!--s: contents--->
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
			<!--e: contents-->

			<!--s: sub_menu-->
			<div class="sub_menu">
				<ul class="gnb">
					<li id="underline"><a href="#"><p>NEWS & STORE BLOG</p></a></li>
					<li id="underline"><a href="#"><p>STORE LIST</p></a></li>
					<li id="underline"><a href="#"><p>CHARACTER</p></a></li>
					<li id="underline"><a href="#"><p>PLAZA PASS</p></a></li>
				</ul>
			</div>
			<!--e: sub_menu-->

			<!--s: news-->
			<div class="news">
				<div class="news_background">
					<div class="news_border">
							<h1>
								NEWS
							</h1>
							<ul>
								<li>
									<a href="#">
										<img src="./images/20190123201139_app.jpg">
										<div class="news_contents">
											<p class="news_date">
												2018.08.17
											</p>
											<p class="news_title">
												8/17(금) MELONA에서 인기 화장품이 "Cat's ISSUE"와 협업!
											</p>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/20190123150755_app_onl_0123_th.jpg">
										<div class="news_contents">
											<p class="news_date">
												2018.08.17
											</p>
											<p class="news_title">
												8/17(FRI) ettusais x PEANUTS x in private 파우치 선물
											</p>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/cname_20190121135511.jpg">
										<div class="news_contents">
											<p class="news_date">
												2018.08.10
											</p>
											<p class="news_title">
												도리토스 와사비 어렌지 레시피♪
											</p>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/20190118134359_app.jpg">
										<div class="news_contents">
											<p class="news_date">
												2018.08.09
											</p>
											<p class="news_title">
												【칸사이 4개 지점 한정 이벤트】HARIBO를 구매후 슬롯머신에 도전해보자!
											</p>
										</div>
									</a>
								</li>	
								<li>
									<a href="#">
										<img src="./images/cname_20190123121349.jpg">
										<div class="news_contents">
											<p class="news_date">
												2018.08.09
											</p>
											<p class="news_title">
												"하바네로 칠리" 칩스!
											</p>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./images/20190110145611_app.jpg">
										<div class="news_contents">
											<p class="news_date">
												2018.08.07
											</p>
											<p class="news_title">
												한국에서 온 맛있는 아몬드♪
											</p>
										</div>
									</a>
								</li>
							</ul>
					</div>
				</div>
				<div class="news_mini_border">
					<h1>
						<img src="./images/news_border.png">
					</h1>
				</div>
			</div>
			<!--e: news-->

			<!--s: store blog-->
			<div class="store_blog">
				<h1>
					STORE BLOG      
				</h1>
				<ul>
					<li>
						<a href="#">
							<img src="./images/cname_20180807191940.jpg">
							<div class="store_contents">
								<p class="store_date">
									2018.08.07
								</p>
								<p class="store_title">
									오리지널 패키지 레르 드 사봉을 만들어보자
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./images/cname_20180816195745.jpg">
							<div class="store_contents">
								<p class="store_date">
									2018.08.16
								</p>
								<p class="store_title">
									다이어트 드링크 'BONOLAT' 시음회 알림
								</p>
							</div>
						</a>
					</li>
				</ul>
				<h1 class="more" style="font-size: 14px;">
					<a href="#">MORE</a>
				</h1>
			</div>
			<!--e: store blog-->

			<!--s: follow-->
			<div class="follow">
				<h1>FOLLOW US</h1>
				<ul class="sns">
					<li class="facebook">
						<a href="#" target="_blank"></a>
					</li>
					<li class="twitter">
						<a href="#" target="_blank"></a>
					</li>
					<li class="instagram">
						<a href="#" target="_blank"></a>
					</li>
				</ul>
			</div>
			<!--e: follow-->

			<!--s: character-->
			<div class="character">
				<h1>
					CHARACTER
				</h1>
				<div class="char">
					<div class="char_son">
						<img src="./images/mainvisual_simpsons.png">
					</div>
					<div class="char_son">
						<img src="./images/mainvisual_carebear.png">
					</div>
					<div class="char_son">
						<img src="./images/mainvisual_barbapapa.png">
					</div>
					<div class="char_son">
						<img src="./images/mainvisual_wally.png">
					</div>
					<div class="char_son">
						<img src="./images/mainvisual_suzyzoo.png">
					</div>
					<div class="char_son">
						<img src="./images/mainvisual_snowman.png">
					</div>
				</div>
				<ul class="char_intro">
					<li>
						<a href="#">
							<img src="./images/bp_180810_th.jpg">
							<div class="char_contents">
								<p class="char_title">
									BARBAPAPA
								</p>
								<p class="char_txt">
									Cafe Barbapapa 명동점에서 케이크 세트가 등장
								</p>
								<p class="char_date">
									2018.08.10
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./images/bp_180628_th.jpg">
							<div class="char_contents">
								<p class="char_title">
									BARBAPAPA
								</p>
								<p class="char_txt">
									Cafe Barbapapa 명동점에서 케이크 세트가 등장
								</p>
								<p class="char_date">
									2018.08.10
								</p>
							</div>
						</a>
					</li>
				</ul>
				<h1 style="font-size: 14px;">
					CHARACTER TOP
				</h1>
			</div>
			<!--e: character-->

			<!--s: footer-->
			<div class="footer">
				<h1>
					<img src="./images/melonapng.png">
				</h1>
				<ul>
					<li>
						<a href="#">사이트 이용 안내</a>
					</li>
					<li>
						<a href="#">프라이버시 정책</a>
					</li>
					<li>
						<a href="#">특정 상거래에 관한 표시</a>
					</li>
				</ul>
				<span>Copyright © SLH/PLAZASTYLE COMPANY</span>
			</div>
			<!--e: footer-->

		</div>
	</body>
</html>