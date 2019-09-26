<article <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <p>Posted in <?php the_time(); ?> by : <?php the_author_posts_link(); ?> </p>
    <p>Category : <?php the_category(' ') ; ?></p>
    <p><?php the_tags('Tag : ', ', '); ?></p>
    <p><?php the_content(); ?></p>
</article>
