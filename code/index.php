<?php

session_start();

$_SESSION['USER']=[
	'name'=>$_GET['name'],
	'surname'=>$_GET['surname'],
	'age'=>(int)$_GET['age'],
	'salary'=>(int)$_GET['salary'],
	'color'=>$_GET['color'],
];

require_once('hello.php');
?>

<main>
	<a href="read-session.php">Проверить сессию</a>
</main>
