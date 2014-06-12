<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<html>
	<head>
		<script src="http://code.jquery.com/jquery.js"></script>
	</head>
	<body>
		<h1>World's Best Login Page!!</h2>
			
			<?php echo form_open('admin/verifyUser'); ?>
<!--		<form id="login_form"> -->
			Username: <input type="text" name="username">
			<br>
			Password: <input type="text" name="password">
			<br>
			<input type="submit" value="Submit">
			</form>
			
			<?php echo validation_errors(); ?>
			
	</body>
</html>