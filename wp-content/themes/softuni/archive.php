<?php get_header(); ?>

<section id="latest-blog" class="scrollspy-section bg-grey padding-large">
	<div class="container">

		<div class="row">
			<div class="col">
				<div class="section-header">
					<h2 class="section-title"><?php echo get_the_archive_title(); ?></h2>
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
										<img src="images/postimg1.jpg" alt="post" class="post-image">
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

<?php get_footer(); ?>	
