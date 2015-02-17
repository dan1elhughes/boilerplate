<?php
	require('cache.php');
	$cache = new Cache($_SERVER['DOCUMENT_ROOT'].$rootpath.'includes/packages/cache/cache/');
	$cache->setSuffix('.cache.html');
	$cache->setTimeout(5);

	$cache->start($_SERVER['REQUEST_URI']);
?>
