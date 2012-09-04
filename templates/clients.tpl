{extends file="layout.tpl"}

{block name=title}GameCraft - Our Clients{/block}

{block name=head}
<link rel="stylesheet" type="text/css" href="../styles/clients.css" />
{/block}

{block name=content}
<div class="breadcrumb">
	<a href="http://www.game-craft.com/">Home</a>
	&gt;
	Our Clients
</div>
<h2 class='title rounded' title='OUR CLIENTS'>OUR CLIENTS</h2>
<p class="clients_info">
	These are our noteworthy clients. It was interesting and challenging to work with them and we hope we've managed to thrive together. We really enjoy working on cool projects, that's why we pick our clients carefully so we have to be thrilled working on their project.
</p>
<div class="clients_list">
	{foreach from=$clientsArray key=k item=v}
	
		<a class="client_logo" href="{$v->description_link}"><img src="../assets/clients/{$v->logo}.png" width="200" height="150" /></a>
	
	{/foreach}
</div>
{/block}