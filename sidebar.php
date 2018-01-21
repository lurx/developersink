<input type="checkbox" name="sidebar-toggle" id="sidebar-toggle" class="sidebar-toggle">

<aside id="sidebar" class="sidebar-wrapper init-scrollbar">
    <label for="sidebar-toggle" class="sidebar-toggle-label js-sidebar-toggle-label">Sidebar &rsaquo;</label>
    <section>
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php 
                $my_archives=wp_get_archives(array(
                    'type'=>'postbypost', 
                    'show_post_count'=>true, 
                    'limit'=>20, 
                    'post_type'=>'post', 
                    'format'=>'html' 
                ));
                
                print_r($my_archives); 
            ?>
        </ol>
    </section>
    
    <?php if (get_the_author_meta('description') !== '') { ?>

        <section>
            <h4>About <?php the_author_meta('display_name'); ?></h4>
            <p><?php the_author_meta( 'description' ); ?> </p>
        </section>
 
    <?php } ?>
    
</aside>