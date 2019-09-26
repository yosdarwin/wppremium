<?php
    while(have_posts()):
        the_post();
?>
        <header>
        <?php the_title(); ?>
        <div class="meta">By <?php the_author_posts_link(); ?> on <?php the_date(); ?> at <?php the_category(',') ?></div>        
        </header>
        <article>
        <?php
            the_content();
        ?>
        </article>
        
        <!-- comment -->
        <?php
            if( comments_open() || get_comments_number() ):
                comments_template();
            endif;

        ?>

<?php
    endwhile;
?>