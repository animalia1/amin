<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>404 - Page not found | HTML Commerce Template</title>
		<link rel="shortcut icon" href="images/favicon.ico">


		<link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/custom.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='css/magnific-popup.css' type='text/css' media='all'/>
        <!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
		<?php
			include ('header.php');
		?>
		

                        <!--shipping rami work-->
						<div class="content-container mt-0">
				<div class="container">
					<div class="row mt-0">                
<h3><span class="number"><i class="icon-bag txt-black mr-10"></i></span><span class="head-font capitalize-font">shipping</span></h3>
<fieldset>
    <div class="row">
        <div class="col-sm-12 mt-20">
            <div class="form-wrap">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label mb-10" for="firstName">Nom :</label>
                            <input id="firstName" type="text" name="first_name" class="form-control required" value="" onblur="controlFirstName(this)" />
                            <p style="color:red;" id="fisrtNameAlert"></p>
                        </div>
                        <div class="span1"></div>
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label mb-10" for="lastName">Prenom:</label>
                            <input id="lastName" type="text" name="last_name" class="form-control required" value="" onblur="controlLastName(this)" />
                            <p style="color:red;" id="lastNameAlert"></p>
                        </div>
                    </div>
				</div>
				<!--Google map-->
				<div id="map" class="z-depth-1-half map-container mb-30" style="height: 400px"></div>
				<div class="span1"></div>


				<div class="form-group">
                    <label class="control-label mb-10" for="emailAddress">Adresse:</label>
                    <input id="Address" disabled type="text" name="email_address" class="form-control" required="" value="" />
                    <p style="color:red;" id="emailAlert"></p>
				</div>
				<div class="span1"></div>
				
                <div class="form-group">
						<div class="row">
							
					<div class="col-md-6 col-xs-12">
                    <label class="control-label mb-10" for="postalCode">Code postale:</label>
                    <input id="postalCode" type="text" name="zip_code"  data-mask="99999-9999" class="form-control required" value="" onblur="controleCodePostale(this)" />
					<p style="color:red;" id="codePostaleAlert"></p>
					</div>

					<div class="span1"></div>
					<div class="col-md-6 col-xs-12">
                    <label class="control-label mb-10" for="phoneNumber">Numero telephone:</label>
                    <input type="text" id="phoneNumber"  data-mask="+40 999 999 999" name="phone_number" class="form-control required" value="" onblur="controleTelephone(this)" />
					<p style="color:red;" id="phoneAlert"></p>
				</div>
					</div>
				</div>
                <div class="form-group">
                    <label class="control-label mb-10" for="emailAddress">Adresse email:</label>
                    <input id="emailAddress" type="text" name="email_address" class="form-control required" value="" onblur="verifMail(this)"/>
                    <p style="color:red;" id="emailAlert"></p>
                </div>

                <div class="form-group">
                    <label class="control-label mb-10" id="prixLivraison" style="color:green;">Prix de livraison:</label>
                </div>


                <div class="form-group mb-0 mt-30">
                        <button  class="btn btn-default " id="submitButton" onclick="submit()" >Submit</button>
                    
                </div>
                

            </div>
        </div>
    </div>
</fieldset>



					</div>
				</div>
			</div>
			



			<?php
				include ('footer.php');
			?>

	</div>
	</div>
	</div>

	

<script src="dist/js/controle.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtSRG_8GaJhse2ljiW1sy2UV_NkXxjV0E&callback=initMap"
	async defer></script>

	</body>
</html>