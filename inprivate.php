<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

		<!--redirect-->
		<link rel="canonical" href="http://journeyp.net/melona/inprivate_m.php">

		<!--font-->
		<link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">

		<!--aos-->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			$(document).ready(function(){
				AOS.init({
					duration: 1200,
				});
			});
		</script>

		<!--스마트폰 부분-->
		<script type="text/javascript">
			if (screen.width <= 699) {
				document.location = "./test23.php";
			}
		</script>

		<style>
			.frame{
				position: fixed;
				background: #231815;
				z-index: 100;
			}
			.frame-t{
				width: 100%;
				height: 6px;
				top: 0;
				left: 0;
			}
			.frame-b{
				width: 100%;
				height: 6px;
				bottom: 0;
				left: 0;
			}
			.frame-r{
				height: 100%;
				width: 6px;
				top: 0;
				right: 0;
			}
			.frame-l{
				height: 100%;
				width: 6px;
				top: 0;
				left: 0;
			}

			*{
				padding: 0;
				margin: 0;
				list-style: none;
				text-decoration: none;
			}

			/*wrap*/
			.wrap{
				border: 0px solid blue;
			}

			/*header*/
			.header{
				border: 0px solid red;
				width: 100%;
				height: 107px;
			}
			.header_inner{
				border: 0px solid blue;
				position: relative;
				width: 1000px;
				margin: 0 auto;
				padding-top: 37px;

			}
			.logo:hover{
				opacity: 0.8;
			}

			.header_menu{
				border: 0px solid red;
				width: 434px;
				position: absolute;
				top: 44px;
				right: 0;
			}
			.header_menu > li{
				float: left;
				margin-right: 50px;
			}
			.header_menu > li:last-child{
				border: 0px solid green;
				margin-right: 0;
			}
			.header_menu > li > a{
				font-size: 14px;
				font-weight: bold;
				color: #000;
			}

			#underline{
				position: relative;
			}
			#underline:before{
				position: absolute;
				content: "";
				background: #231815;
				height: 3px;
				bottom: -10px;
				transition: all 0.7s;
				left: 50%;
				right: 50%;
			}
			#underline:hover:before{
				left: 0%;
				right: 0%;
				opacity: 1;
			}

			/*sns*/
			.sns{
				border: 0px solid red;
				position: fixed;
				right: 6px;
				top: 130px;
			}
			.sns_set{
				border: 0px solid green;
			}

			/*main*/
			.main{
				margin-top: 0;
				border: 0px solid blue;
				height: 650px;
				background-image: url("./images/mainvisual1809.jpg");
				background-size: cover;
				background-position: 0 50%;
			}
			.main_inner{
				border: 0px solid red; 
				width: 1100px;
				margin: 0 auto; 
				position: relative;
			}

			.concept_img{
				position: absolute;
				top: 135px;
				left: 547px;
				/*
				left: 949px;
				*/
			}
			.inprivate_img{
				position: absolute;
				top: 264px;
				left: 80px;
				/*
				left: 482px;
				*/
			}
			


			/*contetns*/
			.contents > h1 {
				text-align: center;
				margin-top: 110px;
				margin-bottom: 60px;
			}

			/*contents cat*/

			.contents_cat{
				border: 0px solid red; 
				width: 1100px;
				height: 540px;
				margin: 0 auto;
				position: relative;
				margin-bottom: 125px;
			}
			.contents_cat_img{
				float: left;
			}
			.contents_cat_txt{
				border: 0px solid blue;
				float: right;
				width: 372px;
				height: 548px;
			}
			.contents_cat_txt_img{
				text-align: center;
				margin-bottom: 18px;
			}

			.contents_cat_txt_title{
				margin-bottom: 10px;
			}

			.contents_cat_txt_txt{
				border-top: 2px solid #231815;
				padding-top: 18px;
				margin-bottom: 20px;
			}
			.contents_cat_txt_txt > p{
				font-size: 14px;
				line-height: 1.8;
			}

			.contents_cat_txt_link{
				border: 2px solid #231815;
				width: 368px;
				height: 54px;
			}
			.contents_cat_txt_link > a{
				text-align: center;
				display: block;
				font-size: 14px;
				color: #231815;
				font-weight: bold;
				padding-top: 16px;
			}
			.contents_cat_txt_link:hover{
				background-color: #231815;
			}
			.contents_cat_txt_link:hover > a{
				color: #fff;
			}





			/*contents any*/
			.contents_any{
				border: 0px solid blue; 
				width: 1100px;
				margin: 0 auto;
				position: relative;
				overflow: hidden;
			}
			.chars{
				border: 0px solid red; 
				width: 514px;
				height: 657px;
				margin-bottom: 60px;
				float: left; 
			}
			#peanuts, #sunny{
				margin-right: 72px;
			}

			.any_img{
				margin-bottom: 20px;
			}
			.any_img > img{
				border: 2px solid #231815;
			}
			.any_txt_logo{
				float: left; 
			}
			.any_txt_logo{
				height: 120px;
			}
			.any_txt_logo > img{
				width: 120px;
			}
			.any_txt_txt{
				width: 368px;
				height: 190px;
				float: right;
			}
			.any_txt_title{
				font-size: 18px;
				font-weight: bold;
			}
			.any_txt_contents{
				font-size: 14px;
			}


			.any_more{
				border: 2px solid #231815;
				width: 366px;
				height: 54px;
				margin-top: 225px;
				margin-left: 72px;
			}
			.any_more > a{
				display: block;
				font-size: 14px;
				font-weight: bold; 
				color: #231815;
				text-align: center;
				padding-top: 16px;
			}

			.any_more:hover{
				background-color: #231815;
			}
			.any_more:hover > a{
				color: #fff;
			}
			.any_txt_title{
				margin-bottom: 12px;
			}
			.any_txt_contents{
				line-height: 1.8;
				margin-bottom: 8px;
			}
			.any_txt_date{
				font-size: 12px;
				font-weight: bold;
				color: #666;
			}

			.archives{
				border: 0px solid green;
				margin-top: 1450px;
				text-align: center;
			}
			.archives > h1{
				border: 2px solid #231815;
				width: 366px;
				height: 54px;
				margin: 0 auto;
			}

			.archives > h1 > a{
				display: block;
				font-size: 14px;
				font-weight: bold; 
				color: #231815;
				text-align: center;
				padding-top: 16px;
			}

			.archives:hover > h1{
				background-color: #231815;
			}
			.archives:hover > h1 > a{
				color: #fff;
			}


			/*footer*/

			.footer{
				border: 0px solid green;
				overflow: hidden;
				margin-top: 150px;
			}
			.footer_menu{
				border: 0px solid blue;
				width: 1100px;
				margin: 0 auto;
				border-top: 2px solid #231815;

			}

			.footer_menu > ul{
				border: 0px solid red;
				width: 683px;
				margin: 0 auto; 
				margin-top: 50px;
				margin-bottom: 50px;
				overflow:hidden;

			}
			.footer_menu > ul > li{
				border: 0px solid yellow;
				float: left;
				margin-left: 30px;
				margin-right: 30px;
			}
			.footer_menu > ul > li > a{
				font-size: 13px;
				color: #231815;
			}
			.footer_menu > ul > li > a:hover{
				text-decoration: underline;
			}
			.footer_menu > h1{
				border: 0px solid red; 
				text-align: center;
				margin-bottom: 50px;
			}

			/*
			.footer_menu > ul{
				border-top: 2px solid #231815;
				width: 1100px;
				margin: 0 auto; 
			}
			.footer_menu > ul > li{
				border: 3px solid yellow;
				float: left;
			}
			*/

		</style>
	</head>
	<body>
		<div class="wrap">
			<div class="frame frame-t"></div>
			<div class="frame frame-b"></div>
			<div class="frame frame-r"></div>
			<div class="frame frame-l"></div>

			<!--s: header-->
			<div class="header">
				<div class="header_inner">
					<h1 class="logo">
						<img src="./images/logo_inp.png" style="width: 159px; height: 31px;">
					</h1>
					<ul class="header_menu">
						<li id="underline">
							<a href="#">TOPICS & STORE BLOG</a>
						</li>
						<li id="underline">
							<a href="#">STORE LIST</a>
						</li>
						<li id="underline">
							<a href="#">ONLINE STORE</a>
						</li>
					</ul>
				</div>
			</div>
			<!--e: header-->

			<!--s: main-->
			<div class="sns">
				<ul class="sns_set">
					<li class="facebook">
						<a href="#"><img src="./images/btn-fb.png"></a>
					</li>
					<li class="twitter">
						<a href="#"><img src="./images/btn-tw.png"></a>
					</li>
				</ul>
			</div>
			<div class="main">
				<div class="main_inner">
					<div class="concept_img" data-aos="fade-up" data-aos-delay="600">
						<img src="./images/concept_kr.png">
					</div>
					<div class="inprivate_img" data-aos="fade-up">
						<img src="./images/logo02.png">
					</div>
				</div>
			</div>
			<!--e: main-->

			<!--s: contents-->
			<div class="contents">
				<h1>
					<img src="./images/ttl_pickup.png">
				</h1>

				<!--s: 첫번째 컨텐츠-->
				<div class="contents_cat" data-aos="fade-up">
					<div class="contents_cat_img" >
						<img src="./images/pickup1809.jpg">
					</div>
					<div class="contents_cat_txt" >
						<div class="contents_cat_txt_img">
							<img src="./images/logo-1809.png">
						</div>
						<h1 class="contents_cat_txt_title">DEDICATED TO CAT-<br>LOVER GIRLS!</h1>
						<div class="contents_cat_txt_txt">
							<p style="font-family: Noto Sans KR;">
								고양이를 좋아하는 여성들에게 알리는 「Hot Cat CLUB」＆「TOBY THE CAT」. 어린 시절부터 고양이를 가장 좋아했던 여자아이가 성장해서 어른이 되는 스토리.
							</p> 
							<p style="font-family: Noto Sans KR;">
								고양이를 좋아하는 여성들은 꼭 체크해야하는 오리지널 굿즈가「Cat’ s ISSUE」 와「in private」의 콜라보레이션으로 등장합니다.
							</p>
							<p style="font-weight: bold;">2018.09~</p>
						</div>
						<div class="contents_cat_txt_link">
							<a href="#" style="font-family: Noto Sans KR;">자세히 보기</a>
						</div>
					</div>
				</div>
				<!--e: 첫번째 컨텐츠-->




				<style>
					



				</style>



				<!--s: 두번째 컨텐츠-->
				<div class="contents_any" data-aos="fade-up" >
					<div class="chars" id="peanuts">
						<div class="any_img">
							<img src="./images/item-1807.jpg">
						</div>
						<div class="any_txt">
							<div class="any_txt_logo">
								<img src="./images/logo-1807.png">
							</div>
							<div class="any_txt_txt">
								<p class="any_txt_title" >
									PEANUTS×in private
								</p>
								<p class="any_txt_contents">
									「PEANUTS」와의 콜라보레이션 제7탄은 테니스가 테마. 친숙한 스누피, 루시, 샐리 이외에 스누피의 테니스 파트너 몰리볼리와 루시의 야구 팀 동료 프리다가 첫 등장! 스포츠 장면과 여름 휴가에 딱 맞는 아이템이 모였습니다.
								</p>
								<p class="any_txt_date">
									2018.07~
								</p>
							</div>
						</div>
						<div class="any_more">
							<a href="#" style="font-family: Noto Sans KR;">자세히 보기</a>
						</div>
					</div>
					<div class="chars" id="fiji">
						<div class="any_img">
							<img src="./images/item-1805.jpg">
						</div>
						<div class="any_txt">
							<div class="any_txt_logo">
								<img src="./images/logo-1805.jpg">
							</div>
							<div class="any_txt_txt">
								<p class="any_txt_title">
									FIJI Water×in private
								</p>
								<p class="any_txt_contents">
									남태평양의 낙원 피지에서 태어난 내츄럴 미네랄 워터 '피지 워터'와 in private가 콜라보레이션. 이번 콜라보레이션으로 탄생 한 오리지널 캐릭터 '블루 베어'에 주목합니다.
								</p>
								<p class="any_txt_date">
									2018.05~
								</p>
							</div>
						</div>
						<div class="any_more">
							<a href="#" style="font-family: Noto Sans KR;">자세히 보기</a>
						</div>
					</div>

					<div class="chars" id="sunny">
						<div class="any_img">
							<img src="./images/item-1804.jpg">
						</div>
						<div class="any_txt">
							<div class="any_txt_logo">
								<img src="./images/logo-1804.png">
							</div>
							<div class="any_txt_txt">
								<p class="any_txt_title">
									Forever Sunny
								</p>
								<p class="any_txt_contents">
									해변이나 수영장 놀이가 그리워지는 이 계절에 딱 맞는, 머메이드의 수영장 파티를 테마로 한 썸머 시리즈. 여름 여행에 빠질 수 없는 여행 아이템이나 파우치가 모여 있습니다.
								</p>
								<p class="any_txt_date">
									2018.04~
								</p>
							</div>
						</div>
						<div class="any_more">
							<a href="#" style="font-family: Noto Sans KR;">자세히 보기</a>
						</div>
					</div>

					<div class="chars" id="minnie">
						<div class="any_img">
							<img src="./images/item-1802.jpg">
						</div>
						<div class="any_txt">
							<div class="any_txt_logo">
								<img src="./images/logo-1802.png">
							</div>
							<div class="any_txt_txt">
								<p class="any_txt_title">
									MINNIE MOUSE COLLECTION 2018
								</p>
								<p class="any_txt_contents">
									PLAZA 오리지널 브랜드 "in private"가 제공하는 "MINNIE MOUSE COLLECTION" 제2탄! 
									뉴욕의 거리를 무대로, 미키와의 데이트를 즐기는 미니를 디자인 테마로 하고 있습니다. 
									PLAZA · MINiPLA에서만 구할 수 있는 한정 시리즈. 이 기회를 놓치지 마세요!

								</p>
								<p class="any_txt_date">
									2018.02.15~
								</p>
							</div>
						</div>
						<div class="any_more">
							<a href="#" style="font-family: Noto Sans KR;">자세히 보기</a>
						</div>
					</div>

					<div class="archives">
						<h1>
							<a href="#" style="font-family: Noto Sans KR;">ARCHIVES</a>
						</h1>
					</div>
				</div>
				<!--e: 두번째 컨텐츠-->
			</div>
			<!--e: contents-->

			<!--s: footer-->
			<div class="footer">
				<div class="footer_menu">
					<ul>
						<li>
							<a href="#">이용에 대하여</a>	
						</li>
						<li>
							<a href="#">문의사항</a>	
						</li>
						<li>
							<a href="#">기업정보</a>	
						</li>
						<li>
							<a href="#">채용정보</a>	
						</li>
						<li>
							<a href="#">특정 상거래에 대한 표기</a>	
						</li>
					</ul>
					<h1>
						<img src="./images/copylight.png">
					</h1>
				</div>
			</div>
			<!--e: footer-->


			
		</div>
	</body>
</html>