<?php
/***
* This template is for displaying full blog article.
*
* @package design+code demo
* @since 1.0.0
*/
//display header
get_header();
?>
<div class="flex-container">
    <?php if(have_posts()) : ?>
    <!-- start the loop -->
        <?php while(have_posts()) : the_post(); ?>
            <div class="main-content-area">
                <?php
                //do things -- display content : the function below will pull the content from the template partial.
                get_template_part( 'template-parts/content', 'single' );
                ?>
            </div>
        <?php endwhile; ?>
    <!-- end while loop -->
        <?php else : ?>
    <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
            <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
        <div class="sidebar">
            <?php dynamic_sidebar('sidebar-primary'); ?>
        </div>

</div>
<!-- //display footer -->
<?php get_footer(); ?>