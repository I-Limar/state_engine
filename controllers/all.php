<?php

$cats = catsAll ();
$url =  '';

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


	