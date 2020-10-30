<?php
/***
* The template for displaying all blog posts.
*
* @package design+code demo
* @since 1.0.0
*/
//display header
get_header();
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <?php if(have_posts()) : ?>
    <!-- add banner here -->
    <!-- start the loop | the loop grabs all the content and cycles through all of the content until it’s done. -->
    <div class="post-contanier">
        <?php while(have_posts()) : the_post(); ?>
        <!-- display the all of the blog posts -->
            <div class="posts">
            <!-- adding a image to display as part of post -->
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                </a>
            <!-- card heading -->
                <a href="<?php the_permalink(); ?>"><?php the_title('<h4>', '</h4>');?></a>
                <?php echo get_the_date(); ?>
                <?php the_excerpt(); ?>

                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        <?php endwhile; ?>
    </div>
    <!-- end while loop -->
    <?php else : ?>
    <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
<!-- //On this page specifically - this would be area to add pagination and a sidebar - out of the loop. -->
</article>
<!-- //display footer -->
<?php get_footer(); ?>