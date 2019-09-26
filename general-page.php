<?php
/*
Template Name: General template
*/
?>

<?php get_header(); ?>
<div class="head">
    <img class="img-fluid" src="<?php header_image(); ?>" alt="img" width="<?php echo get_custom_header()->width?>" height="<?php echo get_custom_header()->height ?>">
</div>
<section class="middle-area"> 
    <div class='container'>        
            <div class='general-template'>
                <?php
                    if(have_posts()) : 
                        while(have_posts()) :
                            the_post();

                ?>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <?php the_post_thumbnail('medium');
                        ?>
                        <p>Posted in <?php the_time(); ?> by : <?php the_author(); ?> </p>
                        <p>Category : <?php the_category(' ') ; ?></p>
                        <p><?php the_tags('Tag : ', ', '); ?></p>
                        <p><?php the_content(); ?></p>

                    </article>
                <?php
                        endwhile;
                    else:
                ?>
                    <p>Tidak ada post</p>
                <?php
                    endif;
                ?>
            </div>       
    </div>
</section>

<?php get_footer(); ?>

