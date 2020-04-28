<!DOCTYPE HTML>
<head>
<title>Movies Store for Iphone, Android and Smartphone Website Templates | Preview :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Stream Videos Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="<?php echo base_url('assets/kiosbintuni/smartphone/css/style.css');?>" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url('assets/kiosbintuni/smartphone/js/jquery-1.9.0.min.js');?>"></script> 
</head>
<body>
	<div class="header">
		 
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/kiosbintuni/smartphone/images/logo.png');?>" alt="" /></a>
					</div>
						<div class="header_top_right">
							<div class="cart">
			  	 				<div id="dd" class="wrapper-dropdown-3">
									<a href="<?php echo base_url('menu/cart');?>">
										<img src="<?php echo base_url('assets/kiosbintuni/smartphone/images/cart.png');?>" alt="" />
									</a>
							</div>
						</div>											
					     	 
						 <div class="clear"></div>
						  <script type="text/javascript">
								var $ = jQuery.noConflict();
									$(function() {
										$('#activator').click(function(){
												$('#box').animate({'top':'65px'},500);
										});
										$('#boxclose').click(function(){
												$('#box').animate({'top':'-400px'},500);
										});
										$('#activator_share').click(function(){
												$('#box_share').animate({'top':'65px'},500);
										});
										$('#boxclose_share').click(function(){
												$('#box_share').animate({'top':'-400px'},500);
										});
								
									});
									$(document).ready(function(){
									
									//Hide (Collapse) the toggle containers on load
									$(".toggle_container").hide(); 
									
									//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
									$(".trigger").click(function(){
										$(this).toggleClass("active").next().slideToggle("slow");
										return false; //Prevent the browser jump to the link anchor
									});
									
									});
								</script>
					</div>
						  <script type="text/javascript">
									function DropDown(el) {
										this.dd = el;
										this.initEvents();
									}
									DropDown.prototype = {
										initEvents : function() {
											var obj = this;
						
											obj.dd.on('click', function(event){
												$(this).toggleClass('active');
												event.stopPropagation();
											});	
										}
									}
						
									$(function() {
						
										var dd = new DropDown( $('#dd') );
						
										$(document).click(function() {
											// all dropdowns
											$('.wrapper-dropdown-3').removeClass('active');
										});
						
									});
					    </script>
			 <div class="clear"></div>
  		</div>      				
   		</div>
   </div>
   <?php 
            $b=$data->row_array();  
        ?>
   <div class="main">
   	 <div class="wrap">
   	 	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<img src="<?php echo base_url().'assets/gambar/'.$b['menu_gambar']?>" alt="" />
				  </div>
				<div class="desc span_3_of_2">
					<h2><?php echo $b['menu_nama']?> </h2>
					<p><?php echo $b['menu_deskripsi']?></p>					
					<div class="price">
						<p>Price: <span><?php echo $b['harga_baru']?></span></p>
					</div>
					<div class="available">
						<ul>
						  <li><span>Model:</span> &nbsp; Model 1</li>
						  <li><span>Shipping Weight:</span>&nbsp; 5lbs</li>
						  <li><span>Units in Stock:</span>&nbsp; 566</li>
					    </ul>
					</div>
				<div class="share-desc">
					<div class="share">
						<p>Number of units :</p><input class="text_box" type="text">				
					</div>
					<div class="button"><span><a href="<?php echo base_url().'menu/add_to_cart/'.$b['menu_id'];?>">Add to Cart</a></span></div>					
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			 <h2>Details :</h2>
			   <p><?php echo $b['menu_long_deskripsi']?></p>
	   </div>
   </div>
				<div class="rightsidebar span_3_of_1 sidebar">
					<h2>Belanja Lainnya</h2>
					<?php foreach ($get_random_produk->result_array() as $a) { ?>
					 	<div class="special_movies">
					 	   	<div class="movie_poster">
					 		  <a href="<?php echo base_url().'menu/detail_menu/'.$a['menu_id'];?>"><img src="<?php echo base_url('assets/gambar').'/'.$a['menu_gambar'];?>" alt="" /></a>
					 		</div>
					 		<div class="movie_desc">
							   <h3><a href="<?php echo base_url().'menu/detail_menu/'.$a['menu_id'];?>"><?php echo $a['menu_nama'];?></a></h3>
							   <p><span><?php echo $a['harga_lama'];?></span> &nbsp; <?php echo $a['harga_baru'];?></p>
							   <span><a href="<?php echo base_url().'menu/detail_menu/'.$a['menu_id'];?>">Add to Cart</a></span>
							</div>
							<div class="clear"></div>
						</div>	
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
   
</body>
</html>

