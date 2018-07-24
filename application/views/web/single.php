<?php include('header.php'); ?>
	
	
	<div class="main">
	  <div class="content_box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="menu_box">
				   	  	<h3 class="menu_head">Menu</h3>
				   	     <ul class="nav">
					   	  	<li><a href="about">About</a></li>
					   	  	<li><a href="about">Living Room</a></li>
					   	  	<li><a href="about">Office Furniture</a></li>
					   	  	<li><a href="about">Bean Bags</a></li>
					   	  	<li><a href="about">Tables</a></li>
					   	  	<li><a href="about">Sofas</a></li>
					   	  	<li><a href="about">Wardrobes</a></li>
					   	  	<li><a href="about">Beds</a></li>
					   	  	<li><a href="about">Chairs</a></li>
					   	  	<li><a href="about">Kids Beds</a></li>
					   	 </ul>
			   	    </div>
			   	    <div class="side_banner">
					   <div class="banner_img"><img src="<?php echo base_url() ; ?>resource/images/pic9.jpg" class="img-responsive" alt=""/></div>
					   <div class="banner_holder">
						  <h3>Now <br> is <br> Open!</h3>
					   </div>
				    </div>				   				    
				</div>
				
			{vehicle}
			
		<div class="col-md-9">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
					<li class="home">
                       <a href="about" title="Go to Home Page">About</a>&nbsp;
                       <span>&gt;</span>
                    </li>        
                    <li class="home">&nbsp;
                       Beds
                        <span>&gt;</span>&nbsp;
                    </li>                   
                </ul>
                <ul class="previous">
                	<li><a href="about">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="singel_right">
			     <div class="labout span_1_of_a1">
				   <div class="flexslider">
					 <ul class="slides">
						<li data-thumb="<?= base_url(); ?>uploads/{image}">
							<img src="<?= base_url(); ?>uploads/{image}" />
						</li>
						<li data-thumb="<?= base_url(); ?>uploads/{image}">
							<img src="<?= base_url(); ?>uploads/{image}" />
						</li>
						
					 </ul>
				  </div>
			  </div>
			  <div class="cont1 span_2_of_a1 simpleCart_shelfItem">
				<h1>{model_name}</h1>
				<ul class="rating">
				   <li><a class="product-rate" href="#"> <label> </label></a> <span> </span></li>
				   <li><a href="#">1 Review(s) Add Review</a></li>
				   <div class="clearfix"></div>
			    </ul>
			    <div class="price_single">
				  <span class="reducedfrom">${buying_price}</span>
				  <span class="amount item_price actual">${buying_price}</span><a href="#">click for offer</a>
				</div>
				<h3 class="quick">Quick Overview:</h3>
				<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
			    
				<ul class="product-qty">
				   <span>Quantity:</span>
				   <select>
					 <option>1</option>
					 <option>2</option>
					 <option>3</option>
					 <option>4</option>
					 <option>5</option>
					 <option>6</option>
				   </select>
			    </ul>
			    <div class="btn_form button item_add item_1">
					<form>
					 <input type="submit" value="Add to Cart" title="">
				  </form>
				   
				</div>
			</div>
			<div class="clearfix"></div>
		   </div>
		   <div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <ul class="tab_list">
									  	<li>{model_description}</li>
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
									  <ul class="tab_list">
									    <li>{model_description}</li>
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_list">
									  	<li>{model_description}</li>
									  </ul>      
							     </div>	
							 </div>
					      </div>
					 </div>	
					 <h3 class="like">You Might Also Like</h3>        			
				     <ul id="flexiselDemo3">
						<li><img src="<?php echo base_url() ; ?>resource/images/pic11.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Syenergy 2mm</a><p>Rs 850</p></div></li>
						<li><img src="<?php echo base_url() ; ?>resource/images/pic10.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Surf Yoke</a><p>Rs 1050</p></div></li>
						<li><img src="<?php echo base_url() ; ?>resource/images/pic4.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Salty Daiz</a><p>Rs 990</p></div></li>
						<li><img src="<?php echo base_url() ; ?>resource/images/pic8.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Cheeky Zane</a><p>Rs 850</p></div></li>
						<li><img src="<?php echo base_url() ; ?>resource/images/pic7.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Synergy</a><p>Rs 870</p></div></li>
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="<?php echo base_url() ; ?>resource/js/jquery.flexisel.js"></script>
				   
		</div>
		
		{/vehicle}
		
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