<?php
	/**
		* Template name: About
	*/
 ?>


<?php get_header(); ?>

	<section class="about advantages">
		<div class="advantages__container container">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="advantages__content">
					<b>we offer best services</b>
					<h2><?php the_title(); ?></h2>
					<p>
						Committed to Keeping Your Home Squeaky Clean
					</p>
				</div>

				<div class="about__content advantages__list">

					<div class="about__list">
						<div class="about__item">
							<span class="about__item_number">740+</span>
							<span class="about__item_text">Clean Homes</span>
						</div>
						<div class="about__item">
							<span class="about__item_number">35+</span>
							<span class="about__item_text">Professional Staffers</span>
						</div>
						<div class="about__item">
							<span class="about__item_number">850+</span>
							<span class="about__item_text">Happy Clients</span>
						</div>
						<div class="about__item">
							<span class="about__item_number">10+</span>
							<span class="about__item_text">Years in Business</span>
						</div>
					</div>

					<?php the_content(); ?>		
				</div>

			<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</section>

<?php get_footer(); ?>

