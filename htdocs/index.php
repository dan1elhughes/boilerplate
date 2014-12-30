<?php include "./includes/header.php"; ?>
<div class="wrap">
	<h2>Forms</h2>
	<form action="#" method="post">
		<div class="row">
			<div class="six columns">
				<label for="name">Name</label> 
				<input type="name" id="name" name="name">
			</div>
			<div class="six columns">
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
				<button type="submit" class="button-primary">Send</button>
			</div>
		</div>
	</form>
</div>
<div class="wrap">
	<h2>Code</h2>
	<div class="row">
		<pre class="six columns">
			<code>.fontsize-tiny { font-size: 12px }
.fontsize-small { font-size: 14px }
.fontsize-normal { font-size: 16px }
.fontsize-large { font-size: 21px }
.fontsize-xlarge { font-size: 28px }
.fontsize-huge { font-size: 37px }
.fontsize-xhuge { font-size: 50px }</code>
		</pre>
		<pre class="six columns">
			<code>.align-left { text-align: left; }
.align-right { text-align: right; }
.align-center { text-align: center; }</code>
		</pre>
	</div>
</div>
<?php include "./includes/footer.php"; ?>
