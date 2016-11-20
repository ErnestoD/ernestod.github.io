<!-- Ernesto Delacruz
		Assignment4.html
		14Oct2015
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

		<!--Main-->
		<div data-role="main" class="ui-content">


			<!--Login/Register Page Buttons-->
			<center>
			<a href="register.php"class="ui-btn ui-btn-inline ui-btn-b ui-corner-all">New User</a>
			<a href="login.php" class="ui-btn ui-btn-inline ui-btn-b ui-corner-all">Current User</a>
			<a class="ui-btn ui-btn-inline ui-btn-b ui-corner-all">Guest</a>
			</center>


		</div>
</div>
</body>
</html>
