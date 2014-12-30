<?php include "./includes/header.php"; ?>
<div class="wrap">
	<h2>Forms</h2>
	<form action="send.php" method="post">
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
				<button type="submit">Send</button>
			</div>
		</div>
	</form>
</div>
<?php include "./includes/footer.php"; ?>
