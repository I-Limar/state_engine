<?php

function catsAll (): array {
    $sql = "SELECT * FROM cats";
    $query = dbQuery($sql);
    return $query->fetchAll();
}

function getCatById (int $id): array {
    $sql = "SELECT cats.* FROM cats 
    JOIN article USING (id_cat) 
    WHERE id_article = :id";
	$query = dbQuery($sql, ['id'=>$id]);
    $arr = $query->fetch();
    if ($arr) {
        return $arr; 
    }
    else {return $arr=[];}
}