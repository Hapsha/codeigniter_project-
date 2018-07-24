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
					   	  	<li><a href="typo">Typo</a></li>
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
				    <div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Office</a></li>
							<li><a href="#">Chairs</a></li>
							<li><a href="#">Wood</a></li>
							<li><a href="#">Metal</a></li>
							<li><a href="#">Sizes</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">Wardrobes</a></li>
							<li><a href="#">Latest</a></li>
							<li><a href="#">Kitchen</a></li>
							<li><a href="#">Tables</a></li>
							<li><a href="#">Modern</a></li>
							<li><a href="#">Colors</a></li>
							<li><a href="#">Shelves</a></li>
							<li><a href="#">Stools</a></li>
							<li><a href="#">Pouffes</a></li>
					        <li><a href="#">Women</a></li>
							<li><a href="#">Bedroom</a></li>
						</ul>
						<a href="#" class="link1">View all tags</a>
				    </div>
				     <div class="tags">
				      	<h4 class="tag_head">Articles Experts</h4>
				      	 <ul class="article_links">
							<li><a href="#">Eleifend option congue nihil</a></li>
							<li><a href="#">Investigationes demonst</a></li>
							<li><a href="#">Qui sequitur mutationem</a></li>
							<li><a href="#">videntur parum clar sollemnes</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
							<li><a href="#">commodo consequat. Duis autem</a></li>
							<li><a href="#">Investigationes demonst</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
							<li><a href="#">Qui sequitur mutationem</a></li>
							<li><a href="#">videntur parum clar sollemnes</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
						  </ul>
						 <a href="#" class="link1">View all</a>
				      </div>
				</div>
			   <div class="col-md-9">
				<h3 class="m_1">Featured Products</h3>
				 <div class="content_grid">
				 <?php foreach($featured as $feature) : ?>
				   <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	   <a href="<?php echo base_url('pages/show') . '/' . $feature['vehicle_id']; ?>">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="<?= base_url('uploads'); ?>/<?php echo $feature['image']; ?>" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>	
								 <div class="product_container">
								   <div class="cart-left">
									 <p class="title"><?php echo $feature['model_name']; ?></p>
								   </div>
								   <span class="amount item_price">$<?php echo $feature['buying_price']; ?></span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				    </div>
					<?php endforeach; ?>
				    
				   
				   <div class="clearfix"></div>
				</div>
			  
			   <h3 class="m_2">NEW Products</h3>
			   <div class="content_grid">
				<?php foreach($vehicles as $vehicle) : ?>
			   		<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	   <a href="<?php echo base_url('pages/show') . '/' . $vehicle['vehicle_id']; ?>">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="<?= base_url('uploads'); ?>/<?php echo $vehicle['image']; ?>" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>		
							    <div class="product_container">
								   <div class="cart-left">
									 <p class="title"><?php echo $vehicle['model_name']; ?></p>
								   </div>
								   <span class="amount item_price">$<?php echo $vehicle['buying_price']; ?></span>
								   <div class="clearfix"></div>
							     </div>		
							</div>
		                    </div>
		                </a>
				    </div>
				    
				    <?php endforeach; ?>
				    <div class="clearfix"></div>
			    </div>
				
			    <h3 class="m_2">Sale Products</h3>
			   <div class="content_grid">
			    <?php foreach($status as $statuss) : ?>
			   		<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	    <a href="<?php echo base_url('pages/show') . '/' . $statuss['vehicle_id']; ?>">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="<?= base_url('uploads'); ?>/<?php echo $statuss['image']; ?>" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>		
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title"><?php echo $statuss['model_name']; ?></p>
								   </div>
								   <span class="amount item_price">$<?php echo $statuss['buying_price']; ?></span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                </a>
				    </div>
					<?php endforeach; ?>
				   <div class="clearfix"></div>
			    </div>
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