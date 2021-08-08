<!DOCTYPE html>
<html>
<head>
	<title>Welcome to</title>
	<link rel="stylesheet" type="text/css" href="css/class.css">
	<link rel="stylesheet" type="text/css" href="css/pages.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
	<?php include 'header.html' ;?>

	<div id="sec1">
	</div>
	<div id="sec2">
		<h1>Contact Us</h1>
		<div class="formsec2">
			<form action="/action_page.php" method="post">
				<label>Name:</label>
				<input type="text" name="name" placeholder="Full Name" autofocus autocomplete="off">
				<label>E-mail</label>
				<input type="email" name="email" placeholder="E-mail" autocomplete="off">
				<label for="issues">Issue:</label>
				<select name="issues" id="issues">
					<option value="disabled" disabled selected>Select Issue</option>
					<option value="Bookings">Bookings</option>
					<option value="Complaints">Complaints</option>
					<option value="Refunds">Refunds</option>
					<option value="General Inquiries">General Inquiries</option>
				</select>
				<label for="message">Message</label>
				<textarea name="message" rows="10" cols="30"></textarea>
				<input type="submit" name="submit">
			</form>
		</div>
	</div>




	<?php include 'footer.html' ;?>
</body>
</html>