<?php get_header(); ?>

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
                <?php if ( has_post_thumbnail() ): ?>
    				<div class="col-md-6">
    					<figure class="jarallax-keep-img">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'jarallax-img single-image', 'title' => 'Feature image']); ?>
		    			</figure>
		    		</div>
                <?php endif; ?>
	    			<div class="col-md-6 description text-lead">
				    	<?php the_content(); ?>
			    	</div>
			</div>

		</div>
	</section>

	<?php softuni_display_latest_posts( 2 ); ?>

<?php get_footer(); ?>