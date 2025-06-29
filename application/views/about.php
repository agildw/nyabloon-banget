<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('partials/head', ['title' => 'About Us - Nyabloon Banget']); ?>

<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- header -->
		<?php $this->load->view('partials/navbar'); ?>
		<main>
			<!-- introBannerHolder -->
			<section class="introBannerHolder d-flex w-100 bgCover" >
				<div class="container">
					<div class="row">
						<div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
							<h1 class="headingIV fwEbold playfair mb-4">About Us</h1>
							<ul class="list-unstyled breadCrumbs d-flex justify-content-center">
								<li class="mr-2"><a href="<?= base_url() ?>">Home</a></li>
								<li class="mr-2">/</li>
								<li class="active">About</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section class="abtSecHolder container pt-xl-24 pb-xl-12 pt-lg-20 pb-lg-10 pt-md-16 pb-md-8 pt-10 pb-5">
				<div class="row">
					<div class="col-12 col-lg-6 pt-xl-12 pt-lg-8">
						<h2 class="playfair fwEbold position-relative mb-7 pb-5">
							<strong class="d-block">A Minimal Team</strong>
							<strong class="d-block">For a Better World</strong>
						</h2>
						<p class="pr-xl-16 pr-lg-10 mb-lg-0 mb-6">
							  Nyabloon Banget is a custom t-shirt brand that offers a wide range of cool designs for men, women, and children. We are a team of designers and artists who are passionate about creating unique and stylish t-shirts that reflect the personality and style of our customers.
						</p>
					</div>
					<div class="col-12 col-lg-6">
						<img src="https://plus.unsplash.com/premium_photo-1661767467261-4a4bed92a507?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image description" class="img-fluid">
					</div>
				</div>
			</section>
			<section class="counterSec container pt-xl-12 pb-xl-24 pt-lg-10 pb-lg-20 pt-md-8 pb-md-16 pt-5 pb-10">
				<div class="row">
					<div class="col-12">
						<!-- progressCounter -->
						<ul class="progressCounter list-unstyled mb-2 d-flex flex-wrap text-capitalize text-center">
							<li class="mb-md-0 mb-3">
								<strong class="d-block fwEbold counter mb-2">100+</strong>
								<strong class="d-block text-uppercase txtWrap">Happy Customers</strong>
							</li>
							<li class="mb-md-0 mb-3">
								<strong class="d-block fwEbold counter mb-2">100+</strong>
								<strong class="d-block text-uppercase txtWrap">Completed Orders</strong>
							</li>
							<li class="mb-md-0 mb-3">
								<strong class="d-block fwEbold counter mb-2">10+</strong>
								<strong class="d-block text-uppercase txtWrap">Products</strong>
							</li>
							<li class="mb-md-0 mb-3">
								<strong class="d-block fwEbold counter mb-2">4</strong>
								<strong class="d-block text-uppercase txtWrap">Awesome Staffs</strong>
							</li>
						</ul>
					</div>
				</div>
			</section>
			
			<section class="processStepSec container pt-xl-23 pb-xl-10 pt-lg-20 pb-lg-10 pt-md-16 pb-md-8 pt-10 pb-0">
				<div class="row">
					<header class="col-12 mainHeader mb-3 text-center">
						<h1 class="headingIV playfair fwEblod mb-4">Delivery Process</h1>
						<span class="headerBorder d-block mb-5"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
					</header>
				</div>
				<div class="row">
					<div class="col-12 pl-xl-23 mb-lg-3 mb-10">
						<div class="stepCol position-relative bg-lightGray py-6 px-6">
							<strong class="mainTitle text-uppercase mt-n8 mb-5 d-block text-center py-1 px-3">step 01</strong>
							<h2 class="headingV fwEblod text-uppercase mb-3">Choose your products</h2>
							<p class="mb-5">
								Browse our collection of cool designs and choose the one that suits you best.
							</p>
						</div>
					</div>
					<div class="col-12 pr-xl-23 mb-lg-3 mb-10">
						<div class="stepCol rightArrow position-relative bg-lightGray py-6 px-6 float-right">
							<strong class="mainTitle text-uppercase mt-n8 mb-5 d-block text-center py-1 px-3">step 02</strong>
							<h2 class="headingV fwEblod text-uppercase mb-3">Share your location</h2>
							<p class="mb-5">
								Share your location with us so we can deliver your order to you.
							</p>
						</div>
					</div>
					<div class="col-12 pl-xl-23 mb-lg-3 mb-10">
						<div class="stepCol position-relative bg-lightGray py-6 px-6">
							<strong class="mainTitle text-uppercase mt-n8 mb-5 d-block text-center py-1 px-3">step 03</strong>
							<h2 class="headingV fwEblod text-uppercase mb-3">Get delivered fast</h2>
							<p class="mb-5">
								Your order will be delivered to you within 3-5 business days.
							</p>
						</div>
					</div>
				=
				</div>
			</section>
			<section class="teamSec pt-xl-12 pb-xl-21 pt-lg-10 pb-lg-20 pt-md-8 pb-md-16 pt-0 pb-4">
				<div class="container">
					<div class="row">
						<header class="col-12 mainHeader mb-9 text-center">
							<h1 class="headingIV playfair fwEblod mb-4">Meet Our Team</h1>
							<span class="headerBorder d-block mb-5"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
						</header>
					</div>
					<div class="row">
						<div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-lg-0 mb-6">
							<article class="teamBlock overflow-hidden">
								<span class="imgWrap position-relative d-block w-100 mb-4">
									<img src="https://i2.seadn.io/base/0x2bd7bf903a41d2fe857f68f1fbfae2a34786ba2c/7dee1248c86c0f9bb19b7af516e34c/857dee1248c86c0f9bb19b7af516e34c.png?w=1000" class="img-fluid" alt="image description">
		
								</span>
								<div class="textDetail w-100 text-center">
									<h3>
										<strong class="text-uppercase d-block fwEbold name mb-2"><a href="javascript:void(0);">William Yohanes Hutubessy</a></strong>
										<!-- <strong class="text-capitalize d-block desination">Co - Founder & CEO</strong> -->
									</h3>
								</div>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-lg-0 mb-6">
							<article class="teamBlock overflow-hidden">
								<span class="imgWrap position-relative d-block w-100 mb-4">
									<img src="https://i2.seadn.io/base/0x2bd7bf903a41d2fe857f68f1fbfae2a34786ba2c/ad8644ea0c602b58763ec1e0f1354b/5cad8644ea0c602b58763ec1e0f1354b.png?w=1000" class="img-fluid" alt="image description">
				
								</span>
								<div class="textDetail w-100 text-center">
									<h3>
										<strong class="text-uppercase d-block fwEbold name mb-2"><a href="javascript:void(0);">Vieri Dadosta Sembiring</a></strong>
										<!-- <strong class="text-capitalize d-block desination">Art Director</strong> -->
									</h3>
								</div>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-lg-0 mb-6">
							<article class="teamBlock overflow-hidden">
								<span class="imgWrap position-relative d-block w-100 mb-4">
									<img src="https://i2.seadn.io/base/0x2bd7bf903a41d2fe857f68f1fbfae2a34786ba2c/d3aff05abafbe725c802f789cde5aa/ccd3aff05abafbe725c802f789cde5aa.png?w=1000" class="img-fluid" alt="image description">
								
								</span>
								<div class="textDetail w-100 text-center">
									<h3>
										<strong class="text-uppercase d-block fwEbold name mb-2"><a href="javascript:void(0);">Sebastianus Lukito</a></strong>
										<!-- <strong class="text-capitalize d-block desination">Art Director</strong> -->
									</h3>
								</div>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-lg-0 mb-6">
							<article class="teamBlock overflow-hidden">
								<span class="imgWrap position-relative d-block w-100 mb-4">
									<img src="https://i2.seadn.io/base/0x2bd7bf903a41d2fe857f68f1fbfae2a34786ba2c/8a146bf5eca685e70203b52362ef1b/0b8a146bf5eca685e70203b52362ef1b.png?w=1000" class="img-fluid" alt="image description">
								
								</span>
								<div class="textDetail w-100 text-center">
									<h3>
										<strong class="text-uppercase d-block fwEbold name mb-2"><a href="javascript:void(0);">Agil Dwiki Yudistira</a></strong>
										<!-- <strong class="text-capitalize d-block desination">Chief of Marketing Team</strong> -->
									</h3>
								</div>
							</article>
						</div>
						
						
					</div>
				</div>
			</section>
			
			
		</main>
		<!-- footer -->
		<?php $this->load->view('partials/footer') ?>

	</div>
	<!-- include jQuery library -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- include bootstrap popper JavaScript -->
	<script src="js/popper.min.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustome.js"></script>
</body>
</html>