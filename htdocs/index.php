<?php include "./includes/header.php"; ?>
<article class="wrap">
	<section>
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

	<section>
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

	<section>
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

	<section>
		<h2>Code</h2>
		<div class="row">
			<pre class="six columns"><code>.fontsize-tiny { font-size: 12px }
.fontsize-small { font-size: 14px }
.fontsize-normal { font-size: 16px }
.fontsize-large { font-size: 21px }
.fontsize-xlarge { font-size: 28px }
.fontsize-huge { font-size: 37px }
.fontsize-xhuge { font-size: 50px }</code></pre>
			<pre class="six columns"><code>.align-left { text-align: left; }
.align-right { text-align: right; }
.align-center { text-align: center; }</code></pre>
		</div>
	</section>

	<section>
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

	<section>
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
	
	<section>
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
	
	<!--<section>
		<h2>Git integration</h2>
	</section>

	<section>
		<h2>Built-in Sass compilers</h2>
	</section>

	<section>
		<h2>Server-side caching</h2>
	</section>

	<section>
		<h2>CDN libraries with local fallbacks</h2>
	</section>

	<section>
		<h2>Server-side image compression</h2>
	</section>

	<section>
		<h2>Responsive grid based on <a href="//github.com/dhg/Skeleton/">Skeleton</a></h2>
	</section>

	<section>
		<h2>Basic <a href="//ogp.me">OpenGraph</a> integration</h2>
	</section>

	<section>
		<h2><a href="//livereload.com">LiveReload</a> built in</h2>
	</section>-->

</article>
<?php include "./includes/footer.php"; ?>
