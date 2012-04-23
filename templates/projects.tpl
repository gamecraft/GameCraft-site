{extends file="layout.tpl"}

{block name=title}GameCraft - Our Projects{/block}

{block name=head}
<link rel="stylesheet" type="text/css" href="../styles/projects.css" />
{/block}

{block name=content}
<div class="breadcrumb">
	<a href="http://www.game-craft.com/">Home</a>
	&gt;
	Our Projects
</div>
<h2 class='title rounded' title='OUR CLIENTS'>OUR PROJECTS</h2>
<p class="projects_info">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur lectus et eros
	feugiat fringilla sit amet vel lorem. Nullam magna dolor, vestibulum a porttitor non, blandit
	eget lorem. Nunc commodo nisi non felis auctor pellentesque. Vestibulum lobortis nulla ut ligula
	adipiscing eu pellentesque ligula facilisis. Ut ligula magna, suscipit ut posuere at, placerat id
	tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed
	scelerisque placerat fringilla.
</p>
<div class="projects_list">

	<a class="project" href="http://game-lab.co/" target="_blank" >
	<div class="project_image"><img src="../assets/projects/gamelab.png" width="400" height="120" alt="GameLab" />
	</div>
	<div class="project_description">
		Build quick and easy incentive programs and gamification layers with Game Lab to measure and influence user behavior.
	</div> </a>

	<a class="project" href="#">
	<div class="project_image"><img src="../assets/projects/secret.png" width="400" height="120" alt="GameLab" />
	</div>
	<div class="project_description">
		Comming soon...
	</div> </a>

</div>
{/block}