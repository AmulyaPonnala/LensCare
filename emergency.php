
<!DOCTYPE HTML>
<html>

<head>
<style>
.log {
      border-radius: 90%;
    }
	.h1{
		font-size: 4px;
		color:black;
	}
	
    </style>
	<title>Emergency Eye Care</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link rel="stylesheet" href="assets/css/jquery-ui.css" />
	<link href="assets/css/emergency.css" rel='stylesheet' type='text/css' />
	
	<link href="Create_an_abstract_concept_logo_for_Lens_Care_.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
	<!--//fonts-->
</head>

<body style="background-color:powderblue;">
	<!--background-->
	<a href="index.php"><h1><img class="log" src="Create_an_abstract_concept_logo_for_Lens_Care_.jpg" width="150" height="150">Emergency Eye Care</a></h1>
	
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="store_emergencyappoint.php" method="post">
			<h3 class="sub-heading-agileits">Personal Details</h3>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="fName" placeholder="*First Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="lName" placeholder="Last Name"  value ="">
				</div>
			</div>
		<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="email" name="Email" placeholder="Email" value ="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="Phone" placeholder="*Phone Number" required="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input id="datepicker" name="Text" type="text" placeholder="*DOB" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
					value ="dob not taken">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<select class="form-control" name = "gen">
						<option>Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			
			
			<div class="field-agileinfo-spc form-w3-agile-text">
				<textarea name="Message" placeholder="Address..."></textarea>
			</div>
			<div class="clear"></div>
			<h2 class="sub-heading-agileits">Emergency Contact Details</h2>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="*efname" placeholder="*First Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="elname" placeholder="Last Name" value ="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="*ephone" placeholder="*Phone Number" required="">
				</div>
			</div>
			<div class="radio-section">
				<h6>Taking any medications currently</h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="selector1">
						<label for="a-option">Yes</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="selector1">
						<label for="b-option">No</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
				<textarea name="emessage" placeholder="If you are taking please list them here.."></textarea>
			</div>
			<input type="submit" value="Submit">
			<input type="reset" value="Clear Form">
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->
	</div>
	
	<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>

	<script src="assets/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	

</body>

</html>