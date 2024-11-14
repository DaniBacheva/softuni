<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<title>Archi - Free Architecture Portfolio HTML Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="TemplatesJungle">
	<meta name="keywords" content="Free HTML Template">
	<meta name="description" content="Free HTML Template">

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/vendor.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap"
		rel="stylesheet">
</head>

<body>

	<div class="preloader"></div>

	<div class="nav nav-overlay">
		<div class="nav__content">
			<div class="container">
				<div class="row p-4 p-md-0 flex-column-reverse flex-md-row g-md-5 nav__block">
					<div class="col-md-5">
						<ul class="nav__list d-none d-md-block">
							<li class="nav__list-item active-nav"><a href="index.html" class="hover-target">Home</a>
							</li>
							<li class="nav__list-item"><a href="index.html" class="hover-target">Onepage</a></li>
							<li class="nav__list-item"><a href="index.html" class="hover-target">Styles</a></li>
							<li class="nav__list-item"><a href="index.html" class="hover-target">Blog</a></li>
							<li class="nav__list-item"><a href="single-post.html" class="hover-target">Single Post</a>
							</li>
							<li class="nav__list-item"><a href="contact.html" class="hover-target">Contact us</a></li>
						</ul>
					</div>
					<div class="col-md-4 text-white">
						<h3 class="text-white fw-bold nav__block-item">Contact info</h3>
						<p class="text-light nav__block-item">Officia nisi corrupti eaque cumque exercitationem labore
							sint sapiente rem neque temporibus id ratione perspiciatis, tenetur est repellendus
							aspernatur culpa repudiandae omnis.</p>
						<ul class="list-unstyled text-light nav__block-item">
							<li class="menu-item">
								<i class="icon icon-location me-2"></i>2489 Locust Court, Los Angeles
							</li>
							<li class="menu-item">
								<i class="icon icon-location2 me-2"></i>3927 Red Maple Drive, Los Angeles
							</li>
							<li class="menu-item">
								<i class="icon icon-phone me-2"></i>+63 667 341 3463
							</li>
							<li class="menu-item">
								<i class="icon icon-envelope-o me-2"></i><a href="#"
									class="text-white">contact@example.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 text-white">
						<h3 class="text-white fw-bold nav__block-item">Pages</h3>
						<ul class="list-unstyled nav__block-item">
							<li><a href="index.html" class="text-white">Onepage </a></li>
							<li><a href="index.html" class="text-white">Styles </a></li>
							<li><a href="index.html" class="text-white">Blog </a></li>
							<li><a href="index.html" class="text-white">Single Post </a></li>
							<li><a href="index.html" class="text-white">Contact us </a></li>
							<li><a href="index.html" class="text-white">Portfolio Masonry </a></li>
							<li><a href="index.html" class="text-white">Portfolio Grid </a></li>
							<li><a href="index.html" class="text-white">Portfolio Grid </a></li>
							<li><a href="index.html" class="text-white">Portfolio Grid </a></li>
							<li><a href="index.html" class="text-white">Single Portfolio </a></li>
							<li><a href="index.html" class="text-white">About Us </a></li>
							<li><a href="index.html" class="text-white">Our Team </a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main-logo">
		<a href="index.html">A.</a>
	</div>

	<div class="side-nav-bar">
		<input id="menu-toggle" type="checkbox" />
		<label class="menu-btn" for="menu-toggle">
			<span></span>
		</label>
	</div>

	<section id="intro" class="scrollspy-section">
		<div class="main-slider">
			<div class="slider-item jarallax" data-speed="0.2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner1.jpg" alt="banner" class="jarallax-img">
				<div class="banner-content">
					<h2 class="banner-title txt-fx">Modern Designs</h2>
					<div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div>
				</div><!--banner-content-->
			</div><!--slider-item-->

			<div class="slider-item jarallax" data-speed="0.2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner2.jpg" alt="banner" class="jarallax-img">
				<div class="banner-content">
					<h2 class="banner-title txt-fx">Clean & Minimal</h2>
					<div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div>
				</div><!--banner-content-->
			</div><!--slider-item-->

			<div class="slider-item jarallax" data-speed="0.2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner3.jpg" alt="banner" class="jarallax-img">
				<div class="banner-content">
					<h2 class="banner-title txt-fx">Personalize and Customize</h2>
					<div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div>
				</div><!--banner-content-->
			</div><!--slider-item-->
		</div><!--slider-->

		<div class="button-container">
			<button class="prev slick-arrow">
				<i class="icon icon-chevron-thin-left"></i>
			</button>
			<button class="next slick-arrow">
				<i class="icon icon-chevron-thin-right"></i>
			</button>
		</div>
	</section>

	<section id="about" class="scrollspy-section padding-xlarge">
		<div class="container">
			<div class="row">

				<div class="col-md-12">

					<div class="section-header">
						<h2 class="section-title"><?php echo get_the_title(); ?></h2>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-6">
					<figure class="jarallax-keep-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/singleimage.jpg" alt="about us" class="jarallax-img single-image">
					</figure>
				</div>
				<div class="col-md-6 description text-lead">
					<?php the_content(); ?>
				</div>
			</div>

		</div>
	</section>

	<section id="latest-blog" class="scrollspy-section bg-grey padding-large">
		<div class="container">

			<div class="row">

				<div class="col">

					<div class="section-header">
						<div class="title">
							<span>read our blog</span>
						</div>
						<h2 class="section-title">latest blog</h2>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-12">

					<div class="post-grid">
						<div class="row">

							<div class="col-md-4">

								<article class="post-item">

									<figure>
										<a href="#" class="image-hvr-effect">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg1.jpg" alt="post" class="post-image">
										</a>
									</figure>

									<div class="post-content">
										<div class="meta-date">Mar 30, 2021</div>
										<h3 class="post-title"><a href="#">modern vibes bedrooms, todays trending
												design</a></h3>
										<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis
											nulla blandit dui.</p>
									</div>
								</article>

							</div>

							<div class="col-md-4">

								<article class="post-item">
									<figure>
										<a href="#" class="image-hvr-effect">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg2.jpg" alt="post" class="post-image">
										</a>
									</figure>
									<div class="post-content">
										<div class="meta-date">Mar 29, 2021</div>
										<h3 class="post-title"><a href="#">How to make minimalist living rooms
												pop-out</a></h3>
										<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis
											nulla blandit dui.</p>
									</div>
								</article>
							</div>

							<div class="col-md-4">
								<article class="post-item">
									<figure>
										<a href="#" class="image-hvr-effect">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg3.jpg" alt="post" class="post-image">
										</a>
									</figure>
									<div class="post-content">
										<div class="meta-date">Mar 27, 2021</div>
										<h3 class="post-title"><a href="#">how to make your resort that looks
												outstanding</a></h3>
										<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis
											nulla blandit dui.</p>
									</div>
								</article>
							</div>

						</div>
					</div>

				</div>



			</div>

			<div class="row">
				<div class="col">

					<div class="btn-wrap align-center">
						<a href="#" class="btn btn-xlarge btn-accent btn-rounded">View all blog</a>
					</div>

				</div>
			</div>

		</div>
	</section>

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-3">

					<div class="footer-menu menu-item-01">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="logo" class="footer-logo">
						<p>Tristique lacus ullamcorper massa posuere nisl molestie. Nullam motes, tortor masa. Nisl
							tellus etiam.</p>
						<div class="social-links">
							<ul>
								<li>
									<a href="#"><i class="icon icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-youtube-play"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-behance-square"></i></a>
								</li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-md-2">

					<div class="footer-menu menu-item-02">
						<h5>quick links</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">home</a>
							</li>
							<li class="menu-item">
								<a href="#">about us </a>
							</li>
							<li class="menu-item">
								<a href="#">services</a>
							</li>
							<li class="menu-item">
								<a href="#">portfolios</a>
							</li>
							<li class="menu-item">
								<a href="#">blogs</a>
							</li>
							<li class="menu-item">
								<a href="#">contact us</a>
							</li>
						</ul>
					</div>

				</div>

				<div class="col-md-4">

					<div class="footer-menu menu-item-03">
						<h5>contact info</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<i class="icon icon-location"></i>2489 Locust Court, Los Angeles
							</li>
							<li class="menu-item">
								<i class="icon icon-location2"></i>3927 Red Maple Drive, Los Angeles
							</li>
							<li class="menu-item">
								<i class="icon icon-phone"></i>+63 667 341 3463
							</li>
							<li class="menu-item">
								<i class="icon icon-envelope-o"></i><a href="#" class="mail-id">contact@example.com</a>
							</li>
						</ul>
					</div>

				</div>

				<div class="col-md-3">

					<div class="footer-menu menu-item-04">
						<h5>gallery</h5>
						<div class="gallery">
							<a href="images/spacejoy.jpg" data-lightbox-gallery="gallery1"
								title="Calm Before The Storm (One Shoe Photography Ltd.)" class="image-link"><img
									src="images/tab1.jpg" alt="house" class="gallery-image"></a>
							<a href="images/interior.jpg" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/tab2.jpg" alt="house" class="gallery-image"></a>
							<a href="images/interior.jpg" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/tab3.jpg" alt="house" class="gallery-image"></a>
							<a href="images/interior.jpg" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/postimg1.jpg" alt="house" class="gallery-image"></a>
							<a href="images/interior.jpg" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/postimg2.jpg" alt="house" class="gallery-image"></a>
							<a href="images/interior.jpg" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/postimg3.jpg" alt="house" class="gallery-image"></a>
						</div>
					</div>

				</div>

			</div>
		</div>
	</footer>

	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="copyright">
						<p>© 2022 Archi. All rights reserved.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="copyright text-right">
						<p>HTML Template by <a href="https://www.templatesjungle.com/"
								target="_blank">TemplatesJungle</a> distributed By <a href="https://themewagon.com" target="blank">ThemeWagon</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ui-easing.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>

</body>

</html>