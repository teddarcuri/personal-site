<!DOCTYPE html>
	<head>
		<title>Tedd Arcuri | Web Designer &amp; Developer</title>

		<!-- Stylesheet -->
		<link rel="stylesheet" href="/css/style.css" type="text/css" charset="utf-8">
	</head>
	<body>

		<!-- Navigation -->
		<nav>
			<ul class="navigation">
				<a class="logo"></a>
				<li><a href="">Me, The Person</a></li>
				<li><a href="">My Work</a></li>
				<li><a href="">(Some Of) My Thoughts</a></li>
				<li><a href="">Contact Me</a></li>
			</ul>

			<ul class="social">
				<li><img src="img/github.svg" alt="Github" /></li>
				<li><img src="img/twitter.svg" alt="Twitter" /></li>
				<li><img src="img/linkedin.svg" alt="LinkedIn" /></li>
			</ul>
		</nav> <!-- End Nav -->

		<!-- Hello, My Name Is -->
		<div class="hello">
			<h1 class="headline">Hello, my name is</h1>

			<div class="bottom-portion">
				<div class="name-container">
					<h1 class="name">T<img class="me-with-e" src="img/me-with-e.png" alt="" />dd</h1>
				</div>
				<div class="call-to-action">
					<center>
					<div class="typed"></div>
					<a class="button">A little about me</a>
					<a class="button">See my work</a>
					</center>
				</div>
			</div>
		</div> <!-- End Hello -->
	<!-- Javascript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/fittext.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/typed.js" type="text/javascript" charset="utf-8"></script>
	<script>

  	  $(".headline").fitText();
		$(".name").fitText(0.3);

		$(function(){
		    $(".typed").typed({
		    strings: ["I Design. I Code. I Solve Problems."],
		    typeSpeed: 100
		    });
		});

	</script>
	</body>
</html>
