<?php
	$id  = (int)$_GET['id'] ?? '';
	$article = getArticle($id);
	$cat = getCatById ($id);
	$hasPost = $article !== [];
	if($hasPost){
		$pageTitle = 'One article';
		$pageContent = template("v_article", 
		[
		'cat' => $cat,
		'article' => $article,
		'id' => $id
		]);
	}
	else{
		$pageContent = template('errors/v_404');
	}
?>
