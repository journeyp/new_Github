<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

		<script type="text/javascript" src="./slick-1.8.1-m/slick/slick.js"></script>
		<link rel="stylesheet" type="text/css" href="./slick-1.8.1-m/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="./slick-1.8.1-m/slick/slick-theme.css">

		<style>
			*{
				padding: 0;
				margin: 0;
				list-style: none;
				text-decoration: none;
			}

			.wrap{
				height: 100%;
			}
			.header{
				height: 56px;
				background: #1f53a7;
			}
			.logo{
				text-align: center;
				padding-top: 6px;
			}
			.logo > img{
				width: 124px;
			}
			.menu{
				position: absolute;
				left: 15px;
				top: 18px;
			}
			.menu > img{
				width: 20px;
			}
			.cart{
				position: absolute;
				right: 10px;
				top: 9px;
			}
			.cart > img{
				width: 38px;
			}
			#none_menu{
				display: none;
				position: fixed;
				top: 0;
				width: 100%;
				height: 100%;
				background: #fff;
				z-index: 100;
				overflow-y: auto;
			}
			#none_menu > ul{
				border: 0px solid red;
				margin-top: 90px;
			}
			#none_menu > ul > li{
				text-align: center;
				margin-bottom: 35px;
			}
			#none_menu > ul > li > a{
				font-size: 20px;
				text-decoration: none;
				color: #231815;
				font-weight: bold;
			}
			.close{
				border: 0px solid red; 
				position: absolute;
				top: 10px;
				left: 10px;
			}
			.close > img{
				width: 20px;
			}





			/*slick*/
			.slider{
				border: 0px solid red; 
				width: 100%;
				z-index: 1; 
				height: 100%;

			}
			.slider_son > img{
				width: 100%;
			}

			.slick-slide.slick-center{
				opacity: 1;
				padding: 0px 20px;
			}
			.slick-slide.slick-center:hover{
				opacity: 0.7;
			}


			/*버튼*/
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
		<script>
			/*
			function myFunction(){
				document.getElementById("none_menu").style.display="block";
				document.getElementById("none_menu").style.transitionDelay = "10s";
			}
			function myFunction2(){
				document.getElementById("none_menu").style.display="none";
			}
			
			$('#menu_img').click(function () {
    			$('#none_menu').slideToggle(150);
			});
			*/

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
					
  					/*centerMode:true,
    				slidesToShow: 1,
    				slidesToScroll: 1,

    				variableWidth: true,
    				variableHeight: true,
    				*/

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
	</head>
	<body>
		<div class="wrap">
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

			<style>
				.sub_menu{
					border-top: 1px solid #084e96;
					border-bottom: 1px solid #084e96;
					padding: 15px 0;
					margin-top: 30px;
					margin-bottom: 60px;
					overflow-x: auto;
					height: 100%;
				}
				.gnb{
					width: 525px;
					display: inline-block;
				}
				.gnb > li{
					float: left; 
				}
				
				.gnb > li{
					background-image: url("./images/border01.png"); 
					background-repeat: no-repeat; 
					background-position: left center;
				}
				
				.gnb > li > a > p{
					font-size: 13px; 
					font-weight: bold; 
					letter-spacing: 1px; 
					padding: 0 14px; 
					color: #084e96;
				}


				.news{
					border: 0px solid yellow;
					height: 100%;
				}

				.news_background{ 
					border: 1px solid #d0e0f1;					
					height: 100%;
					margin-top: 40px;
					/*background: #c4d9ef;*/
					background: #d0e0f1;
				}

				.news_border{
					border: 2px solid #084e96;
					height: 100%;
					margin-top: -42px;
					margin-left: 5%;
					width: 90%;
					margin-bottom: -10px;
				}

				.news_border > h1{
					color: #084e96;
					text-align: center;
					font-size: 24px;
					margin-top: 20px;
				}

				.news_border > ul{
					width: 105%;
					margin-left: -3%;
					margin-top: 20px;
				}

				.news_border > ul > li{
					background: #fff;
					padding: 15px;
					margin-bottom: 10px;
					position: relative;
				}
				.news_border > ul > li:last-child{
					margin-bottom: 34px;
				}

				.news_border > ul > li > a > img{
					width: 36%;
				}

				.news_contents{
					border: 0px solid red;
					width: 60%;
					position: absolute;
					right: 15px;
					top: 15px;
					line-height: 2;
				}

				.news_date{
					font-size: 13px;
					padding-left: 15px;
					color: grey;
				}
				.news_title{
					font-size: 13px;
					font-weight: bold;
					padding-left: 15px;
					color: black;
				}

				.news_mini_border > h1{
					text-align: center;
					margin-top: 7px;
				}





				/*storeblog*/
				.store_blog{
					border-top: 2px solid #084e96;
					border-bottom: 2px solid #084e96;
					margin-top: -10px;
					height: 100%;
				}
				.store_blog > h1{
					color: #084e96;
					text-align: center;
					font-size: 24px;
					margin-top: 20px;
					margin-bottom: 30px;
				}

				.store_blog > ul{
					padding: 0 10px;
				}

				.store_blog > ul > li{
					border-top: 1px solid #ccc;
					background: #fff;
					margin-bottom: 10px;
					padding: 10px 0;
					position: relative;
				}
				.store_blog > ul > li:last-child{
					border-bottom: 1px solid #ccc;
				}

				.store_blog > ul > li > a > img{
					width: 36%;
				}

				.store_contents{
					width: 60%;
					position: absolute;
					right: 15px;
					top: 15px;
					line-height: 2;
				}

				.store_date{
					font-size: 13px;
					padding-left: 15px;
					color: grey;
				}
				.store_title{
					font-size: 13px;
					font-weight: bold;
					padding-left: 15px;
					color: black;
				}
				.more > a{
					color: #084e96;
					text-align: center;
					font-size: 14px;
					margin-top: 20px;
					margin-bottom: 30px;
				}



				/*sns*/

				.follow{
					border: 0px solid red; 
					margin-top: 30px;
					margin-bottom: 30px;
					padding: 0 10px;
					height: 100%;
				}

				.follow > h1{
					color: #084e96;
					text-align: center;
					font-size: 14px;
					margin-bottom: 30px;
				}

				.sns{
					height: 100%;
					overflow: hidden;
				}

				.sns > li{
					float: left;
					width: 33.333%;
					height: 50px;
				}

				.facebook{
					background: #3b5998;
					background-image: url("./images/ico_facebook.png");
					background-repeat: no-repeat;
					background-position: center;
					background-size: 11px;
				}
				.twitter{
					background: #15a6dd;
					background-image: url("./images/ico_twitter.png");
					background-repeat: no-repeat;
					background-position: center;
					background-size: 18px;
				}
				.instagram{
					background: #3f729b;
					background-image: url("./images/ico_instagram.png");
					background-repeat: no-repeat;
					background-position: center;
					background-size: 17px;
				}

				/*char*/
				.character{
					background: #d0e0f1;
					height: 100%;
				}
				.character > h1{
					color: #084e96;
					text-align: center;
					font-size: 24px;
					padding-top: 33px;
					margin-bottom: 33px;
				}
				.char{
					width: 100%;
					height: 100%;

				}
				.char_son > img{
					width: 100%;
				}


				.char_intro{
					margin-top: 60px;
					padding: 0 10px;
				}
				.char_intro > li{
					border-top: 1px solid #084e96;
					position: relative;
					padding-top: 10px;
					padding-bottom: 10px;
				}
				.char_intro > li:last-child{
					border-bottom: 1px solid #084e96;
				}
				.char_intro > li > a > img{
					width: 24%;
				}

				.char_contents{
					position: absolute;
					width: 70%;
					line-height: 1.5;
					right: 15px;
					top: 10px;
					padding-left: 15px;

				}

				.char_title{
					font-size: 13px;
					font-weight: bold;
					color: #084e96;
				}
				.char_txt{
					font-size: 13px;
					color: #084e96;
				}
				.char_date{
					font-size: 13px;
					color: #084e96;
				}

				/*footer*/
				.footer{
					height: 120px;
					background: #084e96;
				}
				.footer > h1{
					text-align: center;
				}
				.footer > h1 > img{
					width: 93px;
				}
				.footer > ul{
					width: 345px;
					margin: 0 auto;
					margin-top: 20px;
					overflow: hidden;
				}
				.footer > ul > li{
					float: left;
					margin-right: 10px;
				}
				.footer > ul > li > a{
					font-size: 12px;
					color: #fff;
					font-weight: bold;
					text-decoration: underline;
				}
				.footer span{
					font-size: 10px;
					color: #fff;	
					display: block;
					padding-top: 30px;
					text-align: center;
				}

			</style>

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
		</div>
	</body>
</html>