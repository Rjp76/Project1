<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Sign Up Page- Rati Patel</title>

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="main.css">
	</head>

	<body>
<form action="/action_page.php">
  <div class="container">
  	<label><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>
    <br><br>
    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>
    <br><br>
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
<br><br>
    <label><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phonum" required>
<br><br>
    <label><b>Birthday</b></label>
    <input type="text" placeholder="Enter Birthday" name="birth" required>
    <br><br>
    <label><b>Gender</b></label>
    <select>
  <option value="blank">&nbsp; </option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>
    
 <!--   <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->

    <div class="clearfix">
      <button type="button"  class="cancelbtn" action="login.html">Cancel</button>
      <button type="submit" class="Submit">Submit</button>
    </div>
  </div>
</form>
	</body>
</html>
