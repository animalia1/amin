<?php include ("../config.php"); ?>
<html>
<head>
<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>
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
</head>
<body id="target" onload="window.print()">
<div class="row">
						<div class="col-md-12">
							<div class="main-content">
								<div class="commerce">
									<form >
                        <table class="table shop_table cart">
                            <thead>
                                <tr>
                            
                                  
                                    <th class="product-name">Product</th>
                                    <th class="product-price text-center">Price</th>
                                    <th class="product-quantity text-center">Quantity</th>
                                    <th class="product-subtotal text-center hidden-xs">Total</th>
                                </tr>
                            </thead>
                            <tbody>






                            
                                            <?php

include_once ("../core/commandeC.php");
                                            $commande1=new commandeC();
                                            $prixTotale =0;
                                            $listeCommandes=$commande1->afficheCommande();
                                                foreach($listeCommandes as $row){  
                 
                                            ?>
                                <tr>
                                  
                                 
                                    <td class="product-name">
                                    <span class="product-name"><?php echo $row['nom'] ?></span>
                                    </td>
                                    <td class="product-price text-center">
                                        <span class="amount"><?php echo $row['price']." dt" ?></span>
                                    </td>
                                    <td class="product-quantity text-center">
                                        
                                        <span class="quantity"><?php echo $row['quantity'] ?></span>
                                       
                                    </td>
                                    <td class="product-subtotal hidden-xs text-center">
                                        <span class="amount"><?php echo ($row['price'] * $row['quantity'])." dt" ?></span>
                                    </td>
                                </tr>
                                                    


                                                <?php $prixTotale = $prixTotale +($row['price'] * $row['quantity']);
                                                     $prodid = $row['ligneid'];} ?>


<tr class="order-total">
													<th>Total</th>
													<td><strong><span class="amount"><?php echo $prixTotale." dt" ?></span></strong></td>
												</tr>




                                <tr>
                                </tbody>
                                </table>
                             
                              
                                <script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/easing.min.js'></script>
		<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='js/script.js'></script>
		<script type='text/javascript' src='js/swatches-and-photos.js'></script>
		<script type='text/javascript' src='js/jquery.cookie.min.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='js/jquery.transit.min.js'></script>
		<script type='text/javascript' src='js/jquery.carouFredSel.js'></script>
		
		<script type='text/javascript' src='js/jquery.magnific-popup.js'></script>
        </body>
                                </html>
