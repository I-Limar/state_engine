<?php

	include_once('core/db.php');

	function articlesAll() : array{
		$sql = "SELECT * FROM article ORDER BY dt_add DESC";
		$query = dbQuery($sql);
		return $query->fetchAll();
	}

	function articleAdd(array $fields) : int{
		$sql = "INSERT INTO article (title, content, id_cat) VALUES (:title, :content, :id_cat)";
		dbQuery($sql, $fields);
		return returnLastId();
	}
	function getArticle (int $id): array {
		$sql = "SELECT * FROM article WHERE id_article = :id";
	$query = dbQuery($sql, ['id'=>$id]);
		$arr = $query->fetch();
		if ($arr) {
			return $arr; 
		}
		else {return $arr=[];}		$query = dbQuery($sql, ['id'=>$id]);
		$arr = $query->fetch();
		if ($arr) {
			return $arr; 
		}
		else {return $arr=[];}	
	}
	function removeArticle (int $id): bool {
		$sql = "DELETE FROM article WHERE id_article = :id";
		$query = dbQuery($sql, ['id'=>$id]);
		return true;
	}
	function upArticle(int $id, array $fields) : bool{
		$sql = "UPDATE article SET title = :title, content = :content, id_cat = :id_cat WHERE id_article =$id";
		dbQuery($sql, $fields);
		return true;
	}
	function articlesValidate(array &$fields) : array{
		$errors = [];
		$textLen = mb_strlen($fields['content'], 'UTF-8');

		if(mb_strlen($fields['title'], 'UTF-8') < 2){
			$errors[] = 'Заголовок не короче 2 символов!';
		}

		if($textLen < 10 || $textLen > 140){
			$errors[] = 'Текст от 10 до 140 символов!';
		}
		if(empty($fields['id_cat'])) {
			$errors[] = 'Выберете категорию!';
		}

		$fields['title'] = htmlspecialchars($fields['title']);
		$fields['content'] = htmlspecialchars($fields['content']);
		return $errors;
	}
	function getArticleByCat (string $url):array {
		$sql = "SELECT article.* FROM article
		JOIN cats USING (id_cat) WHERE
		cats.url = :url";
		$query = dbQuery($sql, ['url'=>$url]);
		return $query->fetchAll();
	}