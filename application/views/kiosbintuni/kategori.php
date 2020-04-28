<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Mbentuni</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Stream Videos Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="<?php echo base_url('assets/kiosbintuni/smartphone/css/style.css');?>" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url('assets/kiosbintuni/smartphone/css/slider.css');?>" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url('assets/kiosbintuni/smartphone/js/jquery-1.9.0.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/kiosbintuni/smartphone/js/jquery.nivo.slider.js');?>"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
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
					     	 <a href="#" class="right_bt" id="activator"><img src="<?php echo base_url('assets/kiosbintuni/smartphone/images/search_icon.png');?>" alt="" /></a>
					     	    <div class="box" id="box">
					        	   <div class="box_content">        					                         
					                <div class="box_content_center">
					                   <div class="form_content">
						                 <div class="search_box">
								     		<form>
								     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
								     		</form>
								     	</div>
						                   <a class="boxclose" id="boxclose"><img src="<?php echo base_url('assets/kiosbintuni/smartphone/images/button.png');?>" alt="" /></a>
					                   </div>                
					                   <div class="clear"></div>
					                </div> 
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
				<div class="header_bottom">
					<div class="header_bottom_left">				
						<div class="categories">
								<div class="menu_container">
									 <p class="menu_head">Kategori<span class="plusminus">+</span></p>
										<div class="menu_body">
										   <div class="list">
											  <ul>
											  <li><a href="<?php echo base_url('kategori/all');?>">Semua</a></li>
											  <?php foreach ($get_all_kategori->result_array() as $a) { ?>
					                             <li><a href="<?php echo base_url('kategori/id').'/'.$a['kategori_id'];?>"><?php echo $a['kategori_nama'];?></a></li>
											  <?php } ?>
					                         </ul>
									  </div>	 
									</div>								
								</div>
								<script type="text/javascript">
									$(document).ready(function(){
										$(".menu_body").hide();
										//toggle the componenet with class menu_body
										$(".menu_head").click(function(){
											$(this).next(".menu_body").slideToggle(600); 
											var plusmin;
											plusmin = $(this).children(".plusminus").text();
											
											if( plusmin == '+')
											$(this).children(".plusminus").text('-');
											else
											$(this).children(".plusminus").text('+');
										});
									});
								</script>
						  </div>
			         </div>
			     <div class="clear"></div>
			</div>
   		</div>
   </div>
   <!------------End Header ------------>
  <div class="main">
  	<div class="wrap">
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3><?php echo $kategori_name;?></h3>
    		</div>
        </div>
        <div class="section group">
            <?php 
            $i=0;
            foreach ($get_produk_kategori->result_array() as $a) { ?>
				<div class="grid_1_of_2 images_1_of_2">
					<a href="<?php echo base_url().'menu/detail_menu/'.$a['menu_id'];?>"><img height="100"  src="<?php echo base_url('assets/gambar').'/'.$a['menu_gambar'];?>" alt="" /></a>
					<h2><a href="<?php echo base_url().'menu/detail_menu/'.$a['menu_id'];?>"><?php echo $a['menu_nama'];?></a></h2>
					<div class="price-details">
				        <div class="price-number">
							<p><span class="rupees"><?php echo $a['harga_baru'];?></span></p>
					    </div>
					    <div class="add-cart">								
							<h4><a href="<?php echo base_url().'menu/detail_menu/'.$a['menu_id'];?>">Add to Cart</a></h4>
						</div>
						<div class="clear"></div>
					</div>					 
                </div>
        <?php
        $i++;
        if ($i%2==0){
        echo '</div><div class="section group">';
        }
        ?>
            <?php } ?>	
        </div>
			
			
  </div>
</div>
</body>
</html>

