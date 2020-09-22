<?php
	$id = URL_PARMAS[1] ?? '';
	$res = removeArticle($id);
	/*
		your code here
		get id from url
		check id
		call removeArticle
	*/
$pageTitle = 'delete article';
$pageContent = template("v_delete", [
		'res' => $res
	]);

?>
