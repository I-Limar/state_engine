<?php
$cats = catsAll();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$fields = extractFields($_POST, ['title', 'content', 'id_cat']);
		$validateErrors = articlesValidate($fields);
		if(empty($validateErrors)){
			var_dump($fields);
			$id = articleAdd($fields);
			header("Location: index.php?c=article&id=$id");
			exit();
		}
	}
	else{
		$fields = ['title' => '', 'content' => '', 'id_cat' => ''];
		$validateErrors = [];
	}
$pageTitle = 'Add article';
$pageContent = template("v_form", [
	'fields' => $fields,
	'validateErrors' => $validateErrors,
	'cats' => $cats,
	'pageTitle' => $pageTitle
	
]);
?>
