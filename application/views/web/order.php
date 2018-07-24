<?php include('header.php'); ?>
	
    <div class="main">
	   <div class="container">
		<div class="check_box">

			<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Customar Details</h2>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php echo validation_errors(); ?> 
                        <form method="post">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input name="cf_name" type="text" value="<?php echo set_value('cf_name'); ?>" class="form-control" placeholder="First Name" >
                                    </div>
                                    <div class="col-xs-6">
                                        <input name="cl_name" type="text" value="<?php echo set_value('cl_name'); ?>" class="form-control" placeholder="Last Name" >
                                    </div>
                                </div>
                                <br>
                                
                                <div class="row">
                                
                                    <div class="col-xs-6">
                                        <input name="c_email" class="form-control" value="<?php echo set_value('c_email'); ?>"  placeholder="Email Address(User Name)" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <br>
                                        <input  class="form-control" name="s_price" value="<?php echo set_value('s_price'); ?>" placeholder="Selling Price" >
                                    </div><br>
                                </div><br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="c_mobile"  value="<?php echo set_value('c_mobile'); ?>" placeholder="Mobile No" >
                                    </div>
                                    <div class="col-xs-6">
                                        <h5>Payment Method</h5>
                                        <select class="form-control" name="payment_type" required>
                                            <option value="Cash">Cash</option>
                                            <option value="Cheque">Cheque</option>
                                            <option value="Visa/Master Card">Visa/Master Card</option>
                                            <option value="Wire Transfer">Wire Transfer</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        Warranty Start Date:
                                        <input type="date" class="form-control" name="w_start" value="<?php echo date("Y-m-d"); ?>">
                                    </div>
                                    <div class="col-xs-6">
                                        Warranty End Date:
                                        <input type="date" class="form-control" name="w_end" >
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-xs-12">
                                        <input type="text" class="form-control" name="c_pass" value="Deafult Password : 1234" disabled>
                                    </div>
                                </div>
                                <br/><br/>
								<input type="hidden" name="v_id" value="<?php if(isset($cid)){echo $cid; }?> <?php echo set_value('v_id'); ?>">
                                <input type="submit" name="buttonSubmits" value="Confirm Order" class="btn btn-success" />
                                
                            </fieldset>
                        </form>
                        <br/>
                        <label><?php //echo $message; ?></label>
                                
                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
            </div> <!-- /col --> 
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