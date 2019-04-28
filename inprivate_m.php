<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<style>
			*{
				padding: 0;
				margin: 0;
				text-decoration: none;
			}
			.header{
				width: 100%;
				height: 52px;
			}
			.logo{
				text-align: center;
				padding-top: 3px;
			}
			.logo > img{
				width: 113px;
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
				border: 0px solid green;
				position: absolute;
				right: 15px;
				top: 18px;
			}
			.cart > img{
				border: 0px solid blue;
				width: 26px;
			}
			#none_menu{
				display: none;
				position: fixed;
				top: 0;
				width: 100%;
				height: 100%;
				background: #fff;
				z-index: 100;
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
				border: 0px solid blue;
				position: absolute;
				left: 15px;
				top: 18px;
			}
			.close > img{
				width: 20px;
				height: 20px;
			}

			/*contents*/
			.contents{
				border: 0px solid green;
				margin-bottom: 45px;
			}
			.first{
				border: 0px solid orange;
			}
			.first > img{
				width: 100%;
				z-index: 0;
			}
			.sub_first{
				border: 0px solid blue;
				position: relative;
				width: 100%;
				margin-top: -74px;
			}
			.sub_first > h1{
				border: 0px solid red;
				text-align: center;
			}
			.sub_first > h1 > p{
				border: 0px solid red;
				text-align: center;
			}
			.sub_first > h1 > p > img{
				width: 218px;
			}
			.sub_first_box{
				border: 3px solid #231815;
				background-color: #fff;
				margin: 0 auto;
				margin-left: 22px;
				margin-right: 22px;
				margin-top: -37px;
			}
			.sub_first_text{
				border: 2px solid #231815;
				margin: 0 auto;
				margin-left: 3px;
				margin-right: 3px;
				margin-top: 3px;
				margin-bottom: 3px;
				text-align: center;
				padding: 0 12px;
			}
			.concept{
				border: 0px solid red;
				margin-top: 45px;
			}
			.concept > img{
				width: 85px;
			}
			.concept2{
				border: 0px solid blue;
				margin-top: 16px;
			}
			.concept2 > img{
				width: 238px;
			}
			.concept3{
				border: 0px solid red;
				margin-top: 30px;
				margin-bottom: 30px;
			}
			.concept3 > p{
				font-size: 13px;
			}


			.contents_two{
				border: 0px solid yellow;
				margin: 0 25px;
			}
			.second_logo{
				margin-bottom: 40px;
			}
			.second_logo > h1{
				text-align: center;
			}
			.second_logo > h1 > img{
				width: 198px;
			}
			.photo > img{
				width: 100%;
			}
			.sub_photo{
				text-align: center;
				margin-top: -50px;
			}
			.sub_photo > img{ 
				width: 97px;
				border: 1px solid #ccc;
			}
			.title > h1{
				text-align: center;
				font-size: 18px;
				border: 0px solid red;
				margin-top: 14px; 
				margin-bottom: 20px;
			}

			.text{
				border: 0px solid red;
			}

			.text > p{
				font-size: 12px;
			}

			.date{
				border: 0px solid green;
				font-weight: bold;
				margin-top: 15px;
				margin-bottom: 15px;
				color: #666;
			}
			.text > p:last-child{
				font-size: 10px;
			}

			.link{
				border: 1px solid #231815;
				margin: 0 auto; 
				text-align: center;
				padding: 12px 0;
				margin-bottom: 45px;
			}
			.link > a{
				border: 0px solid red; 
				width: 100%;
				font-size: 13px; 
				color: #231815;
				font-weight: bold; 
			}
		</style>

		<script>
			/*메뉴 버튼 누르면 나오기*/
			function myFunction(){
				document.getElementById("none_menu").style.display="block";
				//document.getElementById("none_menu").style.transition="all 2s";     
				//document.getElementById("none_menu").style.WebkitTransition = "all 2s";
				document.getElementById("none_menu").style.transitionDelay = "10s";
			}
			
			function myFunction2(){
				document.getElementById("none_menu").style.display="none";
			}
		</script>
	</head>
	<body>
		<div class="wrap">
			<!--s: header-->
			<div class="header">
				<h1 class="logo">
					<img src="./images/mobile/logo_m.png">
				</h1>
				<p class="menu">
					<img onclick="myFunction()" src="./images/mobile/ico_menu.png">
				</p>
				<p class="cart">
					<img src="./images/mobile/hd_cart.png">
				</p>
				<div id="none_menu">
					<ul>
						<li>
							<a href="#">TOP</a>
						</li>
						<li>
							<a href="#">TOPICS & STORE BLOG</a>
						</li>
						<li>
							<a href="#">STORE LIST</a>
						</li>
						<li>
							<a href="#">ONLINE STORE</a>
						</li>
					</ul>
					<p class="close">
						<img onclick="myFunction2()" src="./images/mobile/btn_close.png">
					</p>
				</div>
			</div>
			<!--e: header-->


			<!--s: contents-->
			<div class="contents">
				<div class="first">
					<img src="./images/mobile/pickup1809.jpg">
				</div>
				<div class="sub_first">
					<h1>
						<p><img src="./images/mobile/logo02.png"></p>
					</h1>
					<div class="sub_first_box">
						<div class="sub_first_text">
							<p class="concept">
								<img src="./images/mobile/ttl_concept.png">
							</p>
							<p class="concept2">
								<img src="./images/mobile/catch3.png">
							</p>
							<div class="concept3">
								<p>
									맘에 드는 잡화에 둘러싸여 자신 답게 행복한 매일을 보내고 싶어! 몇살이 되어도 귀여운 것을 좋아하는 여성을 응원하는 「in private」는 평상시에 사용하는 것에 "귀여움"과 "즐거움"을 추가 시킨 라이프 스타일 브랜드입니다. <br><br>
									봄 여름 가을 겨울 계절마다 시즌 테마로 나오는 신상품은 한정 아이템뿐<br>
									발견했다면, 그 장소에서 바로 구매하지 않으면<br>
									다시 손에 넣을수 없을지도?!<br>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--e: contents-->

			<!--s: contents_two-->
			<div class="contents_two">
				<div class="second_logo">
					<h1>
						<img src="./images/mobile/ttl_pickup.png">
					</h1>
				</div>
				<div class="second">
					<div class="photo">
						<img src="./images/mobile/pickup1809.jpg">
						<p class="sub_photo">
							<img src="./images/mobile/logo-1809.png">
						</p>
					</div>
					<div class="second_two">
						<div class="title">
							<h1>
								DEDICATED TO CAT-LOVER GIRLS!
							</h1>
						</div>
						<div class="text">
							<p>
								고양이를 좋아하는 모든 여성들에게 선사하는 'Hot Cat CLUB' & 'TOBY THE CAT'.<br>
								어릴때부터 고양이를 너무 좋아하는 여자아이가, 성장해서 어른이 되어가는 스토리. <br>
								고양이를 좋아하는 여성이라면 꼭 봐야하는 오리지날 굿즈가 'Cat's ISSUE'와 'in private' 콜라보로 등장합니다. <br>
							</p>
							<p class="date">
								2018.09~
							</p>
						</div>
						<div class="link">
							<a href="#">자세히 보기</a>
						</div>
					</div>
				</div>
			</div>
			<!--e: contents_two-->

			<!--s: contents_two2-->
			<div class="contents_two">
				<div class="second">
					<div class="photo">
						<img src="./images/mobile/item-1807.jpg">
						<p class="sub_photo">
							<img src="./images/mobile/logo-1807.png">
						</p>
					</div>
					<div class="second_two">
						<div class="title">
							<h1>
								DEDICATED TO CAT-LOVER GIRLS!
							</h1>
						</div>
						<div class="text">
							<p>
								고양이를 좋아하는 모든 여성들에게 선사하는 'Hot Cat CLUB' & 'TOBY THE CAT'.<br>
								어릴때부터 고양이를 너무 좋아하는 여자아이가, 성장해서 어른이 되어가는 스토리. <br>
								고양이를 좋아하는 여성이라면 꼭 봐야하는 오리지날 굿즈가 'Cat's ISSUE'와 'in private' 콜라보로 등장합니다. <br>
							</p>
							<p class="date">
								2018.09~
							</p>
						</div>
						<div class="link">
							<a href="#">자세히 보기</a>
						</div>
					</div>
				</div>
			</div>
			<!--e: contents_two2-->
			<!--s: contents_two3-->
			<div class="contents_two">
				<div class="second">
					<div class="photo">
						<img src="./images/mobile/item-1805.jpg">
						<p class="sub_photo">
							<img src="./images/mobile/logo-1805.jpg">
						</p>
					</div>
					<div class="second_two">
						<div class="title">
							<h1>
								DEDICATED TO CAT-LOVER GIRLS!
							</h1>
						</div>
						<div class="text">
							<p>
								고양이를 좋아하는 모든 여성들에게 선사하는 'Hot Cat CLUB' & 'TOBY THE CAT'.<br>
								어릴때부터 고양이를 너무 좋아하는 여자아이가, 성장해서 어른이 되어가는 스토리. <br>
								고양이를 좋아하는 여성이라면 꼭 봐야하는 오리지날 굿즈가 'Cat's ISSUE'와 'in private' 콜라보로 등장합니다. <br>
							</p>
							<p class="date">
								2018.09~
							</p>
						</div>
						<div class="link">
							<a href="#">자세히 보기</a>
						</div>
					</div>
				</div>
			</div>
			<!--e: contents_two3-->
		</div>
	</body>
</html>