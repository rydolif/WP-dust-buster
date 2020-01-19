<?php get_header(); ?>

	<section class="about advantages">
		<div class="advantages__container container">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="advantages__content">
					<h2><?php the_title(); ?></h2>
				</div>

				<div class="about__content advantages__list">
					<?php the_content(); ?>		
				</div>

			<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</section>

<?php get_footer(); ?>