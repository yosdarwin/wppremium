<?php get_header(); ?>
<section class="middle-area">
    <div class='container'>
        <div class='row'>
            <div class='sidebar col-md-3 h-100'>
                <?php
                get_sidebar('blog');
                ?>
            </div>
            <div class='col-md-9'>
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        ?>
                        <?php
                                get_template_part('template-part/isi', get_post_format());
                                ?>
                    <?php
                        endwhile;
                    else :
                        ?>
                    <p>Tidak ada post</p>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>