<!DOCTYPE HTML>
<html>
	<head>
		<title> GameCraft - Our Clients </title>
	</head>
	<body>
		<ul>
			{foreach from=$clientsArray key=k item=v}
			<li>
				{$k}: {$v->logo};
				{$k}: {$v->description_link};
			</li>
			{/foreach}
		</ul>
	</body>
</html>
