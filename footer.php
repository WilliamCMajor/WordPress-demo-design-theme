<?php
/*
* The footer for our theme
*
* footer content.
*
* @package design+code demo
* @since 1.0.0
*/
?>

        </div>
 <!-- closing tag for site-content"> -->
        <footer>
            <div class="footer-top">
                <?php get_template_part('template-parts/sidebar', 'footer'); ?>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?>design+code</p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>