<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<html>
		<head>
		<script src="http://code.jquery.com/jquery.js"></script>
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/html_attrib/adminStyles/css/login_css.css" media="screen"></style>
	</head>
	<body>

	<section class="container">
    	<div class="login">

		<h1 style="margin-left:130px">Login</h1>
			<table width="510" border="0" align="center">

			<?php echo form_open('admin/verifyUser'); ?>

			<tr>Username: <input  type="text" name="username"></tr>
			<br>
			<tr>Password: <input type="text" name="password" style="margin-left:8px"></tr>
			<br>
			<input type="submit" value="Submit"></table>
			</form>
		</div>
		</section>
			
			<?php echo validation_errors(); ?>
			
	</body>
</html>
