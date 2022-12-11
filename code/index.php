<?php

require_once ('../vendor/autoload.php');
require_once ('../.env/constants.php');

$mysqli=new mysqli('db','root','helloworld','web');
if ($result=$mysqli->query('SELECT * FROM ad ORDER BY created DESC')){
	$advertisement=$result->fetch_all();
}

//SET
if (isset($_POST['email']) && isset($_POST['title']) && $_POST['category'] && $_POST['description'])

{
	$mysqli->query('INSERT INTO ad(email,title,category,description) 
VALUES("'. $_POST['email'] .'","'.$_POST['title'] .'","'.$_POST['category'].'","'.$_POST['description'].'")');
	Header('Location: '.$_SERVER['PHP_SELF']);
}
require_once('hello.php');
?>


