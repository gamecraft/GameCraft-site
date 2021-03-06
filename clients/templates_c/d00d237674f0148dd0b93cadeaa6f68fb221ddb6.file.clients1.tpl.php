<?php /* Smarty version Smarty-3.1.8, created on 2012-04-19 17:48:11
         compiled from "../templates\clients1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201624f903390775a09-08626347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd00d237674f0148dd0b93cadeaa6f68fb221ddb6' => 
    array (
      0 => '../templates\\clients1.tpl',
      1 => 1334850489,
      2 => 'file',
    ),
    'a6545942fca3e1de6962c830d77cf2837c8f99fa' => 
    array (
      0 => '../templates\\layout.tpl',
      1 => 1334850190,
      2 => 'file',
    ),
    '22ddca696bd55a0853abd0396aea808c37affad0' => 
    array (
      0 => '../templates\\analytics.tpl',
      1 => 1333810878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201624f903390775a09-08626347',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f903390dbfec0_43698221',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f903390dbfec0_43698221')) {function content_4f903390dbfec0_43698221($_smarty_tpl) {?><!DOCTYPE HTML>
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
		
<link rel="stylesheet" type="text/css" href="../styles/clients1.css" />

		<link rel="stylesheet" type="text/css" href="../styles/layout.css" />
		<link rel="stylesheet" type="text/css" href="../styles/reset.css" />
		<title>GameCraft - Our Clients</title>
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
				
<div class="breadcrumb">
	<a href="http://www.game-craft.com/">Home</a>
	&gt;
	Our Clients
</div>
<h2 class='title rounded' title='OUR CLIENTS'>OUR CLIENTS</h2>
<p class="clients_info">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur lectus et eros
	feugiat fringilla sit amet vel lorem. Nullam magna dolor, vestibulum a porttitor non, blandit
	eget lorem. Nunc commodo nisi non felis auctor pellentesque. Vestibulum lobortis nulla ut ligula
	adipiscing eu pellentesque ligula facilisis. Ut ligula magna, suscipit ut posuere at, placerat id
	tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed
	scelerisque placerat fringilla.
</p>
<div class="clients_list">
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['clientsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<div class="client_logo">
		<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value->description_link;?>
.html"><img src="../assets/clients/<?php echo $_smarty_tpl->tpl_vars['v']->value->logo;?>
.png" width="200" height="150" /></a>
	</div>
	<?php } ?>
</div>

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
		<?php /*  Call merged included template "analytics.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '201624f903390775a09-08626347');
content_4f9033bb27ce53_27763801($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "analytics.tpl" */?> <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/BigFluffyOwl.json?callback=twitterCallback2&count=2"></script>
	</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-04-19 17:48:11
         compiled from "../templates\analytics.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4f9033bb27ce53_27763801')) {function content_4f9033bb27ce53_27763801($_smarty_tpl) {?>		<script type="text/javascript">
		
			<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29799450-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		
		</script><?php }} ?>