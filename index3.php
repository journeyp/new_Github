<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<title>박지원 포트폴리오</title>
		<link rel=" shortcut icon" href="./images/portfolio/favicon.ico">
		<link rel="icon" href="./images/portfolio/favicon.ico">

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

		<!--font-->
		<link href="https://fonts.googleapis.com/css?family=Lato|Noto+Sans+KR" rel="stylesheet">

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

		<style>
			*{
				padding: 0;
				margin: 0;
				text-decoration: none;
			}

			body{
				font-family: 'Noto Sans KR', sans-serif;	
			}


			/*main*/
			.main{
				height: 100vh;
				background-image: url("./images/portfolio/the-sun-rising-over-the-horizon-pink-sea-surface-and-sea-gulls-in-the-sky_sjudnipvg_thumbnail-full01.png");
				background-size: cover;
				background-position: center;
			}
			.main h1{
				text-align: right;
			}
			.main h1 > img{
				width: 250px;
			}




			.info{
				height: 800px;
			}

			/*info_profile*/
			.info_profile{
				width: 50%;
				background: #f6cac9;
				float: left;
				height: 800px;
			}
			.profile{
				padding: 10px;
				margin: 0 auto;
			}
			.profile h1{
				margin: 50px 0;
				text-align: center;
				color: #fff;
			}
			.profile_list{
				list-style: none;
				width: 400px;
				margin: 0 auto;
			}
			.profile_list > li{
				height: 25px;
				margin: 5px 0;
			}
			.user{
				background-image: url("./images/portfolio/user (2).png");
				background-repeat: no-repeat;
				background-size: 25px;
			}
			.email{
				background-image: url("./images/portfolio/mail.png");
				background-repeat: no-repeat;
				background-size: 25px;
			}
			.mod{
				background-image: url("./images/portfolio/check (2).png");
				background-repeat: no-repeat;
				background-size: 25px;
			}
			.study{
				background-image: url("./images/portfolio/check (2).png");
				background-repeat: no-repeat;
				background-size: 25px;
			}
			.drive{
				background-image: url("./images/portfolio/plus.png");
				background-repeat: no-repeat;
				background-size: 25px;
			}
			.japan{
				background-image: url("./images/portfolio/plus.png");
				background-repeat: no-repeat;
				background-size: 25px;
			}
			.profile_list > li > p{
				font-size: 15px;
				margin-left: 40px;
				color: #fff;
			}

		
			.appeal{
				width: 500px;
				margin: 0 auto; 
			}
			.appeal > p{
				font-size: 15px;
				line-height: 25px;
				color: #fff;
			}

			/*info_skill*/
			.info_skill{
				width: 50%;
				background: #ebb4b3;
				float: right;
				height: 800px;
			}

			.skills{
				width: 450px;
				margin: 0 auto;
			}

			.skills h1{
				padding-top: 50px;
				border-radius: 15px;
				color: #fff;
				text-align: center;
			}

			.skills p{
				margin: 10px;
				color: #fff;
				font-weight: bold;
			}

			.skill_set{
				width: 100%;
				background-color: #ddd;
				border-radius:12px;
			}
			.skill{
				color: #fff;
				text-align: right;
				padding: 5px;
				font-weight: bold;
				border-radius: 12px;
			}
			.html{
				width: 90%; 
				background-color: #f6cac9;
			}
			.css{
				width: 90%; 
				background-color: #f6cac9;
			}
			.java{
				width: 75%; 
				background-color: #f6cac9;
			}
			.php{
				width: 50%; 
				background-color: #f6cac9;
			}
			.photoshop{
				width: 90%; 
				background-color: #f6cac9;
			}
			
			/*work*/
			.works{
				width: 80%;
				margin: 0 auto; 
				margin-top: 30px;
			}
			.works h1{
				text-align: center;
				margin: 80px 0;
				font-size: 50px;
			}
			.photo img{
				width: 100%;
			}

			.page_first{
				height: 600px;
				margin-top: 30px;
			}
			.page_first > .photo{
				width: 50%;
				float: left;
			}
			.page_first > .introduce{
				width: 50%;
				float: right;
			}

			.page_second{
				height: 600px;
				margin-top: 30px;
			}
			.page_second > .photo{
				width: 50%;
				float: right;
			}
			.page_second > .introduce{
				width: 50%;
				float: left;
			}


			.button{
				margin-top: 50px;
			}

			.pc, .mobile{
				border: 2px solid #000;
				padding: 15px 40px;
				border-radius: 20px;
				color: #000;
				font-weight: bold;
				margin-top: 30px;
			}

			/*footer*/
			.footer{
				background-color: #ebb4b3;
				margin-top: 30px;
				padding: 30px 0;
			}
			.footer p{
				text-align: center;
				color: #fff;
				font-size: 10px;
			}

			/*media query*/
			@media screen and (max-width: 980px){
				.info{
					height: 1600px;
				}
				.info_skill{
					width: 100%;
					float: none;
					height: 800px;
				}
				.info_profile{
					width: 100%;
					float: none;
					height: 800px;
				}
				.page_first{
					height: 800px;
				}
				.page_first > .photo{
					width: 100%;
					float: none;
				}
				.page_first > .introduce{
					width: 100%;
					float: none;
				}
				.page_second{
					height: 800px;
				}
				.page_second > .photo{
					width: 100%;
					float: none;
				}
				.page_second > .introduce{
					width: 100%;
					float: none;
				}

			}

		</style>
	</head>
	<body>
		<div class="wrap">

			<!--s: 01.main-->
			<section class="main">
				<div>
					<h1>
						<img src="./images/portfolio/main_.png">
					</h1>
				</div>
			</section>
			<!--e: 01.main-->

			<!--s: 02.info-->
			<div class="info">
				<div class="info_profile">
					<div class="profile" data-aos="fade-right" >
						<h1>Profile</h1>
						<ul class="profile_list">
							<li class="user">
								<p>박지원 / Web Publisher</p>
							</li>
							<li class="email">
								<p>E-mail / la_junny@naver.com</p>
							</li>
							<li class="mod">
								<p>모드 컴퓨터 학원 퍼블리셔 과정 수료</p>
							</li>
							<li class="study">
								<p>웹 디자인 기능사 필기 합격</p>
							</li>
							<li class="drive">
								<p>2종 보통 운전면허</p>
							</li>
							<li class="japan">
								<p>6개월간의 일본 여학연수로 의사소통 가능</p>
							</li>
						</ul>
						<h1>Appeal</h1>
						<div class="appeal">
							<p>밝은 성격이라 어느 환경에서도 잘 적응하는 편입니다</p>
							<p>부족한 부분이 있으면 그 부분을 배워나가는 것에 두려움이 없습니다</p>
							<p>다른 신입들보다 늦은만큼 빠른 습득을 하여 회사에 도움이 되고 싶습니다</p>
						</div>
					</div>
				</div>
				<div class="info_skill">
					<div class="skills" data-aos="fade-left">
						<h1>Skill</h1>
						<p>HTML5</p>
						<div class="skill_set">
							<div class="skill html">90%</div>
						</div>
						<p>CSS3</p>
						<div class="skill_set">
							<div class="skill css">90%</div>
						</div>
						<p>JavaScript / jQuery</p>
						<div class="skill_set">
							<div class="skill java">75%</div>
						</div>
						<p>PHP / MySQL</p>
						<div class="skill_set">
							<div class="skill php">50%</div>
						</div>
						<p>Photoshop</p>
						<div class="skill_set">
							<div class="skill photoshop">90%</div>
						</div>
					</div>
				</div>
			</div>
			<!--e: 02.info-->
			
			<!--s: works-->
			<div class="works" >
				<h1 data-aos="fade-up">Works</h1>
				<div class="page_first" data-aos="fade-right">
					<div class="photo">
						<div>
							<img src="./images/portfolio/apple_melona.jpg">
						</div>
					</div>
					<div class="introduce">
						<h2>
							<h3>01. PLAZA ONLINE MAIN PAGE </h3>
							<p>CODING 100% - HTML, CSS, AOS, SLICK, jQuery를 이용하여 만들었습니다</p>
						</h2>
						<div class="button">
							<a class="pc" href="http://journeyp.net/melona/">PC</a>
							<a class="mobile" href="http://journeyp.net/melona/index_m.php">Mobile</a>
						</div>
					</div>
				</div>
				<div class="page_second" data-aos="fade-left">
					<div class="photo">
						<div>
							<img src="./images/portfolio/apple_inprivate.jpg">
						</div>
					</div>
					<div class="introduce">
						<h2>
							<h3>02. PLAZA JAPAN INPRIVATE PAGE</h3>
							<p>CODING 100% - HTML, CSS, AOS을 이용하여 만들었습니다</p>
						</h2>
						<div class="button">
							<a class="pc" href="http://journeyp.net/melona/inprivate.php">PC</a>
							<a class="mobile" href="http://journeyp.net/melona/inprivate_m.php">Mobile</a>
						</div>
					</div>
				</div>
			</div>
			<!--e: works-->
			
			<div class="footer">
				<div>
					<p>Copyright 2019. journeyp. All rights reserved.</p>
				</div>
			</div>
		</div>
	</body>
</html>