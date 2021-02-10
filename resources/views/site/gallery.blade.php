@extends('site.layouts.app')
@section('content')
<div class="page-wrapper">


	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <h1>Gallery of MediTech</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Gallery</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Portfolio Page Section -->
	<section class="portfolio-page-section">
		<div class="auto-container">

			<!--MixitUp Galery-->
            <div class="mixitup-gallery">

                <!--Filter-->
                <div class="filters clearfix">

                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter="all">Show All</li>
                        <li class="filter" data-role="button" data-filter=".cardiology">Cardiology</li>
                        <li class="filter" data-role="button" data-filter=".diabetes">Diabetes</li>
                        <li class="filter" data-role="button" data-filter=".pediatric">Pediatric</li>
                        <li class="filter" data-role="button" data-filter=".ophthalmology">Ophthalmology</li>
						<li class="filter" data-role="button" data-filter=".neurosurgery">Neurosurgery</li>
                    </ul>

                </div>

                <div class="filter-list row clearfix">

					<!-- Gallery Item -->
					<div class="gallery-item mix all ophthalmology neurosurgery col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/6.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/6.jpg" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="doctors-detail.html" class="link"><span class="icon flaticon-link"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all ophthalmology neurosurgery col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/7.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/7.jpg" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="doctors-detail.html" class="link"><span class="icon flaticon-link"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all ophthalmology diabetes col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/8.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/8.jpg" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="doctors-detail.html" class="link"><span class="icon flaticon-link"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all cardiology neurosurgery diabetes col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/9.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/9.jpg" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="doctors-detail.html" class="link"><span class="icon flaticon-link"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all ophthalmology neurosurgery col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/10.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/10.jpg" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="doctors-detail.html" class="link"><span class="icon flaticon-link"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all cardiology diabetes col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/11.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/11.jpg" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="doctors-detail.html" class="link"><span class="icon flaticon-link"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all ophthalmology col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/12.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/12.jpg" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="doctors-detail.html" class="link"><span class="icon flaticon-link"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all diabetes pediatric col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/13.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/13.jpg" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="doctors-detail.html" class="link"><span class="icon flaticon-link"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all cardiology pediatric neurosurgery col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/14.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/14.jpg" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="doctors-detail.html" class="link"><span class="icon flaticon-link"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

				</div>

			</div>

			<div class="btn-box text-center">
				<a href="doctors.html" class="theme-btn btn-style-two"><span class="txt"><i class=" fas fa-user-md"></i> &ensp; View All</span></a>
			</div>

		</div>
	</section>
	<!-- End Portfolio Page Section -->

	<!--Main Footer-->
    <footer class="main-footer style-two">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.html"><img src="images/logo-3.png" alt="" /></a>
                                    </div>
                                    <div class="text">Meditech is a library of health and medical templates with predefined web elements which helps you to build your medical templates best site Provide Comprehensive Quality Care About Medical Care Health Suspendisse metus turpis.</div>
									<ul class="social-icons">
										<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fab fa-google"></span></a></li>
										<li><a href="#"><span class="fab fa-twitter"></span></a></li>
										<li><a href="#"><span class="fab fa-skype"></span></a></li>
										<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<div class="footer-title  clearfix">
										<h2>Departments</h2>
										<div class="separator"></div>
									</div>
									<ul class="footer-list">
										<li><a href="#">Surgery & Radiology</a></li>
										<li><a href="#">Family Medicine</a></li>
										<li><a href="#">Women’s Health</a></li>
										<li><a href="#">Optician</a></li>
										<li><a href="#">Pediatrics</a></li>
										<li><a href="#">Dermatology</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
									<div class="footer-title  clearfix">
										<h2>News Update</h2>
										<div class="separator"></div>
									</div>

									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="images/resource/news-image-1.jpg" alt="" />
                                            </div>
                                            <h3><a href="blog-detail.html">Integrative Medicine And Cancer Treatment</a></h3>
                                            <div class="post-date">July 11, 2017</div>
                                        </div>
                                    </div>

									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="images/resource/news-image-2.jpg" alt="" />
                                            </div>
                                            <h3><a href="blog-detail.html">Achieving Better Health Care One Patient  Time</a></h3>
                                            <div class="post-date">July 11, 2018</div>
                                        </div>
                                    </div>

								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<div class="footer-title  clearfix">
										<h2>Contact Us</h2>
										<div class="separator"></div>
									</div>

									<ul class="contact-list">
										<li><span class="icon flaticon-placeholder"></span>2130 Fulton Street San Diego <br> CA 94117-1080 USA</li>
										<li><span class="icon flaticon-call"></span>Mon to Fri : 08:30 - 18:00 <br> <a href="tel:+898-68679-575-09">+898 68679 575 09</a></li>
										<li><span class="icon flaticon-message"></span>Do you have a Question? <a href="mailto:info@gmail.com">info@gmail.com</a></li>
									</ul>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">MediTech Helth Care &copy; All Rights Reserved By Expertthemes</div>
			</div>
		</div>

	</footer>

</div>
<!--End pagewrapper-->
@endsection
