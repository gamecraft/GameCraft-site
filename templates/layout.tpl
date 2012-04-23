<!DOCTYPE HTML>
<html>
	<head>
		<title> GameCraft - Gamification as a Service </title>
		<link type="text/plain" rel="author" href="http://game-craft.com/humans.txt" />
		<meta name="keywords" content="GameCraft, Bulgaria, Startup, Gamification as a Service, Gamification, Game Design, Playful Design, Motivational Design" />
		<meta name="description" content="GameCraft is the first Eastern-European Startup (Based in Bulgaria) that provides Gamification as a Service." />
		<meta name="author" content="Check humans.txt" />
		<meta charset="utf-8" />
		<meta property="og:title" content="GameCraft - Gamification as a Service" />
		<meta property="og:description" content="GameCraft is the first Eastern-European Startup (Based in Bulgaria) that provides Gamification as a Service." />
		<meta property="og:image" content="assets/logo.png" />
		<link rel="stylesheet" type="text/css" href="../styles/layout.css" />
		<link rel="stylesheet" type="text/css" href="../styles/reset.css" />
		{block name=head}{/block}
		<title>{block name=title}{/block}</title>
	</head>
	<body>
		<div id='nav_wrapper'>
			<div class='container'>
				<div id="email">
					<a class='email' href="mailto:level2@game-craft.com"> <img class="email_icon" width='24' height='14' src='../assets/mail_icon.png' alt="email immage" />level2@game-craft.com </a>
				</div>
				<ul id='nav_links'>
					<li class='nav'>
						<a href="http://www.game-craft.com/">Home</a>
					</li>
					<li class='nav'>
						<a href="http://www.game-craft.com/blog/about/">About Us</a>
					</li>
					<li class='nav'>
						<a href="http://eepurl.com/gssvf" target="_blank">Subscribe</a>
					</li>
					<li class='nav'>
						<a href="http://www.game-craft.com/blog/">Blog</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="header_container">
			<div class="header_small">
				<a href="http://www.game-craft.com/"><img class="horizontal_logo" src="../assets/gamecraft_logo_horizontal.png" width="198" height="53" /></a>
			</div>
		</div>
		<div id="content_wrapper">
			<div id="content">
				{block name=content}{/block}
			</div>
		</div>
		<div class="clear"></div>
		<div id="footer_wrapper">
			<div class="footer_content">
				<div id="callouts">
					<div class="menu left">
						<p class="menu_title">
							COMPANY
						</p>
						<ul>
							<li>
								<a href="/about.html">About us</a>
							</li>
							<li>
								<a href="/blog">Blog</a>
							</li>
							<li>
								<a href="mailto:level2@game-craft.com">Contact us</a>
							</li>
						</ul>
					</div>
					<div id="blog_container">
						<p class="menu_title">
							LATEST BLOG NEWS
						</p>
						<div class="homeblog">
							Loading blog posts...
						</div>
					</div>
					<div class="menu right">
						<p class="menu_title">
							KEEP IN TOUCH
						</p>
						<ul>
							<li>
								<a href="https://www.facebook.com/GameCraftBulgaria"><img class = 'follow_logo' width='16' height='16' src='../assets/f_facebook.png' alt="Follow us on Facebook" /></a>
								<a href="https://www.facebook.com/GameCraftBulgaria">Like us on Facebook</a>
							</li>
							<li>
								<a href="https://twitter.com/#!/BigFluffyOwl"><img class = 'follow_logo' width='16' height='16' src='../assets/f_twitter.png' alt="Follow us on Twitter" /></a>
								<a href="https://twitter.com/#!/BigFluffyOwl">Fluffy's Tweets</a>
							</li>
							<li>
								<a href="http://www.linkedin.com/company/game-craft"><img class = 'follow_logo' width='16' height='16' src='../assets/f_linkedin.png' alt="Follow us on LinkedIn" /></a>
								<a href="http://www.linkedin.com/company/game-craft">Follow us on LinkedIn</a>
							</li>
							<li>
								<a href="http://pinterest.com/gamecraftpin/"><img class = 'follow_logo' width='16' height='16' src='../assets/f_pinterest.png' alt="Follow us on Pinterest" /></a>
								<a href="http://pinterest.com/gamecraftpin/">Fluffy on Pinterest</a>
							</li>
						</ul>
					</div>
					<div class="contact_menu_container">
						<div class="contact_menu">
							<a class="mail_button rounded" href="mailto:level2@game-craft.com">Contact us now!</a>
							Copyright © 2012 by Game-Craft.
						</div>
					</div>
				</div>
			</div>
		</div>
		{include file="analytics.tpl"} <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/BigFluffyOwl.json?callback=twitterCallback2&count=2"></script>
	</body>
</html>
