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

<style type="text/css">
#kiri
{
width:40%;
height:100px;
float:left;
}
#tengah
{
width:55%;
height:100px;
float:right;
}
#kanan
{
width:5%;
height:100px;
float:right;
}
h2 {
	font-family: 'ambleregular';
	font-size: 1.2em;
	color:#FC7D01;
	font-weight: normal;
	margin-top: 0px;
	text-transform: uppercase;
}
</style>
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
									<a href="<?php echo base_url().'menu/check_out'?>">
										Next <img width="20" height="20" src="<?php echo base_url('assets/kiosbintuni/smartphone/images/next.png');?>" alt="" />
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
   </div>
   <!------------End Header ------------>
  
  <div class="main">
  	<div class="wrap">
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Keranjang Belanja <span style="float:right;font-weight:bold">Rp. <?php echo number_format($this->cart->total());?></span></h3>
    		</div>
		</div>  
		<br>
		
	    <div class="section group">
		<div class="contact-form">
		<form action="<?php echo base_url().'menu/update/'?>" method="post">
			<?php 
				$i = 1; 
				foreach ($this->cart->contents() as $items)  {
					echo form_hidden($i.'[rowid]', $items['rowid']);
			?>
			<div id="kiri">
				<img width="90%" height="80" src="<?php echo base_url().'assets/gambar/'.$items['image'];?>" alt="" />
			</div>
			<div id="kanan">
				<a href="<?php echo base_url().'menu/remove/'.$items['rowid'];?>" style="text-decoration:none;">X</a>
			</div>
			<div id="tengah">
				<h2><?php echo $items['name'];?></h2>
				Harga : <?php echo number_format($items['subtotal']);?><br>
				<div>
					<label>Qty : </label><input style="width:5em" type="number" name="<?php echo $i.'[qty]'?>" value="<?php echo number_format($items['qty']);?>" min="1">
				</div>	
			</div>
			<hr>
			<?php } ?>
		</form>
		</div>
        </div>
    </div>
  </div>
  
</body>
</html>

