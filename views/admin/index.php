<?php
	
	$_SESSION['valid'] = 'false';
	if(isset($_POST['submit'])){
		session_start();
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['pwd'] = $_POST['pwd'];
		if($_SESSION['name'] == "admin" && $_SESSION['pwd']== "admin"){
			$_SESSION['valid'] = 'true';
			header('location: contact-card.php');
		}
		
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Winkle I Fast build Admin dashboard for any platform</title>
		<meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="../../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="../../dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="../../img/logo.png" alt="brand"/>
						<span class="brand-text">ANIMALIA</span>
					</a>
				</div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Admin Panel</h3>
											<h6 class="text-center nonecase-font txt-grey">Animalia</h6>
										</div>	
										<div class="form-wrap">
											<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
												<div class="form-group">
													<input type="text" class="form-control" required="" name='name' placeholder="Enter email">
												</div>
												<div class="form-group">
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" name="pwd"id="exampleInputpwd_2" placeholder="Enter pwd">
												</div>
												
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2"  type="checkbox">
														<label for="checkbox_2"> Rester connecte</label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" value="submit" name="submit" class="btn  btn-info btn-rounded">sign in</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../../vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="../../dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="../../dist/js/init.js"></script>
	</body>
</html>
