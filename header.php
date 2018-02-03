<input type="checkbox" name="navToggle" id="navToggle" class="navToggle">
<header>
    <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="innerWrapper">
        <label for="navToggle" class="logo">
            <svg>
                <use xlink:href="#developersink-logo" />
            </svg>
        </label>
        <h1><?php echo get_bloginfo( 'name' ); ?></h1>
        <p class="subtitle"><?php echo get_bloginfo( 'description' ); ?></p>
    </a>
    <nav id="nav">
        <ul>
            <li class="active"><span>Blog</span></li>
            <li><span>About <?php echo get_bloginfo( 'name' ); ?></span></li>
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