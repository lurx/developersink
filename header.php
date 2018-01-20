<input type="checkbox" name="navToggle" id="navToggle" class="navToggle">
<header>
    <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="innerWrapper">
        <label for="navToggle" class="logo"><img src="http://blog.rotemdev.com/wp-content/uploads/2017/06/cropped-plumber-icon-white2.png" alt="" /></label>
        <h1><?php echo get_bloginfo( 'name' ); ?></h1>
        <p class="subtitle"><?php echo get_bloginfo( 'description' ); ?></p>
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