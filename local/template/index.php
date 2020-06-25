<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

	<header class="header">
		<div class="header__container">

			<a href="<?php echo get_home_url(); ?>" class="header__logo header__logo">
				<img src="<?php the_field('logo', 'option'); ?>" alt="logo">
			</a>

			<div class="header__info">
				<span class="click"><a href="#contacts" class="header__info_order order_open"><?php the_field('order'); ?></a></span>
				<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__info_tel">
					<?php the_field('tel', 'option'); ?>
				</a>
				<div class="header__info_lang">
					<a href="#">En</a>
					<a href="#" class="active">Ru</a>
				</div>
			</div>

		</div>
	</header>

	<section class="hero">
		<div class="container">
			<h1><?php the_field('title'); ?></h1>
			<span class="click"><a href="#services" class="btn"><?php the_field('more'); ?></a></span>
		</div>
	</section>

	<section class="info">
		<div class="info__container container">
			
			<div class="info__text">
				<div class="info__text_decor">
					i
				</div>
				<?php the_field('info__text'); ?>
			</div>

			<div class="info__list">
				<?php if( have_rows('info__list') ): ?>
					<?php while( have_rows('info__list') ): the_row(); 
						$img = get_sub_field('img');
						$text = get_sub_field('text');
						?>
						<div class="info__list_item">
							<img src="<?php echo $img; ?>" alt="">
							<p><?php echo $text; ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>

		</div>
	</section>

	<section class="services" id="services">
		<div class="container">

			<h2><?php the_field('services__title'); ?></h2>

			<div class="services__slider swiper-container">
				<div class="swiper-wrapper">

				<?php if( have_rows('services') ): ?>
					<?php while( have_rows('services') ): the_row(); 
						$img = get_sub_field('img');
						$text = get_sub_field('text');
					?>

						<div class="services__slider_item swiper-slide">
							<img src="<?php echo $img; ?>" alt="">
							<?php echo $text; ?>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>

				</div>
				<div class="services__pagination swiper-pagination"></div>
			</div>

		</div>
	</section>

	<section class="contacts" id="contacts">
		<div class="contacts__container container">

			<div class="contacts__header">
				<div>
					<h2><?php the_field('write'); ?></h2>
				</div>
				<div class="contacts__header_right">
					<h2><?php the_field('contact'); ?></h2>
					<a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
					<a href="tel:<?php the_field('tel_url', 'option'); ?>"><?php the_field('tel', 'option'); ?></a>
					<!-- <a href="#" class="contacts__header_order order_open">заказать звонок</a> -->
				</div>
			</div>

			<?php echo do_shortcode('[contact-form-7 id="62" title="Форма на РУ"]'); ?>

		</div>
	</section>

	<footer class="footer">
		<div class="footer__container container">

			<div><?php the_field('footer__text1'); ?></div>

			<div><?php the_field('footer__text2'); ?></div>

		</div>
	</footer>

<?php get_footer(); ?>