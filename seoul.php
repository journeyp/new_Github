<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--모바일웹에서 확대/축소 금지-->
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no">
		<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<link href="./seoul.css" rel="stylesheet">
		<!--bxslider-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  		<script>
			$(document).ready(function(){
				$('.u_slider').bxSlider({
					auto: true,
					mode: 'fade',
					pager: false,
					captions: true,

					nextSelector: '#slider-next',
  					prevSelector: '#slider-prev',
					nextText: '<img src="./images/seoul/right_w.png" height="29" width="16"/>',
					prevText: '<img src="./images/seoul/left_w.png" height="29" width="16"/>',
				});

				$('.contents_ul').bxSlider({
					auto: true,
					pager: false,
					captions: true,
					nextSelector: '#slider2-next',
  					prevSelector: '#slider2-prev',
					nextText: '<img src="./images/seoul/right_2.png" height="29" width="16"/>',
					prevText: '<img src="./images/seoul/left_2.png" height="29" width="16"/>',
				});

				$('.news_ul').bxSlider({
					auto: true,
					pager: false,
					captions: true,
					slideWidth: 273,
        			maxSlides: 8,
        			moveSlides: 1,
        			slideMargin: 0,
        			nextSelector: '#slider3-next',
  					prevSelector: '#slider3-prev',
					nextText: '<img src="./images/seoul/right_5.png" height="23" width="40"/>',
					prevText: '<img src="./images/seoul/left_5.png" height="23" width="40"/>',
				});
				$('#idk01').bxSlider({
					auto: true,
					pager: false,
					captions: true,
					slideWidth: 370,
        			maxSlides: 3,
        			moveSlides: 1,
        			slideMargin: 18,

					nextSelector: '#slider4-next',
  					prevSelector: '#slider4-prev',
					nextText: '<img src="./images/seoul/right_2.png" height="29" width="16"/>',
					prevText: '<img src="./images/seoul/left_2.png" height="29" width="16"/>',
				});
				$('#idk02').bxSlider({
					auto: true,
					pager: false,
					captions: true,
					slideWidth: 370,
        			maxSlides: 3,
        			moveSlides: 1,
        			slideMargin: 18,

					nextSelector: '#slider5-next',
  					prevSelector: '#slider5-prev',
					nextText: '<img src="./images/seoul/right_2.png" height="29" width="16"/>',
					prevText: '<img src="./images/seoul/left_2.png" height="29" width="16"/>',
				});
				$('.footer_slider_ul').bxSlider({
					auto: true,
					pager: false,
        			slideWidth: [{screen:495, slides:1, pager:false},{screen:495, slides:2},{screen:227, slides:3}],
        			moveSlides: 3,
        			infiniteLoop: true,
        			slideMargin: 10,

        			nextSelector: '#slider6-next',
  					prevSelector: '#slider6-prev',
					nextText: '<img src="./images/seoul/right_2.png" height="29" width="16"/>',
					prevText: '<img src="./images/seoul/left_2.png" height="29" width="16"/>',
				});
				$('.notice_ul').bxSlider({
					auto: true,
					mode: 'vertical',
					pager: false,
        			moveSlides: 1,
        			infiniteLoop: true,

        			nextSelector: '#slider7-next',
					nextText: '<img src="./images/seoul/next.png" height="10" width="14"/>',
				});

			});

			$(document).ready(function(){
				var menupos = $(".menu_fix").offset().top; 
				$(window).scroll(function(){ 
					if($(window).scrollTop() >= menupos) { 
						$(".menu_fix").css("position","fixed"); 
						$(".menu_fix").css("top","0"); 
					} 
					else { 
						$(".menu_fix").css("position","relative"); 
						$(".menu_fix").css("top",""); 
					} 
				}); 
				$('.ticket_gnb_p').click(function(){
    				$('.ticket_gnb_p').removeClass("active");
    				$(this).addClass("active");
				});
				$(window).scroll(function(){
					if($(this).scrollTop() > 500){
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
			/*메뉴 버튼 누르면 나오기*/
			function myFunction(){
				document.getElementById("mobile_menu").style.display="block";
				document.getElementById("mobile_menu").style.transitionDelay = "10s";
			}
			function myFunction2(){
				document.getElementById("mobile_menu").style.display="none";
			}
		</script>	
		<style>
			/*bxslider*/
			#slider-prev{
				position: absolute;
				top: 650px;
				left: 20px;
			}
			#slider-next{
				position: absolute;
				top: 650px;
				right: 20px;
			}
			#slider2-prev{
				position: absolute;
				top: 335px;
				left: -33px;
			}
			#slider2-next{
				position: absolute;
				top: 335px;
				right: -33px;
			}
			#slider3-prev{
				position: absolute;
				top: 432px;
				left: 90px;
			}
			#slider3-next{
				position: absolute;
				top: 432px;
				right: 90px;
			}
			#slider4-prev{
				position: absolute;
				top: 147px;
				left: 0px;
			}
			#slider4-next{
				position: absolute;
				top: 147px;
				right: 0px;
			}
			#slider5-prev{
				position: absolute;
				top: 147px;
				left: 0px;
			}
			#slider5-next{
				position: absolute;
				top: 147px;
				right: 0px;
			}
			#slider6-prev{
				position: absolute;
				top: 98px;
				left: 0px;
			}
			#slider6-next{
				position: absolute;
				top: 98px;
				right: 0px;
			}
			#slider7-next{
				position: absolute;
				top: 5px;
				right: 12px;
			}
			.bx-wrapper {
					box-shadow: 0 0 0px #ccc;
					border: 0px solid #fff;
					background: transparent;
			}
			@media screen and (min-width: 766px) and (max-width: 1280px){
				#slider2-prev{
					top: 225px;
				}
				#slider2-next{
					top: 225px;
				}
			}
			@media screen and (max-width: 765px){
				#slider-prev{
					top: 380px;
				}
				#slider-next{
					top: 380px;
				}
				#slider3-prev{
					position: absolute;
					left: 50px;
				}
				#slider3-next{
					position: absolute;
					right: 50px;
				}
				#slider4-prev{
					top: 100px;
				}
				#slider4-next{
					top: 100px;
				}
				#slider5-prev{
					top: 100px;
				}
				#slider5-next{
					top: 100px;
				}
			}
		</style>
	</head>
	<body>
		<div id="wrap">

			<!--s: header-->
			<div id="header">
				<ul id="left_header">
					<li>
						<a href="#">
							HOME
						</a>
					</li>
					<li>
						<a href="#">
							기관소개
						</a>
					</li>
				</ul>
				<ul id="right_header">
					<li>
						<a href="#">로그인</a>
					</li>
					<li>
						<a href="#">회원가입</a>
					</li>
					<li>
						<a href="#">마이페이지</a>
					</li>
					<li>
						<a href="#">고객센터</a>
					</li>
					<li>
						<a href="#">정보공개</a>
					</li>
					<li>
						<a href="#">사이트맵</a>
					</li>
					<li>
						<a href="#">ENG</a>
					</li>
				</ul>
			</div>
			<!--e: header-->

			<!--s: menu-->
			<div id="menu">
				<div class="menu_fix">
				<div class="menu_logo">
					<a>
						<img src="./images/seoul/sac_ci.png">
					</a>
				</div>
				<!--s: mobile menu-->
				<div class="mobile_main_menu">
					<p class="menu_open">
						<img onclick="myFunction()" src="./images/seoul/제목 없음-1.png">
					</p>
					<div id="mobile_menu">
						<ul>
							<li>
								<a href="#">공연일정</a>
							</li>
							<li>
								<a href="#">전당기획공연</a>
							</li>
							<li>
								<a href="#">└SAC CUBE/SAC CLASSIC</a>
							</li>
							<li>
								<a href="#">객석안내</a>
							</li>
							<li>
								<a href="#">좌석배치도</a>
							</li>
							<li>
								<a href="#">사이버투어</a>
							</li>
						</ul>
						<ul class="mobile_button">
							<li>
								<a href="#">
									<img src="./images/seoul/q_1.png">
								</a>
								<p>오시는 길</p>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/q_2.png">
								</a>
								<p>1:1문의</p>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/q_3.png">
								</a>
								<p>예매안내</p>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/q_4.png">
								</a>
								<p>좌석배치도</p>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/q_5.png">
								</a>
								<p>SAC 투어</p>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/q_6.png">
								</a>
								<p>세계음악분수</p>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/q_7.png">
								</a>
								<p>객석기부</p>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/q_8.png">
								</a>
								<p>SAC  on Screen</p>
							</li>
						</ul>
						<p class="menu_close" onclick="myFunction2()">
							x
						</p>
					</div>
				</div> 
				<!--e: mobile menu-->
				<div></div>
				<div class="main_menu">
					<ul class="main_menu_ul">
						<li class="main_menu_li">
							<a href="#">공연</a>
							<div class="mini_menu">
								<ul>
									<li>
										<a href="#">공연일정</a>
									</li>
									<li>
										<a href="#">전당기획공연</a>
									</li>
									<li>
										<a href="#">└SAC CUBE/SAC CLASSIC</a>
									</li>
									<li>
										<a href="#">객석안내</a>
									</li>
									<li>
										<a href="#">-좌석배치도</a>
									</li>
									<li>
										<a href="#">-사이버투어</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="main_menu_li">
							<a href="#">전시</a>
							<div class="mini_menu">
								<ul>
									<li>
										<a href="#">전시일정</a>
									</li>
									<li>
										<a href="#">전시장안내</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="main_menu_li">
							<a href="#">티켓</a>
							<div class="mini_menu">
								<ul>
									<li>
										<a href="#">티켓예매</a>
									</li>
									<li>
										<a href="#">싹(SAC)딜</a>
									</li>
									<li>
										<a href="#">당일할인티켓</a>
									</li>
									<li>
										<a href="#">예매·취소안내</a>
									</li>
									<li>
										<a href="#">티켓오픈공지</a>
									</li>
									<li>
										<a href="#">패키지예매</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="main_menu_li">
							<a href="#">아카데미</a>
							<div class="mini_menu">
								<ul>
									<li>
										<a href="#">아카데미메인</a>
									</li>
									<li>
										<a href="#">수강신청</a>
									</li>
									<li>
										<a href="#">나의강좌</a>
									</li>
									<li>
										<a href="#">-예역대기내역</a>
									</li>
									<li>
										<a href="#">-신청·환불내역</a>
									</li>
									<li>
										<a href="#">-수강생정보</a>
									</li>
									<li>
										<a href="#">아카데미공지·FAQ</a>
									</li>
									<li>
										<a href="#">오디션</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="main_menu_li">
							<a href="#">PLAY+Zine</a>
							<div class="mini_menu">
								<ul>
									<li>
										<a href="#">예술의전당 매거진</a>
									</li>
									<li>
										<a href="#">이벤트</a>
									</li>
									<li>
										<a href="#">관람평</a>
									</li>
									<li>
										<a href="#">세계음악분수</a>
									</li>
									<li>
										<a href="#">무료리허설관람</a>
									</li>
									<li>
										<a href="#">SAC투어</a>
									</li>
									<li>
										<a href="#">뉴스&이슈</a>
									</li>
									<li>
										<a href="#">칼럼 리포트</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="main_menu_li">
							<a href="#">이용안내</a>
							<div class="mini_menu">
								<ul>
									<li>
										<a href="#">오시는길·주차안내</a>
									</li>
									<li>
										<a href="#">서비스플라자</a>
									</li>
									<li>
										<a href="#">편의서비스</a>
									</li>
									<li>
										<a href="#">식사와 쇼핑</a>
									</li>
									<li>
										<a href="#">관람예절</a>
									</li>
									<li>
										<a href="#">공간안내</a>
									</li>
									<li>
										<a href="#">장애인·국가유공자</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="main_menu_li">
							<a href="#">대관안내</a>
							<div class="mini_menu">
								<ul>
									<li>
										<a href="#">대관안내</a>
									</li>
									<li>
										<a href="#">공간별 대관안내</a>
									</li>
									<li>
										<a href="#">입장권 운영안내</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				</div>
				<div></div>
			</div>
			<!--e: menu-->

			<!--s: slider-->
			<div id=slider>
				<ul class="u_slider">
					<li class="slider slider1">
						<div class="sub_slider">
							<p class="sub_slider_title">
								<a>게임 속의 오케스트라: 마비노기</a>
							</p>
							<p class="sub_slider_date">
								<a>05.03(금) 7PM 콘서트홀</a>
							</p>
						</div>
					</li>
					<li class="slider slider2">
						<div class="sub_slider">
							<p class="sub_slider_title">
								<a><사랑의 묘약></a>
							</p>
							<p class="sub_slider_date">
								<a>05.17(금)-05.19(일) 오페라극장 / 금,토 19:30, 일 16:00</a>
							</p>
						</div>
					</li>
					<li class="slider slider3">
						<div class="sub_slider">
							<p class="sub_slider_title">
								<a>2019 제9회 대한민국발레축제</a>
							</p>
							<p class="sub_slider_date">
								<a>06.18(화) - 06.30(일) / 오페라극장, CJ 토월극장, 자유소극장, 신세계스퀘어 야외무대</a>
							</p>
						</div>
					</li>
					<li class="slider slider4">
						<div class="sub_slider">
							<p class="sub_slider_title">
								<a>2019 예술의전당 어린이 가족 페스티벌</a>
							</p>
							<p class="sub_slider_date">
								<a>07.10(수) - 08.25(일) 자유소극장</a>
							</p>
						</div>
					</li>
					<li class="slider slider5">
						<div class="sub_slider">
							<p class="sub_slider_title">
								<a>2019 제10회 대한민국오페라페스티벌</a>
							</p>
							<p class="sub_slider_date">
								<a>05.17(금) - 06.09(일) / 오페라극장, 자유소극장, 신세계스퀘어 야외무대</a>
							</p>
						</div>
					</li>
					<li class="slider slider6">
						<div class="sub_slider">
							<p class="sub_slider_title">
								<a>시대의 소음 : 책으로 듣는 쇼스타코비치</a>
							</p>
							<p class="sub_slider_date">
								<a>05.08(수) 8PM 콘서트홀</a>
							</p>
						</div>
					</li>
				</ul>
				<p style=" margin-top: -30px;">
					<span id="slider-prev"></span> 
					<span id="slider-next"></span>
				</p>
			</div>
			<!--e: slider-->

			<!--s: contents-->
			<div id="contents">
				<div class="sub_contents">
					<h2>What's On</h2>
					<ul class="contents_ul">
						<li class="contents_slider">
							<ul class="contents_ul_1_left">
								<li>
									<a href="#">
										<img src="./images/seoul/cb28664a5fe611e992960010e.png">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>2019 예술의전당 어린이 가족 페스티벌 <아빠닭></a>
											<div class="sub_contents_none"> 
												<p>자유소극장</p>
												<p>07.10(수)-07.21(일)</p>
											</div>
										</p>
									</div>
								</li>
								<li>
									<a href="#">
										<img src="./images/seoul/8888d7e46b1711e992960010e.png">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>가족 페스티벌 <루루섬의 비밀></a>
											<div class="sub_contents_none"> 
												<p>자유소극장</p>
												<p>08.06(화)-08.25(일)</p>
											</div>
										</p>
									</div>
								</li>
								<li>
									<a href="#">
										<img src="./images/seoul/6f90eea01b8511e9af330010e.jpg">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>2019 SAC 공연·전시 프로그램</a>
											<div class="sub_contents_none"> 
												<p>SAC 2019 SEASON</p>
												<p>음악·공연·전시</p>
											</div>
										</p>
									</div>
								</li>								
							</ul>

							<ul class="contents_ul_1_right">
								<li>
									<a href="#">
										<img src="./images/seoul/da11fc3665ad11e992960010e.png">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>2019 예술의전당 동요콘서트</a>
											<div class="sub_contents_none"> 
												<p>신세계스퀘어 야외무대</p>
												<p>05.11(토)-05.12(일) 5PM</p>
											</div>
										</p>
									</div>
								</li>
								<li>
									<a href="#">
										<img src="./images/seoul/a62f38595fe611e992960010e.png">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>가족 페스티벌 <댄싱뮤지엄></a>
											<div class="sub_contents_none"> 
												<p>자유소극장</p>
												<p>07.24(수)-08.04(일)</p>
											</div>
										</p>
									</div>
								</li>
								<li>
									<a href="#">
										<img src="./images/seoul/f4bf2cc544a611e9a6df0010e.jpg">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>국립합창단 <스트라빈스키 시편교향곡></a>
											<div class="sub_contents_none"> 
												<p>콘서트홀</p>
												<p>05.02(목) 8PM</p>
											</div>
										</p>
									</div>
								</li>								
							</ul>
						</li>




						<li class="contents_slider">
							<ul class="contents_ul_2_left">
								<li>
									<a href="#">
										<img src="./images/seoul/1ed7d3c5673111e992960010e.jpg">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>현대백화점과 함께하는 밤도깨비 상영회(5/4~, 무료관람)</a>
											<div class="sub_contents_none"> 
												<p>일시:5월~9월 첫째&셋째주 토요일 8PM</p>
												<p>장소:예술의전당 계단광장</p>
											</div>
										</p>
									</div>
								</li>
								<li>
									<a href="#">
										<img src="./images/seoul/d8b3b87460b311e992960010e.png">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>어린이예술단 -HARMONY-</a>
											<div class="sub_contents_none"> 
												<p>콘서트홀</p>
												<p>05.04(토) 5PM</p>
											</div>
										</p>
									</div>
								</li>
								<li>
									<a href="#">
										<img src="./images/seoul/cb28664a5fe611e992960010e.png">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>가족 페스티벌 <아빠닭></a>
											<div class="sub_contents_none"> 
												<p>자유소극장</p>
												<p>07.10(수)-07.21(일)</p>
											</div>
										</p>
									</div>
								</li>								
							</ul>

							<ul class="contents_ul_2_right">
								<li>
									<a href="#">
										<img src="./images/seoul/8888d7e46b1711e992960010e.png">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>가족 페스티벌 <루루섬의 비밀></a>
											<div class="sub_contents_none"> 
												<p>자유소극장</p>
												<p>08.06(화)-08.25(일)</p>
											</div>
										</p>
									</div>
								</li>
								<li>
									<a href="#">
										<img src="./images/seoul/6f90eea01b8511e9af330010e.jpg">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>2019 SAC 공연·전시 프로그램</a>
											<div class="sub_contents_none"> 
												<p>SAC 2019 SEASON</p>
												<p>음악·공연·전시</p>
											</div>
										</p>
									</div>
								</li>
								<li>
									<a href="#">
										<img src="./images/seoul/da11fc3665ad11e992960010e.png">
									</a>
									<div class="sub_contents_slider">
										<p class="sub_contents_slider_title">
											<a>2019 예술의전당 동요콘서트</a>
											<div class="sub_contents_none"> 
												<p>신세계스퀘어 야외무대</p>
												<p>05.11(토)-05.12(일) 5PM</p>
											</div>
										</p>
									</div>
								</li>								
							</ul>
						</li>

					</ul>
					<p>
						<span id="slider2-prev"></span> 
						<span id="slider2-next"></span>
					</p>
				</div>
			</div>
			<!--e: contents-->

			<div id="news">
				<div class="news">
					<ul class="news_ul">
						<li class="news_slider1">
							<a href="#">
								<img src="./images/seoul/69485062671d11e992960010e.jpg">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										2019 어린이날 음악회<br>
										왁자지껄 클래식
									</a>
									<p>
										리사이틀홀<br>
										2019.05.05(일) 2PM
									</p>
								</div>
							</div>	
						</li>
						<li class="news_slider2">
							<a href="#">
								<img src="./images/seoul/ffde977d6aea11e992960010e.png">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										친절한 말 한마디<br>
										고객 여러분의 품격입니다.
									</a>
									<p>
										고객응대근로자에게 폭언, 성희롱, 폭행, 업무<br>
										방해 행위 등을 하지 말아주세요!
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider3">
							<a href="#">
								<img src="./images/seoul/bc715f566b2111e992960010e.png">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										2019 예술의전당 야외축제<br>
										<예술의 뜰> 안내 (5/4~9/30)
									</a>
									<p>
										파빌리온, 아트큐브, 버스킹, 푸드트럭, 아트마켓 (단, 파빌리온은 6/30까지만 운영)
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider4">
							<a href="#">
								<img src="./images/seoul/f5f3e5d3672a11e992960010e.jpg">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										윤홍천 피아노 리사이틀<br>
										Soirees de Vienne
									</a>
									<p>
										IBK챔버홀<br>
										2019.06.08(토) 8PM
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider5">
							<a href="#">
								<img src="./images/seoul/e67d7cb8457e11e9a6df0010e.jpg">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										박종화 피아노 리사이틀<br>
										Jonghwa Park Piano Recital
									</a>
									<p>
										IBK챔버홀<br>
										2019.05.11(토) 8PM
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider6">
							<a href="#">
								<img src="./images/seoul/8e49a8d1666611e992960010e.jpg">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										부천필하모닉오케스트라<br>
										박영민의 말러 제3번
									</a>
									<p>
										콘서트홀<br>
										2019.05.17(목) 8PM
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider7">
							<a href="#">
								<img src="./images/seoul/426c3f41cc6a11e8bc9e0010e.png">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										다양한 공연/전시를 보다 저렴하게!<br>
										[패키지 예매 서비스] OPEN!!
									</a>
									<p>
										10월 11일(목) 오후2시, 인형상자 패키지<br>
										(인형의집+어둠의 상자) 패키지 오픈!
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider8">
							<a href="#">
								<img src="./images/seoul/4a070caf46ed11e9a6df0010e.jpg">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										원데이 클래스(민화/캘리그라피)<br>
										수강생모집
									</a>
									<p>
										강의일: 3~6월 (*강좌별 상이)
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider9">
							<a href="#">
								<img src="./images/seoul/865c37a0512911e9a6df0010e.jpg">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										바르샤바 필하모닉 챔버 오케스트라<br>
										피아노 콘스탄틴 쉐르바코프
									</a>
									<p>
										콘서트홀<br>
										2019.06.16(일) 5PM
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider10">
							<a href="#">
								<img src="./images/seoul/9eb80122bd5c11e8bc9e0010e.png">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										인터넷 주차요금 사전결제 서비스<br>
										서비스 개시 (9/22~)
									</a>
									<p>
										9월 22일(토)부터 새로운 주차서비스가 시작됩니다. (※공연관람객 대상)
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider11">
							<a href="#">
								<img src="./images/seoul/2a69cd331fbc11e9af330010e.png">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										예술의전당 SAC포인트(마일리지)<br>
										이용 안내
									</a>
									<p>
										* 포인트 소멸일자는 2020년 7월 1일입니다. 남아있는 포인트를 확인하고 혜택 받으세요!
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider12">
							<a href="#">
								<img src="./images/seoul/7b2152f78be611e8873b0010e.png">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										도서·공연비 소득공제 정책<br>
										시행(7/1~) 안내
									</a>
									<p>
										도서 구입 및 공연을 관람하기 위해 사용한 금액 추가 공제, 공제율은 30%로 적용
									</p>
								</div>
							</div>
						</li>
						<li class="news_slider13">
							<a href="#">
								<img src="./images/seoul/843be2d5535611e8873b0010e.jpg">
							</a>
							<div class="news_slider_text">
								<div> 
									<a href="#">
										서울서예박물관 전시도록 (1988~)<br>
										온라인 판매 중!!
									</a>
									<p>
										* 서예박물관에서 열렸었던 전시의 도록을 온라인을 통해 위탁판매하고 있습니다.
									</p>
								</div>
							</div>
						</li>
					</ul>
					<p>
						<span id="slider3-prev"></span> 
						<span id="slider3-next"></span>
					</p>
				</div>
			</div>


			<!--s: ticket-->
			<div id="ticket">

				<div class="ticket_menu">
					<ul class="ticket_gnb">
						<li>
							<label for="tab-1" class="ticket_gnb1">
								<p class="ticket_gnb_p active">
									<a>Ticket Open</a>
								</p>
							</label>
						</li>
						<li>
							<label for="tab-2" class="ticket_gnb2">
								<p class="ticket_gnb_p">
									<a>Event</a>
								</p>
							</label>
						</li>
						<li>
							<label for="tab-3" class="ticket_gnb3">
								<p class="ticket_gnb_p">
									<a>Membership</a>
								</p>
							</label>
						</li>
					</ul>
				</div>

				<div class="ticket_gallery">
					<div class="gallery">
						<input id="tab-1" class="tab-input" name="tab" type="radio" checked>
						<div class="tab-item">
							<div class="sub-tab-item">
								<div class="sub-tab-items">
									<ul class="idk" id="idk01">
										<li>
											<a href="#">
												<img src="./images/seoul/36c1451c68d111e992960010e.jpg">
											</a>
											<div class="idk_text">
												<a href="#">2019 문화가 있는 날 SAC 아티스트 라운지 (6/26)</a>
												<p>-4/30(화) 2PM 오픈</p>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="./images/seoul/13c14f1b68d111e992960010e.png">
											</a>
											<div class="idk_text">
												<a href="#">이마에스트리 제14회 정기연주회</a>
												<p>- 유료회원(골드,블루,그린) 4/30(화) 10AM 오픈</p>
												<p>- 일반회원(노블포함) 5/2(목) 10AM 오픈</p>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="./images/seoul/d6250fca68d011e992960010e.png">
											</a>
											<div class="idk_text">
												<a href="#">2019 앙상블오푸스의 잃어버린 시간을 찾아서</a>
												<p>- 유료회원(골드,블루,그린) 4/30(화) 11AM 오픈</p>
												<p>- 일반회원(싹틔우미,노블포함) 5/3(금) 11AM 오픈</p>
											</div>
										</li>

										<li>
											<a href="#">
												<img src="./images/seoul/03660a82658711e992960010e.png">
											</a>
											<div class="idk_text">
												<a href="#">신현지, 유회응, 해외무용스타 스페셜 갈라</a>
												<p>- 유료회원(골드,블루,그린) 4/23(화) 2PM 오픈</p>
												<p>- 일반회원(싹틔우미,노블포함) 4/24(수) 2PM 오픈</p>
											</div>
										</li>
									</ul>
									<p>
										<span id="slider4-prev"></span> 
										<span id="slider4-next"></span>
									</p>
								</div>
							</div>
						</div>

						<input id="tab-2" class="tab-input" name="tab" type="radio">
						<div class="tab-item">
							<div class="sub-tab-item">
								<div class="sub-tab-items">
									<ul class="idk" id="idk02">
										<li>
											<a href="#">
												<img src="./images/seoul/8ca3ae06673711e992960010e.jpg">
											</a>
											<div class="idk_text">
												<a href="#">5월 가족의 달 카카오톡 회원 선물하기</a>
												<p>이벤트 기간 | 2019.05.01(수) - 05.31(금)</p>
												<p>혜택 | 회원가입기간 추가 3개월 연장</p>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="./images/seoul/57a28848663511e992960010e.jpg">
											</a>
											<div class="idk_text">
												<a href="#">[회원이벤트]YES24 이찬재, 안경자 작가와의 만남</a>
												<p>이벤트 기간 | 2019.04.24(수) - 05.15(수)</p>
												<p>당첨자 발표 | 2019.05.16(목)</p>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="./images/seoul/f95343ad664911e992960010e.png">
											</a>
											<div class="idk_text">
												<a href="#">[골드/블루/그린]코심213회 정기연주회 미리보기이벤트</a>
												<p>이벤트 기간 | 2019.04.24(수) - 05.08(수)</p>
												<p>당첨자 발표 | 2019.05.10(금)</p>
											</div>
										</li>

										<li>
											<a href="#">
												<img src="./images/seoul/46ddda465c3411e992960010e.jpg">
											</a>
											<div class="idk_text">
												<a href="#">글로리아오페라단 《사랑의 묘약》 기대평 이벤트</a>
												<p>이벤트 기간 | 2019.04.15(월) - 05.04(토)</p>
												<p>당첨자 발표 | 2019.05.09(목)</p>
											</div>
										</li>
									</ul>
									<p>
										<span id="slider5-prev"></span> 
										<span id="slider5-next"></span>
									</p>
								</div>
							</div>
						</div>

						<input id="tab-3" class="tab-input" name="tab" type="radio">
						<div class="tab-item">
							<div class="sub-tab-item">
								<div class="sub-tab-items">
									<ul class="idk" id="idk03">
										<li>
											<a href="#">
												<img src="./images/seoul/c7ef8d5ecf6911e783370010e.jpg">
											</a>
											<div class="idk_text">
												<a href="#">예술의전당 유료회원 가입 안내</a>
												<p>JOIN US</p>
												<p>문화를 즐기고 혜택을 즐기다.</p>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="./images/seoul/969fa69dcf6911e783370010e.jpg">
											</a>
											<div class="idk_text">
												<a href="#">예술의전당 《싹(SAC)딜》</a>
												<p>오전 11시~오후1시, 단2시간!</p>
												<p>특정 공연의 한정 좌석을 특별 할인가로 구매!</p>
											</div>
										</li>
										<li>
											<a href="#">
												<img src="./images/seoul/56ae7acccf6911e783370010e.jpg">
											</a>
											<div class="idk_text">
												<a href="#">예술의전당 제휴매장 소개</a>
												<p>골드, 블루, 그린회원에게 특별 서비스를 제공하는</p>
												<p>제휴매장을 소개합니다.</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--e: ticket-->

			<!--s: last-->
			<div id="last">
				<div class="sac">
					<h2>SAC ON SCREEN</h2>
					<p>
						시간과 거리의 제약을 넘어 영상으로 공연을 즐길 수 있는 SAC on Screen은 아티스트의 생생한 표정과 몸짓은 물론,<br>
						객석에서는 볼 수 없는 무대 구석구석과 공연의 흥미로운 뒷이야기, 그리고 무대를 넘어서는 감동과 환희까지 담아냅니다.
					</p>
					<a hreef="#">
						자세히보기
					</a>
				</div>
				<div class="love">
					<h2>I <span>♥</span>   LOVE SAC!</h2>
					<p>
						Follow us<br>
						1년 365일 공연과 전시가 끊이지 않는 예술의전당의 소셜 미디어(SNS)를 소개합니다.
					</p>
					
						<ul class="sns_set">
							<li>
								<a href="#">
									<img src="./images/seoul/sns_f.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/sns_t.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/sns_i.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/sns_n.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/sns_np.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/sns_tv.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/sns_youtube.png">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="./images/seoul/sns_podcast.png">
								</a>
							</li>
						</ul>
					
				</div>
			</div>
			<!--e: last-->

			<!--s: footer_slider-->
			<div id="footer_slider">
				<div class="footer_sub_slider">
					<ul class="footer_slider_ul">
						<li>
							<a href="#">
								<img src="./images/seoul/ec049419617d11e992960010e.jpg">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/a67a451f54e711e9a6df0010e.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/5d1c9f08617711e992960010e.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/ec049419617d11e992960010e.jpg">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/a67a451f54e711e9a6df0010e.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/6a588bd63c8711e9a6df0010e.jpg">
							</a>
						</li>
					</ul>
					<p>
						<span id="slider6-prev"></span> 
						<span id="slider6-next"></span>
					</p>
				</div>
			</div>
			<!--e: footer_slider-->


			<!--s: footer_button-->
			<div id="footer_button">
				<ul class="footer_button">
					<li>
						<a href="#">
							<img src="./images/seoul/q_1.png" alt="button_normal">
							<img src="./images/seoul/q_1_on.png" class="button_on" alt="button_on">
						</a>
						<p>오시는 길</p>
					</li>
					<li>
						<a href="#">
							<img src="./images/seoul/q_2.png" alt="button_normal">
							<img src="./images/seoul/q_2_on.png" class="button_on" alt="button_on">
						</a>
						<p>1:1문의</p>
					</li>
					<li>
						<a href="#">
							<img src="./images/seoul/q_3.png" alt="button_normal">
							<img src="./images/seoul/q_3_on.png" class="button_on" alt="button_on">
						</a>
						<p>예매안내</p>
					</li>
					<li>
						<a href="#">
							<img src="./images/seoul/q_4.png" alt="button_normal">
							<img src="./images/seoul/q_4_on.png" class="button_on" alt="button_on">
						</a>
						<p>좌석배치도</p>
					</li>
					<li>
						<a href="#">
							<img src="./images/seoul/q_5.png" alt="button_normal">
							<img src="./images/seoul/q_5_on.png" class="button_on" alt="button_on">
						</a>
						<p>SAC 투어</p>
					</li>
					<li>
						<a href="#">
							<img src="./images/seoul/q_6.png" alt="button_normal">
							<img src="./images/seoul/q_6_on.png" class="button_on" alt="button_on">
						</a>
						<p>세계음악분수</p>
					</li>
					<li>
						<a href="#">
							<img src="./images/seoul/q_7.png" alt="button_normal">
							<img src="./images/seoul/q_7_on.png" class="button_on" alt="button_on">
						</a>
						<p>객석기부</p>
					</li>
					<li>
						<a href="#">
							<img src="./images/seoul/q_8.png" alt="button_normal">
							<img src="./images/seoul/q_8_on.png" class="button_on" alt="button_on">
						</a>
						<p>SAC on Screen</p>
					</li>
				</ul>
			</div>
			<!--e: footer_button-->
			<!--s: notice--> 
			<div id="notice">
				<div class="notice">
					<a href="#">
						<img src="./images/seoul/notice_icon.png">
					</a>
					<div class="notice_parents">
						<ul class="notice_ul">
							<li>
								<a style="margin-right: 15px;">[2019.05.04]</a>
								<a href="#">2019 제10회 대한민국오페라페스티벌</a><a href="#" style="font-weight: bold;">도전! 오페라스타 선발자 공고</a>
							</li>
							<li>
								<a style="margin-right: 15px;">[2019.05.03]</a>
								<a href="#">대한민국오페라페스티벌</a><a href="#" style="font-weight: bold;">부대행사 <밖으로 나온 오페라></a> <a href="#">안내</a>
							</li>
							<li>
								<a style="margin-right: 15px;">[2019.05.01]</a>
								<a href="#" style="font-weight: bold;">"5월"</a> <a href="#">골드·블루·그린회원 혜택</a>
							</li>
							<li>
								<a style="margin-right: 15px;">[2019.04.27]</a>
								<a href="#" style="font-weight: bold;">친절한 말 한마디, 고객 여러분의 품격입니다.</a>
							</li>
							<li>
								<a style="margin-right: 15px;">[2019.04.27]</a>
								<a href="#">2019</a><a href="#" style="font-weight: bold;"> 예술의전당 야외축제 「예술의 뜰」</a><a href="#"> 안내 (5/4~9/30)</a>
							</li>
							<li>
								<a style="margin-right: 15px;">[2019.04.27]</a>
								<a href="#" style="font-weight: bold;">음악당 대관공고 및 접수일정</a>
							</li>
							<li>
								<a style="margin-right: 15px;">[2019.04.26]</a>
								<a href="#" style="font-weight: bold;">2019년도 예술의전당 서울서예박물관 3차 수시대관</a><a href="#"> 안내</a>
							</li>
							<li>
								<a style="margin-right: 15px;">[2019.04.26]</a>
								<a href="#">예술의전당</a><a href="#" style="font-weight: bold;"> 직원 블라인드 채용</a><a href="#"> 공고 (~5/10)</a>
							</li>
							<li>
								<a style="margin-right: 15px;">[2019.04.26]</a>
								<a href="#">예술의전당</a><a href="#" style="font-weight: bold;"> SAC포인트(마일리지) 이용 안내</a>
							</li>
						</ul>
						<p>
							<span id="slider7-next"></span>
						</p>
					</div>
				</div>
			</div>
			<!--e: notice-->
			<!--s: footer_info-->
			<div id="footer_info">
				<div class="footer_info">
					<ul class="info_icon">
						<li>
							<p>Contents With Us</p>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/sns_f.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/sns_t.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/sns_i.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/sns_n.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/sns_np.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/sns_tv.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/sns_youtube.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./images/seoul/sns_podcast.png">
							</a>
						</li>
					</ul>
					<ul class="info_menu">
						<li>
							<a href="#">사이트맵</a>
						</li>
						<li>
							<a href="#">이용약관·정책</a>
						</li>
						<li>
							<a href="#">개인정보처리방침</a>
						</li>
						<li>
							<a href="#">홈페이지저작권보호정책</a>
						</li>
					</ul>
				</div>
			</div>
			<!--s: footer-->
			<div id="footer">
				<div class="footer">
					<div class="footer_left">
						<img src="./images/seoul/sac_ci_g.png">
						<p>
							(우) 06757,서울시 서초구 남부순환로 2406 예술의전당
							<span>|</span>
							대표자 유인택
							<span>|</span>
							사업자 등록번호 214-82-00264
							<span>|</span>
							통신판매업신고 서초 제 0706호
						</p>
						<p>
							예술의전당 고객센터 : 02-580-1300 (AM 09:00 - PM 08:00)
							<span>|</span>
							webmaster@sac.or.kr
						</p>
						<p>
							copyrightⓒ2017 Seoul Arts Center All rights Reserved.
						</p>
					</div>
					<div class="footer_right">
						<img src="./images/seoul/footer_sponsor_banner.png">
					</div>
				</div>
			</div>
			<!--e: footer-->
			<!--s: scroll-->
			<div id="scroll">
				<a class="top_scroll">
					<img src="./images/seoul/top_btn.png">
				</a>
			</div>
			<!--e: scroll-->
		</div>
	</body>
</html>