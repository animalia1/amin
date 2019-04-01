
<!DOCTYPE html>
<html lang="en">
			<!-- /Right Sidebar Menu -->
				
			
       

				

<body>

<?php 

include ('header.php'); 
if(isset($_GET['success']) and $_GET['success'] == '1'){
    echo '<img src="../img/sweetalert/alert3.png" alt="alert" style="display:none;" class="img-responsive model_img" id="sa-success">';
    echo '  <script>window.onload = function () {document.getElementById("sa-success").click();}</script> ';
}
?>
<div class="container">
<div class="row mt-90 ustify-content-center ">
					<!-- Responsive Table -->
					<div class="col-xl-14 mt-90">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Liste des Livraisons </h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap mt-40">
										<div class="table-responsive">
											<table class="table mb-0">
												<thead>
												  <tr>
													<th>Invoice</th>
													<th>User</th>
													<th>Date</th>
													<th>Amount</th>
													<th>Status</th>
													<th>Country</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td><a href="javascript:void(0)">Order #26589</a></td>
													<td>Herman Beck</td>
													<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2016</span> </td>
													<td>$45.00</td>
													<td><div class="label label-table label-success">Paid</div></td>
													<td>EN</td>
												  </tr>
												  <tr>
													<td><a href="javascript:void(0)">Order #58746</a></td>
													<td>Mary Adams</td>
													<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2016</span> </td>
													<td>$245.30</td>
													<td><div class="label label-table label-danger">Shipped</div></td>
													<td>CN</td>
												  </tr>
												  <tr>
													<td><a href="javascript:void(0)">Order #98458</a></td>
													<td>Caleb Richards</td>
													<td><span class="text-muted"><i class="fa fa-clock-o"></i> May 18, 2016</span> </td>
													<td>$38.00</td>
													<td><div class="label label-table label-info">Shipped</div></td>
													<td>AU</td>
												  </tr>
												  <tr>
													<td><a href="javascript:void(0)">Order #32658</a></td>
													<td>June Lane</td>
													<td><span class="text-muted"><i class="fa fa-clock-o"></i> Apr 28, 2016</span> </td>
													<td>$77.99</td>
													<td><div class="label label-table label-success">Paid</div></td>
													<td>FR</td>
												  </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Responsive Table -->
				</div>
				</div>
</body>
				
</html>

