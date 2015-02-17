<?php include "../includes/header.php";

$template = $metalplate->loadTemplate('article.html');

$pageSettings = array(
	"title" => "Amazing Title",
	"author" => "Dan Hughes",
	"content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
);

$template->render($pageSettings);

include "../includes/footer.php"; ?>
