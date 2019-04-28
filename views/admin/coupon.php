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
	<link href="../../vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom Fonts -->
    <link href="../dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<!-- Data table CSS -->
	<link href="../../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
    <!-- bootstrap-touchspin CSS -->
		<link href="../../vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css"/>
			

	<!-- Custom CSS -->
	<link href="../dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 
include ('header.php'); 
?>
<!-- Main Content -->
<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">coupon</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>e-commerce</span></a></li>
						<li class="active"><span>coupon</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
<!-- Row -->
<div class="row">
						<div class="col-sm-6">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Coupon form</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="traitementcoupon.php">
												<div class="form-group">
													<label class="control-label mb-10" >Coupon:</label>
													<input class="form-control" name='code' max=4>
												</div>
                                   
												<div class="form-group">
													<label class="control-label mb-10">Promotion:</label>
													%<input  type="number" min=1 max=100  step=1 class="form-control" placeholder="1-100%" name='promotion'>
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10">Nombre d'utilisateur:</label>
													<input  type="number" min="0" max="100" value="0" step="10" class="form-control" placeholder="1-100" name='nb_user'>
                
                                            	</div>
												<div class="form-group mb-0">
													<button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
												</div>	
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
                    	<div class="row">
						<div class="col-md-12">
							<div class="main-content">
								<div class="commerce">
									<form>
										<table class="table shop_table cart">
											<thead>
												<tr>
													<th class="product-remove hidden-xs">&nbsp;</th>
													
													<th class="product-name">coupon</th>
													<th class="product-price text-center">Promotion</th>
													<th class="product-quantity text-center">nombre d'utilisateur</th>
													
												</tr>
											</thead>
											<tbody>






											
															<?php

include_once ("../../core/couponC.php");
include_once ("../../config.php");
															$coupon1=new couponC();
															
															$listecoupon=$coupon1->affichecoupon();
																foreach($listecoupon as $row){  
	                             
															?>
												<tr class="cart_item">
													<td class="product-remove hidden-xs">
														<a href="traitementcoupon.php?supcode=<?php echo $row['code']?>" class="remove" title="Remove this item">&times;</a>
													</td>
													
													<td class="product-name">
														<a href="traitementcoupon.php"><?php echo $row['code'] ?></a>
													</td>

													<td class="product-price text-center">
														<a href="traitementcoupon.php"><?php echo $row['promotion'] ?></a>
													</td>
													<td class="product-quantity text-center">
														<a href="traitementcoupon.php"><?php echo $row['nb_user'] ?></a>
													</td>
												</tr>
																	


																<?php } ?>

								
												
											</tbody>
										</table>
									</form>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
                        	<!-- /#wrapper -->
		
		<!-- JavaScripts -->
		
		<!-- jQuery -->
		<script src="../../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Moment JavaScript -->
		<script type="text/javascript" src="../../vendors/bower_components/moment/min/moment-with-locales.min.js"></script>
		
		<!-- Bootstrap Colorpicker JavaScript -->
		<script src="../../vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
		
		<!-- Switchery JavaScript -->
		<script src="../../vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Select2 JavaScript -->
		<script src="../../vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
		
	
		<!-- Bootstrap Touchspin JavaScript -->
		<script src="../../vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
		
		<!-- Form Advance Init JavaScript -->
		<script src="../dist/js/form-advance-data.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="../dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="../dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="../../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Init JavaScript -->
		<script src="../dist/js/init.js"></script>
		
                        </body>
                        </html>