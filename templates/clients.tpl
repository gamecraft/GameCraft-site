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
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur lectus et eros
	feugiat fringilla sit amet vel lorem. Nullam magna dolor, vestibulum a porttitor non, blandit
	eget lorem. Nunc commodo nisi non felis auctor pellentesque. Vestibulum lobortis nulla ut ligula
	adipiscing eu pellentesque ligula facilisis. Ut ligula magna, suscipit ut posuere at, placerat id
	tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed
	scelerisque placerat fringilla.
</p>
<div class="clients_list">
	{foreach from=$clientsArray key=k item=v}
	
		<a class="client_logo" href="{$v->description_link}.html"><img src="../assets/clients/{$v->logo}.png" width="200" height="150" /></a>
	
	{/foreach}
</div>
{/block}