<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1> Rahman Ramsi</h1>
						<p>Developer &nbsp;&bull;&nbsp; Gamer &nbsp;&bull;&nbsp; Cyborg</p>
						<nav>
							<ul>
								<li><a href="https://facebook.com/rahmanramsi" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/rahmanramsi/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://github.com/rahmanramsi" class="icon fa-github"><span class="label">Github</span></a></li>
								<li><a href="mailto:someone@example.com?Subject=Hello%20again" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
								<li><a href="<?php echo site_url('login'); ?>" class="icon fa-chrome"><span class="label">Login</span></a></li>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Ramsi.</span>
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>