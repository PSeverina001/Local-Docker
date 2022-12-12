<?php

require_once "./function/render/renderFunction.php";
require_once '../vendor/autoload.php';

$template = renderTemplate(
	"./view/index.html"
);
renderLayout($template);
