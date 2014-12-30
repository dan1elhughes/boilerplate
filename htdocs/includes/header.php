<?php

$productionURL = 'workshop.xes.io'; //Your domain
$fonts = array('Source+Sans+Pro', 'Lato');

//If running on local machine, use devmode settings (don't cache, use local rather than CDN files)
$devMode = ($_SERVER['HTTP_HOST'] != $productionURL);

//Display all errors and warnings
error_reporting(-1);
ini_set('display_errors', 'On');

//Change URLs depending on whether server is development or production
$rooturl = $_SERVER['HTTP_HOST'];
$filepath = $_SERVER['DOCUMENT_ROOT'];

if ($devMode) {
	$rootpath='/';
	$stylesheet=$rootpath.'includes/style.dev.php/style.scss?reset=1';
}
else {
	$rootpath='/boilerplate/';
	$stylesheet=$rootpath.'includes/style.php/style.scss';
}

//Start caching
if (!$devMode) {
	$cache_time = 5; // Time in seconds to keep a page cached
	$cache_folder = $filepath.$rootpath.'includes/cache'; // Folder to store cached files (no trailing slash)
	$cache_filename = $cache_folder.md5($_SERVER['REQUEST_URI']).'html'; // Location to lookup or store cached file
	$cache_created  = (file_exists($cache_filename)) ? filemtime($cache_filename) : 0; //Check to see if this file has already been cached, if it has then get and store the file creation time

	if ((time() - $cache_created) < $cache_time) {
		readfile($cache_filename); // The cached copy is still valid, read it into the output buffer and exit
		die();
	}
}
ob_start(); //Start storing HTML rather than outputting directly, allows to replace title and description

//externalFile returns the local copy of a file, or the CDN copy if production
function externalFile($url, $file) {
	global $rootpath, $devMode;
	if ($devMode) {
		return $rootpath.'includes/external/'.$file;
	}
	else {
		return '//'.$url.$file;
	}
}

//thumb returns a compressed version of an image for faster page loading times
function thumb($src, $width) {
	global $rootpath;
	return $rootpath."images/thumb/&#63;w=$width&amp;src=$src";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Served from cache built at <?php echo date('Y-m-d H:i:s'); ?> -->

		<!-- Meta -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Cross-eyed Scripting">
		<meta name="description" content="<!--DESCRIPTION-->">

		<!-- Javascript -->
		<script type="text/javascript" src="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/', 'jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/', 'modernizr.min.js');?>"></script>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/', 'normalize.min.css');?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $stylesheet;?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/', 'font-awesome/4.2.0/css/font-awesome.min.css');?>"/>
		<link rel='stylesheet' type='text/css' href="//fonts.googleapis.com/css?family=<?php echo implode('&#124;', $fonts); ?>"/>

		<!-- Icons -->
		<link rel="icon" type="image/png" href="<?php echo $rootpath;?>images/favicon.png" />
		<link rel="apple-touch-icon" href="<?php echo $rootpath;?>images/favicon.jpg" />

		<!-- Opengraph social media integration -->
		<meta property="og:image" content="<!--IMAGE-->"<?php $pageImage = "http://".$rooturl.$rootpath."images/logo.jpg";?>>
		<meta property="og:title" content="<!--TITLE-->">
		<meta property="og:description" content="<!--DESCRIPTION-->"<?php $pageDescription = 'Page description needs to be reset in header.';?>>
		<meta property="og:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>"/>

		<!-- Proof of authorship -->
		<link rel="author" href="https://plus.google.com/+DanHughes0/"/>

		<title><!--TITLE--></title>
	</head>
	<body>
		<div class="float-container site-container">
			<!--[if IE]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
			<header class="block border-bottom">
				<div class='wrap'>
					<div class="row">
						<div class="ten columns align-center">
							<h1 class="fontsize-large no-margin">XES Boilerplate</h1>
						</div>
					</div>
				</div>
			</header>
			<div id="content"> <!-- Begin page content -->
