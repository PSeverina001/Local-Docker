<?php

function renderTemplate(string $path, array $templateData = []): string
{
	if (!file_exists($path)) {
		return " renderTemplate file is not exist : " . $path;
	}

	extract($templateData, EXTR_OVERWRITE);
	ob_start();
	include $path;
	return ob_get_clean();
}

function renderLayout(string $content, array $templateData = []): void
{
	$data = array_merge($templateData, [
		'content' => $content,
	]);
	$result = renderTemplate("./view/index.html", $data);

	echo $result;
}