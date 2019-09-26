<article <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <p>Posted in <?php the_time(); ?> by : <?php the_author_posts_link(); ?> </p>    
    <p><?php the_content(); ?></p>
</article>
