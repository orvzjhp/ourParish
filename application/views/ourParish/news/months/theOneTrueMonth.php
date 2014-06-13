<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>OurParish</title>
			<meta name ="viewport" content = "width=device-width, initial-scale = 1.0">
			<link href = "<?php echo base_url(); ?>html_attrib/parishStyles/css/bootstrap_2.css" rel = "stylesheet">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>html_attrib/parishStyles/month/monthStyle.css" media="screen"></style>
	</head>

	<body>
	<div class="container">
		
		<!--Note: Adding new "news and event" must change the code statically-->
		<?php
		$count = 0;
		if($info != FALSE)
		foreach($info as $value) 
		{
			?>
			<div class="block-3">
				<div class="col-lg-12"></div>
				<div class="col-4 col-lg-3">
					<li><h3><?php echo $value->date; ?></h3></li>
				</div>
				<div class="col-8 col-lg-9">
					<div style="float:left" padding:"10px" height:"50px" width:"50px"><img src="<?php echo base_url(); ?>html_attrib/parishStyles/month/favicon.png"/></div>
					<h4><?php echo $value->title; ?></h4>
					<a class="ca-more" href="#" data-toggle="modal" data-target="#myModal<?php echo $count; ?>">more...</a>
				</div>


				<!-- Modal -->
				<div class="modal fade" id="myModal<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel"><?php echo $value->title; ?></h4>
							</div>

							<div class="modal-body">
								<div class="form-group">
									<div style="background-: url(<?php echo base_url(); ?>html_attrib/parishStyles/images/pic3.jpg);"></div>
									<p class="text-center"><?php echo $value->content; ?></p>
									
									<a href="<?php echo $value->url; ?>" target="_parent""><?php echo $value->parish; ?></a>
								</div>
								<div class="form-group"></div>
							</div>

							<div class="modal-footer"></div>
						</div>
					</div>
				</div>
				<!--End of Modal1-->
				<br/>
				<br/>
				<hr>
			</div>	
		<?php
			$count++;
		}
		?>

	</div>
	
<!-- Latest compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>html_attrib/parishStyles/js/bootstrap.min.js"></script> 		

	</body>
</html>
