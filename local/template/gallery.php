<?php
	/**
		* Template name: Gallery
	*/
 ?>

<?php get_header(); ?>

	<section class="cleaning advantages">
		<div class="advantages__container container">

			<div class="cleaning__title work__content advantages__content">
				<b>Our services</b>
				<h2><?php the_title(); ?></h2>
				<p>
					We’re honored that hundreds of  families have invited us into their homes to clean and help simplify their daily lives
				</p>
				<!-- Add Pagination -->
				<div class="work__pagination pagination"></div>
				<!-- Add Arrows -->
				<div class="work__button-next button-next"></div>
				<div class="work__button-prev button-prev"></div>
			</div>

			<div class="work__slider swiper-container">
				<div class="swiper-wrapper">

					<?php if( have_rows('list') ): ?>
						<?php while( have_rows('list') ): the_row(); 
							$img = get_sub_field('img');
							?>

							<div class="swiper-slide">
								<img src="<?php echo $img; ?>" alt="">
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>