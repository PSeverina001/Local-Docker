<?php

session_start();

$_SESSION['USER']=[
	'name'=>$_GET['name'],
	'surname'=>$_GET['surname'],
	'age'=>(int)$_GET['age'],
];

require_once('hello.php');
?>

<main>
	<a href="read-session.php">Проверить сессию</a>
</main>
