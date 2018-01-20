<input type="checkbox" name="navToggle" id="navToggle" class="navToggle" checked>
<header>
    <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="innerWrapper">
        <label for="navToggle" class="logo"><img src="http://blog.rotemdev.com/wp-content/uploads/2017/06/cropped-plumber-icon-white2.png" alt="" /></label>
        <h1><?php echo get_bloginfo( 'name' ); ?></h1>
        <p class="subtitle"><?php echo get_bloginfo( 'description' ); ?></p>
    </a>
    <nav id="nav">
        <ul>
            <li class="active"><span>Blog</span></li>
            <li><span>About</span></li>
            <li>
                <span>References</span>
                <ul class="subnav">
                    <li><span>subitem</span></li>
                    <li><span>subitem</span></li>
                </ul>
            </li>
            <li><span>Contact</span></li>
            <li class="search">
                <input type="text" placeholder="Search">
                <i class="fa fa-search"></i>
            </li>
            <li>123</li>
            <?php wp_list_pages( '&title_li=' ); ?>
        </ul>
        <?php get_search_form(); ?>
    </nav>
</header>