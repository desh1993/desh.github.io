<?php
	// include_once 'mailerfunction.php';
	// if (isset($_POST['submit'])) {
	// 	$name = $_POST['name'];
	// 	$message = $_POST['message'];
	// 	$email = $_POST['email'];

	// 	$to = 'szemingrage@gmail.com';
	// 	$from = $email;
	// 	$from_name = $name;
	// 	$subject = 'enquiry';
	// 	$body = $message;
	// 	echo smtpmailer($to, $from, $from_name, $subject, $body);
	// }
?>
<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>My Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>My Portfolio</h1>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">Massively</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.html">This is Massively</a></li>
						</ul>
						<ul class="icons">
							<li><a href="https://www.linkedin.com/in/sudesh-wong-399734111/" class="icon fa-linkedin"><span class="label">linkedin</span></a></li>
							<li><a href="https://github.com/desh1993" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date"></span>
									<h2><a href="#">My Name is<br />
									Sudesh</a></h2>
									<p>I am a web developer who lives in Petaling Jaya, Malaysia<br />
									I do both front end and back end development.<br />
									I believe greatness is made through constant practice.</p>
								</header>
								<a href="#" class="image main"><img src="images/Pic.png" alt="" /></a>
								<ul class="actions special">
									<li><a href="#" class="button large">Check it out</a></li>
								</ul>
							</article>

						<!-- Posts -->
							<section class="posts">
								<article>
									<header>
										<h2><a href="#">Project 1</a></h2>
									</header>
									<a href="#" class="image fit"><img class="asb" src="images/asiaschoolofbussiness.png" alt="" /></a>
									<p>Client Name :  Asia School of Bussiness</p>
									<p>The technology used was Wordpress.</p>
									<p>I was tasked to Build them new plugins.</p>
									<p>One of my favourite features implemented was Ipay88 Integration.</p>
								</article>
								<article>
									<header>
										<h2><a href="#">Project 2</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/nike.png" alt="" /></a>
									<p>Client Name :  Nike </p>
									<p>The technology used was Pug and Sass.</p>
									<p>I was tasked to Build them custom EDMs.</p>
									<p>One of my favourite features was implementing their GO MORE GET MORE Campaign.</p>
								</article>
								<article>
									<header>
										<h2><a href="#">Project 3</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/channel.png" alt="" /></a>
									<p>Client Name :  Channel </p>
									<p>The technology used was Pug and Sass.</p>
									<p>I was tasked to Build them custom EDMs.</p>
									<p>One of my favourite features was implementing their Birthday EDM.</p>
								</article>
								<article>
									<header>
										<h2><a href="#">Project 4</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/ocbc.png" alt="" class="ocbc" /></a>
									<p>Client Name :  OCBC </p>
									<p>The technology used was Pug , Sass and Kotlin.</p>
									<p>I was tasked to Build them custom EDMs.</p>
									<p>One of my favourite features was implementing their VIP EDM which included QR code which user can scan with their phone.</p>
								</article>
								
							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="thankyoupage.php">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" required />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" required/>
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>No 18, Lorong SS5D/9A , KELANA JAYA , 47301 PETALING JAYA</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">016-6877890</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">szemingrage@gmail.com</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="https://www.linkedin.com/in/sudesh-wong-399734111/" class="icon fa-linkedin"><span class="label">linkedin</span></a></li>
									<li><a href="https://github.com/desh1993" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>