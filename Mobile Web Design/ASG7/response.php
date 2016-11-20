<!-- Ernesto Delacruz
		Assignment4.html
		13Oct2015
-->

<!DOCTYPE html>
<html>
<head>
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!-- Include the jQuery library -->
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

  <link rel="stylesheet" href="themes/TinkerMonkey.min.css" />
  <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
</head>
<body>

<!--Homepage-->
<div data-role="page" id="HomePage">

		<!--Panel-->
		<div data-role="popup" id="Info">

				<p>Tinker Monkey is a game development production I made to share (I hope) any games I make,
					playable and in-progress. Once games are complete I plan on trying to release my products on
					Steam for sale in the future, with some games I plan to make free as well. I have gone as far
					as make a development email and also Twitter. Currently going to school and work full-time will
					make this extremely difficult so please bare with me!
				</p>

		</div>

		<!--Header-->
		<div data-role="header">
			<a href="../ASG8/tour.html#Assignment7" rel="external" class="ui-btn ui-corner-all ui-icon-home ui-btn-icon-left ui-btn-icon-notext">Home</a>
			<center><img src="images/TinkerLogo.jpg" alt="Tinker Monkey Productions" height="150" width="300"/></center>
		</div>

		<!--Main/Body-->
		<div data-role="main" class="ui-content">

		<?php

			if($_POST['submit'] == 'Login'){
				echo 'Username: '.$_POST['username'].'<br>';
				echo 'Password: '.$_POST['password'];
			}
			else if($_POST['submit'] == 'Register'){
				echo 'Your name is '.$_POST['firstname'].' '.$_POST['lastname'].'.<br><br>';

				echo 'You are a '.$_POST['gender'];
				echo ' who was born on '.$_POST['month'].' of '.$_POST['year'].'.<br><br>';

				echo 'Username: '.$_POST['username'].'<br>';
				echo 'Password: '.$_POST['password'].'<br>';
				echo '<h6>*The password will not be saved or shown in the future "UPDATE".</h6><br>';

				echo 'You are registering with the email: '.$_POST['email'].'<br>';

				echo $_POST['genre[1]'];

			}
		?>

		</div>

		<!--Footer-->
		<div data-role="footer">
			<h3><a href="#Info" data-rel="popup" class="ui-btn ui-mini ui-btn-inline ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext">Info</a>
			<font color="red">Work In Progress</font>
			<a href="#Info" data-rel="popup" class="ui-btn ui-mini ui-btn-inline ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext">Info</a></h3>
		</div>

  </div>

</body>
</html>
