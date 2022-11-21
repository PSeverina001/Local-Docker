<?php

require_once('hello.php');

$wordInString=str_word_count($_POST['text']);
$cutString=trim($_POST['text']," ");
$cutString=strlen($cutString);
echo "Слов в строке: {$wordInString} <br>";
echo "Символов в строке: {$cutString}";