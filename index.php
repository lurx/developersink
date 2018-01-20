<!DOCTYPE html>
<html lang="en">
	<head>

		<!--  Meta  -->
		<meta charset="UTF-8" />
		<title><?php echo get_bloginfo( 'name' ); ?></title>

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
		<link rel="stylesheet" href="https://rawgit.com/utatti/perfect-scrollbar/master/css/perfect-scrollbar.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<script src="https://rawgit.com/utatti/perfect-scrollbar/master/dist/perfect-scrollbar.js"></script>

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="wrapper">
			<input type="checkbox" name="navToggle" id="navToggle" class="navToggle">
			<header>
				<a class="innerWrapper">
					<label for="navToggle" class="logo"><img src="http://blog.rotemdev.com/wp-content/uploads/2017/06/cropped-plumber-icon-white2.png" alt="" /></label>
					<h1><?php echo get_bloginfo( 'name' ); ?></h1>
					<p class="subtitle"><?php echo get_bloginfo( 'description' ); ?></p>
					<?/*a.front-end {developer:blog;}*/?>
				</a>
				<nav id="nav">
					<ul>
						<li class="active"><span data-target="postarchive">Blog</span></li>
						<li><span data-target="blogpost">About</span></li>
						<li><span data-target="references">References</span></li>
						<li><span data-target="contact">Contact</span></li>
						<li class="search">
							<input type="text" placeholder="Search">
							<i class="fa fa-search"></i>
						</li>
					</ul>
				</nav>
			</header>
			<?/*php get_sidebar(); */?>
			<main>
				<div class="bracket">{</div>
				<div class="inner">
					<div class="content">
						<?php get_template_part( 'content', get_post_format() ); ?>
					</div>
				</div>

				<div class="bracket">}</div>

			</main>
		</div>
		<?php get_footer(); ?>

		<!-- Scripts -->
		<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/index.js"></script>
	</body>
</html>