<div class="content">
	<div class="article">
		<h1><?=$article['title']?></h1>
		<p> <?=$cat['title']?>
			<div><?=$article['content']?></div>
			<hr>
			<a href="index.php?c=delete&id=<?=$id?>">Remove</a> | 
			<a href="index.php?c=edit&id=<?=$id?>">Edit</a>
	</div>
</div>
