
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="<?php echo base_url();?>assets/live-dinner/images/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12" style="text-align:center !important">
							<h1 class="m-b-20">Welcome To <strong>EmJi Food Market</strong></h1>
							<p class="m-b-40">Silahkan Scan QR-Code Yang Ada Dimeja Untuk Memulai Pemesanan Menu</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="<?php echo base_url();?>assets/live-dinner/images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12" style="text-align:center !important">
							<h1 class="m-b-20">Welcome To <strong>EmJi Food Market</strong></h1>
							<p class="m-b-40">Silahkan Scan QR-Code Yang Ada Dimeja Untuk Memulai Pemesanan Menu</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="<?php echo base_url();?>assets/live-dinner/images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12" style="text-align:center !important">
							<h1 class="m-b-20">Welcome To <strong>EmJi Food Market</strong></h1>
							<p class="m-b-40">Silahkan Scan QR-Code Yang Ada Dimeja Untuk Memulai Pemesanan Menu</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Live Dinner Restaurant</span></h1>
						<h4>Little Story</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
						<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="<?php echo base_url();?>assets/live-dinner/images/about-img.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
				<?php
								foreach ($data->result_array() as $a) {
									$id=$a['galeri_id'];
									$judul=$a['galeri_judul'];
									$deskripsi=$a['galeri_deskripsi'];
									$gambar=$a['galeri_gambar'];
								
							?>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="<?php echo base_url().'assets/galeries/'.$gambar;?>">
							<img class="img-fluid" src="<?php echo base_url().'assets/galeries/'.$gambar;?>" alt="Gallery Images">
						</a>
					</div>
                                <?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="<?php echo base_url();?>assets/live-dinner/images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="<?php echo base_url();?>assets/live-dinner/images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="<?php echo base_url();?>assets/live-dinner/images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Lorem Street, US
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	