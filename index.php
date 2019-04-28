<!doctype html>
<html>
	<head>
	
		<meta charset="utf-8">

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

		<script type="text/javascript" src="/slick-1.8.1-m/slick/slick.js"></script>
		<link rel="stylesheet" type="text/css" href="/slick-1.8.1-m/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="/slick-1.8.1-m/slick/slick-theme.css">

		<!--aos-->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		
		<script>
			$(document).ready(function(){
				//alert("fuck u");
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
					/*alert("nonono");*/
					$('.image').animate({left: '360px'});
				});
				$('.catalog_gnb02').click(function(){
					/*alert("fuck");*/
					$('.image').animate({left: '486px'});
				});
				$('.catalog_gnb03').click(function(){
					/*alert("fuck");*/
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
			*{
				padding: 0; 
				margin: 0; 
				list-style: none; 
				text-decoration: none;
			}
		</style>

	</head>
	<body>
		<div class="wrap">

			<style>

				/*top_menu*/

				.top{
					height: 50px; 
					background-color: #084e96;
				}

				.mini_logo{
					position: absolute; margin-left: 30px; 
				}

				.mini_logo:hover{
					opacity: 0.5; 
				}

				.top_menu{
					border: 0px solid red; 
					height: 30px; 
					
					position: absolute; 
					top: 16px; 
					right: 0; 
				}

				.top_menu > li{
					float: left; 
					margin-right: 20px; 
					position: relative;
				}

				.top_menu > li:hover{
					opacity: 0.8;
				}

				.top_menu > li:first-child{
					background-image: url("./images/ico_register.png"); 
					background-repeat: no-repeat;
				}
				.top_menu > li:nth-child(2){
					background-image: url("./images/ico_login.png");
					background-repeat: no-repeat;
				}

				.top_menu > li:nth-child(3){
					background-image: url("./images/ico_mypage.png");
					background-repeat: no-repeat;
				}

				.top_menu > li:nth-child(4){
					background-image: url("./images/ico_favorite.png");
					background-repeat: no-repeat;
				}

				.top_menu > li:nth-child(5){
					background-image: url("./images/ico_cart.png"); 
					background-repeat: no-repeat;
				}

				.top_menu > li > a > p{
					border: 0px solid red; 

					color: #fff; 
					font-size: 13px; 
					padding-left: 25px; 
				}

				.top_menu > li:last-child{
					border: 0px solid green; 
					padding: 2px 10px;
					padding-left: 20px; 
					padding-bottom: 15px;
				}

				/*hover하면 mini_menu 뜨는 css*/
				.top_menu > li:last-child:hover .mini_menu{
					display: block;		
					position: absolute; 
					z-index: 100;
				}

				/*
				.top_menu > li:hover .mini_menu{
					display: block;
				}

				.top_menu > li:nth-child(5):hover .cart{
					display: block;
				}
				*/

				/*top_menu에 overflow:hidden이 있으면 이건 적용되지 않으므로 제거해야한다.*/
				.mini_menu{
					border: 1px solid grey; 

					width: 168px; 
					height: 128px;

					background-color: #fff;

					position: absolute;
					display: none;
					
					right: -10px;
					top: 34px;

					padding-top: 10px;
				}

				.mini_menu > img{border: 0px solid blue; position: absolute; top: -18px; left: 120px; }

				.mini_menu > li{
					border: 0px solid blue; 
					padding: 8px 0; 
				}

				

				.mini_menu > li > a > p{
					text-align: center; 
					font-size: 12px;
					color: #444;
				}

				.mini_menu > li > a > p:hover{
					color: #7c7c7c;
					text-decoration: underline;
				}

				.

				/*
				.cart{
					border: 1px solid grey; 
					width: 200px;
					height: 150px;
					background-color: #fff; 
					background-image:url("./images/62.jpg");

					position: absolute;
					display: none;
					right: -78px;
					top: 34px;

				}

				.cart > button{
					width: 180px;
					height: 40px; 
					background-color: #084e96;
					border-radius: 20px;
				}
				*/

				.logo{
					border: 0px solid green;
					height: 112px;
				}

				.logo > h1{
					border: 0px solid blue;
					text-align: center; 
					margin: 50px 0;
				
				}



			</style>


			<div class="top">
				<h1 class="mini_logo">
					<img src="./images/logo_mini.png">
				</h1>
				<ul class="top_menu">
					<li><a href="#"><p>JOIN</p></a></li>
					<li><a href="#"><p>LOGIN</p></a></li>
					<li><a href="#"><p>MY PAGE</p></a></li>
					<li><a href="#"><p>FAVORITE</p></a></li>
					<li><a href="#"><p>CART</p></a>
						<!--
						<div class="cart">
							<img src="./images/img_cart.png">
							<button>view cart</button>
						</div>
						-->
					</li>
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


			<div class="logo">
				<h1><img src="./images/logo.png"></h1>
			</div>


			<style>
				/*slider*/
				.slider{
					border: 0px solid red; 
					width: 100%;
					z-index: 1; 

				}
				.slider_parents{
					border: 0px solid blue; 
				}
				.slider_son{
					border: 0px solid orange; 
					width: 740px; 
					height: 440px; 
				}
				.slider_son > img{
					margin: 0 auto;
				}


				.slick-slide{
					opacity: 0.5;
				}
				.slick-slide.slick-center{
					opacity: 1;
					border: 0px solid red; 
					padding: 0px 20px;
				}

				.slick-slide.slick-center:hover{
					opacity: 0.7;
				}


				/*버튼*/

				.slick-dots li button{
					border: 0px solid red;
				}

				.slick-dots li button:before{
    				content: '';
					background: url("./images/dots.png");
					background-repeat: no-repeat;
					opacity: 1;

					border: 0px solid green;
					position: absolute;
    				top: 20px;
    				left: 5px;
				}

				.slick-dots li.slick-active button:before{
					background: url("./images/dots_on.png");
					background-repeat: no-repeat;
					opacity: 1;
				}

				/*

				.slick-prev, .slick-next{
					width: 36px; 
					height: 58px; 
					background-color: #084e96; 
					position: absolute;
					z-index: 100; 
				}
				
				*/

				/*

				.slick-prev:hover, .slick-next:hover{
					background-color: #053a70;
				}
				
				.slick-prev{
					border: 3px solid red; 
					top: 220px; 
					left: 524px;
					background-image: url("./images/arrow_prev01.png");
					background-repeat: no-repeat;
					background-position: 13px 23px; 


				}

				.slick-next{
					top: 220px;
					left: 1360px;
					background-image: url("./images/arrow_next01.png");
					background-repeat: no-repeat;
					background-position: 13px 23px; 
				}

				.slick-prev:before{
    				content: '';
				}

				.slick-next:before{
					content: '';
				}


				*/

				/*menu!!*/
				.menu{border: 0px solid red; height: 65px; border-top: 1px solid #084e96; border-bottom: 1px solid #084e96; margin-top: 80px; }
				.sub_menu{border: 0px solid red; width: 950px; margin: 0 auto; }
				.gnb{}
				.gnb > li{float: left; }
				.gnb > li{background-image: url("./images/border01.png"); background-repeat: no-repeat; background-position: left center;}
				.gnb > li > a{border: 0px solid red; }
				.gnb > li{border: 0px solid green; }
				.gnb > li > a > p{border: 0px solid blue; font-size: 15px; font-weight: bold; letter-spacing: 1px; margin: 0 32px; padding: 23px 0; color: #084e96;}

				.sns_set{border: 0px solid red; width: 204px; overflow: hidden;}
				.sns_set{background-image: url("./images/border01.png"); background-repeat: no-repeat; background-position: left center;}
				.sns_set > li{float: left; }
				.sns_set > li > a > p{border: 0px solid blue; padding: 23px 0px; padding-left: 44px; }
				.sns_set > li:hover{opacity: 0.8;}
				/*under line*/
				#underline{
					position: relative;
				}
				#underline:before{
					position: absolute; 
					content: ""; 
					background: #084e96; 
					height: 3px;
					bottom: 1px; 
					transition: all 0.7s;
					left: 50%;
					right: 50%;
				}
				#underline:hover:before{
					left: 0%;
					right: 0%;
					opacity: 1; 
				}









				/*두번째 메뉴*/
				.menu2{
					background-color: #f0f0f0;
					height: 65px;
					border-bottom: 1px solid #cacaca;
					position: fixed;
					width: 100%;
					top: 0;
					z-index: 100;
					display: none;
					opacity: 0.9;
				}
				.sub_menu2{
					border: 0px solid red; 
					width: 1100px;
					margin: 0 auto;
					position: relative;
				}
				.sub_menu2 > h1{
					position: absolute; 
					top: 12px;
					border: 0px solid red; 
					width: 115px;
				}
				.sub_menu2 > h1 > img{
					border: 0px solid blue;
					width: 115px;
				}
				.sub_menu2 > h1:hover{
					opacity: 0.8;
				}
				.gnb2 {
					border: 0px solid orange;
					width: 722px;
					margin-left: 170px;
				}
				.gnb2 > li{
					float: left; 
					background-image: url("./images/border01.png");
					background-repeat: no-repeat;
					background-position: left center;
				}
				.gnb2 > li > a > p{
					font-size: 15px; 
					font-weight: bold;
					letter-spacing: 1px;
					margin: 0 32px; 
					padding: 23px 0;
					color: #084e96;
				}

				.sns_set2{
					width: 204px;
					overflow: hidden;
					background-image: url("./images/border01.png"); 
					background-repeat: no-repeat; 
					background-position: left center;
				}
				.sns_set2 > li{
					float: left;
				}
				.sns_set2 > li > a > p{
					padding: 23px 0;
					padding-left: 44px;
				}
				.sns_set2 > li:hover{
					opacity: 0.8;
				}

				#underline2{
					position: relative;
				}
				#underline2:before{
					position: absolute;
					content: "";
					background: #084e96;
					height: 3px;
					bottom: 1px;
					transition: all 0.7s;
					left: 50%;
					right: 50%;
				}
				#underline2:hover:before{
					left: 0%;
					right: 0%;
					opacity: 1;
				}









				.contents{
					border: 0px solid green; 
					width: 100%;
					height: 460px;
					margin: 0 auto;
					background-image: url("./images/contents_background.jpg");
					margin-top: 100px;
					margin-bottom: 100px;
				}
				.contents_logo{
					text-align: center;
					color: #084e96;
					font-weight: bold;
				}
				.little_contents{
					border: 0px solid red; 
					width: 1084px;
					margin: 0 auto;
					margin-top: 60px;
				}
				.little_contents > ul > li{
					border: 0px solid blue;
					float: left;
					position: relative;
					margin-right: 17px;
				}
				.little_contents > ul > li:nth-child(3){
					margin-right: 0;
				}
				.text-box{
					border: 0px solid orange;
					width: 315px;
					height: 110px;
					position: absolute;
					top: 200px;
					left: 18px;
					background-color: #fff;
				}
				.title{
					text-align: center;
					font-weight: bold; 
					color: #084e96;
					border: 0px solid red; 
					padding-top: 25px;
					padding-bottom: 10px;
					font-size: 14px;
				}
				.txt{
					text-align: center;
					color: #084e96;
					font-size: 13px;
				}

				.catalog{
					border: 0px solid red;
					width: 1100px;
					margin: 0 auto;
				}

				.catalog_menu{
					height: 60px;
					background-color: #084e96;
				}

				.catalog_gnb{
					border: 0px solid blue;
					padding-top: 13px;
					width: 409px;
					margin: 0 auto;
				}

				.catalog_gnb > li{
					float: left; 
					padding-left: 35px;
					padding-right: 35px;
					background-image: url("./images/border02.png");
					background-repeat: no-repeat;
					background-position: right;
				}

				.catalog_gnb > li:first-child{
					padding-left: 0;
				}

				.catalog_gnb > li:last-child{
					padding-right: 0;
					background-image: none;
				}

				.catalog_gnb > li a{
					color: #fff;
					font-weight: bold;
					font-size: 25px;
				}


				.gallery{
					overflow: hidden;
				}

				.tab-input {
					display: none;
				}

				.tab-item {
					position: absolute; 
					visibility: hidden; 
					opacity: 0; 
					-webkit-transform: 
					translateY(10px); 
					transform: translateY(10px);
				}

				.tab-input:checked + .tab-item {
  					position: static; 
  					visibility: visible; 
  					opacity: 1; 
  					-webkit-transform: translateY(0); 
  					transform: translateY(0); 
  					transition: 0.3s ease-in-out;
				}

				.idk {
					border: 0px solid green;
					margin-top: 46px;
				}

				#idk01 > li{
					border: 0px solid red;
					float: left;
					margin-right: 20px;
					margin-bottom: 20px;
					width: 260px; 
					height: 260px;
				}

				#idk01 > li:first-child{
					width: 540px; 
					height: 540px;
				}

				#idk01 > li:nth-child(3), #idk01 > li:nth-child(5), #idk01 > li:nth-child(9){
					margin-right: 0;
				}

				#idk02 > li{
					float: left;
					margin-right: 60px;
					margin-bottom: 55px;
					width: 326px;
					height: 470px;
				}

				#idk02 > li:nth-child(3), #idk02 > li:nth-child(6){
					border: 0px solid red; 
					margin-right: 0px;
				}

				#idk02 > li:nth-child(4), #idk02 > li:nth-child(5), #idk02 > li:last-child{
					margin-bottom: 0;
				}

				#idk02 .idk_new{
					width: 46px; 
					height: 20px;
					background-color: #f7667a;
					position: absolute; 
				}

				#idk02 .idk_new > p{
					color: #fff;
					font-size: 11px;
					font-weight: bold;
					text-align: center;
					padding-top: 2px;
				}

				#idk02 > li > a > img{
					margin-bottom: 22px;
				}

				#idk02 .idk_topics{
					color: #e44179; 
					font-weight: bold; 
					font-size: 12px; 
					margin-bottom: 8px;
				}
				
				#idk02 .idk_title{
					color: #000; 
					font-size: 14px; 
					margin-bottom: 15px;
				}

				#idk02 .idk_date{
					color: grey; 
					font-size: 14px;
				}




				/*idk03*/


				#idk03 > li{
					border: 0px solid red; 
					float: left; 
					margin-right: 60px;
					margin-bottom: 50px;
					width: 230px;
					height: 339px;
				}

				#idk03 > li:nth-child(4), #idk03 > li:nth-child(8), #idk03 > li:nth-child(12){
					margin-right: 0;
				}

				#idk03 .idk_new{
					width: 46px; 
					height: 20px;
					background-color: #f7667a;
					position: absolute; 
				}

				#idk03 .idk_new > p{
					color: #fff;
					font-size: 11px;
					font-weight: bold;
					text-align: center;
					padding-top: 2px;
				}

				#idk03 .idk_topics{
					color: #848484;  
					font-size: 12px; 
					margin-top: 14px;
					margin-bottom: 10px;
				}

				#idk03 .idk_title{
					color: #000; 
					font-size: 14px; 
					margin-bottom: 10px;
				}

				#idk03 .idk_date{
					color: grey; 
					font-size: 14px;
				}





				/*more 부분*/

				#idk1_more{
					border: 0px solid green;
					height: 58px;
					text-align: center;
					padding-top: 870px;
				}
				#more1{
					border: 0px solid orange;
					display: inline-block;
					width: 280px;
					height: 58px;
					background-color: #084e96;
					border-radius: 50px;
				}
				#more1:hover{
					background-color: #053a70;
				}

				#more1 > a{
					color: #fff;
					font-size: 20px;
					padding-top: 15px;
				}


				#idk2_more{
					border: 0px solid green;
					height: 58px;
					text-align: center;
					padding-top: 1030px;
				}
				#more2{
					border: 0px solid orange;
					display: inline-block;
					width: 280px;
					height: 58px;
					background-color: #084e96;
					border-radius: 50px;
				}
				#more2:hover{
					background-color: #053a70;
				}
				#more2 > a{
					color: #fff;
					font-size: 20px;
					padding-top: 15px;
				}


				#idk3_more{
					border: 0px solid green;
					height: 58px;
					text-align: center;
					padding-top: 1200px;
				}
				#more3{
					border: 0px solid orange;
					display: inline-block;
					width: 280px;
					height: 58px;
					background-color: #084e96;
					border-radius: 50px;
				}
				#more3:hover{
					background-color: #053a70;
				}
				#more3 > a{
					color: #fff;
					font-size: 20px;
					padding-top: 15px;
				}

				/*zoom-in*/
				#idk01 > li{
					display: inline-block;
					overflow: hidden;
					border: 0px solid blue;
				}
				#idk01 > li img{
					display: block;
					transition: 0.6s ease-in-out;
				}

				#idk01 > li:hover img{
					transform: scale(1.1);
				}

				/*menu arrow*/
				.catalog_menu{
					border: 0px solid green;
					position: relative;
					overflow: hidden;
				}
				.catalog_menu > span{
					border: 0px solid red; 
					position: absolute;
					left: 360px; 
					bottom: -4px;
				}


				
				
			</style>


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

			<!--두번쨰 메뉴-->

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
								<!--
								<li style="width: 100%; height: 58px; margin: 0 auto; border: 0px solid red; ">
									<h1 class="more" style="border: 0px solid blue; margin: 0 auto; text-align: center; width: 280px; height: 58px; background-color: #084e96; border-radius: 50px; color: #fff; font-size: 20px; top: 20px;">MORE</h1>
								</li>
								-->
							</ul>

							<h1 id="idk3_more">
								<div id="more3" onclick="window.open('http://www.naver.com')">
									<a>MORE</a>
								</div>
							</h1>


							
						</div>
						

					</div>


				</div>

				<style>
					.image_up{
						border: 0px solid green;
						margin-top: 150px;
					}
					.image_up > h1{
						text-align: center;
						color: #084e96;
					}
					.list{
						border: 0px solid red;
						margin-top: 55px;
					}
					.list > li{
						border: 3px solid #084e96;
						width: 109px; 
						height: 100px;
						margin-right: 8px;
						float: left;
					}
					.list > li:last-child{
						margin-right: 0;
					}
					.list > li > img{
						width: 93px;
						margin-top: -26px; 
						margin-left: 9px;
					}
					.list > li > p{
						font-size: 12px; 
						font-weight: bold;
						color: #084e96;
						text-align: center;
					}

					.list > li:hover img{
						transform: translate(0, -10px);
					}

					.character{
						border: 0px solid green;
						position: relative; 
						height: 1350px;
						margin-top: 300px;
						background-color: #f0f0f0;
					}

					.character_main{
						width: 1030px;
						margin: 0 auto;
					}

					.character_main > h1{
						color: #084e96;
						text-align: center;
						font-size: 26px;
						padding-top: 60px;
						padding-bottom: 60px;
					}

					.character_animation{
						background-image: url("./images/character/bg_tab_suzyzoo.png");
						position: relative;
						width: 1030px;
						height: 370px;
						border: 0px solid red; 
						overflow: hidden;
					}

					.suzy{
						border: 0px solid red; 
						position: absolute; 
						top: 30px;
						left: 366px;
					}
					.suzy02{
						border: 0px solid blue;
						position: absolute;
						top: 166px;
						right: 125px;
					}
					.suzy_heart01{
						position: absolute; 
						top: 180px;
						right: 42px;
					}

					.suzy03{
						border: 0px solid green;
						position: absolute;
						top: 19px;
						left: 120px;
					}

					.suzy_heart02{
						position: absolute;
						top: 125px;
						left: 40px;
					}

					.suzy04{
						border: 0px solid green;
						position: absolute;
						top: 104px;
						right: 280px;
					}
					.suzy05{
						border: 0px solid green;
						position: absolute;
						top: 122px;
						left: 245px;
					}
					.suzy_logo{
						position: absolute; 
						top: 22px;
						right: 20px;
					}
					.character_introduce{
						margin-top: 90px;
					}

					.introduce{
						border: 0px solid blue;
						width: 1100px;
						margin: 0 auto; 
					}
					.introduce > li{
						float: left; 
						width: 350px;
						height: 114px;
						position: relative; 
						margin-right: 24px;
					}
					.introduce > li:last-child{
						margin-right: 0;
					}

					.introduce > li:hover img{
						opacity: 0.8;
					}
					.introduce > li:hover .char_title{
						text-decoration: underline;
					}
					.introduce > li > a > img{
						border: 3px solid #dcdcdc;
					}
					.char_topics{
						border: 0px solid green;
						position: absolute; 
						top: 5px;
						left: 128px;
						font-size: 15px;
						font-weight: bold;
						color: #084e96;
					}
					.char_title{
						border: 0px solid yellow;
						position: absolute; 
						top: 32px;
						left: 128px;
						font-size: 14px;
						color: #084e96;
					}
					.char_date{
						border: 0px solid orange;
						position: absolute; 
						bottom: 5px;
						left: 128px;
						font-size: 13px;
						color: #848484;
					}


					/*footer*/
					.footer{
						width: 100%;
						height: 392px;
						margin-top: 50px;
						position: absolute; 
						bottom: 0;
					}
					.footer_blue{
						background-color: #044181;
						width: 100%;
						height: 322px;
						position: absolute;
						bottom: 0;
					}



					.footer_green{
						position: relative;
						border: 0px solid green;
						width: 1100px;
						height: 100%;
						margin: 0 auto;
					}
					.footer_brand{
						border: 0px solid red;
						width: 420px;
						height: 392px;
						position: absolute; 
						bottom: 0;
						background-color: #084e96;
					}

					.footer_brand > h1{
						margin-left: 40px;
						margin-top: 40px;
						margin-bottom: 35px;
					}

					.footer_brand_cat{
						border: 0px solid red;
						width: 340px;
						height: 200px;
						margin: 0 auto;
						border-bottom: 1px solid #fff;
					}
					.footer_brand_cat > li{
						float: left;
						margin-bottom: 30px;
					}
					.footer_brand_cat > li:nth-child(odd){
						width: 200px;
					}
					.footer_brand_cat > li:nth-child(even){
						width: 140px;
					}
					.footer_brand_cat p{
						font-size: 15px;
						font-weight: bold;
						color: #fff;
					}

					.footer_sns{
						border: 0px solid yellow;
						width: 340px;
						margin: 0 auto;
					}
					.footer_sns > p{
						width: 123px;
						position: absolute;
						top: 345px;
						font-size: 15px;
						font-weight: bold;
						color: #fff;
					}
					.footer_sns > ul{
						width: 200px;
						height: 35px;
						position: absolute;
						top: 340px;
						left: 234px;
					}
					.footer_sns > ul > li{
						float: left;
						margin-right: 18px;
					}
					.footer_sns > ul > li:hover{
						opacity: 0.8;
					}

					.footer_cmn{
						border: 0px solid orange;
						width: 675px;
						height: 251px;
						position: absolute;
						left: 426px;
						top: 40px;
					}

					.footer_cmn_one{
						border: 0px solid yellow;
						width: 160px; 
						height: 251px;
						position: absolute; 
						left: 65px;
					}
					.footer_cmn_one > h1, .footer_cmn_two > h1{
						font-size: 16px;
						color: #fff;
						margin-bottom: 15px;
					}
					.footer_cmn_one > li, .footer_cmn_two > li{
						border: 0px solid green;
						margin-bottom: 10px;
					}
					.footer_cmn_one > li:hover p, .footer_cmn_two > li:hover p{
						text-decoration: underline;
					}
					.footer_cmn_one p, .footer_cmn_two p{
						color: #fff;
						font-size: 14px;
					}

					.footer_cmn_two{
						width: 160px;
						height: 251px;
						position: absolute;
						left: 294px;
					}

					.top_scroll{
						border: 0px solid red; 
						position: fixed;
						bottom: 0;
						right: 0;
						display: none;
					}
					
				</style>
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
		</div>
	</body>
</html>