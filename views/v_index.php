<h1>All articles</h1>
	<hr>
<div>
	<? foreach($articles as $article): ?>
	<? foreach ($cats as $cat){
		if ($cat['id_cat']==$article['id_cat']){
		$titleCat = $cat['title'];
		$urlCat = $cat['url'];
		}
	}?>
		<div >
			<h2><?=$article['title']?></h2>
			<p><?=$article['dt_add']?></p>
			<p><a href="<?=BASE_URL?><?=$urlCat?>">
			<?=$titleCat?>
            </a>
			</p>
			<a href="<?=BASE_URL?>article/<?=$article['id_article']?>">
            Read more
            </a>
            <hr>
		</div>
	<? endforeach; ?>
</div>