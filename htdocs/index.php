<?php include "./includes/header.php"; ?>
<article class="wrap">
	<section class="pad-top pad-bottom border-bottom">
		<h2>Installation</h2>
		<div class="row">
			<div class="six columns">
				<p>To start using Metalplate in your project, simply unpack into a new directory. You will then need to set some variables in <code>includes/styles.scss</code> to match your design, and <code>includes/header.php</code> to match your setup.</p>
			</div>
			<div class="six columns">
				<pre><code>$body-font: Muli, sans-serif;
$feature-font: Raleway, sans-serif;
$feature-color: rgba(102, 1, 152, 1);
@import "metalplate/metalplate";</code></pre>
				<pre><code>$productionURL = 'workshop.xes.io';
$fonts = array('Muli', 'Raleway');</code></pre>
			</div>
		</div>
	</section>

	<section class="pad-top pad-bottom border-bottom">
		<h2>Built-in Sass compilers</h2>
		<div class="row">
			<div class="six columns">
				<p>With the power of Sass, it's easy to customise Metalplate to match your style. By modifying a handful of variables it's possible to change everything from colours to breakpoints.</p>
			</div>
			<div class="six columns">
				<p>By compiling in PHP, you don't need to worry about installing any compilers of your own. By default, a development environment gets an uncompressed output while production gets all the whitespace stripped. Metalplate has it covered.</p>
			</div>
		</div>
	</section>

	<section class="pad-top pad-bottom border-bottom">
		<div class="row">
			<div class="six columns">
				<h2>Git integration</h2>
				<p>If you keep your project in Git, you can point a post-receive hook on your central repository at <code>yourdomain.com/git/</code>. Whenever you hit that URL, the latest version of the master branch will be pulled to the server.</p>
			</div>
			<div class="six columns">
				<h2>Server-side caching</h2>
				<p>By default, all pages are cached and served from cache automatically. To disable on confidential pages, set <code>$disableCache = true</code> on that page. Caching is always disabled in development environments.</p>
			</div>
		</div>
	</section>

	<section class="pad-top pad-bottom border-bottom">
		<h2>Server-side image compression</h2>
		<div class="row">
			<div class="six columns">
				<p>Metalplate includes <a href="http://www.binarymoon.co.uk/projects/timthumb/">TimThumb</a> to automate image compression. This means any size of image can be uploaded (within PHP memory limits) and displayed at a reasonable size on page load. This functionality is wrapped in a PHP function for ease of use.</p>
			</div>
			<div class="six columns">
				<pre><code>&lt;?php echo thumb('image.jpg', 300)?&gt;
<i>//300 = width of image in pixels</i></code></pre>
			</div>
		</div>
	</section>

	<section class="pad-top pad-bottom border-bottom">
		<div class="row">
			<div class="six columns">
				<h2><a href="//livereload.com">LiveReload</a> built in</h2>
				<p>Automatically included in development environments only, LiveReload is a tool that watches a project folder for changes and reloads the page when needed. To use, just install the application - the relevant JavaScript is included in Metalplate already.</p>
			</div>
			<div class="six columns">
				<h2>CDN libraries with local fallbacks</h2>
				<p>Save the file into <code>includes/external</code> to automatically pick up the files from CDN or the local copy depending on if you're in a production or development environment.</p>
				<p>To reference jQuery Mobile for example, use:
				<pre><code>&lt;?php echo externalFile('ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/', 'jquery.mobile.min.js')</code></pre></p>
				<p>Metalplate comes with <a href="//fortawesome.github.io/Font-Awesome/">Font Awesome</a>, <a href="//jquery.com">jQuery</a>, <a href="//modernizr.com/">Modernizr</a> and <a href="//necolas.github.io/normalize.css/">Normalize.css</a>.</p>
			</div>
		</div>
	</section>
	
	<section class="pad-top pad-bottom border-bottom">
		<div class="row">
			<div class="six columns">
				<h2>Responsive grid based on <a href="//github.com/dhg/Skeleton/">Skeleton</a></h2>
				<p>Metalplate comes with a modified version of Skeleton, which is a base boilerplate responsive grid. The standard Skeleton installation has been split into multiple partials for ease of updating and modification.</p>
				<p>Many additional styles have been added, such as Sass mixins, utility classes and variables for easy customisation.</p>
			</div>
			<div class="six columns">
				<h2><a href="//ogp.me">OpenGraph</a> integration</h2>
				<p>OpenGraph is a way to tell social networks more about your website. To use OpenGraph, there are PHP variables built-in to insert OpenGraph meta tags. Giving a page title results in the title being appended to the site name, separated by a <code>|</code>.</p>
				<pre><code>$pageTitle = 'Latest News';
$pageImage = 'news.jpg';
$pageDescription = 'The latest from an awesome project';</code></pre>
			</div>
		</div>
	</section>
	
	<section class="pad-top pad-bottom border-bottom">
		<h2>Forms</h2>
		<form action="#" method="post">
			<div class="row">
				<div class="four columns">
					<label for="name">Name</label> 
					<input type="name" id="name" name="name">
				</div>
				<div class="eight columns">
					<label for="email">Email</label>
					<input type="text" id="email" name="email">
				</div>
			</div>

			<div class="row">
				<div class="eight columns">
					<label for="subject">Subject</label>
					<input type="text" id="subject" name="subject">
				</div>
				<div class="four columns">
					<label for="reason">Reason</label>
					<select name="reason">
						<option value="Question">Question</option>
						<option value="Thanks">Thanks</option>
						<option value="Project idea">Project idea</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="twelve columns">
					<label for="message">
						<p>Message</p>
						<p class="fontsize-small faint">Tell me all about your project. Include details such as schedule, budget and example sites you like.</p>
					</label>
					<textarea name="message" id="message"></textarea>
				</div>
			</div>

			<div style="display:none;">
				<label for="blank">Please leave blank:</label>
				<input type="text" id="blank" name="blank">
			</div>
			
			<div class="row">
				<div class="twelve columns align-center fontsize-small">
					<button type="submit">Normal button</button>
					<button type="submit" class="button-primary">Primary button</button>
				</div>
			</div>
		</form>
	</section>

	<section class="pad-top pad-bottom border-bottom">
		<h2>Code</h2>
		<div class="row">
			<div class="six columns">
				<p>To display code inside a webpage, wrap it with <code>&lt;code&gt;&lt;pre&gt;</code>.</p>
				<p>Be sure to replace <code>&lt;</code> and <code>&gt;</code> with <code><i>&amp;lt;</i></code> and <code><i>&amp;gt;</i></code>.</p>
			</div>
			<pre class="six columns"><code>.fontsize-tiny { font-size: 12px }
.fontsize-small { font-size: 14px }
.fontsize-normal { font-size: 16px }
.fontsize-large { font-size: 21px }
.fontsize-xlarge { font-size: 28px }
.fontsize-huge { font-size: 37px }
.fontsize-xhuge { font-size: 50px }</code></pre>
		</div>
	</section>

	<section class="pad-top pad-bottom border-bottom">
		<h2>Tables</h2>
		<div class="row">
			<table class="twelve columns">
				<thead>
					<tr>
						<th>City</th>
						<th>Postcode</th>
						<th>County</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Berlin</td>
						<td>12209</td>
						<td>Germany</td>
					</tr>
					<tr>
						<td>London</td>
						<td>WA1 1DP</td>
						<td>United Kingdom</td>
					</tr>
					<tr>
						<td>Strasbourg</td>
						<td>67000</td>
						<td>France</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	<section class="pad-top pad-bottom border-bottom">
		<h2>Utility classes</h2>
		<ul>
			<li><code>.fontsize-tiny</code> to <code>.fontsize-xhuge</code> sets font sizing from 12px to 50px</li>
			<li><code>.block</code> for a full width colour band, with optional <code>.hcontrast</code> for a contrasting dark band with light text</li>
			<li><a href="nicolasgallagher.com/micro-clearfix-hack/">Clearfix</a> contained within <code>.float-container</code>, which holds <code>.float-left</code> and <code>.float-right</code></li>
			<li>Weighting modifiers <code>.faint</code> and <code>.bold</code> for text</li>
			<li>Capitalisation modifiers <code>.uppercase</code> and <code>.lowercase</code></li>
			<li><code>.align-left</code>, <code>.align-right</code> and <code>.align-center</code> for aligning text</li>
			<li><code>.pad-top</code>, <code>.pad-bottom</code> and <code>.no-margin</code> to help with spacing</li>
			<li><code>.border-bottom</code> for a quick line underneath an element</li>
		</ul>
	</section>
	
	<section class="pad-top pad-bottom border-bottom">
		<h2>Easy modification</h2>
		<div class="row">
			<div class="four columns">
				<p>Changing the boilerplate settings is as easy as changing PHP and Sass variables.</p>
				<p>For example, take fonts; just change a PHP array and the corresponding Sass variables to change the Google Fonts being loaded.</p>
			</div>
			<div class="four columns">
				<h3>PHP</h3>
				<p><pre><code>$fonts = array('Oxygen', 'Raleway');</code></pre></p>
			</div>
			<div class="four columns">
				<h3>Sass</h3>
				<p><pre><code>$body-font: Oxygen, sans-serif;
$feature-font: Raleway, sans-serif;</code></pre></p>
			</div>
	</section>
</article>
<?php include "./includes/footer.php"; ?>
