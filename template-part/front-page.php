<?php get_header(); ?>

<section class="middle-area"> 
    <div class='container'>
        <div class='row'>
            <div class='sidebar col-md-3 h-100'>
                <?php
                    get_sidebar('home');
                ?>
            </div>
            <div class='col-md-9'>
                <div class='container'>
                    <div class='row'>
                        <div class='col'>
                            <?php
                                $primary = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 1,
                                    'category' => 'islami'
                                ));

                                if($primary->have_posts()):
                                    while($primary->have_posts()):
                                        $primary->the_post();
                            ?>
                                
                            <?php                                       
                                get_template_part('template-part/isi', 'primary');
                            ?>
                                       
                                

                            <?php
                                    endwhile;
                                endif;
                            ?>
                        </div>
                    </div>

                    <!-- row secondary -->
                    <div class="row">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'offset' => 1                               
                                
                            );
                            $secondary = new WP_Query($args);

                            if($secondary->have_posts()):
                                while($secondary->have_posts()):
                                    $secondary->the_post();
                            ?>
                            <?php get_template_part('template-part/isi', 'secondary'); ?>    
                            <?php
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

