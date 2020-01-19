<?php get_header(); ?>

	<section class="cleaning advantages">
		<div class="advantages__container container">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="cleaning__title advantages__content">
					<b>Our services</b>

					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>

					<a href="#" class="btn hero__btn order_open">Get a Quote</a>
				</div>

				<div class="cleaning__content advantages__list">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="">
				</div>


			<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</section>

<?php get_footer(); ?>
