<?php
/**
 * Template Name: contact
 *
 *
 */
?>
<?php get_header(); ?>
<div class="contact-us-wrapper">
<div class="mkd-container-inner">
    <div class="mkd-two-columns-75-25  mkd-content-has-sidebar clearfix">
        <div class="mkd-column1 mkd-content-left-from-sidebar">
            <div class="mkd-column-inner">
                <div class="mkd-blog-holder mkd-blog-single">
                    <div class="contact-us-container">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mkd-column2">
                <aside class="mkd-sidebar" style="transform: translateY(0px);">
                    <?php get_template_part('sidebar/template-sidebar-contact-us'); ?>
                    <?php get_sidebar(); ?>
                </aside>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>
