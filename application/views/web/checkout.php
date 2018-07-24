<?php include('header.php'); ?>
	
    <div class="main">
	   <div class="container">
		  <div class="check_box">	 
		<div class="col-md-9 cart-items">
			 <h1>My Shopping Bag (2)</h1>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="<?php echo base_url() ; ?>resource/images/pic1.jpg" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li><p>Qty : 1</p></li>
						</ul>
						<div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 <div class="cart-header2">
				 <div class="close2"> </div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="<?php echo base_url() ; ?>resource/images/pic2.jpg" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li><p>Qty : 1</p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>		
		 </div>
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">6200.00</span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span>6350.00</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" href="<?php echo base_url('pages/order') ; ?>">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="login.html">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
			<div class="clearfix"></div>
	 </div>
	     </div>
	    </div>
		<div class="container">
			<div class="brands">
				<ul class="brand_icons">
					<li><img src='<?php echo base_url() ; ?>resource/images/icon1.png' class="img-responsive" alt=""/></li>
					<li><img src='<?php echo base_url() ; ?>resource/images/icon2.png' class="img-responsive" alt=""/></li>
					<li><img src='<?php echo base_url() ; ?>resource/images/icon3.png' class="img-responsive" alt=""/></li>
					<li><img src='<?php echo base_url() ; ?>resource/images/icon4.png' class="img-responsive" alt=""/></li>
					<li class="last"><img src='<?php echo base_url() ; ?>resource/images/icon5.png' class="img-responsive" alt=""/></li>
				</ul>
			</div>
	    </div>
	    <div class="container">
	      <div class="instagram_top">
	      	<div class="instagram text-center">
				<h3>Our Collections</h3>
			</div>
				<ul class="instagram_grid">
					<li><a class="popup-with-zoom-anim" href="#small-dialog1">
						<img src="<?php echo base_url() ; ?>resource/images/i1.jpg" class="img-responsive"alt=""/></a>
					</li>
					<li><a class="popup-with-zoom-anim" href="#small-dialog1">
						<img src="<?php echo base_url() ; ?>resource/images/i2.jpg" class="img-responsive" alt=""/></a>
					</li>
					<li><a class="popup-with-zoom-anim" href="#small-dialog1">
						<img src="<?php echo base_url() ; ?>resource/images/i3.jpg" class="img-responsive" alt=""/></a>
					</li>
					<li><a class="popup-with-zoom-anim" href="#small-dialog1">
						<img src="<?php echo base_url() ; ?>resource/images/i4.jpg" class="img-responsive" alt=""/></a>
					</li>
					<li><a class="popup-with-zoom-anim" href="#small-dialog1">
						<img src="<?php echo base_url() ; ?>resource/images/i5.jpg" class="img-responsive" alt=""/></a>
					</li>
					<li class="last_instagram"><a class="popup-with-zoom-anim" href="#small-dialog1">
						<img src="<?php echo base_url() ; ?>resource/images/i6.jpg" class="img-responsive" alt=""/></a>
					</li>
				    <div class="clearfix"></div>
				    <div id="small-dialog1" class="mfp-hide">
					<div class="pop_up">
						<h4>A Sample Photo Stream</h4>
						<img src="<?php echo base_url() ; ?>resource/images/i_zoom.jpg" class="img-responsive" alt=""/>
					</div>
				    </div>
				</ul>
		  </div>
	      <ul class="footer_social">			
			<li><a href="#"><i class="tw"> </i> </a></li>
			<li><a href="#"> <i class="fb"> </i> </a></li>
			<li><a href="#"><i class="pin"> </i> </a></li>
			<div class="clearfix"></div>
		   </ul>
	    </div>
		
    <?php include('footer.php'); ?>		