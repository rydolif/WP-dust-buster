<?php
	/**
		* Template name: FAQ
	*/
 ?>

<?php get_header(); ?>
	
	<section class="faq advantages">
		<div class="advantages__container container">

			<div class="advantages__content">
				<b>The Ins And Outs of <br>How We Do Business</b>
				<h2><?php the_title(); ?></h2>
				<p>
					FAQ’s about cleaning below is a list of the most frequently asked questions about aour cleaning services. We hope they will be helpful.
				</p>
			</div>

			<div class="faq__content advantages__list">

				<?php if( have_rows('list') ): ?>
					<?php while( have_rows('list') ): the_row(); 
						$title = get_sub_field('title');
						$text = get_sub_field('text');
						?>

						<div class="faq__block block">
							<div class="faq__block_header block__header">
								<div><span></span><span></span></div>
								<p><b><?php echo $title; ?></b></p>
							</div>
							<div class="faq__block_content block__content">
								<?php echo $text; ?>
							</div>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>

		</div>
	</section>

<?php get_footer(); ?>