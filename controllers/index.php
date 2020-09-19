<?php

$cats = catsAll ();
$url = $_GET['cat'] ?? '';

if ($url) {
	$articles = getArticleByCat($url);
} else {
	$articles = articlesAll();
}

$pageTitle = 'All articles';
$pageContent = template("v_index", [
	'articles' => $articles,
	'cats' =>$cats
]);
?>


	