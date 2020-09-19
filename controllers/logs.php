<?php

$showDay = isset($_GET['dt']);
$name ='';
$e404 =''; 
$visits ='';
$visitsDays ='';
if($showDay){
	$name = $_GET['dt'] ?? '';
	$e404 = !hasVisitsDay($name);
	$visits = getVisits($name);
}
else{
	$visitsDays = getVisitsDays();
}
$pageTitle = 'One article';
$pageContent = template("v_logs", 
[
'name' => $name,
'e404' => $e404,
'visits' => $visits,
'visitsDays' => $visitsDays,
'showDay' =>$showDay
]);
?>
