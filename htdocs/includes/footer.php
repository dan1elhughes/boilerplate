</div>
<footer>
	<div class='wrap'>
	</div>
</footer>

<!-- Developer-defined javascript & jQuery -->
<script src="<?php echo $rootpath;?>includes/scripts.js"></script>

<?php if ($devMode) {?>
<!-- If developer mode, insert LiveReload script http://livereload.com/ -->
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>
<?php } else { ?>
<!-- Otherwise, add Google Analytics (Replace UA-XXX with actual values) -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
//	ga('create', 'UA-XXXXXXXX-X', 'SiteName');
//	ga('send', 'pageview');
</script>
<?php } ?>
</body> 
</html>
<?php

//Replace variables into the HTML, cache the page if devMode, then output the final HTML to screen
$output = ob_get_contents (); // Get all the page's HTML into a string
ob_end_clean (); // Wipe the buffer
if (isset($pageTitle)) {
	$pageTitle = ' | ' . $pageTitle;
}
else {
	$pageTitle = NULL;
}
// Replace <!--VARS--> with $pageVars contents
$output = str_replace('<!--TITLE-->', "GRAVITY" . $pageTitle, $output);
$output = str_replace('<!--IMAGE-->', $pageImage, $output);
$output = str_replace('<!--DESCRIPTION-->', $pageDescription, $output);
$output = str_replace('<!--CACHE-->', '<!-- Cached file - built at ' . date('H:i:s', time()) . ' -->', $output);

if (!$devMode) { file_put_contents($cache_filename, $output); }

//output everything
echo $output; ?>