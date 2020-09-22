<div class="content">
	<div class="article">
		<h1><?=$article['title']?></h1>
		<p> <?=$cat['title']?>
			<div><?=$article['content']?></div>
			<hr>
			<a href="<?=BASE_URL?>delete/<?=$id?>">Remove</a> | 
			<a href="<?=BASE_URL?>edit/<?=$id?>">Edit</a>
	</div>
</div>
