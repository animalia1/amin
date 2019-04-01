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

	<!-- Data table CSS -->
	<link href="../../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
		<!-- Custom CSS -->
		<link href="../../dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php include ('header.php'); ?>
				
			
			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Ajouter catégories</h5>
						</div>
						<!-- Breadcrumb -->
						
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<?PHP
					include "../../core/categoryC.php";
																	if(isset($_REQUEST['edit'])){
																			$categories=new categoryC();
																			$cat=$categories->afficherCategorieC($_REQUEST['edit']);		
																	}
																?>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form method="post" action="trait_cat.php" id="animaux">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>À propos des catégories</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Nom de catégorie</label>
															<input  type="hidden" id="catId"  value="<?php if(isset($_REQUEST['edit'])){echo $cat['cat_id'];}?>" class="form-control" placeholder="Rounded Chair" onmouseout="controlenom()" name="id">

															<input  type="text" id="firstName" value="<?php if(isset($_REQUEST['edit'])){echo $cat['cat_title'];}?>" class="form-control" placeholder="Rounded Chair" onmouseout="controlenom()" name="cat_title">
															<p id="firstnamealert" style="color:red;"></p>
															
														</div>
														<label class="control-label mb-10">type d'animaux</label>
														<select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="type_animaux" form="animaux">
														       
														        <option>chats</option>
																<option>chiens</option>
																<option>oiseaux</option>
																<option>tout les animaux</option>
                                </select>
														
													</div>
													<!--/span-->
													
													<!--/span-->
												</div>
												<!-- Row -->
												<div class="row">
													
													<!--/span-->
													
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													
													<!--/span-->
													
													<!--/span-->
												</div>
												
												
												<div class="seprator-block"></div>
												
												<div class="form-actions">
													<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left" > <i class="fa fa-check"></i> <span><?php if(isset($_REQUEST['edit'])){echo "Modifier";}else { echo "enregistrer";}?></span></button>
													<button type="button" class="btn btn-warning pull-left">Annuler</button>
													<div class="clearfix"></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
					
				<!-- Row -->
				<div class="row ml-60">
					<div class="col-sm-10">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="contact-list">
										<div class="row">
											
											
											<aside class="col-lg-10 col-md-8 p-0">
												<div class="panel pa-0">
												<div class="panel-wrapper collapse in">
												<div class="panel-body  pa-0">
													<div class="table-responsive mb-30">
														<table id="datable_1" class="table  display table-hover mb-30" data-page-size="10">
													
															<thead>
																<tr>
																	
																	<th>Nom de categorie</th>
																	<th>Type d'animau</th>
																	<th>Action</th>
																</tr>
															</thead>
															<?PHP
															$category1C=new categoryC();
															$listecategory=$category1C->afficherCategory();
																foreach($listecategory as $row){  
	                             
															?>
															<tbody>
																<tr>
																	
																	<td><a href="#"><?php echo $row["cat_title"]; ?></a></td>
																	<td><?php echo $row["type_animaux"]; ?></td>
																	<td><a href="add-category.php?edit=<?php echo $row["cat_id"];  ?>" class="text-inverse pr-10" title="modifier" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="trait_cat.php?delete=<?php echo $row['cat_id']?>" class="text-inverse" title="Supprimer" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																
																</tr>
															
															</tbody>
															<?php
																}
																?>
														</table>
													</div>
												</div>
												</div>
												</div>
											</aside>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>

				</div>
				
				<!-- Footer -->
				
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="../../dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="../../dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="../../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="../../vendors/bower_components/switchery/dist/switchery.min.js"></script>
		<script type="text/javascript">
		function controleTo(){
			var nom=document.getElementById("firstName").value;
			var prix=document.getElementById("exampleInputuname").value;
			if(nom.length!=6)
			{
				alert("incorrect");
			}
			if(prix=="")
			{
				alert("prix vide");
			}
		}
		
		function controlenom(){
			var nom=document.getElementById("firstName").value;
			if(nom=="")
			{
             document.getElementById("firstnamealert").innerHTML="tapez le nom de catégorie";
			}
			else  document.getElementById("firstnamealert").innerHTML="";
		}
		
		
		</script>
	
	<!-- Data table JavaScript -->
	<script src="../../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../../dist/js/dataTables-data.js"></script>
		<!-- Init JavaScript -->
		<script src="../../dist/js/init.js"></script>
		
	</body>
</html>