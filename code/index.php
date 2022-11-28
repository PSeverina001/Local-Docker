<?php

$dir = opendir('category');
while($file = readdir($dir)) {
	if (is_dir('category/'.$file) && $file != '.' && $file != '..') {
		$category[]=$file;
		$filepath='category/'.$file;
		$files=scandir($filepath);
		foreach ($files as $item){
			if($item != "." && $item != ".."){
				$path=$filepath.'/'.$item;
				$data=fopen($path,"r");
				$advert=[
					'head'=>substr($item, 0, -4),
					'info'=>fgets($data),
					'category'=>$file,
				];
				$advertisement[]=$advert;
			}
		}
	}
}

$filename='category/'.$_POST['category'].'/'.$_POST['head'].'.txt';
file_put_contents($filename, $_POST['info']);

require_once('hello.php');
?>


