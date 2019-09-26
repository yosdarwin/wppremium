<div class="thumbnail">
    <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
    </div> 
    <div class="content">
       <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?>  </h2></a>   
        <div class="meta">
        by <?php the_author_posts_link();?> on <?php the_date(); ?> at <?php the_category(',') ?>
    </div>
    <?php the_excerpt();  ?>
</div>