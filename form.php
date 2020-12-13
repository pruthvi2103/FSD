<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<style>
			body {
				background-color: #e5f3ff;
			}

			form {
				font-family: Arial;
			}

			.container {
				padding: 20px;
				background-color: transparent;
				max-width: 600px;
			}

			input[type="text"],
			input[type="submit"]
			 {
				width: 100%;
				padding: 12px;
				margin: 8px 0;
				display: inline-block;

				box-sizing: border-box;
			}
			.selector{
				width: 100%;
				padding: 12px;
				margin: 8px 0;
				display: inline-block;

				box-sizing: border-box;
			}

			input[type="submit"] {
				background-color: #4caf50;
				color: white;
				border: none;
			}

			input[type="submit"]:hover {
				opacity: 0.8;
			}

			.main {
				display: flex;
				justify-content: center;
				align-items: center;
			}
		</style>
		<title>Form</title>
	</head>
	<body>
		<main class="main">
			<form class="container" name="inputForm" action="submit.php" >
				<div class="container">
					<input
						type="text"
						placeholder="First name"
						name="donor_firstname"
						required
					/>
					<input type="text" placeholder="Last name" name="donor_lastname" required />
					<input
						type="text"
						placeholder="Blood group"
						name="donor_bloodgroup"
						required
					/>
					
					<select name="donor_gender" id="gender" class="selector"  required>
						<option value="" disabled selected>Select Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>

				<div class="container">
					<input type="submit" value="Submit" onclick="return validateForm()"/>
				</div>
			</form>
		</main>

		<script>
			function validateForm() {
				var fname = document.forms["inputForm"]["donor_firstname"].value;
				var lname = document.forms["inputForm"]["donor_lastname"].value;
				var bgrp = document.forms["inputForm"]["donor_bloodgroup"].value;
				var gender = document.forms["inputForm"]["donor_gender"].value;
				
				let validate = true
				
				function checkName(input){
					var regex = /(.*[a-z]){3}/i
					var y = regex.test(input)
					return y
				}
				function checkBgrp(input){
					var regex = /^(A|B|AB|O)[+-]$/
					var y = regex.test(input)
					return y
				}
				

				validate = validate && checkName(fname) && checkName(lname) && checkBgrp(bgrp) && checkName(gender);
				

				if (!validate) {
					alert("Please fill the correctly");
					return false;
				}
				
			}

			
		</script>
	</body>
</html>
