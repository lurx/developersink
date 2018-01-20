<!DOCTYPE html>
<html lang="en">
	<head>

		<!--  Meta  -->
		<meta charset="UTF-8" />
		<title><?php echo get_bloginfo('name'); ?></title>

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('template_directory'); ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo('template_directory'); ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('template_directory'); ?>/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_bloginfo('template_directory'); ?>/manifest.json">
		<link rel="mask-icon" href="<?php echo get_bloginfo('template_directory'); ?>/safari-pinned-tab.svg" color="#333333">
		<meta name="theme-color" content="#333333">

		<!--  Styles  -->
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/developersink-style.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Custom scroll bar -->
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/vendor/malihu-custom-scrollbar/jquery.mCustomScrollbar.css">
		<script src="<?php echo get_bloginfo('template_directory'); ?>/vendor/malihu-custom-scrollbar/jquery.mCustomScrollbar.js"></script>

		<?php wp_head();?>
	</head>
	<body>
		<div class="wrapper">
					<?php get_header();?>

			<main>
				<div class="bracket">{</div>
				<div class="inner">
					<div class="content le-scroll-bar">
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
		<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/index.js"></script>
	</body>
</html>