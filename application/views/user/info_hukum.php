	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Informasi Hukum
					</h1>

				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area section-gap aboutus-about" id="about">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-8 col-md-12 home-about-left">
					<h6>JA Sadewa & Rekan</h6>
					<h1>
						Ruang Konsultasi <br>
						Online
					</h1>
					<p class="sub">JA Sadewa & Rekan akan menjadi partner digital perihal masalah yang dihadapi</p>
					<p class="pb-20">

					</p>
					<a class="primary-btn" href="#">Pelajari Masalah Anda</a>
				</div>
				<div class="col-lg-4 col-md-12 home-about-right relative">
					<form method="post" action="<?php echo base_url('user/info_hukum/kirim_pesan') ?>" class="form-wrap">
						<?php echo $this->session->flashdata('pesan') ?>
						<h4 class="text-white pb-20">Request a Quote</h4>
						<div class="form-select" id="service-select">
							<select>
								<option value=" 1">Pilih Kategori Masalah</option>
								<option value="2">Keluarga</option>
								<option value="3">Bisnis</option>
								<option value="4">Hutang piutang</option>
								<option value="5">Pidana dan Laporan Polisi</option>
								<option value="5">Pertanahan dan Property</option>
								<option value="5">Lainya</option>
							</select>
						</div>
						<input type="text" name="nama" class="form-control" placeholder="name">
						<input type="phone" class="form-control" placeholder="Phone Number">
						<input type="text" name="email" class="form-control" placeholder="Email Address">
						<textarea type="text" name="pesan" id="" cols="30" rows="5" placeholder="Message" class="form-control"></textarea>
						<button type="submit" class="primary-btn">Kirim Pesan</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- Start cat Area -->
	<section class="cat-area section-gap aboutus-cat" id="feature">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-cat d-flex flex-column">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
						<h4 class="mb-20" style="margin-top: 23px;">Konsultasi Online</h4>
						<p>
							Mudah dan efektif. Temukan solusi permasalahan hukum danda bersama konsultan hukum kami melalui media online digital.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
						<h4 class="mt-40 mb-20">Pembuatan Dokumen</h4>
						<p>
							Bersama kami, pastikan pembuatan atau review dokumen hukum anda dikerjakan dengan teliti dan aman terlindungi
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
						<h4 class="mt-40 mb-20">Pendampingan Hukum</h4>
						<p>
							Mitra konsultan hukum kami akan mendampingi anda. Hadapi permsalahn hukum dengan tenang dan optimal
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End cat Area -->

	<!-- Start service Area -->
	<section class="service-area section-gap" id="service">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 pb-30 header-text text-center">
					<h1 class="mb-10">Kategori Permasalah Hukum</h1>
					<p>
						Who are in extremely love with eco friendly system..
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/s1.jpg" alt="">
						</div>
						<h4>1. Keluarga</h4>
						<p>
							Perceraian, hak asuh, harta suami-istri dan penetapan waris
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/s2.jpg" alt="">
						</div>
						<h4>2. Bisnis</h4>
						<p>
							Regulasi usaha, permodalan, joint venture, kontrak kerjasama atau kontrak vendor
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/s3.jpg" alt="">
						</div>
						<h4>3. Hutang piutang</h4>
						<p>
							Regulasi usaha, permodalan, joint venture, kontrak kerjasama atau kontrak vendor
						</p>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/s1.jpg" alt="">
						</div>
						<h4>4. Pidana dan Laporan Polisi</h4>
						<p>

						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/s2.jpg" alt="">
						</div>
						<h4>5. Pertanahan dan Properti</h4>
						<p>
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/s3.jpg" alt="">
						</div>
						<h4>6. Lainya</h4>
						<p>

						</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End service Area -->


	<!-- Start faq Area -->
	<section class="faq-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-3 col-md-6">
					<div class="single-faq">
						<div class="circle">
							<div class="inner"></div>
						</div>
						<h5><span class="counter">2</span>K+</h5>
						<p>
							Projects Completed
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-faq">
						<div class="circle">
							<div class="inner"></div>
						</div>
						<h5><span class="counter">5.5</span>K</h5>
						<p>
							Total Employees
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-faq">
						<div class="circle">
							<div class="inner"></div>
						</div>
						<h5 class="counter">959</h5>
						<p>
							Happy Clients
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-faq">
						<div class="circle">
							<div class="inner"></div>
						</div>
						<h5 class="counter">367</h5>
						<p>
							Tickets Submited
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End faq Area -->

	<!-- Start feedback Area -->
	<section class="feedback-area aboutus-feedback section-gap" id="feedback">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 pb-60 header-text text-center">
					<h1 class="mb-10">Enjoy our Client’s Feedback</h1>
					<p>
						Who are in extremely love with eco friendly system..
					</p>
				</div>
			</div>
			<div class="row feedback-contents justify-content-center align-items-center">
				<div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
					<div class="overlay overlay-bg"></div>
					<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-btn.png" alt=""></a>
				</div>
				<div class="col-lg-6 feedback-right">
					<div class="active-review-carusel">
						<div class="single-feedback-carusel">
							<div class="title d-flex flex-row">
								<h4 class="pb-10">Fannie Rowe</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>
						<div class="single-feedback-carusel">
							<div class="title d-flex flex-row">
								<h4 class="pb-10">Fannie Rowe</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>
						<div class="single-feedback-carusel">
							<div class="title d-flex flex-row">
								<h4 class="pb-10">Fannie Rowe</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked	"></span>
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End feedback Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
						</p>
						<p class="footer-text">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
								<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
								<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>

								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->