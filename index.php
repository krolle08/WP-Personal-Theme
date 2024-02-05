<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div id=&quot;post-<?php the_ID(); ?>&quot; <?php post_class(); ?>></div>
        <div class=&quot;post-header&quot;></div>
        <div class=&quot;date&quot;><?php the_time( 'M j y' ); ?></div>
        <h2></h2><a href=&quot;<?php the_permalink(); ?>&quot; rel=&quot;bookmark&quot; title=&quot;Permanent Link to <?php the_title_attribute(); ?>&quot;><?php the_title(); ?></a></h2>
        <div class=&quot;author&quot;><?php the_author(); ?></div>
        </div><!--end post header-->
        <div class=&quot;entry clear&quot;></div>
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        <?php wp_link_pages(); ?> </div>
        <!--end entry-->
        <div class=&quot;post-footer&quot;></div>
        <div class=&quot;comments&quot;><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
        </div><!--end post footer-->
        </div><!--end post-->
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class=&quot;navigation index&quot;></div>
    <div class=&quot;alignleft&quot;><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class=&quot;alignright&quot;><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>


<?php get_footer(); ?>





