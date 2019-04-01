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

		<!-- Custom CSS -->
		<link href="../../dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	
		<?php include ("header.php"); ?>
			
			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Ajouter produits</h5>
						</div>
						<!-- Breadcrumb -->
						
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					<?PHP
					include "../../core/produitC.php";
																	if(isset($_REQUEST['edit'])){
																			$produits=new produitC();
																			$produit=$produits->afficherProduitc($_REQUEST['edit']);		
																	}
																?>
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form method="post" action="traitement2.php" id="categorie"  >
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>À propos du produit</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Nom de produit</label>
															<input  type="text" required="" id="firstName" class="form-control"  placeholder="Rounded Chair" onmouseout="controlenom()" name="nom" value ="<?php if(isset($_REQUEST['edit'])){echo $produit['nom'];}?>">
															<input type="hidden" required="" name="id" value="<?php if(isset($_GET['edit'])){echo $_GET['edit'];} ?>">
															<p id="firstnamealert" style="color:red;"></p>
														</div>
													</div>
													<!--/span-->
													
													<!--/span-->
												</div>
												<!-- Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Catégorie</label>
															<select class="form-control" data-placeholder="Choose a Category" tabindex="1" form="categorie" name="category" >
																
																<?PHP
															$category1C=new categoryC();
															$listecategory=$category1C->afficherCategory();
																foreach($listecategory as $row){  
	                             
															?>
															<option><?php echo $row["cat_title"]; ?></option>
															
													<?php
																}
																?>
															</select>
										
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
													<label class="control-label mb-10">type d'animaux</label>
														<select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="type_animaux" form="categorie">
														        
														        <option>chats</option>
																<option>chiens</option>
																<option>oiseaux</option>
																<option>chats</option>
																<option>tout les animaux</option>
                                </select>
														
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Prix</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="text" class="form-control" id="exampleInputuname" value ="<?php if(isset($_REQUEST['edit'])){echo $produit['price'];}?>" placeholder="153" onblur="verifPrix(this)" name="price">
																
															</div>
															<p id="controleprix" style="color:red"></p>
														</div>
													</div>
													<!--/span-->
													
													<!--/span-->
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Description de produit</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea class="form-control" rows="4" name="description"><?php if(isset($_REQUEST['edit'])){echo $produit['description'];}else{ echo "Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour"; }?></textarea>
														</div>
													</div>
												</div>
												<!--/row-->
												<div class="row">
													
												</div>
														

												<div class="mt-40 w-20">
											<input type="file" id="input-file-now" class="dropify-fr" name="image" />
										</div>
												<div class="seprator-block"></div>
												

												<div class="form-actions">
													<button  type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left" > <i class="fa fa-check"></i> <span><?php if(isset($_GET['edit'])){ echo "modifier";}else{echo "Enregistrer";} ?></span></button>
													<button type="submit" class="btn btn-warning pull-left">Annuler</button>
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

				</div>
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2018 &copy; Winkle. Pampered by Hencework</p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		</div>
	
		<script type="text/javascript">
		function controlenom(){
			var nom=document.getElementById("firstName").value;
			if(nom=="")
			{
             document.getElementById("firstnamealert").innerHTML="tapez le nom de produit";
			}
			else  document.getElementById("firstnamealert").innerHTML="";
		}
		function verifPrix(champ)
		{
   var regex = /^[0-9]*$/;
   
    if(champ.value == ""){
       document.getElementById("controleprix").innerHTML = "tapez un prix";        
        champ.style.border = "1px solid red";
		return false;
   }
   else if(!regex.test(champ.value))
   {
    document.getElementById("controleprix").innerHTML = "entrez un prix valide";        
    champ.style.border = "1px solid red";
      return false;
   }
   else
   {
    document.getElementById("controleprix").innerHTML = "";        
    champ.style.border = "";
      return true;
   }
}


		</script>
		
		<!-- Init JavaScript -->
		
	</body>
</html>