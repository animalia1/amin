<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Shop by Category | HTML Commerce Template</title>
		<link rel="shortcut icon" href="images/favicon.ico">

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

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
		<?php include ("header.php"); ?>
			<div class="content-container commerce page-layout-left-sidebar pt-10">
				<div class="container">
					<div class="row">
						<div class="col-md-9 main-wrap">
							<div class="main-content pl-5">
								<div class="shop-toolbar">
									<form class="commerce-ordering clearfix">
										<div class="commerce-ordering-select">
											<label class="hide">Sorting:</label>
											<div class="form-flat-select">
												<select name="orderby" class="orderby">
													<option value="" selected='selected'>Default sorting</option>
													<option value="">Sort by popularity</option>
													<option value="">Sort by average rating</option>
													<option value="">Sort by newness</option>
													<option value="">Sort by price: low to high</option>
													<option value="">Sort by price: high to low</option>
												</select>
												<i class="fa fa-angle-down"></i>
											</div>
										</div>
										<div class="commerce-ordering-select">
											<label class="hide">Show:</label>
											<div class="form-flat-select">
												<select name="per_page" class="per_page">
													<option value="" selected='selected'>12</option>
													<option value="">24</option>
													<option value="">36</option>
												</select>
												<i class="fa fa-angle-down"></i>
											</div>
										</div>
									</form>
								</div>
								<div class="shop-loop grid">
									<ul class="products">

									<?PHP
															$produit1C=new produitC();
															$listeproduit=$produit1C->afficherProduitFo($_REQUEST['cat'],$_REQUEST['type']);
																foreach($listeproduit as $row){  
	                             
															?>
									<li class="product product-no-border style-2 col-md-3 col-sm-6">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																<a href="shop-detail.php?<?php echo "id=".$row['id'] ?>"><img width="450" height="450" src="admin/<?php echo $row['image']; ?>" alt=""/></a>
															</div>
															<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																<a href="shop-detail.php?<?php echo "id=".$row['id'] ?>"><img width="450" height="450" src="admin/<?php echo $row['image']; ?>" alt=""/></a>
															</div>
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-meta clearfix">
																<div class="star-rating">
																	<span style="width:0%"></span>
																</div>
																<div class="loop-add-to-wishlist">
																	<div class="yith-wcwl-add-to-wishlist">
                                                                        <div class="yith-wcwl-add-button">
                                                                            <a href="#" class="add_to_wishlist">
                                                                                Add to Wishlist
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
															</div>
															<div class="info-content-wrap">
																<h3 class="product_title">
																	<a href="shop-detail-1.html"><?php echo $row['nom'] ?></a>
																</h3>
																<div class="info-price">
																	<span class="price">
																		<span class="amount"><?php echo $row['price'] ?></span>
																	</span>
																</div>
																<div class="loop-action">
																	<div class="loop-add-to-cart">
																		<a href="#" class="add_to_cart_button">
																			Add to cart
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>

																<?php }?>
 
									</ul>
								</div>
								<nav class="commerce-pagination">
									<p class="commerce-result-count">
										Showing 1&ndash;12 of 14 results
									</p>
									<div class="paginate">
										<div class="paginate_links">
											<span class='page-numbers current'>1</span>
											<a class='page-numbers' href='#'>2</a>
											<a class="next page-numbers" href="#">
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</div>
								</nav>
							</div>
						</div>
						<div class="col-md-3 sidebar-wrap">
							<div class="main-sidebar">
								<div class="widget commerce widget_product_search">
									<h4 class="widget-title">
										<span>Product Search</span>
									</h4>
									<form class="commerce-product-search">
										<label class="screen-reader-text" for="s">Search for:</label>
										<input type="search" class="search-field rounded" placeholder="Search Products&hellip;" value="" name="s"/>
										<input type="submit" value="Search"/>
									</form>
								</div>
								<div class="widget widget_layered_nav">
									<h4 class="widget-title">
										<span>Filter by Color</span>
									</h4>
									<ul>
										<li>
											<a href="#">Black</a> 
											<span class="count">(1)</span>
										</li>
										<li>
											<a href="#">Blue</a> 
											<span class="count">(1)</span>
										</li>
										<li>
											<a href="#">Brown</a> 
											<span class="count">(1)</span>
										</li>
									</ul>
								</div>
								<div class="widget widget_price_filter">
									<h4 class="widget-title"><span>Price</span></h4>
									<form>
										<div class="price_slider_wrapper">
											<div class="price_slider"></div>
											<div class="price_slider_amount">
												<input type="text" id="min_price" name="min_price" value="" data-min="10" placeholder="Min price"/>
												<input type="text" id="max_price" name="max_price" value="" data-max="732" placeholder="Max price"/>
												<button type="submit" class="button">Filter</button>
												<div class="price_label">
													Price: <span class="from"></span> &mdash; <span class="to"></span>
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</form>
								</div>
								<div class="widget widget_layered_nav">
									<h4 class="widget-title"><span>Brands</span></h4>
									<ul>
										<li>
											<a href="#">Adesso</a> <small class="count">11</small>
										</li>
										<li>
											<a href="#">Barbour</a> <small class="count">6</small>
										</li>
										<li>
											<a href="#">Carvela</a> <small class="count">9</small>
										</li>
										<li>
											<a href="#">Crocs</a> <small class="count">10</small>
										</li>
										<li>
											<a href="#">Evans</a> <small class="count">12</small>
										</li>
									</ul>
								</div>
								<div class="widget widget_product_categories">
									<h4 class="widget-title"><span>Categories</span></h4>
									<ul class="product-categories">
										<li><a href="#">Aliquam</a></li>
										<li><a href="#">Donec</a></li>
										<li><a href="#">Fusce</a></li>
										<li><a href="#">Maecenas</a></li>
										<li><a href="#">Nulla</a></li>
										<li><a href="#">Proin</a></li>
										<li><a href="#">Tortor</a></li>
										<li><a href="#">Various</a></li>
									</ul>
								</div>
								<div class="widget widget_products">
									<h4 class="widget-title"><span>Best Sellers</span></h4>
									<ul class="product_list_widget">
										<li>
											<a href="shop-detail-1.html">
												<img width="200" height="200" src="images/products/product_60x60.jpg" alt="Product-1"/> 
												<span class="product-title">Donec tincidunt justo</span>
											</a>
											<del><span class="amount">20.50&#36;</span></del> 
											<ins><span class="amount">19.00&#36;</span></ins>
										</li>
										<li>
											<a href="shop-detail-1.html">
												<img width="200" height="200" src="images/products/product_60x60.jpg" alt="Product-2"/> 
												<span class="product-title">Mauris egestas</span>
											</a>
											<span class="amount">14.95&#36;</span>
										</li>
										<li>
											<a href="shop-detail-1.html">
												<img width="200" height="200" src="images/products/product_60x60.jpg" alt="Product-9"/> 
												<span class="product-title">Morbi fermentum</span>
											</a>
											<span class="amount">17.45&#36;</span>
										</li>
										<li>
											<a href="shop-detail-1.html">
												<img width="200" height="200" src="images/products/product_60x60.jpg" alt="Product-8"/> 
												<span class="product-title">Morbi fermentum</span>
											</a>
											<span class="amount">23.00&#36;</span>
										</li>
										<li>
											<a href="shop-detail-1.html">
												<img width="200" height="200" src="images/products/product_60x60.jpg" alt="Product-7"/> 
												<span class="product-title">Ut quis Aenean</span>
											</a>
											<span class="amount">10.95&#36;</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer id="footer" class="footer">
				<div class="footer-newsletter">
					<div class="container">
						<div class="footer-newsletter-wrap">
							<h3 class="footer-newsletter-heading">NEWSLETTER</h3>
							<form class="mailchimp-form">
								<div class="mailchimp-form-content clearfix">
									<label for="subscribe_email" class="hide">Subscribe</label>
									<input type="email" id="subscribe_email" class="form-control" required="required" placeholder="Enter your email..." name="email">
									<button type="submit" class="btn mailchimp-submit">sign up</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="footer-featured">
					<div class="container">
						<div class="row">
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-money"></i>
								<h4 class="footer-featured-title">
									100% <br> return money
								</h4>
								free return standard order in 30 days 
							</div>
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-globe"></i>
								<h4 class="footer-featured-title">
									world wide <br> delivery
								</h4>
								free ship for payment over $100
							</div>
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-clock-o"></i>
								<h4 class="footer-featured-title">
									24h <br> shipment 
								</h4>
								for standard package 
							</div>
						</div>
					</div>
				</div>
				<div class="footer-widget">
					<div class="container">
						<div class="footer-widget-wrap">
							<div class="row">
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_text">
										<div class="textwidget">
											<ul class="address">
												<li>
													<i class="fa fa-home"></i>
													<h4>Address:</h4>
													<p>132 Jefferson Avenue, Suite 22, Redwood City, CA 94872, USA</p>
												</li>
												<li>
													<i class="fa fa-mobile"></i>
													<h4>Phone:</h4>
													<p>(00) 123 456 789</p>
												</li>
												<li>
													<i class="fa fa-envelope"></i>
													<h4>Email:</h4>
													<p><a href="mailto:email@domain.com">email@domain.com</a></p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_nav_menu">
										<h3 class="widget-title">
											<span>infomation</span>
										</h3>
										<div class="menu-infomation-container">
											<ul class="menu">
												<li><a href="#">About Us</a></li>
												<li><a href="#">Contact Us</a></li>
												<li><a href="#">Term &#038; Conditions</a></li>
												<li><a href="#">Gift Voucher</a></li>
												<li><a href="#">BestSellers</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_nav_menu">
										<h3 class="widget-title">
											<span>Customer Care</span>
										</h3>
										<div class="menu-customer-care-container">
											<ul class="menu">
												<li><a href="#">Support</a></li>
												<li><a href="#">Sitemap</a></li>
												<li><a href="#">FAQ</a></li>
												<li><a href="#">Shipping</a></li>
												<li><a href="#">Returns</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_text">
										<h3 class="widget-title">
											<span>open house</span>
										</h3>
										<div class="textwidget">
											<ul class="open-time">
												<li><span>Mon - Fri:</span><span>8am - 5pm</span> </li>
												<li><span>Sat:</span><span>8am - 11am</span> </li>
												<li><span>Sun: </span><span>Closed</span></li>
											</ul>
											<h3 class="widget-title">
												<span>payment Menthod</span>
											</h3>
											<div class="payment">
												<a href="#"><i class="fa fa-cc-mastercard"></i></a>
												<a href="#"><i class="fa fa-cc-visa"></i></a>
												<a href="#"><i class="fa fa-cc-paypal"></i></a>
												<a href="#"><i class="fa fa-cc-discover"></i></a>
												<a href="#"><i class="fa fa-credit-card"></i></a>
												<a href="#"><i class="fa fa-cc-amex"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright text-center">
					© 2015 WOOW - Responsive Commerce Theme
				</div>
			</footer>
		</div>

		<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userloginModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Login</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" id="username" name="log" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="Password">
							</div>
							<div class="checkbox clearfix">
								<label class="form-flat-checkbox pull-left">
									<input type="checkbox" name="rememberme" id="rememberme" value="forever">
									<i></i>&nbsp;Remember Me
								</label>
								<span class="lostpassword-modal-link pull-right">
									<a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
								</span>
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-register pull-left">
								<a data-rel="registerModal" href="#">Not a Member yet?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userregisterModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Register account</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="user_email">Email</label>
								<input type="email" id="user_email" name="user_email" required class="form-control" value="" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="user_password">Password</label>
								<input type="password" id="user_password" required value="" name="user_password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="user_password">Retype password</label>
								<input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userlostpasswordModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Forgot Password</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username or E-mail:</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="minicart-side">
			<div class="minicart-side-title">
				<h4>Shopping Cart</h4>
			</div>
			<div class="minicart-side-content">
				<div class="minicart">
					<div class="minicart-header no-items show">
						Your shopping bag is empty.
					</div>
					<div class="minicart-footer">
						<div class="minicart-actions clearfix">
							<a class="button no-item-button" href="#">
								<span class="text">Go to the shop</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

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
		<script type='text/javascript' src='js/jquery.parallax.js'></script>

		<script type='text/javascript' src='js/core.min.js'></script>
		<script type='text/javascript' src='js/widget.min.js'></script>
		<script type='text/javascript' src='js/mouse.min.js'></script>
		<script type='text/javascript' src='js/slider.min.js'></script>
		<script type='text/javascript' src='js/jquery-ui-touch-punch.min.js'></script>
		<script type='text/javascript' src='js/price-slider.js'></script>
	</body>
</html>