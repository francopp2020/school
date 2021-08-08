<!DOCTYPE html>
<html>
<head>
	<title>Welcome to</title>
	<link rel="stylesheet" type="text/css" href="css/class.css">
	<link rel="stylesheet" type="text/css" href="css/pages.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<?php include 'header.html' ;?>

	<div id="sec1">
			<div class="ss-left">
				<p>Not just serving customers, but protecting families.</p>
			</div>
			<div class="ss-middle"></div>
			<div class="ss-right">
				<form action="/login" method="post">
					<h3>Log in</h3>
					<p>Please log in to access your bookings</p>
					<input type="text" name="name" placeholder="Username"><br>
					<input type="password" name="password" placeholder="Password"> <br>
					<input type="submit" name="submit"> 
					<a href="services.php">
						<input type="button" name="register" value="Register">
					</a>
				</form>
		</div>
	</div>
	<div id="sec2">
		<h1>We Take Care Of You</h1>
		<p>My first airline was started out of frustration. As a young record executive, I travelled the world flying by other airlines, but found the experience dreadful. So in 1984 I chartered one second-hand Boeing 747 and offered flights between London and New York. People thought we were mad and bound to fail quickly. Instead, we focused our airline on the touches so many travellers were looking for: better food, better entertainment, flat beds in Upper Class. And we built a loyal following. That airline was Virgin Atlantic, and today it is still thriving when nearly all of its original rivals have gone under.</p>
		<br>
		<button>Learn More</button>
	</div>

	<div id="sec3">
		<h1>25 years improving lives</h1>
		<br>
		<div class="grid3">
			<p>We are commited to change Sydneysiders lives for good. And that's why we've been for 25 years improving your family's road experiences by protecting you and your beloved ones from any mechanical failures. It all started as a dream for us to provide a safer environment for our children, and this vision became what is today one of the most prestigius mechanical shops in Western Sydney</p>
			<img src="img/index2.jpg">
		</div>
	</div>

</div>



	<?php include 'footer.html' ;?>
</body>
</html>