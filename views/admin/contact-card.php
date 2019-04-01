
<!DOCTYPE html>
<html lang="en">
			<!-- /Right Sidebar Menu -->
				
			
       
				<!-- /Title -->
				

<body>

<?php 

include "../../core/livreurC.php";
include ('header.php'); 
if(isset($_GET['ajouter'])){
    echo '<script>swal("Parfait!", "un nouveau livreur a ete ajouter!", "success");</script>';
}
if(isset($_GET['modif'])){
    echo '<script>swal("Parfait!", "un livreur a ete modifier!", "success");</script>';
}
if(isset($_GET['error'])){
    echo '<script>swal("Oops...", "merci de verifier les champs!", "error");</script>';
}


if (isset($_GET["name"])){
	$livreur2C=new LivreurC();
	$livreur2C->supprimerLivreur($_GET["name"]);
	
	while (ob_get_status()) 
	{
		ob_end_clean();
	}

	echo "<script type='text/javascript'>window.location.href = 'contact-card.php?success=1';</script>";
}
	?>

<div class="page-wrapper " style="min-height: 950px;">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Gestion Livreur</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>Livraison</span></a></li>
							<li class="active"><span>Gestion Livreur</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
                </div>

                <div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="contact-list">
										<div class="row">
											<aside class="col-lg-2 col-md-4 pr-0">
												<div class="mt-20 mb-20 ml-15 mr-15">
													<a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">
													Ajouter un livreur
													</a>
                                                    <!-- Modal -->
                                                    
													<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display:none;">
                                                        
                                                    <div class="modal-dialog">
													<?PHP
																	if(isset($_REQUEST['id'])){
																			$livC=new LivreurC();
																			$liv=$livC->afficherLivreurc($_REQUEST['id']);
																			
																	}
																?>
                                                    <form methode="POST" action="traitement.php">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																	<h4 class="modal-title" id="myModalLabel">Ajouter un livreur</h4>
																</div>
																<div class="modal-body">

																
																	<form class="form-horizontal form-material">
																	<input type="text" value ="<?php if(isset($_REQUEST['id'])){echo $liv['id']; }?>"name="id" style="display:none;">

																		<div class="form-group">
                                                                            <div  id="form-group-name">
																			    <div class="col-md-14 mb-20 ">
																				    <input id ="name"type="text" required="" value ="<?php if(isset($_REQUEST['id'])){echo $liv['nom']; }?>"name="name" class="form-control" placeholder="Type name" onblur="controlFirstName(this)">
											                                        <span  id="span-firstName" style="display:none;"></span> 
                                                                                </div>
                                                                            </div>
                                                                            <div  id="form-group-email">
																			    <div class="col-md-14 mb-20">
                                                                                    <input type="text" required="" class="form-control" value ="<?php if(isset($_REQUEST['id'])){echo $liv['email']; }?>"  name="emailAddress" placeholder="Email" onblur="verifMail(this)">
                                                                                    <span  id="span-email" style="display:none;"></span> 
                                                                                </div>
                                                                            </div>
                                                                            <div  id="form-group-phone">
																			    <div class="col-md-14 mb-20">
                                                                                    <input type="text" required="" class="form-control" value ="<?php if(isset($_REQUEST['id'])){echo $liv['numero']; }?>" name="phoneNumber"  onblur="controleTelephone(this)" placeholder="Phone">
                                                                                    <span  id="span-phone" style="display:none;"></span> 
                                                                                </div>
                                                                            </div>
                                                                            <div  id="form-group-adresse">
                                                                                <div class="col-md-14 mb-20">
                                                                                    <input type="text" class="form-control" required="" value ="<?php if(isset($_REQUEST['id'])){echo $liv['adresse']; }?>" name="adresse" placeholder="Adresse" onblur="controleAdresse(this)">
                                                                                    <span  id="span-adresse" style="display:none;"></span> 
                                                                                </div>
                                                                            </div>
																			
                                                                            <div  id="form-group-code">
                                                                                <div class="col-md-14 mb-20">
																				    <input type="text" class="form-control" required="" value ="<?php if(isset($_REQUEST['id'])){echo $liv['codePostale']; }?>" name="code" placeholder="Code postale"  onblur="controleCodePostale(this)">
                                                                                    <span  id="span-code" style="display:none;"></span> 
                                                                                </div>
                                                                            </div>
																			
																			<div class="col-md-14 mb-20">
																				<input type="text" id="date" value ="<?php if(isset($_REQUEST['id'])){echo $liv['dateR']; }?>" class="form-control" name="date" readonly="readonly" value ="" placeholder="">
                                                                            </div>
                                                                            
                                                                            <div  id="form-group-salary">
																			    <div class="col-md-14 mb-20">
                                                                                    <div class="input-group">
																				        <input type="text" name ="salary" required="" value ="<?php if(isset($_REQUEST['id'])){echo $liv['salary']; }?>" class="form-control" onblur="controleSalary(this)" placeholder="Salary">
                                                                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
																		</div>
																	</form>
																</div>
																<div class="modal-footer" >
																	<button type="submit" id="submitButton" value="Submit" class="btn btn-info waves-effect" >Save</button>
																	<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
																</div>
															</div> 
                                                            <!-- /.modal-content -->
                                                            </form>
                                                        </div>
                                                        
                                                       
														<!-- /.modal-dialog -->
													</div>
													<!-- /.modal -->
                                                </div>
												
												<div id="myModal_1" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																<h5 class="modal-title" id="myModalLabel">Add Lable</h5>
															</div>
															<div class="modal-body">
																<form>
																	<div class="form-group">
																		<label class="control-label mb-10">Name of Label</label>
																		<input type="text" class="form-control" placeholder="Type name">
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10">Select Number of people</label>
																		<select class="form-control">
																			<option>All Contacts</option>
																			<option>10</option>
																			<option>20</option>
																			<option>30</option>
																			<option>40</option>
																			<option>Custom</option>
																		</select>
																	</div>
																</form>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
																<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
															</div>
														</div>
														<!-- /.modal-content -->
													</div>
													<!-- /.modal-dialog -->
												</div>
											</aside>
											
											<aside class="col-lg-10 col-md-8 pl-0">
												<div class="panel pa-0">
												<div class="panel-wrapper collapse in">
												<div class="panel-body  pa-0">
													<div class="table-responsive mb-30">
														<table id="datable_1" class="table  display table-hover mb-30" data-page-size="10">

														<?php 
															?>
															<thead>
																<tr>
																	<th>NO</th>
																	<th>Nom</th>
																	<th>Email</th>
																	<th>Telephone</th>
																	<th>Role</th>
																	<th>Date d'ajout</th>
																	<th>Salaire</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>




																
															<?PHP
															$i =1;
															$livreur1C=new LivreurC();
															$listeEmployes=$livreur1C->afficherLivreur();
																foreach($listeEmployes as $row){
															?>
																<tr>
																	<td><?PHP echo "$i"; ?></td>
																	<td><a href="#"><?PHP echo $row['nom']; ?></a></td>
																	<td><?PHP echo $row['email']; ?></td>
																	<td><?PHP echo $row['numero']; ?></td>
																	<td><span class="label label-danger">Livreur</span> </td>
																	<td><?PHP echo $row['dateR']; ?></td>
																	<td><?PHP echo $row['salary']." DT" ?></td>
																	<td><a href="?edit=1&id=<?PHP echo $row['id']; ?>" data-toggle="modal"  class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="contact-card.php?name=<?PHP echo $row['nom']; ?>" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
																</tr>
																<?PHP
																$i +=1;
}
?>
															</tbody>
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
<script src="../../dist/js/control.js"></script>
<?php
	if(isset($_GET['edit'])){
	echo "<script>window.onload = function(){														
	$('#myModal').modal('show');
	} </script>";
	}
?>
</body>
</html>