<?php
	$id  = (int)$_GET['id'] ?? '';
	$article = getArticle($id);
	$cats = catsAll();
	$OneCat = getCatById($id);
	$hasPost = $article !== [];
	if($hasPost){
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$fields = extractFields($_POST, ['title', 'content', 'id_cat']);
		$validateErrors = articlesValidate($fields);
		if(empty($validateErrors)){
			upArticle($id, $fields);
			header("Location: index.php?c=article&id=$id");
			exit();
		}
	}
	else{
		
		$fields['title'] = $article['title'];
		$fields['content'] = $article['content'];
		$fields['id_cat'] = $OneCat['id_cat'];
		$validateErrors = [];
	}
	$pageTitle = 'Edit article';
	$pageContent = template("v_form", [
	'fields' => $fields,
	'validateErrors' => $validateErrors,
	'cats' => $cats,
	'pageTitle' => $pageTitle
	]);
	}
	else{
		$pageContent = template('errors/v_404');
	}
?>
