<?php 

function usersOne (string $login): ?array {
	$sql = "SELECT * FROM users WHERE login = :login";
	$query = dbQuery($sql, ['login'=>$login]);
    $users = $query->fetch();
    return $users === false ? null: $users;
	}