<?
<!DOCTYPE html>
	<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<b><a class="navbar-brand" href="#">Dhini Flowers</a></b>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo site_url()?>/home">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							Home</a></li>
							<li><a href="<?php echo site_url()?>/about">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							About</a></li>
							<li><a href="<?php echo site_url()?>/contact">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true">
							Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right"></ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			<div class="jumbotron">
				<div class="container">

					<b><center><h1><?php echo $nama?></h1><b>
	
					<p>
						<a class="btn btn-primary btn-lg">Learn more</a>
					</p></center>
				</div>

			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<img src="<?php echo base_url() ?>images/D.jpg" class="img-rounded" alt="image" width="280	" height="190">

			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<img src="<?php echo base_url() ?>images/C.jpg" class="img-rounded" alt="image" width="280	" height="190">
			</div>
			
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<img src="<?php echo base_url() ?>images/F.jpg" class="img-rounded" alt="image" width="280	" height="190">
			</div>
			
			</div>
			
		</div>
			
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.css"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>

	

	

