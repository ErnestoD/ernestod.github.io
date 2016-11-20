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
			<a class="ui-btn ui-btn-inline ui-corner-all">New User</a>
			<a href="login.php" class="ui-btn ui-btn-inline ui-btn-b ui-corner-all">Current User</a>
			<a class="ui-btn ui-btn-inline ui-btn-b ui-corner-all">Guest</a>
			</center>

			<!------------------------------------------------------------------------------->

			<!--Main/Register Form-->
			<form id="Register" name="Register" method="POST" action="response.php">

			<!--Name-->
			<div class="ui-field-contain">
				First Name:<br>
				<input type="text" name="firstname" id="firstname">
				Last Name:<br>
				<input type="text" name="lastname" id="lastname"><br>
			</div>

			<!--Gender-->
			<div class="ui-field-contain">
				<fieldset data-role="controlgroup">
				Gender:
					<label for="male">Male</label>
					<input type="radio" name="gender" id="male" value="male">
					<label for="female">Female</label>
					<input type="radio" name="gender" id="female" value="female">
					<label for="other">Other/Don't want to say</label>
					<input type="radio" name="gender" id="other" value="other" checked="checked">
				</fieldset>

				<!--Date of birth-->
				<fieldset data-role="controlgroup" data-type="horizontal" class="ui-field-contain">
					<br>Date of birth:<br>
					<label for="day">Month:</label>
						<select name="month" id="month">
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select>

					<!--Day *Should I use day?*
					<label for="day">Day:</label>
						<select name="day" id="day">
							<option value="01">1</option>
							<option value="02">2</option>
							<option value="03">3</option>
							<option value="04">4</option>
							<option value="05">5</option>
							<option value="06">6</option>
							<option value="07">7</option>
							<option value="08">8</option>
							<option value="09">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>								-->


					<!--Year Loop/PHP-->
					<label for="year">Year:</label>
						<select name="year" id="year">
						<?php
						$year = date('Y') - 100;
						while($year <= date('Y')){
							echo '<option value="'.$year.'">'.$year.'</option>';
							$year++;
						}
						?>
						</select>

				</fieldset>
			</div>

			<!--User/Password Request + Email-->
			<div class="ui-field-contain">
				Username:<br>
				<input type="text" name="username" id="username"><br>
				Password:<br>
				<input type="PASSWORD" name="password" id="password">
				Confirm Password:<br>
				<input type="PASSWORD" name="confirmpass" id="confirmpass"><br>
				Current Email Address:<br>
				<input type="text" name="email" id="email">
			</div>

			<!--Genre Survey-->
			<div class="ui-field-contain">
				<fieldset data-role="controlgroup">
					<legend>Which game genres do you enjoy?</legend>
					<label for="action">Action</label>
					<input type="checkbox" name="genre[]" id="action" value="Action">
					<label for="adventure">Adventure</label>
					<input type="checkbox" name="genre[]" id="adventure" value="Adventure">
					<label for="rpg">RPG</label>
					<input type="checkbox" name="genre[]" id="rpg" value="RPG">
					<label for="sim">Simulator</label>
					<input type="checkbox" name="genre[]" id="sim" value="Simulator">
					<label for="strat">Strategy</label>
					<input type="checkbox" name="genre[]" id="strat" value="Strategy">
					<label for="survival">Survival</label>
					<input type="checkbox" name="genre[]" id="survival" value="Survival">
					<label for="horror">Horror</label>
					<input type="checkbox" name="genre[]" id="horror" value="Horror">
					<label for="visualnovel">Visual Novel</label>
					<input type="checkbox" name="genre[]" id="visualnovel" value="Visual Novel">
				</fieldset>
			</div>

			<!--Submit/Reset Button-->
			<input type="reset" value="Clear Page">
			<input type="submit" name="submit" value="Register" />
			</form>

			<!--Footer-->
			<div data-role="footer">
				<h3><a href="#Info" data-rel="popup" class="ui-btn ui-mini ui-btn-inline ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext">Info</a>
				<font color="red">Work In Progress</font>
				<a href="#Info" data-rel="popup" class="ui-btn ui-mini ui-btn-inline ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext">Info</a></h3>
			</div>

	</div>
</body>
</html>
