<!DOCTYPE html>
	<head>
		<title>Tedd Arcuri | Web Designer &amp; Developer</title>

		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

		<!-- Typekit Fonts -->
		<script type="text/javascript" src="//use.typekit.net/tdf6ubl.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<!-- Stylesheet -->
		<link rel="stylesheet" href="/css/style.css" type="text/css" charset="utf-8">
	</head>
	<body>

		<!-- Navigation -->
		<nav>
			<a class="logo"></a>

			<ul class="navigation">
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
			<h1 class="headline"></h1>
			<div class="bottom-portion">
				<div class="name-container">
					<h1 class="name">T<img class="me-with-e" src="img/me-with-e.png" alt="" />dd</h1>
				</div>
				<div class="call-to-action">
					<span class="typed">I Design. I Code. I Solve Problems</span><br />
					<center>
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
		    $(".headline").typed({
		    	strings: ["Hello, my name is"],
		    	typeSpeed: 100
		    });
		});

	</script>
	</body>
</html>
