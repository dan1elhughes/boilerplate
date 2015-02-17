		</div> <!-- End page content -->
	<footer class="block hcontrast">
		<div class='wrap'>
			<div class="row">
				<div class="twelve columns align-center">
					<a class="fontsize-huge twelve columns" href="//github.com/dan1elhughes/metalplate"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</div>
	</footer>
</div>

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
	(function(x,e,s,d,a,n){x.GoogleAnalyticsObject=d;x[d]||(x[d]=
	function(){(x[d].q=x[d].q||[]).push(arguments)});x[d].d=+new Date;
	a=e.createElement(s);n=e.getElementsByTagName(s)[0];
	a.src='//www.google-analytics.com/analytics.js';
	n.parentNode.insertBefore(a,n)}(window,document,'script','ga'));
	//ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<?php } ?>
</body>
</html>
<?php
$pageTitle = (isSet($pageTitle) ? ' | '.$pageTitle : NULL);

$cache->setReplacements(array(
	'<!--TITLE-->' => $siteName.$pageTitle,
	'<!--IMAGE-->' => $pageImage,
	'<!--DESCRIPTION-->' => $pageDescription,
	'<!--CACHE-->' => '<!-- Cached file - built at ' . date('H:i:s', time()) . ' -->'
));

$cache->finish();
?>
