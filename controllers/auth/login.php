<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $remember = isset($_POST['remember']);
    
    $user = usersOne($login); 
    var_dump($user);// находит пользователя в базе по логину

//    // if($user !==null && pv($password, $user['password'])) {
//         echo 'good'; 
//         //проверить совпадения паролей 
//     } 


    $authErr = true;

} else {
    $authErr = false;
}

$pageTitle = 'login';
$pageContent = template ('auth/v_login',['authErr' => $authErr]);
