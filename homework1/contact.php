<!DOCTYPE html>
<html>
<head>
	<title>Welcome to</title>
	<link rel="stylesheet" type="text/css" href="css/class.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
	<?php include 'header.html' ;?>

	<div id="sec1">
		<div id="gridleft">
			<h1>Contact Bathurst</h1>
			<p>Thank you for visiting our webiste. If you have feedback about any page on bathurst.edu.au please use the feedback form below.</p>
			<br>
			<p>For other general inquiries, call (61) 3 BATHURST</p>
		</div>
		<img src="img/contact1.jpg">
	</div>

	<div id="sec2">
		<div class="container">
			<form action="/action_page.php">
				<div class="row">
					<div class="col-25">
						<label for="fname">First Name</label>
					</div>
					<div class="col-75">
						<input type="text" id="fname" name="firstname" placeholder="Your name..">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="email">E-mail</label>
					</div>
					<div class="col-75">
						<input type="text" id="email" name="email" placeholder="Your e-mail is..">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="country">Country</label>
					</div>
					<div class="col-75">
						<select id="country" name="country">
							<option value="australia">Australia</option>
							<option value="canada">Canada</option>
							<option value="usa">USA</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="subject">Subject</label>
					</div>
					<div class="col-75">
						<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
					</div>
				</div>
				<div class="row">
					<input type="submit" value="Submit">
				</div>
			</form>
		</div>

	</div>




	<?php include 'footer.html' ;?>
</body>
</html>