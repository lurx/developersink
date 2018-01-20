<?php $theme_url = get_bloginfo('template_directory'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<!--  Meta  -->
		<meta charset="UTF-8" />
		<title><?php echo get_bloginfo('name'); ?></title>

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_url ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $theme_url ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_url ?>/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $theme_url ?>/manifest.json">
		<link rel="mask-icon" href="<?php echo $theme_url ?>/safari-pinned-tab.svg" color="#333333">
		<meta name="theme-color" content="#333333">

		<!--  Styles  -->
		<link rel="stylesheet" href="<?php echo $theme_url ?>/style.css">
		<link rel="stylesheet" href="<?php echo $theme_url ?>/css/developersink-style.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<?php /* malihuCustomScrollbar: http://manos.malihu.gr/jquery-custom-content-scroller/ */ ?>
		<link rel="stylesheet" href="<?php echo $theme_url ?>/vendor/malihu-custom-scrollbar/jquery.mCustomScrollbar.css">
		<script src="<?php echo $theme_url ?>/vendor/malihu-custom-scrollbar/jquery.mCustomScrollbar.js"></script>

		<?php /* FontAwesome 5 Pro: https://fontawesome.com */ ?>
		<script defer src="<?php echo $theme_url; ?>/vendor/fontawesome-pro-5.0.4/svg-with-js/js/fontawesome-all.js"></script>

		<?php wp_head();?>
	</head>
	<body>
		<div class="wrapper">
					<?php get_header();?>

			<main>
				<div class="bracket">{</div>
				<div class="inner">
					<div class="content init-scrollbar">
						<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
							<?php get_template_part('content', get_post_format());?>
						<?php endwhile; endif; ?>
					</div>
				</div>
				<div class="bracket">}</div>

			</main>
			<?php get_sidebar();?>
		</div>
		<?php get_footer();?>

		<!-- Scripts -->
		<script src="<?php echo $theme_url ?>/scripts/index.js"></script>
	</body>
</html>