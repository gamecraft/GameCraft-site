{extends file="layout.tpl"}

{block name=title}GameCraft - Hall of Fame{/block}

{block name=head}
<link rel="stylesheet" type="text/css" href="../styles/hall-of-fame-index.css" />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js'></script>
<script type="text/javascript" src="../javascript/hall-of-fame.js"></script>
{/block}

{block name=content}
<div class="breadcrumb">
	<a href="http://www.game-craft.com/">Home</a>
	&gt;
	Hall of Fame
</div>

<div class="hall-of-fame-title">
	<span class="hall-title" >Hall <span class="italic small">of</span> FAME</span>
</div>

<div class="list-choice" >
		<a href="achievements.php"><img class = 'achievements_button' width='215' height='222' src='../assets/hall-of-fame/achievements_txt_btn.png' alt="Achievements" /></a>
		<a href="individuals.php"><img class = 'individuals_button' width='215' height='222' src='../assets/hall-of-fame/individuals_txt_btn.png' alt="Individuals" /></a>

</div>
{/block}