<?php include('header.php'); ?>
	
    <div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div>
						<span>First Name<label>*</label></span>
						<input type="text"> 
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text"> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="text"> 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type="text">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="text">
							 </div>
					 </div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
					   <input type="submit" value="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
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
    </div>
    
	<?php include('footer.php'); ?>	